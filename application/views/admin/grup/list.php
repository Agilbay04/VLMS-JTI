<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Grup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Grup</li>
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
                            <h3 class="card-title">Data Grup Penelitian</h3>
                            <div class="text-right">
                                <a href="<?= base_url('admin/grup/new') ?>" class="btn btn-primary">Tambah Grup</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Grup/Lab</th>
                                        <th>Nama Kampus</th>
                                        <th>Lokasi</th>
                                        <th>No Hp</th>
                                        <th>Fax</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kelompok as $index => $kelompoks) {
                                    ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td> <?= $kelompoks->nama_grup . '/' . $kelompoks->nama_lab ?></td>
                                            <td><?= $kelompoks->nama_kampus; ?></td>
                                            <td><?= $kelompoks->lokasi; ?></td>
                                            <td><?= $kelompoks->no_hp; ?></td>
                                            <td><?= $kelompoks->fax; ?></td>
                                            <td><?= $kelompoks->email; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/grup/edit/') . $kelompoks->id_grup ?>" class="btn btn-primary mx-3">Edit</a>
                                                <a href="<?= base_url('admin/grup/hapus/') . $kelompoks->id_grup ?>" class="btn btn-danger">Hapus</a>
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