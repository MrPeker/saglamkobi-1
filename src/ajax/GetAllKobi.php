<?php
require 'config.php';

$Response = MySqlQuery("Select * From kobis",array(),"datatable");
v();