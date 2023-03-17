<?php 
        require_once 'config/connect.php';

        if (isset($_POST['submit'])) {

           $nama_pemesan = $_POST['nama_pemesan'];
           $jk = $_POST['jk'];
           $nik = $_POST['nik'];
           $tipe_kamar = $_POST['tipe_kamar'];
           $tgl = explode('/',$_POST['tgl_pesan']);
           $tgl_pesan =   $tgl[2].'-'.$tgl[1].'-'.$tgl[0];
           $harga = str_replace('.','',$_POST['harga']);
           $durasi_menginap = $_POST['durasi_menginap'];
           $breakfast = $_POST['breakfast'];
           $total_bayar = str_replace('.','',$_POST['total_bayar']);

           if($breakfast !="true"){
              $breakfast = false;
           }else{
            $breakfast = true;
           }
         
           //query insert 
           $query = $connect->query("INSERT INTO pemesanan
            (nama_pemesan,jk,nik,tipe_kamar,harga,tgl_pesan,durasi_menginap,breakfast,total_bayar)
             VALUES ('$nama_pemesan','$jk','$nik','$tipe_kamar','$harga',
             '$tgl_pesan','$durasi_menginap','$breakfast','$total_bayar')");
            if($query){
                echo "<script>
                    alert('Berhasil Submit');
                    window.location.href='index.php?page=home'
                </script>";
            }else{
                echo "<script>
                    alert('Gagal Submit');
                    </script>";
            }

        }

?>