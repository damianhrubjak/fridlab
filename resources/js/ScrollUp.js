const arrow = document.getElementById("scroll-up");

window.addEventListener("scroll", () => {
    if (window.scrollY > 1000) {
        arrow.classList.add("reveal-arrow");
    } else {
        arrow.classList.remove("reveal-arrow");
    }
});
