<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Produk</li>
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
                            Update Produk
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/produk/simpan') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="kode" value="<?= $produk[0]->id_produk ?>">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Produk</label>
                                <input type="text" class="form-control" name="nama" value="<?= $produk[0]->nama_produk ?>" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="10" rows="4" class="form-control" placeholder="Masukkan Deskripsi Produk"><?= $produk[0]->deskripsi ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kelompok</label>
                                <select name="kelompok" id="" class="form-control">
                                    <option value="<?= $produk[0]->id_grup; ?>" selected><?= $produk[0]->nama_grup; ?></option>
                                    <?php foreach ($kelompok as $kelompoks) {
                                        if ($produk[0]->id_grup !== $kelompoks->id_grup) { ?>
                                            <option value="<?= $kelompoks->id ?>"><?= $kelompoks->nama_grup; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger mr-3">Cancel</button>
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