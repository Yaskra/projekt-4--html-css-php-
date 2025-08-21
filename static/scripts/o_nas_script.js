window.addEventListener("load", function() {
    setTimeout(() => {
        document.getElementById("nag").style.opacity = "1";
        
        let elements = document.getElementsByClassName("nao");
        for (let i = 0; i < elements.length; i++) {
            elements[i].style.opacity = "1";
        }
    }, 0);
});

function scrollToSection() {
    document.getElementById("nc").scrollIntoView({ behavior: "smooth" });
}


document.addEventListener("DOMContentLoaded", function () {
    // Funkcja do wyświetlania lub ukrywania przycisku
    function toggleButtonVisibility() {
        let button = document.getElementById("scrollButton");
        if (window.scrollY > document.documentElement.scrollHeight / 2) {
            button.style.transform = "translateX(0px)";
        } else {
            button.style.transform = "translateX(500px)";
        }
    }

    // Funkcja przewijania na samą górę
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"  // Zapewnia płynne przewijanie
        });
    }

    // Nasłuchujemy na scroll
    window.addEventListener("scroll", toggleButtonVisibility);

    // Nasłuchujemy na kliknięcie przycisku
    document.getElementById("scrollButton").addEventListener("click", scrollToTop);
});



// Menu rozwijane

document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");

    hamburger.addEventListener("click", function() {
        menu.classList.toggle("show"); // Pokazuje / ukrywa menu po kliknięciu
    });
});
