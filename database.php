<?php

$conexion = new mysqli("localhost", "admin", "<PN{lFTI9taJ#MW*", "plants");

if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
} else {
  header("index.php");
}