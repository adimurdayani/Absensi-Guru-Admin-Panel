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
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"><?= $judul; ?></a></li>
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
                        <h5><?= $judul; ?></h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="img-fluid card-img-top" src="<?= base_url('assets/images/guru/') . $get_guru['image'] ?>" alt="<?= $get_guru['image'] ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $get_guru['nama'] ?></h5>
                                            <ul>
                                                <li><i class="feather icon-mail"></i> <?= $get_guru['email'] ?></li>
                                                <li><i class="feather icon-user"></i> <?= $get_guru['kelamin'] ?></li>
                                                <li><i class="feather icon-calendar"></i> <?= $get_guru['t_lahir'] ?> - <?= $get_guru['tgl_lahir'] ?></li>
                                            </ul>
                                            <p> <?= $get_guru['alamat'] ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated <?= $get_guru['created_at'] ?></small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card text-white bg-secondary ">
                                    <div class="card-header">Detail Data Guru</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Biodata</h5>
                                        <ul>
                                            <li><i class="feather icon-edit"></i> <?= $get_guru['agama'] ?></li>
                                            <li><i class="feather icon-edit"></i> <?= $get_guru['pendidikan'] ?></li>
                                            <li><i class="feather icon-edit"></i> <?= $get_guru['jabatan'] ?></li>
                                            <li><i class="feather icon-edit"></i> <?= $get_guru['status_kepegawaian'] ?></li>
                                            <li><i class="feather icon-edit"></i> <?= $get_guru['mapel'] ?></li>
                                            <li><i class="feather icon-edit"></i> <?= $get_guru['sertifikasi'] ?></li>
                                        </ul>
                                    </div>
                                </div>
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