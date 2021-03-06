document.addEventListener('DOMContentLoaded', (event) => {
    function navSlide() {
      const burger = document.querySelector(".burger");
      const nav = document.querySelector(".nav-links");
      const navLinks = document.querySelectorAll(".nav-links li");
      
      burger.addEventListener("click", () => {
          //Toggle Nav
          nav.classList.toggle("nav-active");
          
          //Animate Links
          navLinks.forEach((link, index) => {
              if (link.style.animation) {
                  link.style.animation = ""
              } else {
                  link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
              }
          });
          //Burger Animation
          burger.classList.toggle("toggle");
      });
      
    }
  
    navSlide();

    let today = new Date().getFullYear() 

    document.getElementById('copyright').innerHTML = `&copy; 2018 - ${today} OZDROWO. Wszelkie prawa zastrzeżone`
})