<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?= $judul; ?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item active"><a href="#!"><?= $judul; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5><?= $judul; ?></h5>
                    </div>
                    <div class="card-body">
                        <h5>Form Update <?= $judul; ?></h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $get_id_guru['id'] ?>">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="number" name="nip" class="form-control" placeholder="Input NIP" value="<?= $get_id_guru['nip'] ?>" required>
                                        <?= form_error('nip', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Input Nama" value="<?= $get_id_guru['nama'] ?>" required>
                                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Input Email" value="<?= $get_id_guru['email'] ?>" required>
                                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Input Password" required>
                                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                        <select class="custom-select" name="kelamin" id="exampleFormControlSelect1" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Perempuan" <?php if ($get_id_guru['kelamin'] == "Perempuan") : ?> selected <?php endif; ?>>Perempuan</option>
                                            <option value="Laki-Laki" <?php if ($get_id_guru['kelamin'] == "Laki-Laki") : ?> selected <?php endif; ?>>Laki-Laki</option>
                                        </select>
                                        <?= form_error('kelamin', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="t_lahir" class="form-control" placeholder="Input Tempat Lahir" value="<?= $get_id_guru['t_lahir'] ?>" required>
                                        <?= form_error('t_lahir', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tanggal Lahir" value="<?= $get_id_guru['tgl_lahir'] ?>" required>
                                        <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama" required>
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam" <?php if ($get_id_guru['agama'] == "Islam") : ?> selected <?php endif; ?>>Islam</option>
                                            <option value="Katolik" <?php if ($get_id_guru['agama'] == "Katolik") : ?> selected <?php endif; ?>>Katolik</option>
                                            <option value="Hindu" <?php if ($get_id_guru['agama'] == "Hindu") : ?> selected <?php endif; ?>>Hindu</option>
                                            <option value="Budha" <?php if ($get_id_guru['agama'] == "Budha") : ?> selected <?php endif; ?>>Budha</option>
                                            <option value="Kristen" <?php if ($get_id_guru['agama'] == "Kristen") : ?> selected <?php endif; ?>>Kristen</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <input type="text" name="pendidikan" class="form-control" placeholder="Input Pendidikan" value="<?= $get_id_guru['pendidikan'] ?>" required>
                                        <?= form_error('pendidikan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" placeholder="Input Jabatan" value="<?= $get_id_guru['jabatan'] ?>" required>
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Kepegawaian</label>
                                        <input type="text" name="status_kepegawaian" class="form-control" placeholder="Input Status Kepegawaian" value="<?= $get_id_guru['status_kepegawaian'] ?>" required>
                                        <?= form_error('status_kepegawaian', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Mapel</label>
                                        <input type="text" name="mapel" class="form-control" placeholder="Input mapel" value="<?= $get_id_guru['mapel'] ?>" required>
                                        <?= form_error('mapel', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Sertifikasi</label>
                                        <select class="form-control" name="sertifikasi" required>
                                            <option value="">Open this select menu</option>
                                            <option value="Sudah" <?php if ($get_id_guru['sertifikasi'] == "Sudah") : ?> selected <?php endif; ?>>Sudah</option>
                                            <option value="Belum" <?php if ($get_id_guru['sertifikasi'] == "Belum") : ?> selected <?php endif; ?>>Belum</option>
                                        </select>
                                        <?= form_error('sertifikasi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" required> <?= $get_id_guru['alamat'] ?> </textarea>
                                        <div class="invalid-feedback">Kolom Alamat tidak boleh kosong!</div>
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <label>Choose file...</label>
                                            <input type="file" class="form-control" name="image" required value="<?= $get_id_guru['image'] ?>">
                                        </div>
                                        <img src="<?= base_url('assets/images/guru/') . $get_id_guru['image'] ?>" alt="<?= $get_id_guru['image'] ?>" class="img-thumbnail mt-2" width="30%">
                                    </div>

                                    <button type="submit" class="btn btn-warning"><i class="feather icon-save"></i> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>