<?php

if($_POST) {
    $name = $_POST['isletme-ismi'];
    $sector_id = $_POST['isletme-sektor'];
    $type = $_POST['isletme-turu'];
    $status = $_POST['isletme-durumu'];
    $needs = $_POST['isletme-ihtiyac-durumu'];
    $description = $_POST['isletme-aciklama'];

    require './config.php';

    $query = $db->prepare('
        INSERT INTO kobis ( "name", "sector_id", "type", "status", "needs", "description", created_at, updated_at )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ');

    $result = $query->execute([
        $name,
        $sector_id,
        $type,
        $status,
        $needs,
        $description,
        time(),
        time(),
    ]);

    var_dump($result);

    if($result) {
        echo json_encode([ 'status' => true, "message" => 'kobiIsCreated' ]);
    } else {
        echo json_encode([ 'status' => false, "message" => 'technicalError' ]);
    }

}