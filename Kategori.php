<?php 
include ('./templates/header.php')
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Category</title>
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
  <h5>Category</h5>
  <table class="table table-bordered table-striped">
    <thead class="table-primary">
      <tr>
        <th>No</th>
        <th>Category Code</th>
        <th>Category Name</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>C001</td>
        <td>Computers</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>C002</td>
        <td>Household</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>C003</td>
        <td>Music</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>C004</td>
        <td>Stationery</td>
        <td><button class="btn btn-sm btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>C005</td>
        <td>Foods</td>
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
