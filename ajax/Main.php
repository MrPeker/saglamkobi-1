<?php
/* Database Connect */
$db = new PDO('mysql:host=localhost;dbname=hackhaton', "root", "Peacher01");

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
}

if(!$_SESSION['login']) {
	if(strpos($_SERVER['REQUEST_URI'], "ajax") === False){
		header('Location: /login.php');
	}	
}

