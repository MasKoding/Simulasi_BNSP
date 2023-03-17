<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-8">
            <h4>Daftar Harga Hotel</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Gambar Hotel</th>
                        <th scope="col">Harga Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                         $result = $connect->query("SELECT * FROM produk"); 
                         if($result->num_rows>0):
                            foreach ($result as $r) : 
                    ?>
                    <tr>
                        <th scope="row"><?=$r['id']?></th>
                        <td><?=$r['tipe']?></td>
                        <td><img src="image/<?=$r['image']?>"
                        style="width:150px;height:150px;"></td>
                        <td><?=$r['harga']?></td>
                    </tr>
                   
                    <?php 
                        endforeach;
                     endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>