<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Ujian</title>


  <link href="Source/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="Source/css/index.css">
  <link rel="stylesheet" href="Source/css/style.css">
  <link rel="stylesheet" href="styleku.css">
</head>
<style>
  .text {
    color: #828ea5;
  }

  .text-active {
    color: #c060a1;
    font-weight: 700;
  }

  .text-active:hover {
    color: #c060a1;
  }

  .text:hover {
    color: #c060a1;
  }
</style>

<body style="height: 100vh;">
  <div class="d-flex ju">
    <div class="row">
      <div class="col-lg-2" style="background-color: #F8F9FD;">
        <nav class="navbar navbar-expand-lg rounded-3">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <img src="Source/img/icon/hamburger.png" alt="" width="38">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 230px;">
              <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                  <li class="my-4 text-center">
                    <img src="source/img/icon/logo.png" alt="OKOK">
                  </li>
                  <li class="nav-item">
                    <a class="ps-2 nav-link text-active d-flex align-items-center" aria-current="page" href="home">
                      <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                      </svg>
                      Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="ps-2 text nav-link d-flex align-items-center" href="menu">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide me-1" viewBox="0 0 16 16">
                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
                        <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                      </svg>
                      Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="ps-2 text nav-link d-flex align-items-center" href="katmenu">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket me-1" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                      </svg>
                      Kategori Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="ps-2 nav-link text d-flex align-items-center" href="order">
                      <svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                      </svg>
                      Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="ps-2 nav-link text d-flex align-items-center" href="customer">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                      </svg>
                      customer</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <!-- Content -->
      <div class="col-lg-10 p-5" style="background-color: #fff; border-radius: 40px 0px 0px 40px; height: 100vh;">
        <div class="akun d-flex align-items-center gap-2">
          <img src=" Source/img/icon/bintang.png">
          <h5 class="akun-h5"> Admin </h5>
          <img src="Source/img/icon/arrow.png">
        </div>
        <div class="row">
          <div class="col-4" style="margin-bottom: 40px;">
            <div class="card">
              <div class="m-auto">
                <h1>Jumlah Mahasiswa</h1>
                <p class="text-center">100</p>
              </div>
            </div>
          </div>
          <div class="col-4 " style="margin-bottom: 40px;">
            <div class="card">
              <div class="m-auto">
                <h1>Belum ambil Kartu</h1>
                <p class="text-center">20</p>
              </div>
            </div>
          </div>
          <div class="col-4 " style="margin-bottom: 40px;">
            <div class="card">
              <div class="m-auto">
                <h1>Pending</h1>
                <p class="text-center">12</p>
              </div>
            </div>
          </div>
          <div class="col-4 " style="margin-bottom: 40px;">
            <div class="card">
              <div class="m-auto">
                <h1>Jumlah Mahasiswa</h1>
                <p class="text-center">100</p>
              </div>
            </div>
          </div>
          <div class="col-4 " style="margin-bottom: 40px;">
            <div class="card">
              <div class="m-auto">
                <h1>Belum ambil Kartu</h1>
                <p class="text-center">20</p>
              </div>
            </div>
          </div>
          <div class="col-4 " style="margin-bottom: 40px;">
            <div class="card">
              <div class="m-auto">
                <h1>Pending</h1>
                <p class="text-center">12</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="Source/bootstrap/js/bootstrap.js"></script>
  <script src="Source/bootstrap/js/popper.min.js"></script>
</body>

</html>