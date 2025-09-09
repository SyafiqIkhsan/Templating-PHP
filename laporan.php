<?php 
include ('./templates/header.php')
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

  <div class="container-fluid">

<br>

    <!-- Kartu Statistik -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="card text-white bg-info">
          <div class="card-body">
            <h3>37</h3>
            <p>Total Produk</p>
          </div>
          <div class="card-footer text-white">
            More info →
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-success">
          <div class="card-body">
            <h3>3</h3>
            <p>Roles</p>
          </div>
          <div class="card-footer text-white">
            More info →
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-warning">
          <div class="card-body">
            <h3>3</h3>
            <p>Total User</p>
          </div>
          <div class="card-footer text-white">
            More info →
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <div class="card-footer text-white">
            More info →
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel Produk dan Users -->
    <div class="row">
      <!-- Tabel Produk -->
      <div class="col-md-7">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <strong>Produk</strong>
          </div>
          <div class="card-body p-0">
            <table class="table table-bordered m-0">
              <thead class="table-light">
                <tr>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>RTX 3060ti</td>
                  <td>Computers</td>
                  <td>Rp5.500.000</td>
                  <td>Rp6.000.000</td>
                  <td>30</td>
                </tr>
                <tr>
                  <td>Couch</td>
                  <td>Household</td>
                  <td>1.150.000</td>
                  <td>1.200.000</td>
                  <td>20</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Tabel Users -->
      <div class="col-md-5">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <strong>Users</strong>
          </div>
          <div class="card-body p-0">
            <table class="table table-bordered m-0">
              <thead class="table-light">
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>anon1</td>
                  <td>anon1@gmail .com</td>
                  <td>admin</td>
                  <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                  <td>anon2</td>
                  <td>anon2@gmail.com</td>
                  <td>admin</td>
                  <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                  <td>anon</td>
                  <td>anon3@gmail.com</td>
                  <td>admin</td>
                  <td><span class="badge bg-secondary">Active</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>

</body>
</html>

<?php
include ('./templates/footer.php')
?>