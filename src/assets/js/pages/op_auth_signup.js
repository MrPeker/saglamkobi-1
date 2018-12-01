/*
 *  Document   : op_auth_signup.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign Up Page
 */

var OpAuthSignUp = function() {
    // Init Sign Up Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationSignUp = function(){
        jQuery('.js-validation-signup').validate({
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            submitHandler: function(e) {
                $.ajax({
                    url: '/ajax/register.php',
                    method: 'POST',
                    data: $(e).serialize(),
                    success: function(response) {
                        response = JSON.parse(response);
                        if(response.status) {
                            location.href = '/index.php';
                        } else {
                            $(e).lastChild('.form-group').addClass('is-invalid').append('Teknik bir sorun oluştu, lütfen daha sonra tekrar deneyiniz');;
                        }
                    }
                })
            },
            rules: {
                'signup-username': {
                    required: true,
                    minlength: 3
                },
                'signup-email': {
                    required: true,
                    email: true
                },
                'signup-password': {
                    required: true,
                    minlength: 5
                },
                'signup-password-confirm': {
                    required: true,
                    equalTo: '#signup-password'
                },
                'signup-terms': {
                    required: true
                },
                'signup-tc': {
                    minlength: 11,
                    maxlength: 11,
                    required: true
                }
            },
            messages: {
                'signup-username': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'signup-email': 'Lütfen geçerli bir e-posta adresi giriniz',
                'signup-password': {
                    required: 'Lütfen şifre giriniz',
                    minlength: 'Şifreniz beş haneden uzun olmalıdır'
                },
                'signup-password-confirm': {
                    required: 'Lütfen şifrenizi tekrar giriniz',
                    minlength: 'Şifre beş haneden uzun olmalıdır',
                    equalTo: 'Şifreler eşleşmiyor'
                },
                'signup-terms': 'Kullanım koşullarını kabul etmelisiniz!',
                'signup-tc': 'Lütfen T.C. kimlik numaranızı doğru girdiğiniz emin olunuz',
            }
        });
    };

    return {
        init: function () {
            // Init SignUp Form Validation
            console.log(initValidationSignUp());
        }
    };
}();

// Initialize when page loads
jQuery(function(){ OpAuthSignUp.init(); });