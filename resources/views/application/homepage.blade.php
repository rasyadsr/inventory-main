@extends('layouts.main')

@section('content')
<!-- @include('layouts.partials.assets') -->
@include('layouts.partials.filter')
<div class="content">
  <div class="container">
    <h4>
      Daftar Inventoris
    </h4>
    <div class="row">
      <div class="col-2">
        <form class="form-inline">
          <div class="input-group input-group-sm mb-3">
            <input type="text" class="form-control" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" aria-label="Small" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
          </div>
        </form>
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-sm btn-light" style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal" data-bs-target="#filterModal">
          <i class="fa-sharp fa-solid fa-filter"></i>
          Filter
        </button>
      </div>
      <div class="col-1 ps-1 me-5">
        <button type="button" class="btn btn-sm btn-light" style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal" data-bs-target="">
          <i class="fa-sharp fa-solid fa-trash-can"></i>
        </button>
      </div>
      <div class="col-7 ms-5 pe-1" style="text-align: right;">
        <button type="button" class="btn btn-sm" style="font-weight: 600; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); background-color: #0C5045; color: white;" onclick="create()">
          <i class="fa-solid fa-plus" style="color: white;"></i>
          Tambah Aset
        </button>
      </div>
    </div>
    <table class="table table-sm table-striped table-light">
      <thead>
        <tr>
          <th scope="col">
            <input type="checkbox">
          </th>
          <th scope="col">Nama Aset</th>
          <th scope="col">Jenis Aset</th>
          <th scope="col">Harga Satuan</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($assets as $asset)
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>{{ $asset->nama }}</td>
          <td>{{ $asset->jenis }}</td>
          <td>{{ $asset->harga }}</td>
          <td>
            @if($asset->status == '1')
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
            @else
            <button type="button" class="btn btn-sm btn-outline-danger" disabled>Tidak Aktif</button>
            @endif
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" onClick="edit(this)" data-id="{{ $asset-> id}}" data-nama="{{ $asset->nama }}" data-jenis="{{ $asset->jenis }}" data-harga="{{ $asset->harga }}" data-status="{{ $asset->status }}">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="tambahAssets" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class=" modal-content p-3">
        <div class="modal-header p-2 align-items-start">
          <div class="d-flex flex-column align-items-left" style="padding: 0px;">
            <p>Daftar Aset</p>
            <h6 class="modal-title" id="modal-title"></h6>
          </div>
        </div>
        <form action="{{ route('asset.store') }}" method="POST" id="form-aset">
          <div class="modal-body">

            @csrf
            <input type="hidden" name="id" id="input-id-asset">
            <div class="form-group mb-3">
              <label for="nama-asset">Nama Aset</label>
              <input type="text" class="form-control" id="input-nama-asset" placeholder="Masukan Nama Aset" name="nama">
            </div>
            <div class="form-group mb-3">
              <label for="jenis-asset">Jenis Aset</label>
              <select class="form-select" id="input-jenis-asset" name="jenis">
                <option selected style="color: grey;">Pilih jenis aset</option>
                <option value="Fixed Aset">Fixed Aset</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="harga-asset">Harga Satuan</label>
              <input type="text" class="form-control" id="input-harga-asset" placeholder="Masukkan harga" name="harga">
            </div>
            <div class="form-group mb-3">
              <label for="status-asset" class="col-form-label">Status Aset</label>
              <select class="form-select" id="input-status-asset" name="status">
                <option selected style="color: grey;" disabled>Pilih status</option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-left">
            <button type="button" class="btn bg-white w-40 text-primary py-2 mt-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn bg-primary w-40 text-white py-2 mt-3">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  const modalForm = $('#tambahAssets');

  function create() {
    $('#modal-title').text('Tambah Aset');
    $('#input-id-asset').val("");
    $('#input-nama-asset').val("");
    $('#input-jenis-asset').val("");
    $('#input-harga-asset').val("");
    $("#input-status-asset").val("");
    modalForm.modal('show');
  }

  function closeModal() {
    $('#input-id-asset').val();
    $('#input-nama-asset').val();
    $('#input-jenis-asset').val();
    $('#input-harga-asset').val();
    $("#input-status-asset").val();
    modalForm.modal('hide');
  }

  function edit(e) {
    $('#modal-title').text('Edit Aset');
    let id = $(e).data('id');
    let nama = $(e).data('nama');
    let harga = $(e).data('harga');
    let jenis = $(e).data('jenis');
    let status = $(e).data('status');
    $('#input-id-asset').val(id);
    $('#input-nama-asset').val(nama);
    $('#input-jenis-asset').val(jenis);
    $('#input-harga-asset').val(harga);
    $("#input-status-asset").val(status).change();
    modalForm.modal('show');
  }
</script>
@endsection