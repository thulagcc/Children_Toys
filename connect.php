<?php

// $server = "localhost";
// $username ="root";
// $password = "";
// $db = "asm2_200312";

// $conn = mysqli_connect($server,$username,$password,$db);
// if($conn->connect_error){
//     die("Failed ".$conn->connect_error);
// }

$conn = pg_connect("postgres://kpxccmyoqzkujz:cdc818481992e58d6b88fa62b490c7c92257f6fde993c7f7670362fb1b51fa21@ec2-3-93-206-109.compute-1.amazonaws.com:5432/d2uuuugm90ocgr");

// $conn = pg_connect("host=localhost port=5432 dbname=asm2_200312 user=postgres password=Pass?*n@1");

if (!$conn) {
    die("Connection failed");
}
?>