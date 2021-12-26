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
                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#!"><?= $judul; ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-lg-7 col-md-12">
          <!-- support-section start -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card support-bar overflow-hidden">
                <div class="card-body pb-0">
                  <h2 class="m-0">TOTAL</h2>
                  <span class="text-c-blue">Menu Manajemen</span>
                  <p class="mb-3 mt-3">Total menu manajemen.</p>
                </div>
                <div class="card-footer bg-primary text-white">
                  <div class="row text-center">
                    <div class="col">
                      <h4 class="m-0 text-white"><?= $jml_menu ?></h4>
                      <span>Menu</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card support-bar overflow-hidden">
                <div class="card-body pb-0">
                  <h2 class="m-0">TOTAL</h2>
                  <span class="text-c-green">Sub Menu Manajemen</span>
                  <p class="mb-3 mt-3">Total sub menu manajemen.</p>
                </div>
                <div class="card-footer bg-success text-white">
                  <div class="row text-center">
                    <div class="col">
                      <h4 class="m-0 text-white"><?= $jml_sub_menu ?></h4>
                      <span>Sub Menu</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- support-section end -->
        </div>
        <div class="col-lg-5 col-md-12">
          <!-- page statustic card start -->
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="text-c-yellow"><?= $jml_guru ?></h4>
                      <h6 class="text-muted m-b-0">Data Absensi</h6>
                    </div>
                    <div class="col-4 text-right">
                      <i class="feather icon-bar-chart-2 f-28"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-c-yellow">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <p class="text-white m-b-0">Data</p>
                    </div>
                    <div class="col-3 text-right">
                      <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="text-c-green"><?= $jml_absen ?></h4>
                      <h6 class="text-muted m-b-0">Data Guru</h6>
                    </div>
                    <div class="col-4 text-right">
                      <i class="feather icon-file-text f-28"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-c-green">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <p class="text-white m-b-0">Data</p>
                    </div>
                    <div class="col-3 text-right">
                      <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="text-c-red"><?= $jml_user ?></h4>
                      <h6 class="text-muted m-b-0">User Management</h6>
                    </div>
                    <div class="col-4 text-right">
                      <i class="feather icon-users f-28"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-c-red">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <p class="text-white m-b-0">Data User</p>
                    </div>
                    <div class="col-3 text-right">
                      <i class="feather icon-trending-down text-white f-16"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="text-c-blue"><?= $jml_grup ?></h4>
                      <h6 class="text-muted m-b-0">Grup User</h6>
                    </div>
                    <div class="col-4 text-right">
                      <i class="feather icon-settings f-28"></i>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-c-blue">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <p class="text-white m-b-0">Data Grup</p>
                    </div>
                    <div class="col-3 text-right">
                      <i class="feather icon-trending-down text-white f-16"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- page statustic card end -->
        </div>

        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
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

        <div class="col-lg-4">
          <div class="card-deck">
            <div class="card">
              <img class="img-fluid card-img-top" src="<?= base_url('assets/images/logo.png') ?>" alt="">
              <div class="card-body">
                <h5 class="card-title">Absensi Guru</h5>
              </div>
              <div class="card-footer">
                <small class="text-muted">Absensi Guru SMPN 1 TANAHLILI <?= date('Y') ?></small>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->