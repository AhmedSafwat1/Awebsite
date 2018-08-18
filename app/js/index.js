/*global $*/
$(function () {
   
    $('.nav li .nav-link').on('click',function () {
        console.log('kk')
        $('.nav li .nav-link').removeClass('active');
        $(this).addClass('active');
        
    })
});