/**
 * Created by Axum on 3/7/2017.
 */

$(document).ready(function () {
    $("#add_err").css('display', 'none', 'important');
    $('input[type="radio"]').click(function () {
        if ($(this).attr('id') == 'adminForm') {
            $('#admin-login-form').show();
            $('#tech-login-form').hide();
        } else {
            $('#admin-login-form').hide();
            $('#tech-login-form').show();
        }
    });

    $("#admin-login-form").submit(function (e) {
        e.preventDefault();
        var email = $("#email").val();
        var userPassword = $("#userPassword").val();
        var dataString = 'email=' + email + '&userPassword=' + userPassword;

        $.ajax({
            type: "POST",
            url: 'admin/userList.php',
            data: dataString,
            success: function (data) {
                if (data[0] == 1) {
                    window.location.replace('admin.php');
                }
                else if (data[0] == 0) {
                    window.location.replace('teacher.php')
                }
                else {
                    $("#add_err").css('display', 'inline', 'important');
                    $("#add_err").text("Incorrect username or password");
                    $("#password").val('');
                }
            },
            beforeSend: function () {
                $("#add_err").css('display', 'inline', 'important');
                $("#add_err").text("Loading...");
            }
        });
        return false;
    });}