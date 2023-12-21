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
    // Add a class to trigger the transition
    $(this).addClass("clicked");

    // After the transition completes, navigate to another page
    setTimeout(function () {
      window.location.href = "another_page.html"; // Change to your desired page
    }, 500); // Adjust the timeout to match the transition duration
  });

  $("#trigger-l").click(function () {
    // Add a class to trigger the transition
    $(this).addClass("clicked");

    // After the transition completes, navigate to another page
    setTimeout(function () {
      window.location.href = "login.html"; // Change to your desired page
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
  
}

function SignUp() {
  var mForm = document.querySelector("form[name='signup-form']");
  pass = mForm.getElementById("pass").value;
  confirm_pass = mForm.getElementById("pas").value;

  if (pass != confPass || pass == "") alert("Passwords must be equal.");
  else mForm.submit();
}