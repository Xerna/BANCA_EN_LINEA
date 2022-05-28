<?php
$conn = new mysqli('localhost','root','','banca_en_linea');
if($conn->connect_errno){
    die("HUBO UN PROBLEMA".$conn->connect_error);
}
?>