 let registerLink = document.getElementById("register-link");
 let loginLink = document.getElementById("login-link");
 let registerForm = document.getElementById("register-form");
 let  loginForm = document.getElementById("login-form");

  registerLink.addEventListener("click", function(event) {
    event.preventDefault();
    registerForm.style.display = "flex";
    loginForm.style.display = "none";
  });

  loginLink.addEventListener("click", function(event) {
    event.preventDefault();
    registerForm.style.display = "none";
    loginForm.style.display = "flex";
  });