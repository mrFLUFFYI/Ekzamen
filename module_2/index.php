<?php 

require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style type="text/css">
  th, td{
    padding: 10px;
  }
  th{
    background: #606060;
  }
  td{
    background: #b5b5b5;
  }
  label{
    font-weight: bold;
    text-decoration: none;
    font-size: 25px;
    margin-left: 190px;
}
</style>
<body>
  <label>Пользователи</label>
      <table>
        <tr>
          <th>ID</th>
          <th>Familia</th>
          <th>Ima</th>
          <th>Otchestvo</th>
          <th>Email</th>
          <th>Password</th>
        </tr>

    <?php
      $products = mysqli_query($connect, query: "SELECT * FROM `klient`");
      $products = mysqli_fetch_all($products);
      foreach($products as $product){
    ?>
        <tr>
          <td><?= $product[0] ?></td>
          <td><?= $product[1] ?></td>
          <td><?= $product[2] ?></td>
          <td><?= $product[3] ?></td>
          <td><?= $product[4] ?></td>
          <td><?= $product[5] ?></td>
        </tr>

      <?php
        }
      ?>

        
      </table>


</body>
</html>