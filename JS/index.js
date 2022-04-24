var menuIcon = document.querySelector(".menu-bar");
var navLinks = document.querySelector(".nav-links");
var closeBtn = document.querySelector(".closebtn");

menuIcon.addEventListener("click", () =>{
    navLinks.classList.add("navlinks-mobile");
    menuIcon.style.display = "none";
    closeBtn.style.display = "block";
});

closeBtn.addEventListener("click",() => {
    navLinks.classList.remove("navlinks-mobile");
    closeBtn.style.display = "none";
    menuIcon.style.display = "block";
})