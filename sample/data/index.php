<?php
header('Content-Type: application/json; charset=utf-8');
$data = [];
for ($i = 1; $i <= 100; $i++) {
  $data[] = [
    "name" => "Name " . str_pad($i, 3, "0", STR_PAD_LEFT),
    "money" => round(mt_rand(10000, 10000000) / 100, 2) 
  ];
}
echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
