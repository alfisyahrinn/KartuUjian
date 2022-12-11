<?php
session_start();
if (isset($_GET["halaman"]) && $_GET["halaman"] == "home") {
  if ($_SESSION["level"] == 1 || $_SESSION["level"] == 2) {
    $page = "home.php";
    include 'main.php';
  } else {
    $page = "biodata.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "data") {
  if ($_SESSION["level"] == 1 || $_SESSION["level"] == 2) {
    $page = "data.php";
    include 'main.php';
  } else {
    $page = "home.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "user") {
  if ($_SESSION["level"] == 1) {
    $page = "user.php";
    include 'main.php';
  } else {
    $page = "home.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "persyaratan") {
  if ($_SESSION["level"] == 1 || $_SESSION["level"] == 2) {
    $page = "persyaratan.php";
    include 'main.php';
  } else {
    $page = "home.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "biodata") {
  if ($_SESSION["level"] == 3) {
    $page = "biodata.php";
    include 'main.php';
  } else {
    $page = "home.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "editBiodata") {
  if ($_SESSION["level"] == 3) {
    $page = "editBiodata.php";
    include 'main.php';
  } else {
    $page = "home.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "cetakKartu") {
  if ($_SESSION["level"] == 3) {
    $page = "cetakKartu.php";
    include 'main.php';
  } else {
    $page = "home.php";
    include 'main.php';
  }
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "login") {
  include 'login.php';
} else {
  include 'main.php';
}
