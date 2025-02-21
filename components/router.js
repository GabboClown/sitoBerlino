document.addEventListener("DOMContentLoaded", () => {
    // Per limitare l'accesso diretto ai componenti, si viene reindirizzati alla home
    if (window.location.pathname.includes("components/")) {
        window.location.href = "../index.html"; // Reindirizza alla home
        return;
    }
});