<div class="container">
    <?php
    $result = $connect->query("SELECT * FROM produk");
    ?>
    <div class="row">
        <?php
        if ($result->num_rows > 0) :
            foreach ($result as $r) :
        ?>
                <div class="col-lg-6 mt-4">
                    <div class="card">
                        <a href="#"><img src="image/<?= $r['image'] ?>" class="card-img-top" style="height:390px;"></a>

                        <div class="card-img-overlay">
                            <div class="card-bg-title">
                                <h5 class="card-title p-4">Tipe :<?= $r['tipe'] ?></h5>
                            </div>
                        </div>

                    </div>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>