function openNav() {
    document.getElementById("mySidebar").style.left = "0";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.left = "-250px";
  }

  $(document).ready(function() {
    $('#my_slider').carousel({
       interval: 2000 // Cambia este valor para ajustar la velocidad del carrusel
    });

    // Dropdown functionality
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
       dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
             dropdownContent.style.display = "none";
          } else {
             dropdownContent.style.display = "block";
          }
       });
    }
 });