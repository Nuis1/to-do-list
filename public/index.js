const contents = {
    content1: `content1.php`,
    content2: `content2.php`,
    content3: `content3.php`,
};

function buttonActive(contentKey) {
    fetch(`/app/views/layouts/${contents[contentKey]}`)
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("display-content").innerHTML = data;
        });
}