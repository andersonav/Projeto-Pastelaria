/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $('.navbar a[href^="#"]').on('click', function (e) {
        $('.navbar a.nav-link').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass("active");
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 100
        }, 1000);
    });
});