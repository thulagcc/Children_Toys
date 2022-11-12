<?php
include_once("connect.php");
if(isset($_GET['id'])){
    $delQuery = "Delete from product where productid ='".$_GET['id']."'";
    if(pg_query($conn, $delQuery)){
        echo "<script> window.location = 'manager.php?status=delete';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . pg_error($conn);
    }
}
?>