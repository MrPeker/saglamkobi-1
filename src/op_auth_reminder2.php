<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/photos/photo34@2x.jpg');">
    <div class="row mx-0 bg-default-op">
        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-30 invisible" data-toggle="appear">
                <p class="font-size-h3 font-w600 text-white">
                    Sen harikasın! Aramızda bulunman inanılmaz bir şey !
                </p>
                <p class="font-italic text-white-op">
                    Copyright &copy; <span class="js-year-copy">2018</span>
                </p>
            </div>
        </div>
        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
            <div class="content content-full">
                <!-- Header -->
                <div class="px-30 py-10">
                    <a class="link-effect font-w700" href="#">
                        <span class="font-size-xl text-primary-dark">Sağlam</span><span class="font-size-xl"> Kobi</span>
                    </a>
                    <h1 class="h3 font-w700 mt-30 mb-10">Merak Etme , Arkanı Kollarız.</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Lütfen Email Adresinizi Giriniz..</h2>
                </div>
                <!-- END Header -->

                <!-- Reminder Form -->
                <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-reminder px-30" action="be_pages_auth_all.php" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="reminder-credential" name="reminder-credential">
                                <label for="reminder-credential">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                            <i class="fa fa-asterisk mr-10"></i> Şifre Hatırlatma
                        </button>
                        <div class="mt-30">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signin2.php">
                                <i class="fa fa-user text-muted mr-5"></i> Giriş Yap
                            </a>
                        </div>
                    </div>
                </form>
                <!-- END Reminder Form -->
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_reminder.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>