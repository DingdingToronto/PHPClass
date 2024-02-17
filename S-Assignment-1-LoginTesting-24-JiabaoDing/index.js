window.onload = function () {
  document
    .querySelector(".login__form")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      var answer = checkLogin(username, password);
      var result = document.getElementById("result");
      result.style.display = "flex";
      if (answer === true) {
        result.innerHTML = "Welcome Back";
      } else if (answer === false) {
        result.innerHTML = "Invalid Username or Password";
      } else {
        result.innerHTML = answer;
      }
      return false;
    });
};
