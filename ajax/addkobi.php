<?php
if($_POST) {
    $name = $_POST['isletme-ismi'];
    $sector_id = $_POST['isletme-sektor'];
    $type = $_POST['isletme-turu'];
    $status = $_POST['isletme-durumu'];
    $needs = $_POST['isletme-ihtiyac-durumu'];
    $description = $_POST['isletme-aciklama'];
    $address = $_POST['isletme-adres'];

    require 'config.php';

	MySqlQuery("INSERT INTO kobis (name,sector_id,type,status,needs,description,created_at,updated_at,user_id,address) values (?, ?, ?, ?, ?, ?, ?, ?,?,?)",array($name,$sector_id,$type,$status, $needs,$description,date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),$_SESSION['id']),$address);
	echo json_encode(array('status' => true, "message" => 'kobiIsCreated'));
}