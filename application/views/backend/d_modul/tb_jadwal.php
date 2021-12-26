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
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">

          <div class="card-header">
            <h5>Tabel <?= $judul; ?></h5>
            <div class="card-header-right">
              <div class="btn-group card-option">
                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="feather icon-more-horizontal"></i>
                </button>
                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                  <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i>
                        maximize</span><span style="display:none"><i class="feather icon-minimize"></i>
                        Restore</span></a></li>
                  <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i>
                        collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                  </li>
                  <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="card-body table-border-style">
              <div class="row mb-2">
                <div class="col-md-9">
                  <a href="#" class="btn btn-primary mb-2" data-target="#modal-tambah" data-toggle="modal"><i class="feather icon-plus"></i> Tambah</a>
                </div>
              </div>
              <?= $this->session->flashdata('msg'); ?>
              <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						', '</div>') ?>
              <div class="table-responsive">
                <table id="table" class="table">
                  <thead>
                    <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Jam Masuk</th>
                      <th class="text-center">Jam Pulang</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $no = 1;
                    foreach ($get_jadwal as $data) : ?>
                      <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center">
                          <div class="badge  badge-light-success"><?= $data['jam_masuk'] ?></div>
                        </td>
                        <td class="text-center">
                          <div class="badge  badge-light-danger"><?= $data['jam_pulang'] ?></div>
                        </td>
                        <td class="text-center">
                          <a href="" class="badge badge-warning" data-target="#modal-edit<?= $data['id'] ?>" data-toggle="modal"><i class="feather icon-edit" title="Edit"></i> Edit</a>
                          <a href="<?= base_url('backend/modul/hapus_jadwal/') . $data['id'] ?>" class="badge badge-danger hapus"><i class=" feather icon-trash" title="Hapus"></i> Hapus</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
  </div>
</div>
<!-- [ Main Content ] end -->

<div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('backend/modul/tambah_jadwal') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLiveLabel">Tambah Data Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="form-input">
              <label for="jam_masuk">Jam Masuk</label>
              <input type="time" name="jam_masuk" placeholder="Input jam pulang" class="form-control" value="<?= set_value('jam_masuk') ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="form-input">
              <label for="jam_pulang">Jam Pulang</label>
              <input type="time" name="jam_pulang" placeholder="Input jam pulang" class="form-control" value="<?= set_value('jam_pulang') ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn  btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn  btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($get_jadwal as $edit) : ?>
  <div id="modal-edit<?= $edit['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="<?= base_url('backend/modul/edit_jadwal') ?>" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLiveLabel">Update Data Jadwal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id" value="<?= $edit['id'] ?>">

            <div class="form-group">
              <div class="form-input">
                <label for="jam_masuk">Jam Masuk</label>
                <input type="time" name="jam_masuk" placeholder="Input jam pulang" class="form-control" value="<?= $edit['jam_masuk'] ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="form-input">
                <label for="jam_pulang">Jam Pulang</label>
                <input type="time" name="jam_pulang" placeholder="Input jam pulang" class="form-control" value="<?= $edit['jam_pulang'] ?>">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn  btn-warning">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>