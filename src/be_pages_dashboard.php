<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <!-- Row #5 -->
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="be_pages_generic_inbox.php">
                <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                    <p class="mt-5">
                        <i class="fa fa-building fa-3x"></i>
                    </p>
                    <p class="font-w600">Şirket Ekle</p>
                </div>
            </a>
        </div>
    </div>
	<div class="row gutters-tiny invisible" data-toggle="appear">
		<!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
<table class="js-table-checkable table table-hover">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 6; $i++) { ?>
                    <tr>
                        <td>
                            <p class="font-w600 mb-10"><?php $cb->get_name(); ?></p>
                            <p class="text-muted mb-0">Customer details and further information</p>
                        </td>
                        <td class="d-sm-table-cell">
                            <?php $cb->get_tag(); ?>
                        </td>
                        <td class="d-sm-table-cell">
                            <em class="text-muted">November <?php echo rand(1, 28); ?>, 2017 13:17</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
	</div>
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <!-- Row #4 -->
        <div class="col-md-6">
            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <i class="si si-briefcase fa-2x text-body-bg-dark"></i>
                    <div class="row py-20">
                        <div class="col-6 text-right border-r">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                <div class="font-size-h3 font-w600">16</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Projeler</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="font-size-h3 font-w600">2</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="text-right">
                        <i class="si si-users fa-2x text-body-bg-dark"></i>
                    </div>
                    <div class="row py-20">
                        <div class="col-6 text-right border-r">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                <div class="font-size-h3 font-w600 text-info">63250</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Kayıt</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="font-size-h3 font-w600 text-success">97%</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #4 -->
    </div>

</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Table Tools helper)
        Codebase.helpers('table-tools');
    });
</script>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>