<?php
include "decode.php";

$image = "LSB-1bit_sample.png"; // Ubah sesuai dengan path dan nama gambar yang akan diambil pesannya

$lets_decode = new decode();
$lets_decode->printMsg($image);
?>
