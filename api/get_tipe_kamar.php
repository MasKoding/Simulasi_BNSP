<?php 

     require_once '../config/connect.php';
     $data = $_POST;
     $tipe = $data['tipe'];

     $result = $connect->query("SELECT * FROM kategori WHERE kategori='$tipe'");

     $row = mysqli_fetch_assoc($result);

     $harga =  $row['harga'];


     echo json_encode($harga);


?>