<?php
session_start();
if (isset($_GET["halaman"]) && $_GET["halaman"] == "home") {
  $page = "home.php";
  include 'main.php';
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "data") {
  $page = "data.php";
  include 'main.php';
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "user") {
  $page = "user.php";
  include 'main.php';
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "persyaratan") {
  $page = "persyaratan.php";
  include 'main.php';
} elseif (isset($_GET["halaman"]) && $_GET["halaman"] == "login") {
  include 'login.php';
} else {
  include 'main.php';
}
