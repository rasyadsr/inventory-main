<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content p-3">
            <div class="modal-header p-2 align-items-start">
                <div class="d-flex flex-column align-items-left" style="padding: 0px;">
                    <p>Daftar Aset</p>
                    <h6>Filter</h6>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="jenis" class="col-form-label">Harga Aset</label>
                        <select class="form-select" id="jenis">
                            <option selected style="color: grey;" disabled>Pilih rentang harga aset</option>
                            <option value="1">100000-200000</option>
                            <option value="2">200000-300000</option>
                            <option value="3">300000-400000</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="col-form-label">Status Aset</label>
                        <select class="form-select" id="jenis">
                            <option selected style="color: grey;" disabled>Pilih status</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-left">
                <button type="button" class="btn bg-white w-40 text-primary py-2 mt-3">Batal</button>
                <button type="button" class="btn bg-primary w-40 text-white py-2 mt-3">Simpan</button>
            </div>
        </div>
    </div>
</div>