<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artikel Baru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Artikel Baru</li>
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
                            Tambah Artikel
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/artikel/simpan') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" name="judul" aria-describedby="emailHelp" placeholder="Masukkan Judul Artikel">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <select name="author" id="" class="form-control">
                                    <?php foreach ($anggota as $anggotas) {
                                        if ($anggotas->status === 'Dosen') {
                                    ?>
                                            <option value="<?= $anggotas->id_anggota ?>"><?= $anggotas->nama_anggota; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Grup</label>
                                <select name="kelompok" id="" class="form-control">
                                    <?php foreach ($kelompok as $kelompoks) {
                                    ?>
                                        <option value="<?= $kelompoks->id ?>"><?= $kelompoks->nama_grup; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Isi</label>
                                <textarea name="isi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    <?php foreach ($kategori as $kategories) {
                                    ?>
                                        <option value="<?= $kategories->id ?>"><?= $kategories->nama_kategori; ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger mr-3">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
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