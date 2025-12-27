const contents = {
    content1: `/content1`,
    content2: `/content2`,
    content3: `/content3`,
};

function buttonActive(contentKey, el) {
    // Fetch content dari route
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
    
    // Ganti background button
    const buttons = document.querySelectorAll("#button1, #button2, #button3");
    buttons.forEach((button) => {
        button.classList.remove("bg-[#4F46E5]", "text-white");
        button.classList.add("text-black", "bg-[#EDEDED]");
    });
    
    el.classList.remove("bg-[#EDEDED]", "text-black");
    el.classList.add("text-white", "bg-[#4F46E5]");
}

// Inisialisasi saat halaman dimuat
window.addEventListener("DOMContentLoaded", () => {
    const firstButton = document.getElementById("button1");
    buttonActive("content1", firstButton);
});