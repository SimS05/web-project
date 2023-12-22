document.addEventListener("DOMContentLoaded", function () {
  var container1 = document.getElementById("Div");
  var hideSpan = document.getElementById("button");
  var showSpan = document.getElementById("visible");

  hideSpan.addEventListener("click", function () {
    container1.style.transform = "translateY(100%)";
    setTimeout(function () {
      container1.style.display = "none";
      container1.style.transform = "none";
    }, 1000);
  });

  showSpan.addEventListener("click", function () {
    container1.style.display = "block";
    container1.style.transform = "translateY(100%)";
    setTimeout(function () {
      container1.style.transform = "translateY(0)";
    }, 30);
  });
});

$(document).ready(function () {
  $("#trigger-s").click(function () {
    $(this).addClass("clicked");

    setTimeout(function () {
      window.location.href = "pages/login.php"; 
    }, 500); 
  });

  $("#trigger-l").click(function () {
    $(this).addClass("clicked");

    setTimeout(function () {
      window.location.href = "../index.php"; 
    }, 500);
  });
});



function ClearForm() {
  document.getElementById("pass").value = "";
  document.getElementById("pas").value = "";
  document.getElementById("un").value = "";
  document.getElementById("fn").value = "";
  document.getElementById("email").value = "";
  document.getElementById("DOB").value = "";
  document.getElementById("check").checked = false;
  document.getElementById("male").checked = true;
  document.getElementById("artisticStyles").value = null;
  document.getElementById("artisticSkills").value = null;
  document.getElementById("expertiseLevel").value = "beginner";
  document.getElementById("collaborateRadio").checked = false;
  document.getElementById("viewGalleryRadio").checked = false;
}
