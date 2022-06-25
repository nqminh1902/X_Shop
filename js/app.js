const menuBtn = document.querySelector(".nav-menu-btn");
const closeBtn = document.querySelector(".close-btn");
const overlay = document.querySelector(".nav-overlay");
const navMobile = document.querySelector(".navbar-mobile");

function removeNavMoblie() {
    overlay.classList.remove("active");
    navMobile.classList.remove("active");
}

menuBtn.addEventListener("click", () => {
    overlay.classList.add("active");
    navMobile.classList.add("active");
});
closeBtn.addEventListener("click", () => {
    removeNavMoblie();
});
overlay.addEventListener("click", () => {
    removeNavMoblie();
});

window.onscroll = function () {
    const counters = document.querySelectorAll(".about-number");
    counters.forEach((counter) => {
        counter.innerText = "0";

        const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const c = +counter.innerText;

            const increment = target / 500;
            if (c < target) {
                counter.innerText = `${Math.ceil(c + increment)}`;
                setTimeout(updateCounter, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
};

//Zoom hình ảnh sản phẩm
function zoom(e) {
    var zoomer = e.currentTarget;
    e.offsetX ? (offsetX = e.offsetX) : (offsetX = e.touches[0].pageX);
    e.offsetY ? (offsetY = e.offsetY) : (offsetX = e.touches[0].pageX);
    x = (offsetX / zoomer.offsetWidth) * 100;
    y = (offsetY / zoomer.offsetHeight) * 100;
    zoomer.style.backgroundPosition = x + "% " + y + "%";
}
