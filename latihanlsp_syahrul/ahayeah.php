<?php 
  include 'koneksi.php';

  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  mysqli_query($koneksi,"INSERT INTO user VALUE ('', '$username', '$password')");
  
  header("location:login.php");
  ?>