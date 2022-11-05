<?php
if ($txtnim  = isset ($_POST["txtnim"])? $_POST["txtnim"]: ""
and $txtname  = isset ($_POST["txtname"])? $_POST["txtname"]: ""
and $txtstudi = isset ($_POST["txtstudi"])? $_POST["txtstudi"]: ""){
    echo "<p> hai, perkenalkan Nama saya adalah : ".$txtname." dengan NIM : ".$txtnim." saya adalah mahasiswa dari program studi : ".$txtstudi; 

}
else {    
    echo("isi semua data,   <a href= input.html>klik di sini<\a> untuk kembali");
}
?>