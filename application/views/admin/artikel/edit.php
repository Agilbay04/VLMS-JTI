<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Artikel</li>
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
                            Update Artikel
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/artikel/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="kode" value="<?= $artikel[0]->id ?>">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" name="gambar">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" name="judul" value="<?= $artikel[0]->judul ?>" aria-describedby="emailHelp" placeholder="Masukkan Judul Artikel">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <select name="author" id="" class="form-control">
                                    <option value="<?= $artikel[0]->author ?>" selected><?= $artikel[0]->nama_anggota; ?></option>
                                    <?php foreach ($anggota as $anggotas) {
                                        if ($anggotas->status === 'Dosen' && $artikel[0]->author !== $anggotas->id_anggota) {
                                    ?>
                                            <option value="<?= $anggotas->id_anggota ?>"><?= $anggotas->nama_anggota; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Grup</label>
                                <select name="kelompok" id="" class="form-control">
                                    <option value="<?= $artikel[0]->id_grup ?>" selected><?= $artikel[0]->nama_grup; ?></option>
                                    <?php foreach ($kelompok as $kelompoks) {
                                        if ($kelompoks->id_grup !== $artikel[0]->id_grup) {
                                    ?>
                                            <option value="<?= $kelompoks->id_grup ?>"><?= $kelompoks->nama_grup; ?></option>
                                    <?php }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Isi</label>
                                <textarea name="isi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $artikel[0]->isi; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    <option value="<?= $artikel[0]->id_kategori ?>" selected><?= $artikel[0]->nama_kategori; ?></option>
                                    <?php foreach ($kategori as $kategories) {
                                        if ($kategories->id_kategori !== $artikel[0]->id_kategori) {
                                    ?>
                                            <option value="<?= $kategories->id_kategori ?>"><?= $kategories->nama_kategori; ?></option>
                                    <?php
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" id="" class="form-control">
                                    <?php if ($artikel[0]->status_artikel == 0) { ?>
                                        <option value="0">Arsip</option>
                                        <option value="1">Publish</option>
                                    <?php } else if ($artikel[0]->status_artikel == 1) { ?>
                                        <option value="1">Publish</option>
                                        <option value="0">Arsip</option>
                                    <?php } ?>
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