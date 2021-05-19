
$(document).ready(function(){
    $('#subscribe-email').click(function(){
        let email=$('#enter-email').val();
        $.ajax({
            method: 'post',
            url: 'php-request/subscribe-newsletter.php',
            data: {email: email},
            success: function(result){
               $("#result-message").html(result);
               $('#enter-email').val('');
            }
     });
    });
  });