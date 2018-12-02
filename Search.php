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
if(isset($_POST['Catagory'])){
	$Catagory = $_POST['Catagory'];
}
$sql="SELECT * FROM kobis WHERE name LIKE :keyword";
if(strlen($Catagory) > 1){
	$sql .= " And sector_id LIKE '".$Catagory."'";
}
$q=$db->prepare($sql);
$q->bindValue(':keyword','%'.$keyword.'%');
$q->execute();
$Response = $q->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Page Content -->
<div class="content">
    <!-- Search -->
    <form class="push" action="Search.php" method="post">
        <div class="input-group input-group-lg">
            <input type="text" name="Keyword" class="form-control" placeholder="Search web app..">
            <input type="hidden" name="Catagory" class="form-control" value="" placeholder="Search web app..">
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
				<span class="text-primary font-w700"><?php echo count($Response); ?></span> projects found for <mark class="text-danger">creativity</mark>
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
								<a href="javascript:void(0)"><?php echo $Deger["name"]; ?></a>
							</h4>
							<p class="d-none d-sm-block text-muted">
								<?php echo $Deger["description"]; ?>
							</p>
						</td>
						<td class="d-none d-lg-table-cell text-center">
							<span class="badge badge-success">Completed</span>
						</td>
						<td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1795</td>
						<td class="font-size-xl text-center font-w600">$ 21,987</td>
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