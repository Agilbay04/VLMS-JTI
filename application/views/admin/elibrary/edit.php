<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Resource </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit E-Library </li>
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
                            Update Resource
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form action="<?= base_url('admin/elibrary/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <input type="hidden" name="kode" value="<?= $elibrary[0]->id_library ?>">
                                    <label for="exampleInputEmail1">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="<?= $elibrary[0]->judul ?>" placeholder="Masukkan Judul">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Link</label>
                                    <input type="text" class="form-control" name="link" value="<?= $elibrary[0]->link ?>" placeholder="Masukkan Link">
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