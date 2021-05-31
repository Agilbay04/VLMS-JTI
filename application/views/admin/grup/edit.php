<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Grup </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Grup </li>
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
                            Update Grup
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/grup/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <input type="hidden" name="kode" value="<?= $grup[0]->id_grup ?>">
                                    <label for="exampleInputEmail1">Nama Grup</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $grup[0]->nama_grup ?>" placeholder="Masukkan Nama Grup">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Nama Lab</label>
                                    <input type="text" class="form-control" name="lab" value="<?= $grup[0]->nama_lab ?>" placeholder="Masukkan Nama Lab">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Nama Kampus</label>
                                    <input type="text" class="form-control" name="kampus" value="<?= $grup[0]->nama_kampus ?>" placeholder="Masukkan Nama Kampus">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" value="<?= $grup[0]->lokasi ?>" placeholder="Masukkan Lokasi">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">No Hp</label>
                                    <input type="text" class="form-control" name="no_hp" value="<?= $grup[0]->no_hp ?>" placeholder="Masukkan Nomor HP">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Fax</label>
                                    <input type="text" class="form-control" name="fax" id="exampleInputEmail1" value="<?= $grup[0]->fax ?>" placeholder="Masukkan Fax">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?= $grup[0]->email ?>" placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-danger mr-3">Cancel</button>
                                <button type="submit" class="btn btn-primary">Update</button>
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