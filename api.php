<?php
$objek = [
'Nama'=> 'Mochammad Ihza Rizky Karim',
'Tautan'=> 'ihzarizkyk.space',
'data'=> [
'Kunci1'=> 'Nilai1',
'Kunci2'=> 'Nilai2',
'Kunci3'=> 'Nilai3'
]
];

header("content-type: application/json");
echo json_encode($objek);

?>
