$(document).ready(function() {
    signal = $.cookie('signal');
    console.log('default signal: ', signal);
    // $.ajax({
    //     url: "../functions/handleLogin.php",
    //     method: "POST",
    //     dataType: "json",
    //     success: function (data) {
    //         alert(data);
    //         // console.log(signal);
    //         signal = data;
    //         // loacation.reload();
    //     }
    // });

    // signal = 0;
    // console.log();


    if (!signal) {
        $('#admin-signal').css('display', 'none');
        $('#logout-signal').css('display', 'none');
        $('#login-signal').css('display', 'inline-flex');
    }

    if (signal == 1) {
        $('#admin-signal').css('display', 'inline-flex');
        $('#logout-signal').css('display', 'inline-flex');
        $('#login-signal').css('display', 'none');
        $('.add-to-cart').removeAttr("disabled");
        $('.add-to-cart').toggleClass("btn-secondary btn-outline-danger");
    }

    if (signal == 2) {
        $('#admin-signal').css('display', 'none');
        $('#logout-signal').css('display', 'inline-flex');
        $('#login-signal').css('display', 'none');
        $('.add-to-cart').removeAttr("disabled");
        $('.add-to-cart').toggleClass("btn-secondary btn-outline-danger");
    }

    $('#logout-signal').on('click', function() {
        $.removeCookie('signal', { path: '/' });
        location.reload();
    });
});