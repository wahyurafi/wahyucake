<?php
include "koneksi.php";

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$sql = "SELECT * FROM tb_login WHERE username = '".$username."' AND password = '".$password."'";
$result = mysqli_query($db, $sql);

if (!$result) {
    die("Error dalam query: " . mysqli_error($db));
}

if (mysqli_num_rows ($result) > 0) {
    echo '<script language ="javascript">
    alert("Anda berhasil Login!."); document.location="halaman.php";</script>';
} else{
    echo '<script language = "javascript">
    alert ("Username dan Password Salah! Silahkan Login Kembali."); document.location="login.php";</script>';
 }

 if (!$result) {
    die("Query Error: ". mysqli_error($db));
} else {
    echo "Query sukses, hasil: ". mysqli_num_rows($result);
}
?>
