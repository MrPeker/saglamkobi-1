<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<?php $cb->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>


<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/photos/photo34@2x.jpg');">
    <div class="row mx-0 bg-black-op">
        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-30 invisible" data-toggle="appear">
                <p class="font-size-h3 font-w600 text-white">
                    Sağlam Kobi Tarafından Oluşturulmuştur
                </p>
                <p class="font-italic text-white-op">
                    Copyright &copy; <span class="js-year-copy">2018</span>
                </p>
            </div>
        </div>
        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
            <div class="content content-full">
                <!-- Header -->
                <div class="px-30 py-10">
                    <a class="link-effect font-w700">
                        <span class="font-size-xl text-primary-dark">Sağlam</span><span class="font-size-xl"> Kobi</span>
                    </a>
                    <h1 class="h3 font-w700 mt-30 mb-10">Sağlam Kobi'ye Hoşgeldiniz</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Lütfen giriş yapın</h2>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-signin px-30" action="" onsubmit="return false;" method="">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="login-email" name="login-email">
                                <label for="login-email">E-Posta</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password" class="form-control" id="login-password" name="login-password">
                                <label for="login-password">Şifre</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                <label class="custom-control-label" for="login-remember-me">Beni Hatırla</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                            <i class="si si-login mr-10"></i> Giriş Yap
                        </button>
                        <div class="mt-30">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signup2.php">
                                <i class="fa fa-plus mr-5"></i> Hesap Oluştur
                            </a>
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_reminder2.php">
                                <i class="fa fa-warning mr-5"></i> Şifremi Unuttum
                            </a>
                        </div>
                    </div>
                </form>
                <!-- END Sign In Form -->
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<?php $cb->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>


<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signin.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>