<?php

class SectorHelper {

    public static function getSectors() {
        require __DIR__ . '/../ajax/config.php';
        return $db->query('SELECT * FROM sectors')->fetchAll();
    }
}