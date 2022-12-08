<div class="akun d-flex align-items-center gap-2 mb-4">
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img class="me-1" src=" Source/img/icon/bintang.png">
        <?= $_SESSION["username"]; ?>
      </a>
      <ul class="dropdown-menu dropdown-menu-gray">
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><a class="dropdown-item" href="#">Setting</a></li>
        <li><a class="dropdown-item" href="proses/logout.php">Logout</a></li>
      </ul>
    </li>
  </ul>
</div>