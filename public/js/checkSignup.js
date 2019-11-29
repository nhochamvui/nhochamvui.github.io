$(document).ready(function() {
    $('#re-password').on('blur', function() {
        if ($('#exampleInputPassword').val() != '') {
            if ($('#exampleInputPassword').val() == $('#re-password').val()) {
                $('#submit-btn').removeAttr('disabled');
            } else {
                $('#submit-btn').prop('disabled', true);
            }
        }
    })
});