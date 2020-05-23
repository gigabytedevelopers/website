$(function () {
    "use strict";

    $('.subscribe-form-js').on("submit", function (event) {
        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            email = $.trim($form.find('input[name="email"]').val()),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {"email": email});

        // Put the results in a div
        posting.done(function () {
            $form.html('<h4 class="subscribe-title" style="margin-bottom: 25px; line-height: 56px;">Thank You for Subscribing!</h4>').fadeTo(300, 1);
        });

    });

    $('.contact-form').on("submit", function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            name = $.trim($form.find('input[name="name"]').val()),
            email = $.trim($form.find('input[name="email"]').val()),
            permalink = ($form.find('input[name="permalink"]').length) ? $.trim($form.find('input[name="permalink"]').val()) : '',
            subject = ($form.find('input[name="subject"]').length) ? $.trim($form.find('input[name="subject"]').val()) : '',
            phone = ($form.find('input[name="phone"]').length) ? $.trim($form.find('input[name="phone"]').val()) : '',
            company = ($form.find('input[name="company"]').length) ? $.trim($form.find('input[name="company"]').val()) : '',
            message = $.trim($form.find('textarea[name="message"]').val()),
            url = $form.attr("action");

        // Send the data using post
        var posting = $.post(url, {'name': name, 'email': email, 'subject': subject, 'message': message, 'company': company, 'phone': phone, 'permalink': permalink})

        // Put the results in a div
        posting.done(function () {
            $form.html('<h4>Thanks for your Feedback!</h4><br>' +
                '<h6>If necessary, we would get back to you on or before 48 business hours (2 business days) ASAP!</h6>')
                .fadeTo(300, 1);
        });

    });

    /*$('#registerUser').click(function () {
        // Get some values from elements on the page:
        var username = $('#username').val();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var company = $('#company').val();
        var password = $('#password').val();

        $.post("../users/register/registrationValidate.php", {
            username: username,
            first_name: first_name,
            last_name: last_name,
            email: email,
            phone: phone,
            company: company,
            password: password
        }, function (data) {
            alert(data);
        });
    });*/
});

