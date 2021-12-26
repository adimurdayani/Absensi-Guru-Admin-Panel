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
                  <a href="<?= base_url('backend/modul/tambah_guru') ?>" class="btn btn-primary mb-2"><i class="feather icon-plus"></i> Tambah</a>
                  <a href="<?= base_url('backend/modul/cetak_semua') ?>" class="btn btn-warning mb-2 "><i class="feather icon-printer"></i> Print</a>
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
                      <th>Foto</th>
                      <th>NIP</th>
                      <th>Nama Guru</th>
                      <th>Kelamin</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Tanggal Buat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $no = 1;
                    foreach ($get_guru as $data) : ?>
                      <tr>
                        <td class="text-center" style="width: 100px;"><img src="<?= base_url('assets/images/guru/') . $data['image'] ?>" width="100px" alt="<?= $data['image'] ?>"></td>
                        <td style="vertical-align: middle;"><?= $data['nip'] ?></td>
                        <td style="vertical-align: middle;"><?= $data['nama'] ?></td>
                        <td style="vertical-align: middle;"><?= $data['kelamin'] ?></td>
                        <td style="vertical-align: middle;"><?= $data['email'] ?></td>
                        <td style="vertical-align: middle;"><?= $data['alamat'] ?></td>
                        <td style="vertical-align: middle;"><?= $data['created_at'] ?></td>
                        <td style="vertical-align: middle;">
                          <a href="<?= base_url('backend/modul/edit_guru/') . $data['id'] ?>" class="badge badge-warning"><i class=" feather icon-edit" title="Edit"></i> Edit</a>
                          <a href="<?= base_url('backend/modul/hapus_guru/') . $data['id'] ?>" class="badge badge-danger hapus"><i class=" feather icon-trash" title="Hapus"></i> Hapus</a>
                          <a href="<?= base_url('backend/modul/detail_guru/') . $data['id'] ?>" class="badge badge-info"><i class=" feather icon-eye" title="Detail"></i> Detail</a>
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