/*
 *  Document   : op_auth_signin.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign In Page
 */

window.addKobi = function(e){
    e = $(e).parent().parent();
    $.ajax({
        url: '/ajax/addkobi.php',
        method: 'POST',
        data: e.serialize(),
        success: function(response) {
            response = JSON.parse(response);
            if(response.status) {
                swal(
                    'Harika iş!',
                    'Başarıyla işletmeniz eklendi!',
                    'success'
                );

                /*setTimeout(function(){
                    location.href = '/index.php';
                }, 3200);*/

            } else {
                var message = '';
                if(response.message === 'wrongCredentials') {
                    message = 'Lütfen eksiksi kontrol ediniz'
                } else {
                    message = 'Teknik hata, lütfen daha sonra tekrar deneyiniz';
                }

                swal(
                    'Ah, olamaz!',
                    message,
                    'error'
                );
            }
        }
    })
}

var OpAuthSignIn = function() {
    // Init Sign In Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationSignIn = function(){
        jQuery('.js-validation-add-kobi').validate({
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
                    url: '/ajax/addkobi.php',
                    method: 'POST',
                    data: $(e).serialize(),
                    success: function(response) {
                        response = JSON.parse(response);
                        if(response.status) {
                            swal(
                                'Harika iş!',
                                'Başarıyla işletmeniz eklendi!',
                                'success'
                            );

                            /*setTimeout(function(){
                                location.href = '/index.php';
                            }, 3200);*/

                        } else {
                            var message = '';
                            if(response.message === 'wrongCredentials') {
                                message = 'Lütfen eksiksi kontrol ediniz'
                            } else {
                                message = 'Teknik hata, lütfen daha sonra tekrar deneyiniz';
                            }

                            swal(
                                'Ah, olamaz!',
                                message,
                                'error'
                            );
                        }
                    }
                })
            },
            rules: {
                'isletme-ismi': {
                    required: true,
                },
                'isletme-sektor': {
                    required: true,
                },
                'isletme-turu': {
                    required: true,
                },
                'isletme-durumu': {
                    required: true,
                },
                'isletme-ihtiyac-durumu': {
                    required: true,
                },
                'isletme-aciklama': {
                    required: true,
                }
            },
            messages: {
                    'isletme-ismi': {
                        required: 'Bu alanın girilmesi zorunludur',
                    },
                    'isletme-sektor': {
                        required: 'Bu alanın girilmesi zorunludur',
                    },
                    'isletme-turu': {
                        required: 'Bu alanın girilmesi zorunludur',
                    },
                    'isletme-durumu': {
                        required: 'Bu alanın girilmesi zorunludur',
                    },
                    'isletme-ihtiyac-durumu': {
                        required: 'Bu alanın girilmesi zorunludur',
                    },
                    'isletme-aciklama': {
                        required: 'Bu alanın girilmesi zorunludur',
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