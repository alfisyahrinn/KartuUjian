<?php
// session_start();
require "proses/koneksi.php";
if (!empty($_SESSION["username"])) {
  header('location:home');
}

if (isset($_POST["register"])) {
  $nim = htmlspecialchars($_POST["nim"]);
  $username = htmlspecialchars($_POST["username"]);
  $level = htmlspecialchars($_POST["level"]);


  $query = mysqli_query($koneksi, "SELECT * FROM user
  WHERE nim ='$nim' OR username ='$username';");

  if (mysqli_num_rows($query) > 0) {
    echo "
    <script>
    alert('Username Atau Nim Telah Di gunakan')
    document.location='login'
    </script>
    ";
    exit();
  }
  //insert ke mahasiswa
  mysqli_query($koneksi, "INSERT INTO mahasiswa (nim) VALUES ('$nim')");
  //insert ke persyaratan
  mysqli_query($koneksi, "INSERT INTO persyaratan (nim) VALUES ('$nim')");
  // insert ke user'
  $result = mysqli_query($koneksi, "INSERT INTO user (nim,username,level) VALUES
                                  ('$nim','$username',$level)");
  if ($result) {
    echo "
    <script>
    alert('Successs Daftar akun')
    document.location='login'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Gagal Mendaftarkan Akun')
    document.location='login'
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- Logo Tittle -->
  <link rel="icon" href="Source/img/icon/logo.png" type="image/x-icon">
</head>

<body>
  <style>
    a {
      list-style: none;
      text-decoration: none;
      list-style-type: none;
    }

    .ini {
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }

    ul,
    li {
      list-style-type: none;
      margin-top: 10px;
    }

    /* label {
      font-weight: 700;
      font-size: 30px;
    } */
  </style>
  <div class="ini">
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post" class="needs-validation" novalidate>
              <div class="row">
                <div class="form-floating  col-md-12">
                  <div class="alert alert-warning py-1" role="alert">
                    Password Default <b>123</b>
                  </div>
                </div>
                <div class="form-floating mb-3 col-md-6">
                  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <input type="hidden" name="level" class="form-control" id="floatingInput" placeholder="name@example.com" value="3">
                  <label class="ms-2" for="floatingInput">username</label>
                  <div class="invalid-feedback">
                    Username belum Di masukkan
                  </div>
                </div>
                <div class="form-floating mb-3 col-md-6">
                  <input type="text" name="nim" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <label class="ms-2" for="floatingInput">Nim</label>
                  <div class="invalid-feedback">
                    Nim belum Di masukkan
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="register" class="btn btn-primary">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah User -->
    </div>
    <form action="proses/prosesLogin.php" method="post">
      <ul>
        <li>
          <label class="form-label">
            <input class="form-control" type="text" name="username" placeholder="username" required>
          </label>
        </li>
        <li>
          <label class="form-label" re>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
          </label>
        </li>
        <li>
          <!-- <input type="submit" value="login"> -->
          <button class="btn-login" type="submit" name="login">Login</button>
          <button style="border: 1px solid #c060a1; color: #c060a1;" class="mt-2 mb-3 btn-register bg-light" data-bs-toggle="modal" data-bs-target="#tambahData">Register</button>
          <!-- Modal Tambah User -->
        </li>
      </ul>
    </form>
  </div>


  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>