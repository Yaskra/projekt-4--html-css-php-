document.addEventListener("DOMContentLoaded", function () {
    const rules = document.getElementById("rules");

    function createBubbles(reverse = false) {
        rules.innerHTML = "";
        for (let i = 5; i < 300; i++) {
            let bubble = document.createElement("div");
            bubble.classList.add("bubble");
            rules.appendChild(bubble);

            let size = Math.random() * 150 + 20;
            let posX = Math.random() * 100;
            let posY = Math.random() * 200;
            let delay = Math.random() * 0;
            let duration = Math.random() * 20 + 5;
            let colors = ["rgba(255, 0, 0, 0.3)", "rgba(0, 255, 0, 0.3)", "rgba(0, 0, 255, 0.3)", "rgba(255, 175, 0, 0.3)", "rgba(255, 0, 255, 0.3)"];
            let randomColor = colors[Math.floor(Math.random() * colors.length)];

            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;
            bubble.style.left = `${posX}%`;
            bubble.style.top = `${posY}%`;
            bubble.style.backgroundColor = randomColor;
            bubble.style.animationDelay = `${delay}s`;
            bubble.style.animationDuration = `${duration}s`;
            
            if (reverse) {
                bubble.style.animationName = "floatDown";
            } else {
                bubble.style.animationName = "floatUp";
            }
        }
    }

    createBubbles();

    const switchButton = document.getElementById("switch");
    let isMoved = false;

    switchButton.addEventListener("click", function () {
        isMoved = !isMoved;
        createBubbles(isMoved);
    });
});
const style = document.createElement("style");
style.innerHTML = `
@keyframes floatUp {
    0% { transform: translateY(0) translateX(0); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-100vh) translateX(-10px); opacity: 0; }
}
@keyframes floatDown {
    0% { transform: translateY(-100vh) translateX(0); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(0) translateX(10px); opacity: 0; }
}`;
document.head.appendChild(style);

document.addEventListener("DOMContentLoaded", function () {
    const switchButton = document.getElementById("switch");
    const rules = document.getElementById("rules");
    let isMoved = false;

    switchButton.addEventListener("click", function () {

        if (!isMoved) {
            document.getElementById("rules").style = 'position: fixed; left: -1600px; transition: 1s;';
            document.getElementById("switch").style = 'position: fixed; left: 38%; z-index: 1000; opacity: 0; transition: 0.2s; display: block; min-width: 170px;';
            document.getElementById("news").style = 'position: fixed; left: -200px; transition: 0.8s; opacity: 0;';
            document.getElementById("regulamin").style = 'position: fixed; left: 150px; transition: 1s; opacity: 1;';
            switchButton.textContent = "Zaloguj sie";
        } else {
            document.getElementById("rules").style = 'transition: 1s;';
            document.getElementById("switch").style = 'position: fixed; left: 67%; z-index: 1000; opacity: 0; transition: 0.3s; display: block; min-width: 170px;';
            document.getElementById("news").style = 'position: fixed; right: 150px; transition: 1s;';
            document.getElementById("regulamin").style = 'position: fixed; left: 1700px; transition: 0.8s; opacity: 0;';
            switchButton.textContent = "Zarejestruj sie";
        }
        isMoved = !isMoved;
        
        setTimeout(() =>{ 
            if(isMoved){
                document.getElementById("switch").style = 'opacity: 1; display: block; min-width: 170px; position: fixed; left: 37%;';
            } else {
                document.getElementById("switch").style = 'opacity: 1; display: block; min-width: 170px; position: fixed; left: 58%;';
            }
        }, 1000);
    });
});


function togglePassword(login_password, button) {
    const passwordInput = document.getElementById(login_password);
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        button.textContent = "👁"; // Ikona zamkniętego oka
    } else {
        passwordInput.type = "password";
        button.textContent = "👁"; // Ikona otwartego oka
    }
}

function regmobile() {
    // Znajdź elementy #panlog i #reg
    let panlog = document.getElementById("panlog");
    let reg = document.getElementById("reg");

    // Tworzenie kontenera
    let regmobile = document.createElement("div");
    regmobile.style.position = "fixed";
    regmobile.style.top = "0";
    regmobile.style.left = "0";
    regmobile.style.width = "100%";
    regmobile.style.height = "100vh";
    regmobile.style.backgroundColor = "rgb(36, 36, 36)";
    regmobile.style.zIndex = "9999";
    regmobile.style.display = "flex";
    regmobile.style.alignItems = "center";
    regmobile.style.justifyContent = "center";
    regmobile.style.color = "rgb(20, 172, 0)";
    regmobile.style.fontSize = "24px";
    regmobile.style.fontWeight = "bold";
    regmobile.innerText = "Przygotowujemy formularz...";

    // Ustawienie początkowej przezroczystości
    regmobile.style.opacity = "0";
    regmobile.style.transition = "opacity 1s ease-in-out";

    // Dodanie kontenera do strony
    document.body.appendChild(regmobile);

    // Po 10ms animacja pojawiania
    setTimeout(() => {
        regmobile.style.opacity = "1";
    }, 10);

    // Po 2 sekundach rozpoczęcie zanikania
    setTimeout(() => {
        regmobile.style.opacity = "0";
    }, 2000);

    // Po 3 sekundach usunięcie kontenera
    setTimeout(() => {
        regmobile.remove();
    }, 3000);

    // Po 1 sekundzie zmiana widoczności bloków
    setTimeout(() => {
        if (panlog.style.display !== "none") {
            panlog.style.display = "none";
            reg.style.display = "flex";
        } else {
            panlog.style.display = "flex";
            reg.style.display = "none";
        }
    }, 1000); // Zmiana po 1 sekundzie od kliknięcia
}

// Przypisanie funkcji do przycisku (upewnij się, że masz przycisk z id="toggleButton")
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("toggleButton").addEventListener("click", regmobile);
});



