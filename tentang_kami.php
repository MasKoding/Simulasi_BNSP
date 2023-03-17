<?php 
        require_once 'config/connect.php';
        $query = $connect->query("SELECT * FROM profile_hotel WHERE id='1'");
        $row = mysqli_fetch_assoc($query);
?>

<div class="container-fluid">
    <div class="img-tentang"></div>
</div>
<div class="container">
    <div class="row">

    <div class="col-md-6 mt-5">
        <h4 for="">Address</h4>
    </div>
    <div class="col-md-6 mt-5">
        <h4 for="">Phone & Email</h4>
    </div>
        <div class="col-md-5">
            
            <h5 class="title"><?=$row['nama_hotel']?></h5>
            <p class="alamat_hotel"><?=$row['alamat_hotel']?></p>

        </div>
        
        <div class="col-md-5 offset-md-2">
            <h5>Phone</h5>
           <p>Telp. <?=$row['no_telp']?></p>
            <h6>Email</h6>
            <p><?=$row['alamat_email']?></p>
        </div>
    </div>
</div>