const contents = {
    content1: `content1.php`,
    content2: `content2.php`,
    content3: `content3.php`,
};

function buttonActive(contentKey, el) {
    fetch(`/app/views/layouts/${contents[contentKey]}`)
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("display-content").innerHTML = data;
        });
    // ganti background button
    const buttons = document.querySelectorAll("#button1, #button2, #button3");
    buttons.forEach((button) => {
        button.classList.remove("bg-[#4F46E5]");
        button.classList.remove("text-white");
        button.classList.add("text-black");
        button.classList.add("bg-[#EDEDED]");
    });
    el.classList.remove("bg-[#EDEDED]");
    el.classList.remove("text-black");
    el.classList.add("text-white");
    el.classList.add("bg-[#4F46E5]");
}
window.addEventListener("DOMContentLoaded", () => {
    const firstButton = document.getElementById("button1");
    buttonActive("content1", firstButton);
});
