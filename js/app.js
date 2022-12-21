let burger = document.querySelector(".burger");
let header = document.querySelector("header");


burger.addEventListener('click', function () {
    burger.classList.toggle("open");
    header.classList.toggle("open");
})

