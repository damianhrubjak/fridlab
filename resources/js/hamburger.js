const burger = document.querySelector(".burgir");

const topBurger = document.querySelector(".topBurgir");
const middleBurger = document.querySelector(".middleBurgir");
const bottomBurger = document.querySelector(".bottomBurgir");

burger.addEventListener("click", function () {
    middleBurger.classList.toggle("middleDissapear");
    topBurger.classList.toggle("topRotate");
    bottomBurger.classList.toggle("bottomRotate");
});
