@extends('layout.main')

@section('konten')

   <!-- Banner -->
   <div class="banner">
    <div class="container txt-banner">
      <h1 class="text-center shadow text-uppercase">whistlist</h1>
    </div>
  </div>

<div class="container-md content-whistlist">
    <table class="table">
      <thead class="table-whistlist">
        <tr>
          <th scope="col"></th>
          <th scope="col">Produk</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th style="vertical-align: middle; width: 5%" scope="row">
            <a style="color: black" class="nav-link" href="#">X</a>
          </th>
          <td style="width: 25%; vertical-align: middle">
            <img src="/asssets/img/produk.jpg" width="100px" alt="" />
          </td>
          <td class="fw-bold text-uppercase" style="vertical-align: middle">Arabika</td>
          <td style="vertical-align: middle">Rp. 20.000</td>
          <td style="vertical-align: middle">
            <button type="submit" class="btn btn-beli text-uppercase" style="width: 100px">Beli</button>
          </td>
        </tr>
        <tr>
          <th style="vertical-align: middle; width: 5%" scope="row">
            <a style="color: black" class="nav-link" href="#">X</a>
          </th>
          <td style="width: 25%; vertical-align: middle">
            <img src="/asssets/img/produk.jpg" width="100px" alt="" />
          </td>
          <td class="fw-bold text-uppercase" style="vertical-align: middle">Robusta wonosalam</td></td>
          <td style="vertical-align: middle">Rp. 20.000</td>
          <td style="vertical-align: middle">
            <button type="submit" class="btn btn-beli text-uppercase" style="width: 100px">Beli</button>
          </td>
        </tr>
        <tr>
          <th style="vertical-align: middle; width: 5%" scope="row">
            <a style="color: black" class="nav-link" href="#">X</a>
          </th>
          <td style="width: 25%; vertical-align: middle">
            <img src="/asssets/img/produk.jpg" width="100px" alt="" />
          </td>
          <td class="fw-bold text-uppercase" style="vertical-align: middle">jember</td>
          <td style="vertical-align: middle">Rp. 20.000</td>
          <td style="vertical-align: middle">
            <button type="submit" class="btn btn-beli text-uppercase" style="width: 100px">Beli</button>
          </td>
        </tr>
        <tr>
          <th style="vertical-align: middle; width: 5%" scope="row">
            <a style="color: black" class="nav-link" href="#">X</a>
          </th>
          <td style="width: 25%; vertical-align: middle">
            <img src="/asssets/img/produk.jpg" width="100px" alt="" />
          </td>
          <td class="fw-bold text-uppercase" style="vertical-align: middle">arabika wonosalam</td>
          <td style="vertical-align: middle">Rp. 20.000</td>
          <td style="vertical-align: middle">
            <button type="submit" class="btn btn-beli text-uppercase" style="width: 100px">Beli</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection