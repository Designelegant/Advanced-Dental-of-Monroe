jQuery(document).ready(function () {

    // Phone inputmask for homepage contact form
    if (jQuery('#cf-phone').length) {
        jQuery('#cf-phone').inputmask('(999) 999-9999');
    }

    // Homepage contact form submission
    jQuery('#cf-submit').click(function () {
        var hasError = false;

        // First name
        if (jQuery('#cf-first-name').val().trim() === '') {
            jQuery('.lbl_cf_first_name').show();
            hasError = true;
        } else {
            jQuery('.lbl_cf_first_name').hide();
        }

        // Last name
        if (jQuery('#cf-last-name').val().trim() === '') {
            jQuery('.lbl_cf_last_name').show();
            hasError = true;
        } else {
            jQuery('.lbl_cf_last_name').hide();
        }

        // Phone
        if (jQuery('#cf-phone').val().trim() === '') {
            jQuery('.lbl_cf_phone').show();
            jQuery('.lbl_cf_phone_pattern').hide();
            hasError = true;
        } else {
            jQuery('.lbl_cf_phone').hide();
            var phoneVal    = jQuery('#cf-phone').val();
            var phonePattern = /^\+?1?\s?\(?\d{3}\)?[\s\-]?\d{3}[\s\-]?\d{4}$/;
            if (!phoneVal.replace(/\D/g, '').match(/^\d{10}$/)) {
                jQuery('.lbl_cf_phone_pattern').show();
                hasError = true;
            } else {
                jQuery('.lbl_cf_phone_pattern').hide();
            }
        }

        // Email
        if (jQuery('#cf-email').val().trim() === '') {
            jQuery('.lbl_cf_email').show();
            jQuery('.lbl_cf_email_pattern').hide();
            hasError = true;
        } else {
            jQuery('.lbl_cf_email').hide();
            var emailVal     = jQuery('#cf-email').val();
            var emailPattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!emailVal.match(emailPattern)) {
                jQuery('.lbl_cf_email_pattern').show();
                hasError = true;
            } else {
                jQuery('.lbl_cf_email_pattern').hide();
            }
        }

        // Message
        if (jQuery('#cf-message').val().trim() === '') {
            // jQuery('.lbl_cf_message').show();
            // hasError = true;
        } else {
            // jQuery('.lbl_cf_message').hide();
        }

        // Consent checkboxes
        if (!jQuery('#i_agree').is(':checked')) {
            // jQuery('.lbl_i_agree').show();
            // hasError = true;
        } else {
            // jQuery('.lbl_i_agree').hide();
        }

        if (!jQuery('#i_agree_marketing_messages').is(':checked')) {
            // jQuery('.lbl_i_agree_marketing_messages').show();
            // hasError = true;
        } else {
            // jQuery('.lbl_i_agree_marketing_messages').hide();
        }

        if (hasError) return;

        // Build payload
        var firstName = jQuery('#cf-first-name').val().trim();
        var lastName  = jQuery('#cf-last-name').val().trim();
        var phone     = jQuery('#cf-phone').val().trim();
        var email     = jQuery('#cf-email').val().trim();
        var message   = jQuery('#cf-message').val().trim();
        var i_agree = jQuery('#i_agree').is(':checked') ? 'Yes' : 'No';
        var i_agree_marketing_messages = jQuery('#i_agree_marketing_messages').is(':checked') ? 'Yes' : 'No';

        var payload = {
            firstName:    firstName,
            lastName:     lastName,
            email:        email,
            phone:        phone,
            name:         firstName + ' ' + lastName,
            tags:         ['Homepage Form'],
            customFields: [
                { id: 'qCPef3NEYCpaMqJiD770', value: message },
                { id: 'erbS03Ibo6FoYwFF5PHu', value: i_agree },
                { id: 'p7ky6RBp7ApaZkt4K54A', value: i_agree_marketing_messages }
            ]
        };

        jQuery.ajax({
            type:        'POST',
            url:         '/ghl/submit_handler.php',
            contentType: 'application/json',
            data:        JSON.stringify(payload),
            beforeSend: function () {
                jQuery('#cf-submit').prop('disabled', true).html('Sending… <i class="fa fa-spinner fa-spin"></i>');
            },
            success: function (data) {
                localStorage.setItem('first_name', firstName);
                localStorage.setItem('last_name',  lastName);
                localStorage.setItem('phone',       phone);
                localStorage.setItem('email',       email);
                var msg = (data && data.message) ? data.message : 'Thank you! We\'ll be in touch shortly.';
                toastr.success(msg);
                window.location.href = '/thank-you.html';

                // jQuery('#contact-form')[0].reset();
            },
            error: function (err) {
                console.error(err);
                toastr.error('Something went wrong. Please try again.');
            },
            complete: function () {
                jQuery('#cf-submit').prop('disabled', false).html('Send Message <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>');
            }
        });
    });

});
