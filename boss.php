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

