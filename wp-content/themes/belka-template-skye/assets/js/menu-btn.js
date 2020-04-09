$('.menu-btn').on('click', function (e) {
  e.preventDefault();
  $(this).toggleClass('menu-btn-active');
});

var btn = $('#btn-show');
var dropdown = $('#dropdown-menu');

btn.click(function () {

  dropdown.slideToggle();
});

$(function () {

    const first_nav = document.getElementById("first-nav").innerHTML;
    let second_nav = document.getElementById("second-nav").innerHTML;

    second_nav = second_nav.replace("btn-login", "");

    const drop_menu = document.getElementById("dropdown-menu");

    drop_menu.insertAdjacentHTML('afterbegin', first_nav + second_nav);
});