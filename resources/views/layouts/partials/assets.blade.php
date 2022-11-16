<div class="modal fade" id="tambahAssets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content p-3">
            <div class="modal-header p-2 align-items-start">
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                    <img src="{{ url('img/logo.png') }}" width="50px" alt="AL Ittihad" class="" />
                    <h6>Pondok Pesantren Al-Ittihad</h6>
                    <p class="caption">Karang Tengah Cianjur</p>
                    <h6 class="mt-3">MASUK UNTUK MELANJUTKAN</h6>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Alamat surel</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group mb-3">
                        <label>Kata Sandi</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-eye-slash" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn bg-primary rounded-pill w-100 text-white py-2 mt-3">MASUK SEKARANG</button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <p>Belum memiliki akun? <span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="loginModal">Daftar disini </span></p>
            </div>
        </div>
    </div>
</div>