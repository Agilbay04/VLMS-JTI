<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Alat</h1>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Alat
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/alat/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="hidden" name="kode" value="<?= $alat[0]->id_alat; ?>">
                                <input type="text" class="form-control" name="nama" value="<?= $alat[0]->nama_alat; ?>" placeholder="Masukkan Nama Alat">
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" value="<?= $alat[0]->jumlah; ?>" placeholder="Masukkan Jumlah">
                            </div>
                            <div class="form-group">
                                <label>Kelompok</label>
                                <select name="kelompok" id="" class="form-control">
                                    <option value="">--Pilih Grup--</option>
                                    <option value="<?= $alat[0]->id_grup; ?>" selected><?= $alat[0]->nama_grup; ?></option>
                                    <?php foreach ($kelompok as $kelompoks) {
                                        if ($alat[0]->id_grup !== $kelompoks->id_grup) {
                                    ?>
                                            <option value="<?= $kelompoks->id_grup ?>"><?= $kelompoks->nama_grup; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-danger mr-3">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
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