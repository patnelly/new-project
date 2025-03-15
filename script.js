// script.js

document.addEventListener("DOMContentLoaded", function() {
    const logoArea = document.querySelector('header img');

    // Create a text element for the animated logo text
    const animatedText = document.createElement("div");
    animatedText.textContent = "LUCY BAKERY INDUSTRY 2026";
    animatedText.style.position = "absolute";
    animatedText.style.top = "50%";
    animatedText.style.left = "50%";
    animatedText.style.transform = "translate(-50%, -50%)";
    animatedText.style.fontSize = "1.5rem";
    animatedText.style.fontWeight = "bold";
    animatedText.style.color = "#fff";
    animatedText.style.animation = "textAnimation 3s infinite";
    document.querySelector("header").appendChild(animatedText);

    // CSS Animation using JavaScript
    const styleSheet = document.createElement("style");
    styleSheet.type = "text/css";
    styleSheet.innerText = `
        @keyframes textAnimation {
            0% { opacity: 0; color: #f8b500; transform: translate(-50%, -50%) scale(1); }
            25% { opacity: 1; color: #ff6347; transform: translate(-50%, -50%) scale(1.2); }
            50% { opacity: 0; color: #4caf50; transform: translate(-50%, -50%) scale(0.8); }
            75% { opacity: 1; color: #1e90ff; transform: translate(-50%, -50%) scale(1.1); }
            100% { opacity: 0; color: #f8b500; transform: translate(-50%, -50%) scale(1); }
        }
    `;
    document.head.appendChild(styleSheet);

    // Hide animated text when logo is clicked
    logoArea.addEventListener("click", function() {
        animatedText.style.display = animatedText.style.display === "none" ? "block" : "none";
    });
});
