@extends('layouts.main')

@section('content')
@include('layouts.partials.assets')
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
        <button type="button" class="btn btn-sm" style="font-weight: 600; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); background-color: #0C5045; color: white;" data-bs-toggle="modal" data-bs-target="#tambahAssets">
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
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <input type="checkbox">
          </th>
          <td>Kursi</td>
          <td>Fixed Assets</td>
          <td>150.000</td>
          <td>
            <button type="button" class="btn btn-sm btn-outline-success" disabled>Aktif</button>
          </td>
          <td>
            <button type="button" class="btn btn-sm" style="background-color: #0C5045;" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection