$(document).ready(function($) {
$('.box').hide();
$('.box:first').show();
$('#tabs li a:first').addClass('active');
$('#tabs li a').click(function(event) {
 $('#tabs li a').removeClass('active');
 $('#tabs2 li a').removeClass('active');
 $(this).addClass('active');
 $('.box').hide();

 var selectTab = $(this).attr("href");

 $(selectTab).fadeIn();
 console.log(selectTab);
});

$('#tabs2 li a').click(function(event) {
 $('#tabs2 li a').removeClass('active');
 $('#tabs li a').removeClass('active');
 $(this).addClass('active');
 $('.box').hide();

 var selectTab = $(this).attr("href");

 $(selectTab).fadeIn();
 console.log(selectTab);
});


});


$('.hamburger--hamburger-link--3-KRS').click(function(){

$('._layout-module--nav--3qaiq').toggleClass("_layout-module--hidden--2IaXy");

if ($('._layout-module--nav--3qaiq').hasClass("_layout-module--hidden--2IaXy")) {

 $('._layout-module--content-area--tGmoA').css('margin-left', '0');
 $('._layout-module--title-area--1yynf').css('margin-left', '0');

}

else {
 $('._layout-module--content-area--tGmoA').css('margin-left', '4rem');
 $('._layout-module--title-area--1yynf').css('margin-left', '4rem');
}

/*

if ($('._layout-module--content-area--tGmoA').css('margin-left').length > 0) {

 if ($('._layout-module--content-area--tGmoA').css('margin-left').toLowerCase() == '16rem')
 {
   $('._layout-module--content-area--tGmoA').css('margin-left', '0');
 }
 else
 {
   $('._layout-module--content-area--tGmoA').css('margin-left', '16rem');
 }

}
else {
 $('._layout-module--content-area--tGmoA').css('margin-left', '0');
}



if ($('._layout-module--title-area--1yynf').css('margin-left') == '16rem')
{
 $('._layout-module--title-area--1yynf').css('margin-left', '0');
}
else
{
 $('._layout-module--title-area--1yynf').css('margin-left', '16rem');
}
*/
/*
$('._layout-module--nav--3qaiq').animate(
 { left: '-285px' }, 200
);

$('body').animate(
 { left: '0px' }, 200
);

$(this).addClass('close');
*/

});





/*
$('.close').click(function(){

$('.._layout-module--nav--3qaiq').animate(
 { left: '0px' }, 200
);

$('body').animate(
 { left: '285px' }, 200
);

$(this).removeClass('close');

});

*/


if (window.matchMedia('(max-width: 60em)').matches)
{
  $('._layout-module--nav--3qaiq').addClass("_layout-module--hidden--2IaXy");
  $('._layout-module--title-area--1yynf').css('margin-left', '0');
  $('._layout-module--content-area--tGmoA').css('margin-left', '0');
  $('.hamburger--hamburger-link--3-KRS').css('display', 'block');

  $('._lesson-expanded--image-placeholder--2SiZ3 img').css('display', 'none');
}
