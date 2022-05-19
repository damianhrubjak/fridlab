const burger = document.querySelector("#hamburger");

const topBurger = document.querySelector(".top-hamburger");
const middleBurger = document.querySelector(".middle-hamburger");
const bottomBurger = document.querySelector(".bottom-hamburger");

burger.addEventListener("click", function () {
    middleBurger.classList.toggle("middleDissapear");
    topBurger.classList.toggle("topRotate");
    bottomBurger.classList.toggle("bottomRotate");
});
