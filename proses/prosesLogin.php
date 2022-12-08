
  <?php
  session_start();
  require 'koneksi.php';

  if (isset($_POST["login"])) {
    //ambil dari form
    $username = htmlentities($_POST["username"]);
    $password = md5(htmlentities($_POST["password"]));

    //query
    $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' && password =  '$password';");
    $result = mysqli_fetch_assoc($hasil);
    if ($result) {
      $_SESSION["username"] = $username;
      $_SESSION["level"] = $result["level"];
      echo "
    <script>
    document.location='../home'
    </script>
    ";
    } else {
      echo "
    <script>
    alert('useraname atau password salah')
    document.location='../login.php'
    </script>
    ";
    }
    exit();

    if ($username == "" && $password == "") {
      echo "emal ps kosong";
    } else if ($username == $usernameDB && $password == $passwordDB) {
      $_SESSION["username2b"] = $username;
      header("Location: index.php?url=index");
    } else {
      // header("Location: 1formlogin.php");
      echo "
    <script>
    alert('Username salah');
    document.location='1formlogin.php';
    </script>
    ";
    }
  }
  ?>