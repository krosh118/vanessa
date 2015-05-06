$( document ).ready(function() {
    $('#usuario').focus();
    
    $("#add_err").css('display', 'none', 'important');
    
    $("#btn-login").click(function () {
        username = $("#usuario").val();
        password = $("#pass").val();
        $.ajax({
            type: "POST",
            url: "login.php",
            data: "name=" + username + "&pwd=" + password,
            success: function (html) {
                if (html == 'true') {
                    //$("#add_err").css('display', 'inline', 'important');
                    //$("#add_err").html("Si lo encontró");
                    window.location = "controlPanel.php";
                }
                else {
                    $("#add_err").css('display', 'inline', 'important');
                    $("#add_err").html("<p style=\"color: firebrick;\"><img src='images/error.png' /> <b>Nombre de usuario o contraseña inválida.</b></p>");
                    $('#usuario').focus();
                }
            },
            beforeSend: function ()
            {
                $("#add_err").css('display', 'inline', 'important');
                $("#add_err").html("<p style=\"color: limegreen;\"><img src='images/ajax-loader.gif' /><b>Cargando...</b></p>")
            }
        });
        return false;
    });

});

function showPassword() {
    
    var key_attr = $('#pass').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#pass').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#pass').attr('type', 'password');
        
    }
    
}