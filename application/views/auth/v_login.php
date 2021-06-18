<div class="container">
    <div class="row px-3">
        <div class="card flex-row mx-auto px-0 col-lg-10 col-xl-9">
            <div class="img-left d-none d-md-flex"></div>

            <div class="card-body">
                <h2 class="title text-center mt-4">
                    Login VLMS <span>GARIS V</span>
                </h2>
                <form action="<?= base_url('landingpage/home'); ?>" class="form-box px-3" method="POST">
                    <div class="form-input">
                        <span><i class="fas fa-id-card"></i></span>
                        <input type="text" name="nim" id="nim" placeholder="NIM Anda..." tabindex="10" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password Anda..." tabindex="10" required>
                    </div>

                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="" id="cb1">
                            <label for="cb1" class="custom-control-label">
                                Ingat saya
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-block text-uppercase">Login</button>
                    </div>

                    <div class="text-right">
                        <a href="<?= base_url('auth/forgot'); ?>" class="forget-link">
                            Lupa password?
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
