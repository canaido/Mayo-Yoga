//page effects
$(document).ready(function () {
  $('main').hide().fadeIn(1000);
});

$(document).ready(function () {
  $('p').hide().fadeIn(2000);
  $('li').hide().fadeIn(2000);
});

$(document).ready(function () {
  $('img').hide().fadeIn(1500);
});

//end of page effects

//menu effects

/* $('.toggle-menu').click(function () {
  $('.drop_nav').slideToggle('2000', function () {
  });
});

$('main').click(function () {
  $('.drop_nav').hide('5000', function () {
  });
}); */

//end of menu effects


var $menu = $('.drop_nav');

$('.toggle-menu').click(function () {
  $menu.slideToggle('2000', function () {
  });
});

$(document).mouseup(function (e) {
  // if the target of the click isn't the container...
  if (!$menu.is(e.target) && $menu.has(e.target).length === 0)

  // ... nor a descendant of the container
   {
    $menu.hide('5000', function () {
    });
  }
});
