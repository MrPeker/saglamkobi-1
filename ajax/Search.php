<?php
require 'config.php';

$keyword = $_GET['Keyword'];
$Catagory = $_GET['Catagory'];

$sql="SELECT * FROM kobis WHERE name LIKE :keyword And sector_id LIKE '".$Catagory."'";
$q=$db->prepare($sql);
$q->bindValue(':keyword','%'.$keyword.'%');
$q->execute();
$Response = $q->fetchAll(PDO::FETCH_ASSOC);
print(json_encode($Response));