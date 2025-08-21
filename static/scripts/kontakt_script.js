window.addEventListener("load", function() {
    setTimeout(() => {
        document.getElementById("nag").style.opacity = "1";
        document.getElementById("bloki").style.opacity = "1";
        document.getElementById("welcome").style.opacity = "1";

        let elements = document.getElementsByClassName("nao");
        for (let i = 0; i < elements.length; i++) {
            elements[i].style.opacity = "1";
        }
    }, 0);
});


// Menu rozwijane

document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");

    hamburger.addEventListener("click", function() {
        menu.classList.toggle("show"); // Pokazuje / ukrywa menu po kliknięciu
    });
});