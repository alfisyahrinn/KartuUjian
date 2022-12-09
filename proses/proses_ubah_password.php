<?php
session_start();
include "koneksi.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$passwordlama = (isset($_POST['passwordlama'])) ? md5(htmlentities($_POST['passwordlama'])) : "";
$passwordbaru = (isset($_POST['passwordbaru'])) ? md5(htmlentities($_POST['passwordbaru'])) : "";
$repasswordbaru = (isset($_POST['repasswordbaru'])) ? md5(htmlentities($_POST['repasswordbaru'])) : "";

if (!empty($_POST['ubah_password_validate'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$_SESSION[username]' && password = '$passwordlama'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        if ($passwordbaru == $repasswordbaru) {
            $query = mysqli_query($koneksi, "UPDATE  user SET
            password='$passwordbaru'
               WHERE username = '$_SESSION[username]'");
            if ($query) {
                $message = '<script>alert("password berhasil diubah");
                             window.history.back()</script>
                             </script>';
            } else {
                $message = '<script>alert("password gagal diubah");
                             window.history.back()</script>
                             </script>';
            }
        } else {
            $message = '<script>alert("Password baru tidak sama");
                             window.history.back()</script>
                             </script>';
        }
    } else {
        $message = '<script>alert("Password lama tidak sesuai");
                             window.history.back()</script>
                             </script>';
    }
} else {
    header('location:../home');
}
echo $message
?>
