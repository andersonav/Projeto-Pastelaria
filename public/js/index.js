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

    $("#myFormLogin").submit(function () {
        var dados = new FormData(this);
        $.ajax({
            url: "/login",
            type: 'POST',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {

            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: dados,
            success: function (data, textStatus, jqXHR) {
                window.location = '/home';
            }, error: function (errors, textStatus, errorThrown) {

                $.each(errors.responseJSON, function (key, value) {

                });
            },
            complete: function () {
            }
        });
    });
});