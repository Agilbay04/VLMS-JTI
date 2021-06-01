<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Projek Baru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Projek Baru</li>
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
                            Buat Projek
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/projek/simpan') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Projek</label>
                                    <input type="text" class="form-control" name="projek" placeholder="Masukkan Projek">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Cluster</label>
                                    <input type="text" class="form-control" name="cluster" placeholder="Masukkan cluster">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">--Pilih Status Projek--</option>
                                        <option value="0">Open</option>
                                        <option value="1">Close</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleInputEmail1">Dosen</label>
                                    <select name="dosen" id="" class="form-control">
                                        <option value="">--Pilih Dosen--</option>
                                        <?php foreach ($anggota as $dosen) {
                                            if ($dosen->status === 'Dosen') {
                                        ?>
                                                <option value="<?= $dosen->id_anggota ?>"><?= $dosen->nama_anggota; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
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