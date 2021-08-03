<?php
include"koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

//echo $user,$pass;//

$sql=mysqli_query($koneksi, "select * from siswa where username = '$user' and password = '$pass' ");

$cek=mysqli_num_rows($sql);

if ($cek >0){
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['password']=$pass;
	echo "<center>Selamat <b>$user</b>Anda Berhasil Login";
	echo "Selamat Datang <a href=logout.php>Lanjutkan</a></center>";
}else{
	echo "<center>Username Atau password Anda Salah<br>";
	echo "Silahkan <a href=index.php> Kembali</center>";
}


?>