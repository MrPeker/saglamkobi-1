<?php
if ($_POST) {
    $name = $_POST['isletme-ismi'];
    $sector_id = $_POST['isletme-sektor'];
    $type = $_POST['isletme-turu'];
    $status = $_POST['isletme-durumu'];
    $needs = $_POST['isletme-ihtiyac-durumu'];
    $description = $_POST['isletme-aciklama'];
    $id = $_POST['id'];

    require 'config.php';

    MySqlQuery("Update kobis set name='$name',sector='$sector_id',type='$type',status='$status',needs='$needs',description='$description',updated_at='" . date("Y-m-d H:i:s") . "', address='" . $_POST['isletme-adres'] . "' where id='$id' and user_id='" . $_SESSION['id'] . "'", array());
    echo json_encode(array('status' => true, "message" => 'kobiIsUpdated'));
}