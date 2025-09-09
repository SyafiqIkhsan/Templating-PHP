<?php 
include ('./templates/header.php')
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Transaksi Pembelian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-section {
      border-top: 3px solid #17a2b8;
      padding-top: 20px;
      margin-top: 20px;
    }

    .total-box {
      font-size: 30px;
      color: red;
      font-weight: bold;
      text-align: right;
      padding: 10px;
      border: none;
      border-radius: 4px;
    }

    .btn-tambah {
      background-color: #00c0ef;
      color: white;
      width: 100%;
    }

    .table thead {
      background-color: #00a65a;
      color: white;
    }

    .btn-simpan {
      background-color: #dd4b39;
      color: white;
      font-weight: bold;
      width: 100%;
    }
  </style>
</head>
<body class="bg-light">

<div class="container bg-white mt-4 p-4 shadow rounded" style="max-width: 95%;">

  <!-- Judul -->
  <h5 class="mb-4">Purchase data</h5>

  <!-- Header (No Nota dan Tgl) -->
  <div class="row mb-3 border-bottom pb-3">
    <div class="col-md-3">
      <label>No. Note</label>
      <input type="text" class="form-control" value="" readonly>
    </div>
    <div class="col-md-3">
      <label>Date</label>
      <input type="date" class="form-control" value="2025-01-12">
    </div>
    <div class="col-md-6 d-flex align-items-end justify-content-end">
      <div class="total-box w-100">
        Rp 0,-
      </div>
    </div>
  </div>

  <!-- Form Input Produk -->
  <div class="row align-items-end">
    <div class="col-md-3">
      <label>Code</label>
      <select class="form-select">
        <option></option>
        <option></option>
      </select>
    </div>
    <div class="col-md-3">
      <label>Nama Barang</label>
      <input type="text" class="form-control" readonly>
    </div>
    <div class="col-md-2">
      <label>Harga Satuan</label>
      <input type="text" class="form-control" readonly>
    </div>
    <div class="col-md-2">
      <label>Jumlah Beli</label>
      <input type="number" class="form-control">
    </div>
    <div class="col-md-2">
      <label>Harga Akhir</label>
      <input type="text" class="form-control" readonly>
    </div>
  </div>

  <!-- Tombol Tambah -->
  <div class="mt-3">
    <button class="btn btn-tambah">🛒 Tambah</button>
  </div>

  <!-- Tabel Daftar Barang -->
  <div class="form-section">
    <h6>Daftar Barang</h6>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Harga Satuan</th>
          <th>Jumlah</th>
          <th>Harga Akhir</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data dinamis akan muncul di sini -->
      </tbody>
    </table>
  </div>

  <!-- Supplier dan Keterangan -->
  <div class="row mb-4">
    <div class="col-md-6">
      <label>Supplier</label>
      <select class="form-select">
        <option></option>
      </select>
    </div>
    <div class="col-md-6">
      <label>Keterangan</label>
      <input type="text" class="form-control">
    </div>
  </div>

  <!-- Tombol Simpan -->
  <div class="d-grid">
    <button class="btn btn-simpan">💾 Simpan</button>
  </div>
</div>

</body>
</html>


<?php 
include ('./templates/footer.php')
?>

