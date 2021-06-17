<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Alat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Alat</li>
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
                            <h3 class="card-title">Data Alat</h3>
                            <div class="text-right">
                                <a href="<?= base_url('admin/alat/new') ?>" class="btn btn-primary">Tambah Alat</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Alat</th>
                                        <th>Grup</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($alat as $index => $alats) {
                                    ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td><?= $alats->nama_alat; ?></td>
                                            <td><?= $alats->nama_grup; ?></td>
                                            <td><?= $alats->jumlah; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/alat/edit/') . $alats->id_alat ?>" class="btn btn-primary mx-3">Edit</a>
                                                <a href="<?= base_url('admin/alat/hapus/') . $alats->id_alat ?>" class="btn btn-danger">Hapus</a>
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