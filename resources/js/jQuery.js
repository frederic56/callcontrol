import $ from 'jquery';

// $('.nav-link').click(function () { 
//    $(this).addClass("active").siblings("active").removeClass("active");
//    console.log($(this).siblings("active"));
// });

$('.menu').click(function() { 
    $(this).toggleClass("click")
    $('.sidebar').toggleClass("show")
});
