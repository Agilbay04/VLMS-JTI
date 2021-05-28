<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Anggota </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Anggota </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Update Anggota
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/anggota/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="kode" value="<?= $anggota[0]->id_anggota ?>">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Anggota</label>
                                <input type="text" class="form-control" name="nama" value="<?= $anggota[0]->nama_anggota ?>" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bidang</label>
                                <input type="text" class="form-control" name="bidang" value="<?= $anggota[0]->bidang ?>" placeholder="Masukkan Bidang Keahlian">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kelompok</label>
                                <select name="kelompok" id="" class="form-control">
                                    <option value="<?= $anggota[0]->id_grup; ?>" selected><?= $anggota[0]->nama_grup; ?></option>
                                    <?php foreach ($kelompok as $kelompoks) {
                                        if ($anggota[0]->id_grup !== $kelompoks->id_grup) {
                                    ?>
                                            <option value="<?= $kelompoks->id_grup ?>"><?= $kelompoks->nama_grup; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input type="text" class="form-control" name="status" id="exampleInputEmail1" value="<?= $anggota[0]->status ?>" aria-describedby="emailHelp" placeholder="Masukkan Status Anggota">
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger mr-3">Cancel</button>
                                <button class="btn btn-primary">Save</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->