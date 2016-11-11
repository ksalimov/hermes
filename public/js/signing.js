/**
 * Created by Konstantin on 2016-11-03.
 */
$(document).ready(function () {

    $('#loginForm').ajaxForm(function (response) {
        if($.isEmptyObject(response)) {
            window.location.replace("http://localhost");
        }
        if(response['email']) {
            $('.error.email').text(response['email'][0]);
        } else {
            $('.error.email').text('');
        }
        if(response['password']) {
            $('.error.password').text(response['password'][0]);
        } else {
            $('.error.password').text('');
        }
        if(response['error']) {
            $('.error.system').text(response['error'][0]);
        } else {
            $('.error.system').text('');
        }
    });

    $('#registrationForm').ajaxForm(function (response) {
        if($.isEmptyObject(response)) {
            window.location.replace("http://localhost");
        }
        if(response['email']) {
            $('.error.email').text(response['email'][0]);
        } else {
            $('.error.email').text('');
        }
        if(response['password']) {
            $('.error.password').text(response['password'][0]);
        } else {
            $('.error.password').text('');
        }
        if(response['error']) {
            $('.error.system').text(response['error'][0]);
        } else {
            $('.error.system').text('');
        }
    });
});

