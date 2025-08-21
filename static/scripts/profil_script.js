let isBlack = false;

function changeColor() {
    document.body.style.backgroundColor = isBlack ? "rgb(36, 36, 36)" : "white";
    document.body.style.transition = "1s";

    let btn1 = document.getElementById("btn1");
    let button1 = document.getElementById("button1");
    let btnText = document.getElementById("btntext");
    let header = document.querySelector("header");
    let menuLinks = document.querySelectorAll("#menu a");
    let table = document.getElementById("tabela");
    let profileTitle = document.querySelector("#title h1");
    let menuItems = document.querySelectorAll("#menustyle li");
    let logoutButton = document.getElementById("logout");
    let buttonProfile = document.getElementById("prof");
    let footer = document.querySelector("footer");
    let footerLinks = document.querySelectorAll("#stopka a");
    let stopka = document.getElementById("stopka");

    btn1.style.transform = isBlack ? "translateX(0)" : "translateX(20px)";
    btn1.style.backgroundColor = isBlack ? "black" : "white";
    btn1.style.transition = "1s";

    button1.style.backgroundColor = isBlack ? "white" : "black";
    button1.style.transition = "1s";

    btnText.innerText = isBlack ? "Tryb ciemny" : "Tryb jasny";
    btnText.style.transition = "1s";

    header.style.backgroundColor = isBlack ? "rgba(0, 0, 0, 0.5)" : "rgba(255, 255, 255, 0.8)";
    header.style.color = isBlack ? "black" : "black";
    header.style.transition = "1s";

    menuLinks.forEach(link => {
        link.style.color = isBlack ? "white" : "black";
        link.style.backgroundColor = isBlack ? "transparent" : "rgba(0, 0, 0, 0.1)";
        link.style.transition = "1s";
    });

    table.style.backgroundColor = isBlack ? "rgb(36, 36, 36)" : "white";
    table.style.color = isBlack ? "white" : "black";
    table.style.transition = "1s";

    profileTitle.style.color = isBlack ? "white" : "rgb(36, 36, 36)";
    profileTitle.style.transition = "1s";

    menuItems.forEach(item => {
        item.style.color = isBlack ? "white" : "black";
        item.style.backgroundColor = isBlack ? "rgba(0, 0, 0, 0.5)" : "rgba(255, 255, 255, 0.8)";
        item.style.transition = "1s";
    });

    // Ustawienie tła przycisku wylogowania na czerwone
    logoutButton.style.backgroundColor = "red";
    logoutButton.style.color = "white";
    logoutButton.style.padding = "10px";
    logoutButton.style.borderRadius = "5px";
    logoutButton.style.textAlign = "center";
    logoutButton.style.transition = "1s";

    buttonProfile.style.backgroundColor = "blue";
    buttonProfile.style.color = "white";
    buttonProfile.style.zIndex = "1001";

    footer.style.backgroundColor = isBlack ? "rgb(36, 36, 36)" : "rgba(255, 255, 255, 0.8)";
    footer.style.color = isBlack ? "white" : "black";
    footer.style.transition = "1s";

    footerLinks.forEach(link => {
        link.style.color = isBlack ? "white" : "black";
        link.style.transition = "1s";
    });

    stopka.style.boxShadow = isBlack ? "0px 0px 10px 10px rgb(20, 172, 0)" : "0px 0px 10px 10px rgb(20, 172, 0)";
    stopka.style.transition = "1s";

    isBlack = !isBlack;
}

window.addEventListener("load", function() {
    setTimeout(() => {
        document.getElementById("nag").style.opacity = "1";
        document.getElementById("tabela").style.opacity = "1";
        document.getElementById("backbubble").style.opacity = "1";

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


document.addEventListener("DOMContentLoaded", function () {
    const rules = document.getElementById("backbubble");

    function createBubbles(reverse = false) {
        for (let i = 5; i < 25; i++) {
            let bubble = document.createElement("div");
            bubble.classList.add("bubble");
            rules.appendChild(bubble);

            let size = Math.random() * 200 + 100;
            let posX = Math.random() * 90;
            let posY = Math.random() * 80;
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
            bubble.style.animationName = "floatUp";
            bubble.style.zIndex = "1";
        }
    }

    createBubbles();
    });
const style = document.createElement("style");
style.innerHTML = `
@keyframes floatUp {
    0% { transform: translateY(0) translateX(0); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateX(100%); opacity: 0; }
}`;
document.head.appendChild(style);

function Global(){
    document.getElementById("ogolnie").style.display = "block";
    document.getElementById("kontakt").style.display = "none";
    document.getElementById("ustawienia").style.display = "none";
    document.getElementById("zamowienia").style.display = "none";
    document.getElementById("mojeopinie").style.display = "none";
}

function Contact(){
    document.getElementById("ogolnie").style.display = "none";
    document.getElementById("kontakt").style.display = "block";
    document.getElementById("ustawienia").style.display = "none";
    document.getElementById("zamowienia").style.display = "none";
    document.getElementById("mojeopinie").style.display = "none";
}

function Settings(){
    document.getElementById("ogolnie").style.display = "none";
    document.getElementById("kontakt").style.display = "none";
    document.getElementById("ustawienia").style.display = "block";
    document.getElementById("zamowienia").style.display = "none";
    document.getElementById("mojeopinie").style.display = "none";
}

function Orders(){
    document.getElementById("ogolnie").style.display = "none";
    document.getElementById("kontakt").style.display = "none";
    document.getElementById("ustawienia").style.display = "none";
    document.getElementById("zamowienia").style.display = "block";
    document.getElementById("mojeopinie").style.display = "none";
}

function Reviews(){
    document.getElementById("ogolnie").style.display = "none";
    document.getElementById("kontakt").style.display = "none";
    document.getElementById("ustawienia").style.display = "none";
    document.getElementById("zamowienia").style.display = "none";
    document.getElementById("mojeopinie").style.display = "block";
}
