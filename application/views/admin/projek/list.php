<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projek</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projek</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Projek Penelitian</h3>
                            <div class="text-right">
                                <a href="<?= base_url('admin/projek/new') ?>" class="btn btn-primary">Tambah Projek</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Projek</th>
                                        <th>Cluster</th>
                                        <th>Status</th>
                                        <th>Dosen</th>
                                        <th>Mahasiswa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($projek as $index => $projeks) {
                                    ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td> <?= $projeks->deskripsi; ?></td>
                                            <td><?= $projeks->cluster; ?></td>
                                            <td><?php if ($projeks->status_projek == '0') { ?>
                                                    <span class="badge badge-success">Open</span>
                                                <?php } elseif ($projeks->status_projek == '1') { ?>
                                                    <span class="badge badge-secondary">Close</span>
                                                <?php } ?>
                                            </td>
                                            <td><?= $projeks->nama_anggota; ?></td>
                                            <td><?= $projeks->id_mahasiswa; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/projek/edit/') . $projeks->id_projek ?>" class="btn btn-primary mx-3">Edit</a>
                                                <a href="<?= base_url('admin/projek/hapus/') . $projeks->id_projek ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->