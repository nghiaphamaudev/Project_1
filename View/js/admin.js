'use strict';
const mobileScreen = window.matchMedia('(max-width: 990px )');
jQuery(document).ready(function () {
  $('.dashboard-nav-dropdown-toggle').click(function () {
    $(this)
      .closest('.dashboard-nav-dropdown')
      .toggleClass('show')
      .find('.dashboard-nav-dropdown')
      .removeClass('show');
    $(this).parent().siblings().removeClass('show');
  });
  $('.menu-toggle').click(function () {
    if (mobileScreen.matches) {
      $('.dashboard-nav').toggleClass('mobile-show');
    } else {
      $('.dashboard').toggleClass('dashboard-compact');
    }
  });
});

// const dashboard = document.querySelector('.dashboard-nav-dropdown');
// dashboard.addEventListener('click', function () {
//     dashboard.add('')
// });
