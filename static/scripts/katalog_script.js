window.addEventListener("load", function() {
    setTimeout(() => {
        document.getElementById("nag").style.opacity = "1";
        document.getElementById("color").style.opacity = "1";
        document.getElementById("modern").style.opacity = "1";
        document.getElementById("vintige").style.opacity = "1";
        document.getElementById("region").style.opacity = "1";
        document.getElementById("nao").style.opacity = "1";
        document.getElementById("nao1").style.opacity = "1";
        document.getElementById("nao2").style.opacity = "1";
        document.getElementById("nao3").style.opacity = "1";
        document.getElementById("oferty").style.opacity = "1";
        document.getElementById("oferty1").style.opacity = "1";
        document.getElementById("oferty2").style.opacity = "1";
        document.getElementById("oferty3").style.opacity = "1";
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

// Funkcja inicjalizująca slider na mobilkach
let startX = 0;
        let currentTranslate = 0;
        let currentIndex = 0;
        const oferty = document.getElementById("oferty");
        const maxIndex = Math.ceil(oferty.children.length / 2) - 1;

        oferty.addEventListener("touchstart", (e) => {
            startX = e.touches[0].clientX;
        });

        oferty.addEventListener("touchend", (e) => {
            let endX = e.changedTouches[0].clientX;
            let deltaX = startX - endX;
            
            if (deltaX > 50 && currentIndex < maxIndex) {
                currentIndex++;
            } else if (deltaX < -50 && currentIndex > 0) {
                currentIndex--;
            }

            currentTranslate = -currentIndex * 100;
            oferty.style.transform = `translateX(${currentTranslate}vw)`;
        });