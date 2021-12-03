
<?php
  session_start();
  include "koneksi.php";
  $username=mysqli_real_escape_string($konek, $_POST['username']);
  $password=mysqli_real_escape_string($konek, $_POST['password']);
  $passcrypt=sha1($password);
  $query=mysqli_query($konek, "SELECT * FROM tb_user where username='$username' and password='$passcrypt'");
  $row=mysqli_fetch_assoc($query);
  $cek=mysqli_num_rows($query);

    $_SESSION['username']=$username;
    $_SESSION['nama']=$row['nama_user'];
    // echo $_SESSION['nama'];
    header("location:../index.php?a=sukses_login");

