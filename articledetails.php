<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.min.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Kobi Adı <small>proje türü(gıda vb...)</small></h2>
    <div class="block">
        <!-- Navigation -->
        <div class="block-content block-content-full border-b clearfix">
            <div class="btn-group float-right">
                <a class="btn btn-secondary" href="javascript:void(0)">
                    <i class="fa fa-arrow-left text-primary mr-5"></i> Geri
                </a>
                <a class="btn btn-secondary" href="javascript:void(0)">
                    İleri <i class="fa fa-arrow-right text-primary ml-5"></i>
                </a>
            </div>
            <a class="btn btn-secondary" href="be_pages_generic_project_list.php">
                <i class="fa fa-th-large text-primary mr-5 "></i> Tüm Kobiler
            </a>
        </div>
        <!-- END Navigation -->

        <!-- Project -->
        <div class="block-content block-content-full">
            <div class="row py-20">
                <div class="col-sm-6 invisible" data-toggle="appear">
                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
                        <div>
                            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/cb-project-promo1.png" alt="kobi1">
                        </div>
                    </div>
                    <!-- END Image Slider -->

                    <!-- Project Info -->
                    <table class="table table-striped table-borderless mt-20">
                        <tbody>
                            <tr>
                                <td class="font-w600">Kobi</td>
                                <td>X Kobi'si</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Kobi Türü</td>
                                <td>Gıda</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Telefon</td>
                                <td>
                                    <a href="tel:+905377630564">+90 (000) 000 00 00</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-w600">Adres</td>
                                <td>Adres Gelecek</td>
                            </tr>							
                        </tbody>
                    </table>
                    <!-- END Project Info -->
                </div>
                <div class="col-sm-6 nice-copy">
                    <h3 class="mt-20 mb-10">Açıklama</h3>
                    <?php $cb->get_text('small', 2); ?>
                    <!-- END Project Description -->
                </div>
            </div>
        </div>
        <!-- END Project -->

        <!-- Key Features -->
        <div class="block-content-full border-t">
            <div class="row text-center py-30 invisible" data-toggle="appear">
               <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-warning-light push">
                        <i class="si si-settings text-warning"></i>
                    </div>
                    <h5 class="mb-0">Servis</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-flat-lighter push">
                        <i class="si si-support text-flat"></i>
                    </div>
                    <h5 class="mb-0">Destek</h5>
                </div>
				                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-flat-lighter push">
                        <i class="fa fa-building text-flat"></i>
                    </div>
                    <h5 class="mb-0">Destek</h5>
                </div>
				                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-flat-lighter push">
                        <i class="si si-support text-flat"></i>
                    </div>
                    <h5 class="mb-0">Destek</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page Plugins -->
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        Codebase.helpers('slick');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>