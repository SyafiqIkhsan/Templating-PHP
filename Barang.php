<?php 
include ('./templates/header.php')
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Items</title>
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
  <h5>Items</h5>
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <th>No</th>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Category</th>
        <th>Buy Price</th>
        <th>Sell Price</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ITM001</td>
        <td>RTX 3060ti</td>
        <td>Computers</td>
        <td>Rp5.500.000</td>
        <td>Rp6.000.000</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>ITM002</td>
        <td>Couch</td>
        <td>Household</td>
        <td>Rp1.150.000</td>
        <td>Rp1.200.000</td>
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