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
                <div class="col-md-6">
                  <table>
                    <tr>
                      <th style="width: 120px;">JAM MASUK</th>
                      <td>:</td>
                      <td>
                        <div class="badge badge-light-success"><?= $get_jadwal['jam_masuk'] ?></div>
                      </td>
                    </tr>
                    <tr>
                      <th>JAM PULANG</th>
                      <td>:</td>
                      <td>
                        <div class="badge badge-light-danger"><?= $get_jadwal['jam_pulang'] ?></div>
                      </td>
                    </tr>
                    <tr>
                      <th>JAM SEKARANG</th>
                      <td>:</td>
                      <td>
                        <div class="badge badge-light-info" id="jam"></div>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-6">
                  <a href="<?= base_url('backend/modul/cetak_semua') ?>" class="btn btn-warning mb-2 float-right"><i class="feather icon-printer"></i> Print</a>
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
                      <th class="text-center">Tanggal</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Jam Masuk</th>
                      <th class="text-center">Jam Pulang</th>
                      <th class="text-center">Absen Masuk</th>
                      <th class="text-center">Absen Pulang</th>
                      <th class="text-center">Terlambat</th>
                      <th class="text-center">Pulang Cepat</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $no = 1;
                    foreach ($get_absen as $data) : ?>
                      <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center"><?= $data['tanggal'] ?></td>
                        <td class="text-center"><?= $data['nama'] ?></td>
                        <td class="text-center">
                          <div class="badge badge-light-success"><?= $data['jam_masuk'] ?></div>
                        </td>
                        <td class="text-center">
                          <div class="badge badge-light-danger"><?= $data['jam_pulang'] ?></div>
                        </td>
                        <td class="text-center">
                          <div class="badge badge-light-success"><?= $data['absen_masuk'] ?></div>
                        </td>
                        <td class="text-center">
                          <div class="badge badge-light-warning"><?= $data['absen_pulang'] ?></div>
                        </td>
                        <td class="text-center">
                          <div class="badge badge-light-danger"><?= $data['terlambat'] ?></div>
                        </td>
                        <td class="text-center">
                          <div class="badge badge-secondary"><?= $data['pulang_cepat'] ?></div>
                        </td>
                        <td class="text-center">
                          <a href="<?= base_url('backend/modul/hapus_absen/') . $data['id'] ?>" class="badge badge-danger hapus"><i class=" feather icon-trash" title="Hapus"></i> Hapus</a>
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

<script>
  window.setTimeout("waktu()", 1000);

  function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
  }
</script>