<?php
require 'config.php';
if(!is_null($_POST["signup-email"])){$PEmail = $_POST["signup-email"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong email Type")); die(); }
if(!is_null($_POST["signup-password"])){$PPassword = $_POST["signup-password"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Password Type")); die(); }

if($db->query("Select COUNT(*) from Users where Password='$PPassword' and email='$PEmail'")->fetchColumn() == 0){
	echo json_encode(array("status"=>False,"Message"=>"userDoesntExit"));
	die();
}
echo json_encode([ "status" => true ]);
