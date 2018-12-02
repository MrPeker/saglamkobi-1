<?php require 'inc/_global/config.php'; ?>
<?php include("ajax/config.php"); ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php $cb->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>
<?php $cb->get_css('js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css'); ?>
<?php $cb->get_css('js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css'); ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<?php
if(isset($_POST['Keyword'])){
	$keyword = $_POST['Keyword'];
}
$sql="SELECT * FROM kobis WHERE name LIKE :keyword OR sector LIKE :sector OR type LIKE :tip OR needs LIKE :needs";
$q=$db->prepare($sql);
$q->bindValue(':keyword','%'.$keyword.'%');
$q->bindValue(':sector','%'.$keyword.'%');
$q->bindValue(':tip','%'.$keyword.'%');
$q->bindValue(':needs','%'.$keyword.'%');
$q->execute();
$Response = $q->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Page Content -->
<div class="content">
    <!-- Search -->
    <form class="push" action="Search.php" method="post">
        <div class="input-group input-group-lg">
            <input type="text" name="Keyword" class="form-control" placeholder="Kobi arayın..">
            <input type="hidden" name="Category" class="form-control" value="" placeholder="Kobi arayın..">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- END Search -->

    <!-- Results -->
    <div class="block">
		<!-- Classic -->
		<div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
				<span class="text-primary font-w700"><mark class="text-danger"><?=$keyword?></mark> <span style="color: #575757;">için</span> <?php echo count($Response); ?></span> KOBI bulundu
			</div>
			<table class="table table-striped table-borderless table-hover table-vcenter">
				<thead class="thead-light">
					<tr>
						<th style="width: 50%;">Kobi</th>
						<th class="text-center" style="width: 15%;">Sektor</th>
						<th class="d-none d-lg-table-cell text-center" style="width: 15%;">Ihtiyac</th>
						<th class="d-none d-lg-table-cell text-center" style="width: 20%;">Hasar</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($Response as $Deger){ ?>
					<tr>
						<td>
							<h4 class="h5 mt-15 mb-5">
								<a href="/articledetails.php?id=<?=$Deger['id']?>"><?php echo $Deger["name"] . $Deger['user_id']; ?> (<?php $u = MySqlQuery('SELECT * FROM users WHERE id=?', [$Deger['user_id']], 'rows', 0); echo substr($u[0]['name'], 0, 1) . '. ' . $u[0]['surname']; ?>)</a>
							</h4>
							<p class="d-none d-sm-block text-muted">
								<?php echo $Deger["description"]; ?>
							</p>
						</td>
						<td class="d-none d-lg-table-cell text-center">
                            <?=$Deger['type']?>, <?=$Deger['sector']?>
						</td>
						<td class="d-none d-lg-table-cell font-size-xl text-center font-w600">
                            <?=$Deger['needs']?>
                        </td>
						<td class="font-size-xl text-center font-w600"><?=$cb->get_tag($Deger['status'])?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
            <!-- END Classic -->
    </div>
    <!-- END Results -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>