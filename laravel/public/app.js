let navbar = document.getElementById("navbar");
let section = document.querySelectorAll("section");
let lists = document.querySelectorAll(".list");
function activeLink(li) {
    lists.forEach((item) => item.classList.remove("active"));
    li.classList.add("active");
}
lists.forEach((item) =>
    item.addEventListener("click", function () {
        activeLink(this);
    })
);

window.onscroll = () => {
    section.forEach((sec) => {
        let top = window.scrollY + navbar.offsetHeight;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute("id");

        if (window.pageYOffset > 0) {
            navbar.style.backgroundColor = "white";
            navbar.style.marginBottom = 30;
            if (top >= offset && top < offset + height) {
                navbar.style.backgroundColor = "white";
                navbar.style.marginBottom = 30;
                const target = document.querySelector(
                    `[href='#${id}']`
                ).parentElement;
                activeLink(target);
            }
        } else {
            navbar.style.marginBottom = 0;
            navbar.style.backgroundColor = "transparent";
        }
    });
};

function reveal() {
    let reveals = document.querySelectorAll(".reveal");

    for (let i = 0; i < reveals.length; i++) {
        let windowHeight = window.innerHeight;
        let elementTop = reveals[i].getBoundingClientRect().top;
        let elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}
window.addEventListener("scroll", reveal);

const skillsContent = document
    .getElementById("skills")
    .getElementsByClassName("content")[0];
const skillCard = document
    .getElementById("skills")
    .getElementsByClassName("card")[0];

const distance = skillCard.clientWidth + skillCard.clientWidth * 0.05;
function scrollLft() {
    skillsContent.scrollBy({
        left: -distance,
        behavior: "smooth",
    });
}

function scrollRight() {
    skillsContent.scrollBy({
        left: distance,
        behavior: "smooth",
    });
}
