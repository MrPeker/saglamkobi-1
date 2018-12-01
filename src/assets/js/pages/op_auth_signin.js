/*
 *  Document   : op_auth_signin.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign In Page
 */

var OpAuthSignIn = function() {
    // Init Sign In Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationSignIn = function(){
        jQuery('.js-validation-signin').validate({
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
                    url: '/ajax/login.php',
                    method: 'POST',
                    data: $(e).serialize(),
                    success: function(response) {
                        response = JSON.parse(response);
                        if(response.status) {
                            swal(
                                'Harika iş!',
                                'Başarıyla giriş yaptınız! Yönlendiriliyorsunuz...',
                                'success'
                            );

                            setTimeout(function(){
                                location.href = '/index.php';
                            }, 2200);

                        } else {
                            var message = '';
                            if(response.message === 'wrongPassword') {
                                message = 'Lütfen şifrenizi kontrol ediniz'
                            } else if(response.message === 'userNotExists') {
                                message = 'Böyle bir kullanıcı yok';
                            } else {
                                message = 'Teknik hata, lütfen daha sonra tekrar deneyiniz';
                            }

                            swal(
                                'Oh, olamaz!',
                                message,
                                'error'
                            );
                        }
                    }
                })
            },
            rules: {
                'login-email': {
                    required: true,
                    minlength: 3
                },
                'login-password': {
                    required: true,
                    email: true
                }
            },
            messages: {
                'login-email': {
                    required: 'Lütfen email adresinizi giriniz',
                    email: 'Lütfen geçerli bir e-posta adresi giriniz'
                },
                'login-password': {
                    required: 'Lütfen şifrenizi giriniz',
                    minlength: 'Şifreniz en az beş karakter olmalıdır'
                }
            }
        });
    };

    return {
        init: function () {
            // Init Sign In Form Validation
            initValidationSignIn();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ OpAuthSignIn.init(); });