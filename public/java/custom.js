
function myAccFunc(clicked) {
 
  if(clicked==1)
  {
    var x = document.getElementById("demoAcc");
   
  }
  else if(clicked==2)
  {
    var x = document.getElementById("demoAcc2");
    
  }
  else if(clicked==3)
  {
    var x = document.getElementById("demoAcc3");
  }
  else if(clicked==4)
  {
    var x = document.getElementById("demoAcc4");
  }
  else if(clicked==5)
  {
    var x = document.getElementById("demoAcc5");
  }
  else if(clicked==6)
  {
    var x = document.getElementById("demoAcc6");
  }
  else if(clicked==7)
  {
    var x = document.getElementById("demoAcc7");
  }
  else if(clicked==8)
  {
    var x = document.getElementById("demoAcc8");
  }
  
 
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-blue ";
     open=true;

  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-blue", "");
    open=false;
  }
 
  
  
}





function toggleSidebar(){
  document.getElementById("sidebar").classList.toggle('active');
  document.getElementById("page_left").classList.toggle('page_left_active');
  
}


    $(document).ready(function(){
      ($(".toggle-btn").click)(function(){
         
         $("#p1").toggleClass("dis_none");
       });
     });

     $(document).ready(function(){
      ($(".toggle-btn").click)(function(){
         
         $("#p2").toggleClass("dis_yes");
       });
     });

    

   
    $(document).ready(function(){
      $("button").click(function(){
        $("#a").hide();
        
      });
    });



   

    // Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

/*
$(document).ready(function(){
      $("button").click(function(){
        $("#p1").css("color", "red").slideUp(2000).slideDown(2000);
      });
    });
window.onclick = function(event) {
    if (!event.target.matches('#1')) {
      var dropdowns = document.getElementsByClassName("borders");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
     function openCity(cityName) {
      var i;
      var x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      document.getElementById(cityName).style.display = "block";
    }

    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    */
   