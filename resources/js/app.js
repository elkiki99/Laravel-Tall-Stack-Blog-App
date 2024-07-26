import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

window.addEventListener("scroll", function () {
    const parallaxElements = document.querySelectorAll(".parallax-bg");
    parallaxElements.forEach(function (element) {
        let scrollPosition = window.pageYOffset;
        element.style.transform = "translateY(" + scrollPosition * 0.2 + "px)";
    });
});
