<?php 
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    $result = mysqli_fetch_assoc($query);
    
    if($result != NULL){
        header("location:index.php");
        die;
    }else{
        header("location:login.php");
        die;
    }


?>