<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Anggota Baru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota Baru</li>
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
                            Tambah Anggota
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/anggota/simpan') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="exampleFormControlFile1">Gambar</label>
                                    <input type="file" class="form-control-file" name="gambar">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Nama Anggota</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Bidang</label>
                                    <input type="text" class="form-control" name="bidang" placeholder="Masukkan Bidang Keahlian">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">No Identitas</label>
                                    <input type="text" class="form-control" name="no_identitas" placeholder="Masukkan No Identitas">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Kelompok</label>
                                    <select name="kelompok" id="" class="form-control">
                                        <?php foreach ($kelompok as $kelompoks) { ?>
                                            <option value="<?= $kelompoks->id_grup ?>"><?= $kelompoks->nama_grup; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" class="form-control" name="status" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Status Anggota">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Masukkan Password Anggota">
                                </div>
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