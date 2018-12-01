<?php
$db = new PDO('mysql:host=localhost;dbname=hackhaton', "root", "Peacher01");
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}
function GetUserData(){
	if(is_null($_SESSION['UserId'])){
		if(basename($_SERVER['PHP_SELF']) != "login.php"){
			redirect("login.php");
		}
	}else{
		if(basename($_SERVER['PHP_SELF']) == "login.php"){
			redirect("index.php");
		}
	}
	$Datas = MySqlQuery("SELECT * FROM system_users WHERE id = ?", array($_SESSION['UserId']), "rows");
	
	if(count($Datas) == 0){
		if(basename($_SERVER['PHP_SELF']) != "login.php"){
			redirect("login.php");
		}
	}else{
		if(basename($_SERVER['PHP_SELF']) == "login.php"){
			redirect("index.php");
		}
	}
	return $Datas[0];
//echo GetUserData()['Username'];
}

function MySqlQuery($q, $params, $return = "", $TekSatir = "") {
  global $db;
  $stmt = $db->prepare($q);
  $stmt->execute($params);
  if ($return == "rows") {
    return $stmt->fetchAll();
  }elseif ($return == "count") {
    return $stmt->rowCount();
  }elseif ($return == "datatable") {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }elseif ($return == "OneValue") {
    $Value = $stmt->fetch();
    return $Value[$TekSatir];
  }
//echo MySqlQuery("SELECT * FROM system_config WHERE id = ?", array(1), "OneValue" , "SystemName");
}