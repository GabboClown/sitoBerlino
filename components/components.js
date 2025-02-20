document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById('header');
    if (header) {
        fetch('components/header.html')
            .then(response => response.text())
            .then(html => {
                header.innerHTML = html;

                const title = header.getAttribute("title");
                if (title) {
                    document.getElementById('title').textContent = title;
                }
            });
    }

    const navbar = document.getElementById('navbar');
    if(navbar){
        fetch('components/navbar.html')
        .then(response => response.text())
        .then(html => navbar.innerHTML = html);
    }

    const footer = document.getElementById('footer');
    if(footer){
        fetch('components/footer.html')
        .then(response => response.text())
        .then(html => footer.innerHTML = html);
    }
});  