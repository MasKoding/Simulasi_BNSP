<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="card-title-form text-center">Form Pemesanan</h4>

                    </div>
                    <!--  ambil dari bootstrap forms layout horizontal -->
                    <form action="action_submit.php" method="post" class="bg-light p-4">
                        <!-- form nama  -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Pemesan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" required="true">
                            </div>
                        </div>
                        <!-- jenis kelamin -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki">
                                    <label class="form-check-label">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div>

                        </div>
                        <!-- form nik -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor Identitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik" id="nik" required="true" minlength="16">
                                <br>
                                <br>
                                <span class="text-danger" id="nikError"></span>
                            </div>
                        </div>
                        <!-- form no.HP -->
                        <!-- form tempat wisata -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="tipe_kamar" id="tipe" required="true">
                                    <option value="" selected>Pilih</option>
                                    <?php
                                    $result = $connect->query("SELECT * FROM kategori");
                                    foreach ($result as $r) :
                                    ?>
                                        <option value="<?= $r['kategori'] ?>"><?= strtoupper($r['kategori']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="" 
                                class="form-control" name="harga" id="harga" required="true" readonly>
                            </div>
                        </div>
                        <!-- form tanggal kunjungan -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="tgl_pesan" id="datepicker" required="true">
                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Durasi Menginap</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder='' class="form-control" name="durasi_menginap" id="durasi" required="true">
                                <br>
                                <span class="text-danger" id="durasiError"></span>
                            </div>
                            <div class="col-sm-1">
                                Hari
                            </div>

                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Termasuk Breakfast</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  value="true" name="breakfast" id="breakfast">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- form total bayar -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Total Bayar</label>
                            <div class="col-sm-10">

                                <input type="text" id="total_bayar" name="total_bayar" placeholder="" class="form-control" readonly>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-offset-2"></div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-dark" id="hitung_total">
                                    Hitung Total Bayar</button>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="submit" class="btn btn-dark" id="submit">Simpan</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-dark" id="cancel">Cancel</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>