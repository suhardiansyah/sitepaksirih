            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div id="detail" class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Pendaftaran Mata Pelajaran</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>

                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/add_mapel') ?>">
                                <div id="" class="form-group">
                                    <label for="n_mapel">Nama Mata Pelajaran</label>
                                    <input id="n_mapel" type="text" class="form-control" name="n_mapel">
                                    <?= form_error('n_mapel', '<small class="text-danger">', '</small>'); ?>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState">Instruktur</label>
                                    <select required id="inputState" name="id_guru" class="form-control">
                                        <option value="">Pilih</option>
                                        <?php
                                        foreach ($t_guru as $n) { ?>
                                            <option value="<?php echo $n['id']; ?>" aria-required="true"><?php echo $n['nama_guru']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">

                                            <input required type="file" name="cover" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Upload
                                                Cover
                                                Materi Disini</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">
                                        Daftar ⭢
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
            </div>
            </div>
            <!-- End Main Content -->