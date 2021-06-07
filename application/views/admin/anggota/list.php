<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Anggota</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
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
                            <h3 class="card-title">Data Anggota Penelitian</h3>
                            <div class="text-right">
                                <a href="<?= base_url('admin/anggota/new') ?>" class="btn btn-primary">Tambah Anggota</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gambar</th>
                                        <th>Nama Anggota</th>
                                        <th>No Identitas</th>
                                        <th>Bidang</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($anggota as $index => $anggotas) {
                                    ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td> <img src="<?= base_url('img/anggota/') . $anggotas->gambar ?>" alt="" srcset="" style="max-width: 250px;max-height: 250px;"></td>
                                            <td><?= $anggotas->nama_anggota; ?></td>
                                            <td><?= $anggotas->no_identitas; ?></td>
                                            <td><?= $anggotas->bidang ?></td>
                                            <td><?= $anggotas->status; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/anggota/edit/') . $anggotas->id_anggota ?>" class="btn btn-primary mx-3">Edit</a>
                                                <a href="" class="btn btn-danger">Hapus</a>
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