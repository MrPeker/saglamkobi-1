<?php
require 'config.php';
if(!is_null($_POST["signup-ad"])){$PName = $_POST["signup-ad"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Name Type")); die(); }
if(!is_null($_POST["signup-soyad"])){$PSurname = $_POST["signup-soyad"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Surname Type")); die(); }
if(!is_null($_POST["signup-telefon"])){$PPhone = $_POST["signup-telefon"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Phone Type")); die(); }
if(!is_null($_POST["signup-email"])){$PEmail = $_POST["signup-email"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong email Type")); die(); }
if(!is_null($_POST["signup-password"])){$PPassword = $_POST["signup-password"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Password Type")); die(); }

$stmt1 = $db->prepare("Update Users Set Name='$PName',Surname='$PSurname',Phone='$PPhone',email='',Password='$PPassword' where id='$UserID'");
$stmt1->execute();
echo json_encode([ "status" => true ]);
