<?php
    $connect = mysqli_connect("localhost", "root", "", "shop");
if ($connect->connect_error) {
    die("Failed to Connect MYSQL" . $connect->connect_error);
  }
?>