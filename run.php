<?php
require './vendor/autoload.php';

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$book = $reader->load('in.xlsx');

$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($book);
$writer->save('out.xlsx');
