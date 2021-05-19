
$(document).ready(function () {
    $('#footer-newsletter-submit').click(function () {
        let email = $('#footer-newsletter-email').val();
        $.ajax({
            method: 'post',
            url: 'php-request/subscribe-newsletter.php',
            data: { email: email },
            success: function (result) {
                $("#result-footer-message").html(result);
                $('#footer-newsletter-email').val('');
            }
        });
        console.log(email);
    });

    $('#mob-footer-newsletter-submit').click(function () {
        let email = $('#mob-footer-newsletter-email').val();
        $.ajax({
            method: 'post',
            url: 'php-request/subscribe-newsletter.php',
            data: { email: email },
            success: function (result) {
                $("#mob-result-footer-message").html(result);
                $('#mob-footer-newsletter-email').val('');
            }
        });
        console.log(email);
    });




});