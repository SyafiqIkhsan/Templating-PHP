<?php 
include ('./templates/header.php')
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Stok Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .container-box {
      background: #fff;
      padding: 30px;
      margin-top: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    h5 { margin-bottom: 20px; font-weight: 600; }
    .table th, .table td { vertical-align: middle; }
  </style>
</head>
<body>

<div class="container container-box">
  <h5>Stock</h5>
  <table class="table table-bordered table-striped">
    <thead class="table-warning">
      <tr>
        <th>No</th>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Stock In</th>
        <th>Stock Out</th>
        <th>Stock Available</th>
        <th>Unit</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ITM001</td>
        <td>RTX 3060ti</td>
        <td>50</td>
        <td>20</td>
        <td>30</td>
        <td>Unit</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>ITM002</td>
        <td>Couch</td>
        <td>30</td>
        <td>10</td>
        <td>20</td>
        <td>Unit</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

<?php 
include ('./templates/footer.php')
?>