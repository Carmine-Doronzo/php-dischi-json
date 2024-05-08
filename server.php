<?php

$data_string = file_get_contents('./js/dischi.json');

$discs = json_decode($data_string, true);

header('Content-type: application/json');

 $response = [
  'results' => $discs,
];


echo json_encode($response);

?>