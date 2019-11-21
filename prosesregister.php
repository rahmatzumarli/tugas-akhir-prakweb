<?php
  include 'koneksi.php';
  session_start();

  // menangkap data yang diambil dari form
  // $name = $_POST['name'];
  // $username = $_POST['username'];
  // $password = md5($_POST['password']);

  $name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
  $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_STRING);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);



  // menyeleksi data admin dengan username dan passsword yang sesuai
  $data  = mysqli_query($conn, "INSERT INTO `user` VALUES (NULL,'$name','$username','$password')") or die(mysqli_error($conn));


  if ($data) {
    $_SESSION['name'] = $name;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:welcome.php");
  }else {
    header("location:index.php?register=gagal");
  }

?>