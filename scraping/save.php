<?php

$json = file_get_contents('db.json');
$data = json_decode($json);
$data[] = $_POST['data'];
file_put_contents('db.json', json_encode($data));

?>