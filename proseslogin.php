<?php
  include 'koneksi.php';
  session_start();

  // menangkap data yang diambil dari form
  // $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_STRING);
  // $password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);

  $username = $_POST['username'];
  $password = $_POST['password'];

  // menyeleksi data admin dengan username dan passsword yang sesuai
  $data  = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));

  // menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($data);

  if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:welcome.php");
  }else {
    header("location:login.php?pesan=gagal");
  }

 ?>
