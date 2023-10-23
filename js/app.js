document.addEventListener("DOMContentLoaded", function () {
  const formBox = document.querySelector(".form__box");
  const body = document.querySelector("body");

  document.querySelector(".signup-btn").addEventListener("click", function () {
    formBox.classList.add("active");
    body.classList.add("active");
  });

  document.querySelector(".signin-btn").addEventListener("click", function () {
    formBox.classList.remove("active");
    body.classList.remove("active");
  });
});
