<?php require 'inc/_global/config.php'; ?>
<?php include("ajax/config.php"); ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php $cb->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php $fetch = MySqlQuery('SELECT * FROM kobis WHERE user_id=?', [$_SESSION['id']], 'rows', 0); ?>

<!-- Page Content -->
<div class="content">
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <!-- Row #5 -->
        <?php if(empty($fetch)): ?>
        <div class="col-12 col-md-12 col-xl-12">
            <a class="block block-link-shadow text-center" data-toggle="modal" data-target="#modal-compose">
                <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                    <p class="mt-5">
                        <i class="fa fa-building fa-3x"></i>
                    </p>
                    <p class="font-w600">İşletme Ekle</p>
                </div>
            </a>
        </div>
        <?php else: ?>
        <div class="col-12 col-md-12 col-xl-12">
                <a class="block block-link-shadow text-center" data-toggle="modal" data-target="#modal-compose2">
                    <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                        <p class="mt-5">
                            <i class="fa fa-building fa-3x"></i>
                        </p>
                        <p class="font-w600">İşletme Düzenle</p>
                    </div>
                </a>
            </div>
        </div>
        <?php endif; ?>
	<div class="col-12 col-md-12 col-xl-12 gutters-tiny invisible" data-toggle="appear">
		<!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
<table class="js-table-checkable table table-hover col-12 col-md-12 col-xl-12" style="width: 100%;">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $kobis = MySqlQuery('SELECT * FROM kobis WHERE user_id != ?', [$_SESSION['id']], 'rows', 0);
                        foreach ($kobis as $kobi) {
                    ?>
                    <tr>
                        <td>
                            <p class="font-w600 mb-10"><?php echo $kobi['name']; ?></p>
                            <p class="text-muted mb-0"><?=substr($kobi['description'], 0, 60)?><?php if($kobi['description'] > 60) echo '...'; ?></p>
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
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<?php

if(empty($fetch)):

?>

<!-- Compose Modal -->
<div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header">
                    <h3 class="block-title">
                        <i class="fa fa-pencil mr-5"></i> Yeni İşletme
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form class="my-10 js-validation-add-kobi" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary input-group">
                                    <input type="text" class="form-control" id="isletme-ismi" name="isletme-ismi" placeholder="İşletmenizin Adı">
                                    <label for="isletme-ismi">İşletme Adı</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary input-group">
                                    <label for="isletme-sektor">İşletmenizin Sektörü</label>
                                    <select class="form-control" id="example-multiple-select" name="isletme-sektor" size="7" multiple>
                                        <?php
                                            $sectors = $db->query('SELECT * FROM sectors')->fetchAll();
                                            foreach($sectors as $sector):
                                        ?>
                                        <option value="<?=$sector['id']?>"><?=$sector['name']?></option>
                                        <?php endforeach; ?>
                                    </select>
                             </div>
                          </div>
						</div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary input-group">
                                    <input type="text" class="form-control" id="isletme-turu" name="isletme-turu" placeholder="İşletmenizin Türü (Bakkal, Fırın, Beyaz Eşya Satıcısı)">
                                    <label for="isletme-turu">İşletmenizin Türü</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary input-group">
                                    <input type="text" class="form-control" id="isletme-durumu" name="isletme-durumu" placeholder="İşletmenizin Durumu (Normal, Zarar Gördü, Kullanılamaz Halde)">
                                    <label for="isletme-durumu">İşletmenizin Durumu</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary input-group">
                                    <input type="text" class="form-control" id="isletme-ihtiyac-durumu" name="isletme-ihtiyac-durumu" placeholder="İşletmenizin İhtiyaç Durumu (Eleman, Sermaye, Tedarikçi)">
                                    <label for="isletme-ihtiyac-durumu">İşletmenizin İhtiyaç Durumu</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary input-group">
                                    <textarea type="text" class="form-control" id="isletme-aciklama" name="isletme-aciklama" placeholder="Açıklama..."></textarea>
                                    <label for="isletme-aciklama">Açıklama</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-alt-primary" data-dismiss="modal" onclick="addKobi(this);">
                                <i class="fa fa-send mr-5"></i> İşletme Ekle
                            </button>
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">İptal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php else: ?>

    <!-- Compose Modal -->
    <div class="modal fade" id="modal-compose2" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header">
                        <h3 class="block-title">
                            <i class="fa fa-pencil mr-5"></i> İşletme Düzenle
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form class="my-10 js-validation-add-kobi" onsubmit="return false;">
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <input type="text" class="form-control" id="isletme-ismi" value="<?=$fetch[0]['name']?>" name="isletme-ismi" placeholder="İşletmenizin Adı">
                                        <label for="isletme-ismi">İşletme Adı</label>
                                        <input type="hidden" value="<?=$fetch[0]['id']?>" name="id">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <label for="isletme-sektor">İşletmenizin Sektörü</label>
                                        <select class="form-control" id="example-multiple-select" name="isletme-sektor" size="7" multiple>
                                            <?php
                                            $sectors = $db->query('SELECT * FROM sectors')->fetchAll();
                                            foreach($sectors as $sector):
                                                ?>
                                                <option <?=$sector['id'] === $fetch[0]['sector_id'] ? 'selected' : ''?> value="<?=$sector['id']?>"><?=$sector['name']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <input type="text" class="form-control" id="isletme-turu" value="<?=$fetch[0]['type']?>" name="isletme-turu" placeholder="İşletmenizin Türü (Bakkal, Fırın, Beyaz Eşya Satıcısı)">
                                        <label for="isletme-turu">İşletmenizin Türü</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <input type="text" class="form-control" id="isletme-durumu"  value="<?=$fetch[0]['status']?>" name="isletme-durumu" placeholder="İşletmenizin Durumu (Normal, Zarar Gördü, Kullanılamaz Halde)">
                                        <label for="isletme-durumu">İşletmenizin Durumu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <input type="text" class="form-control" id="isletme-ihtiyac-durumu"  value="<?=$fetch[0]['needs']?>" name="isletme-ihtiyac-durumu" placeholder="İşletmenizin İhtiyaç Durumu (Eleman, Sermaye, Tedarikçi)">
                                        <label for="isletme-ihtiyac-durumu">İşletmenizin İhtiyaç Durumu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <textarea type="text" class="form-control" id="isletme-aciklama" name="isletme-aciklama" placeholder="Açıklama..."><?=$fetch[0]['description']?></textarea>
                                        <label for="isletme-aciklama">Açıklama</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-alt-primary" data-dismiss="modal" onclick="updateKobi(this);">
                                    <i class="fa fa-send mr-5"></i> Kaydet
                                </button>
                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">İptal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

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

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<?php $cb->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/index.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>