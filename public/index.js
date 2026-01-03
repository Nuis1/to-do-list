const contents = {
    content1: `/content1`,
    content2: `/content2`,
    content3: `/content3`,
};

async function updateStats() {
    try {
        const response = await fetch('get_stats.php');
        const stats = await response.json();
        
        // Update dengan animasi
        animateNumber('stat-total', stats.total);
        animateNumber('stat-aktif', stats.aktif);
        animateNumber('stat-selesai', stats.selesai);
    } catch (error) {
        console.error('Error updating stats:', error);
    }
}

// Function untuk animasi angka
function animateNumber(elementId, newValue) {
    const element = document.getElementById(elementId);
    const currentValue = parseInt(element.textContent) || 0;
    
    if (currentValue === newValue) return;
    
    // Tambahkan efek highlight
    element.classList.add('animate-pulse');
    
    // Animasi counter
    const duration = 300;
    const steps = 20;
    const increment = (newValue - currentValue) / steps;
    const stepDuration = duration / steps;
    let current = currentValue;
    let step = 0;
    
    const timer = setInterval(() => {
        step++;
        current += increment;
        
        if (step >= steps) {
            element.textContent = newValue;
            clearInterval(timer);
            setTimeout(() => {
                element.classList.remove('animate-pulse');
            }, 300);
        } else {
            element.textContent = Math.round(current);
        }
    }, stepDuration);
}

async function toggleStatus(id) {
    try {
        const formData = new FormData();
        formData.append('id_tugas', id);

        const response = await fetch('toggle_status.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            await updateStats();
            // Reload konten yang sedang aktif
            const activeButton = document.querySelector('[class*="bg-[#4F46E5]"]');
            if (activeButton) {
                activeButton.click();
            } else {
                buttonActive('content1', document.getElementById('button1'));
            }
        } else {
            alert('Gagal mengubah status: ' + (result.message || 'Unknown error'));
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mengubah status');
    }
}

function buttonActive(contentKey, el) {
    fetch(contents[contentKey])
        .then((response) => {
            return response.text();
        })
        .then((data) => {
            document.getElementById("display-content").innerHTML = data;
        })
        .catch((error) => {
            console.error('Error loading content:', error);
            document.getElementById("display-content").innerHTML =
                '<div class="bg-white rounded-2xl shadow-around p-10 text-center"><p class="text-red-500">Error memuat konten</p></div>';
        });

    const buttons = document.querySelectorAll("#button1, #button2, #button3");
    buttons.forEach((button) => {
        button.classList.remove("bg-[#4F46E5]", "text-white");
        button.classList.add("text-black", "bg-[#EDEDED]");
    });

    el.classList.remove("bg-[#EDEDED]", "text-black");
    el.classList.add("text-white", "bg-[#4F46E5]");
}

window.addEventListener("DOMContentLoaded", () => {
    const firstButton = document.getElementById("button1");
    buttonActive("content1", firstButton);
});