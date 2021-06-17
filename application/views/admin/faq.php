<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">FAQ</li>
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
                            <h3 class="card-title">Data FAQ</h3>
                            <div class="text-right">
                                <button type="button" data-toggle="modal" data-target="#create" class="btn btn-primary">Tambah FAQ</button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($faq as $index => $faqs) {
                                    ?>
                                        <tr>
                                            <td><?= $index + 1; ?></td>
                                            <td><?= $faqs->pertanyaan; ?></td>
                                            <td><?= $faqs->jawaban; ?></td>
                                            <td>
                                                <button id="edit" data-id="<?= $faqs->id_faq ?>" class="btn btn-primary mx-3">Edit</button>
                                                <a href="<?= base_url('admin/faq/hapus/') . $faqs->id_faq ?>" class="btn btn-danger">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/faq/simpan') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pertanyaan</label>
                        <input type="text" class="form-control" name="pertanyaan" aria-describedby="emailHelp" placeholder="Masukkan Pertanyaan...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jawaban</label>
                        <input type="text" class="form-control" name="jawaban" placeholder="Masukkan Jawaban...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/faq/update') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="kode" name="kode">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pertanyaan</label>
                        <input type="text" class="form-control" name="pertanyaan" id="pertanyaan" aria-describedby="emailHelp" placeholder="Masukkan Template">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jawaban</label>
                        <input type="text" class="form-control" name="jawaban" id="jawaban">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('table tbody ').on('click', '#edit', function() {
            $('#update').modal('show');
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: "<?= base_url('admin/FAQ') ?>/getfaq",
                dataType: "JSON",
                data: {
                    kode: id
                },
                success: function(data) {
                    console.log(data);
                    $('#kode').val(data[0]['id_faq']);
                    $('#pertanyaan').val(data[0]['pertanyaan']);
                    $('#jawaban').val(data[0]['jawaban']);
                }
            });
        })
    })
</script>