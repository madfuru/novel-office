document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.main-nav');

  toggle.addEventListener('click', function () {
    nav.classList.toggle('active');
  });
});
