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
                        <h5>Form Tambah <?= $judul; ?></h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="<?= base_url('backend/modul/tambah_guru') ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="number" name="nip" class="form-control" placeholder="Input NIP" value="<?= set_value('nip') ?>" required>
                                        <?= form_error('nip', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Input Nama" value="<?= set_value('nama') ?>" required>
                                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Input Email" value="<?= set_value('email') ?>" required>
                                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Input Password" required>
                                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                        </select>
                                        <?= form_error('kelamin', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="t_lahir" class="form-control" placeholder="Input Tempat Lahir" value="<?= set_value('t_lahir') ?>" required>
                                        <?= form_error('t_lahir', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tanggal Lahir" value="<?= set_value('tgl_lahir') ?>" required>
                                        <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control" name="agama" required>
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Kristen">Kristen</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <input type="text" name="pendidikan" class="form-control" placeholder="Input Pendidikan" value="<?= set_value('pendidikan') ?>" required>
                                        <?= form_error('pendidikan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" class="form-control" placeholder="Input Jabatan" value="<?= set_value('jabatan') ?>" required>
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Kepegawaian</label>
                                        <input type="text" name="status_kepegawaian" class="form-control" placeholder="Input Status Kepegawaian" value="<?= set_value('status_kepegawaian') ?>" required>
                                        <?= form_error('status_kepegawaian', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Mapel</label>
                                        <input type="text" name="mapel" class="form-control" placeholder="Input mapel" value="<?= set_value('mapel') ?>" required>
                                        <?= form_error('mapel', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Sertifikasi</label>
                                        <select class="form-control" name="sertifikasi" required>
                                            <option value="">Open this select menu</option>
                                            <option value="Sudah">Sudah</option>
                                            <option value="Belum">Belum</option>
                                        </select>
                                        <?= form_error('sertifikasi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" required><?= set_value('mapel') ?></textarea>
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <label>Choose file...</label>
                                            <input type="file" name="image" required class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><i class="feather icon-save"></i> Simpan</button>
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