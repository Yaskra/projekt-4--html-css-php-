let isBlack = false;

function changeColor() {
    document.body.style.backgroundColor = isBlack ? "rgb(36, 36, 36)" : "white";
    document.body.style.transition = "1s";

    let btn1 = document.getElementById("btn1");
    let button1 = document.getElementById("button1");

    btn1.style.transform = isBlack ? "translateX(0)" : "translateX(20px)";
    btn1.style.backgroundColor = isBlack ? "black" : "white";
    
    button1.style.backgroundColor = isBlack ? "white" : "black";

    let borderColor = isBlack ? "rgb(20, 172, 0)" : "rgb(20, 172, 0)";
    let textColor = isBlack ? "white" : "black";
    let transition = isBlack ? "1s" : "1s";

    document.querySelectorAll("#blok1, #blok2, #blok3, #blok4, #blok5").forEach(el => {
        el.style.borderColor = borderColor;
        el.style.color = textColor;
        el.style.transition = transition;
    });

    document.querySelectorAll(".feedback").forEach(el => el.style.borderColor = borderColor);
    document.querySelectorAll(".tresc").forEach(el => el.style.color = textColor);

    let logoImg = document.querySelector("#logo img");

    if (logoImg) {
        // Animacja zaniku
        logoImg.style.opacity = "0";
        
        setTimeout(() => {
            // Zmiana obrazka po 500ms
            logoImg.src = isBlack ? "static/png/icons/icon_2.webp" : "static/png/icons/icon_1.webp";

            // Animacja pojawienia
            logoImg.style.opacity = "1";
        }, 1000);
    }

    isBlack = !isBlack;
}

// Animacje po załadowaniu strony
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

document.addEventListener("DOMContentLoaded", function () {
    const kbok = document.querySelector("#kbok");

    if (!kbok) return; // Sprawdzenie, czy #kbok istnieje

    // Na start dodajemy klasę ukrywającą kontener
    kbok.classList.add("kbok-hidden-mobile");

    const kbokObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Dodanie klasy widoczności, tylko jeśli kontener pojawi się na ekranie
                entry.target.classList.add("kbok-visible-mobile");
                entry.target.classList.remove("kbok-hidden-mobile");
                
                // Zatrzymujemy obserwowanie kontenera, aby uniknąć ponownej animacji
                kbokObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    // Obserwowanie kontenera #kbok
    kbokObserver.observe(kbok);
});


document.addEventListener("DOMContentLoaded", function () {
    const opinie = document.querySelector("#opinie");
    const wpisy = document.querySelector("#wpisy");
    const elements = opinie.querySelectorAll(".slider, .feedback");

    const wpisyObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                wpisy.classList.add("widoczne");
            } else {
                wpisy.classList.remove("widoczne");
            }
        });
    }, { threshold: 0.3 });

    const opinieObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                elements.forEach(el => el.classList.add("widoczne"));
            } else {
                elements.forEach(el => el.classList.remove("widoczne"));
            }
        });
    }, { threshold: 0.5 });

    wpisyObserver.observe(wpisy);
    opinieObserver.observe(opinie);
});

document.addEventListener("DOMContentLoaded", function () {
    const target = document.getElementById("dm");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                target.classList.add("visible");
                target.classList.remove("hidden");
            }
        });
    }, { threshold: 0.3 }); // 30% widoczności

    observer.observe(target);
});

window.onload = function () {
    const img = new Image();
    img.src = "/static/png/images/dm_image.webp";
};
const img = new Image();
img.src = "/static/png/images/dm_image.webp";







// Menu hamburgerowe
document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");

    hamburger.addEventListener("click", function() {
        menu.classList.toggle("show"); // Pokazuje / ukrywa menu po kliknięciu
    });
});


// Funkcja inicjalizująca slider na mobilkach
let startX;
let scrollLeft;
const container = document.getElementById('bloki');

// Funkcja do obsługi dotyku
container.addEventListener('touchstart', (e) => {
    startX = e.touches[0].pageX;
    scrollLeft = container.scrollLeft;
});

container.addEventListener('touchmove', (e) => {
    if (startX) {
        const moveX = e.touches[0].pageX;
        const distance = moveX - startX;
        container.scrollLeft = scrollLeft - distance; // Przesuwanie poziome
    }
});

container.addEventListener('touchend', () => {
    startX = null;
    scrollLeft = null;
});