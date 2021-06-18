function mobile(){
    let bars = document.querySelector('#bars');
    let nav = document.querySelector('#nav');
    let times = document.querySelector('#times');
    let content = document.querySelector('.content');
    bars.style.color = "transparent";
    nav.style.display = "flex";
    times.style.display = "block";
    content.style.paddingTop = "20px";
}
function closenav(){
    let bars = document.querySelector('#bars');
    let times = document.querySelector('#times');
    let nav = document.querySelector('#nav');
    let content = document.querySelector('.content');
    times.style.display = "none";
    bars.style.color = "#fff";
    nav.style.display = "none";
    content.style.paddingTop = "20px";
}
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.querySelector('.header');

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
} 