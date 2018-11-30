<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<?php $cb->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $cb->get_css('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>
<?php $cb->get_css('js/plugins/select2/select2.min.css'); ?>
<?php $cb->get_css('js/plugins/select2/select2-bootstrap.min.css'); ?>
<?php $cb->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>
<?php $cb->get_css('js/plugins/jquery-tags-input/jquery.tagsinput.min.css'); ?>
<?php $cb->get_css('js/plugins/jquery-auto-complete/jquery.auto-complete.min.css'); ?>
<?php $cb->get_css('js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css'); ?>
<?php $cb->get_css('js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css'); ?>
<?php $cb->get_css('js/plugins/dropzonejs/min/dropzone.min.css'); ?>



<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/photos/photo34@2x.jpg');">
    <div class="row mx-0 bg-earth-op">
        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-30 invisible" data-toggle="appear">
                <p class="font-size-h3 font-w600 text-white mb-5">
                    Topluluğumuza katıldığınız için çok mutluyuz!
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
                    <a class="link-effect font-w700" href="index.php">
                        <span class="font-size-xl text-primary-dark">Sağlam</span><span class="font-size-xl"> Kobi</span>
                    </a>
                    <h1 class="h3 font-w700 mt-30 mb-10">Yeni Hesap Oluştur</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Lütfen ayrıntılarınızı ekleyin</h2>
                </div>
				
                <form class="js-validation-signup px-30" onsubmit="return false;">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="signup-ad" name="signup-ad">
                                <label for="signup-ad">Ad</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="signup-soyad" name="signup-soyad">
                                <label for="signup-soyad">Soyad</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="signup-email" name="signup-email">
                                <label for="signup-email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="signup-tc" name="signup-tc">
                                <label for="signup-tc">TC</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                         <div class="col-12">
                            <div class="form-material">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="MM/DD/YY">
                                <label for="example-datepicker4">Doğum Tarihi</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="signup-telefon" name="signup-telefon">
                                <label for="signup-telefon">Telefon</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password" class="form-control" id="signup-password" name="signup-password">
                                <label for="signup-password">Şifre</label>
                            </div>
                        </div>
                    </div>
					  <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm">
                                <label for="signup-password-confirm">Şifre Onaylama</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                <label class="custom-control-label" for="signup-terms">Sözleşmeyi Kabul Ediyorum.</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                            <i class="fa fa-plus mr-10"></i> Devam Et
                        </button>
                        <div class="mt-30">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                <i class="fa fa-book text-muted mr-5"></i> Sözleşme Oku
                            </a>
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signin2.php">
                                <i class="fa fa-user text-muted mr-5"></i> Giriş Yap
                            </a>
                        </div>
                    </div>
                </form>
                <!-- END Sign Up Form -->
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                    <i class="fa fa-check"></i> Perfect
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signup.js'); ?>
<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>
<?php $cb->get_js('js/plugins/select2/select2.full.min.js'); ?>
<?php $cb->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-tags-input/jquery.tagsinput.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-auto-complete/jquery.auto-complete.min.js'); ?>
<?php $cb->get_js('js/plugins/masked-inputs/jquery.maskedinput.min.js'); ?>
<?php $cb->get_js('js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'); ?>
<?php $cb->get_js('js/plugins/dropzonejs/min/dropzone.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_forms_plugins.js'); ?>
<script>
    jQuery(function(){
        // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>