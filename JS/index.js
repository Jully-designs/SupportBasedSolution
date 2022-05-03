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

//Active state
for (var i = 0; i < 4; i++) {
    if (document.links[i].href === document.URL) {
        document.links[i].className = 'active';
    }
}

//onSubmit

var modal = document.querySelector(".myModal");
var close = document.querySelector("#close-Btn");

// document.getElementById("form").onsubmit = function(event){
//     event.preventDefault();
//     modal.style.display = "block";
// };

close.addEventListener("click", function(){
    modal.style.display = "none";
});