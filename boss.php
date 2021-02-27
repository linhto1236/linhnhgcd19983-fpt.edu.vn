<?php
$con = pg_connect("host=ec2-35-171-57-132.compute-1.amazonaws.com
dbname=d3k3fb2lgurcfl
port=5432
user=dzexwmceyqyxoz
password=2688fa41698d917203881a7a3afcbf3104436727c4927b77182edd12fc810cee
sslmode=require");

$query = "select product_ID, product_name, product_price from product ;";
$result = pg_query($con, $query);
$resultCheck = pg_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATN Boss - View Shop Data</title>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="boss.css">
</head>

<body id="bd-view-page">
  <div class="form-title">
    <h1 style="font-weight: 700;">ATN BOSS - VIEW SHOP DATA </h1>
  </div>
  <div class="container">
    <div class="col" style="padding-top:50px;">
      <table id="view-data" class="table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($resultCheck > 0) {
            echo "<script>alert('Connect successfully!');</script>";
            while ($row = pg_fetch_assoc($result)) {
          ?>
              <tr>
                <td><?php echo $row['product_ID']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_price,']; ?></td>
              </tr>
          <?php
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
      </table>
      <a href="./login.html">
        <h3> LOG OUT </h3>
      </a>
    </div>
</body>

</html>