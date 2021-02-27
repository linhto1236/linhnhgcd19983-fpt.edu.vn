<?php
   $connect = pg_connect("host=ec2-35-171-57-132.compute-1.amazonaws.com
  dbname=d7sp2j6pm2qi2a
  port=5432
  user=uhccoenqxgimrq
  password=f212022ea21f05418f65b67a5e34e09742a957252985b3fbca8d0e90cd829840
   sslmode=require");

   if ($connect === false) {
      die("ERROR: Could not connect to the database server!");
    } else {
      $product_id = $_POST['id'];
      $product_name = $_POST['name'];
      $product_amount = $_POST['amount'];
      $product_price = $_POST['price'];

    }
    $query = "INSERT INTO Product (product_id, product_name, product_amount, product_price) 
    VALUES('$product_id', '$product_name', '$product_amount', '$product_price');";
    $result = pg_query($connect, $query);
    if ($result) {
      echo "<script>alert('Record added succesfully!, Refresh');</script>";
      header('refresh: 3; url=staff.html');
    } else {
      echo ("ERROR + $query") . pg_errormessage($query);
    }
    pg_close($connect);
?>
