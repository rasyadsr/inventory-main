<div class="modal fade" id="registerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
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
          <div class="mb-3 row">
            <div class="col">
              <label for="recipient-name" class="col-form-label">Nama Depan</label>
              <input type="text" class="form-control" id="firstName">
            </div>
            <div class="col">
              <label for="recipient-name" class="col-form-label">Nama Belakang</label>
              <input type="text" class="form-control" id="secondName">
            </div>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Alamat surel</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Jenis kelamin</label>
            <input type="text" class="form-control" id="gender">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Unggah CV/Resume anda</label>
            <input type="file" class="form-control" id="resume">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Ringkasa tentang anda</label>
            <textarea class="form-control" id="description"></textarea>
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
          <div class="form-group mb-3">
            <label>Konfirmasi kata sandi</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
              <span class="input-group-text" id="basic-addon1">
                <i class="far fa-eye-slash" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </form>
        <button type="button" class="btn bg-primary rounded-pill w-100 text-white py-2 mt-3">LANJUTKAN REGISTRASI</button>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <p>Sudah memiliki akun? <span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="#registerModal">Masuk disini </span></p>  
      </div>
    </div>
  </div>
</div>