<?php
require 'config.php';
if(!is_null($_POST["signup-ad"])){$PName = $_POST["signup-ad"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Name Type")); die(); }
if(!is_null($_POST["signup-soyad"])){$PSurname = $_POST["signup-soyad"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Surname Type")); die(); }
if(!is_null($_POST["signup-tc"])){$PTC = $_POST["signup-tc"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Tc Type")); die(); }
if(!is_null($_POST["example-datepicker4"])){$PBirthday = $_POST["example-datepicker4"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Date Type")); die(); }
if(!is_null($_POST["signup-telefon"])){$PPhone = $_POST["signup-telefon"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Phone Type")); die(); }
if(!is_null($_POST["signup-email"])){$PEmail = $_POST["signup-email"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong email Type")); die(); }
if(!is_null($_POST["signup-password"])){$PPassword = $_POST["signup-password"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Password Type")); die(); }

if($db->query("Select COUNT(*) from Users where Tc='$PTC' and email='$PEmail'")->fetchColumn() > 0){
	echo json_encode(array("status"=>False,"Message"=>"userExit"));
	die();
}
$stmt1 = $db->prepare("insert into Users (Name,Surname,Tc,Birthday,Phone,email,Password) values ('$PName','$PSurname','$PTC','$PBirthday','$PPhone','$PEmail','$PPassword')");
$stmt1->execute();
echo json_encode([ "status" => true ]);