$(document).ready(function() {
    $('#submit-btn-cover').on('mouseover', function() {
        if (($('#exampleInputEmail1').val() != '') && ($('exampleInputPassword1').val() != '')) {
            $('#submit-btn').removeAttr('disabled');
        }
    });
})