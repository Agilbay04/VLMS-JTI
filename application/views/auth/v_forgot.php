<div class="container">
    <div class="row px-3">
        <div class="card flex-row mx-auto px-0 col-lg-10 col-xl-9">
            <div class="img-left d-none d-md-flex"></div>

            <div class="card-body">
                <h2 class="title text-center mt-4">
                    Lupa <span>Password</span>
                </h2>
                <form action="../auth/recover.html" class="form-box px-3" method="POST">
                    <div class="form-input">
                        <span><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" id="email" placeholder="Masukkan Email Anda..." tabindex="10" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-block text-uppercase">Kirim</button>
                    </div>

                    <div class="text-right">
                        <a href="<?= base_url('auth/login'); ?>" class="forget-link">
                            Halaman login
                        </a>
                    </div>

                    <hr class="my-4">

                    <div class="text-center mb-2">
                        Ada kendala saat login?
                        <a href="#" class="register-link">
                            Hubungi kami
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>