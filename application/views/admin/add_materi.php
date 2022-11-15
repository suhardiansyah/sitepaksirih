            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card card-success">
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                    Tambah Materi</p>
                                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                    dibawah </p>
                                <hr>
                            </div>
                            <div id="detail" class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_materi') ?>">
                                    <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/add_materi') ?>">
                                            <input type="hidden" name="id">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputState">Instruktur</label>
                                                    <select required id="inputState" name="nama_guru" class="form-control">
                                                        <option value="">Pilih</option>
                                                        <?php
                                                        foreach ($t_guru as $n) { ?>
                                                            <option value="<?php echo $n['nama_guru']; ?>" aria-required="true"><?php echo $n['nama_guru']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputState2">Nama Mata Pelajaran</label>
                                                <select required id="inputState2" name="id_mapel" class="form-control">
                                                    <option value="">Pilih</option>
                                                    <?php
                                                    foreach ($t_mapel as $n) { ?>
                                                        <option value="<?php echo $n['id']; ?>" aria-required="true"><?php echo $n['n_mapel']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <small>Jika nama mapel sudah berganti artinya nama guru yang kamu
                                                    masukan di input area adalah valid! jika tidak muncul nama mapel
                                                    anda harus klik input area nama guru dan pilih guru yang tersedia
                                                    disana.</small>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" name="video" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Upload
                                                            Video
                                                            Materi Disini</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                                <textarea class="form-control" required name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>


                                            <!-- <div class="form-group">
                                                <label for="inputState">Kelas</label>
                                                <select required id="inputState" name="kelas" class="form-control">
                                                    <option selected>Pilih disini</option>
                                                    <option value="X">X IPA</option>
                                                    <option value="X">X IPS</option>
                                                    <option value="X">X AGAMA</option>
                                                    <option value="XI">XI IPA</option>
                                                    <option value="XI">XI IPS</option>
                                                    <option value="XI">XI AGAMA</option>
                                                    <option value="XII">XII IPA</option>
                                                    <option value="XII">XII IPS</option>

                                                </select>
                                            </div> -->
                                            <button type="submit" class="btn btn-block btn-success">Tambah
                                                materi ⭢</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
            </div>
            </div>
            <!-- End Main Content -->