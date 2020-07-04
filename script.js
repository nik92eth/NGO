// HAMBURGER MENU MOBILE 
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});


// NAVBAR CLOSES AFTER CLICKING ON LINKS IN MOBILE VIEW
var elements = document.getElementsByClassName("nav-link");
 
 var myFunction = function() {
   if(!menuOpen) {
      menuBtn.classList.add('open');
      menuOpen = true;
    } else {
      menuBtn.classList.remove('open');
      menuOpen = false;
    }
 };
 
 for (var i = 0; i < elements.length; i++) {
     elements[i].addEventListener('click', myFunction, false);
 }