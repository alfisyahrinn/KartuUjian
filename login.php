<?php
// session_start();
if (!empty($_SESSION["usernameDecafe"])) {
  header('location:home');
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

    label {
      font-weight: 700;
      font-size: 30px;
    }
  </style>
  <div class="ini">
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
          <button style="color: #828ea5;" class="mt-2 mb-2 btn-register opacity-75 bg-transparent"><a class="text-dark" href="#">Forget Password</a></button>
          <button class="btn-login" type="submit" name="login">Login</button>
        </li>
      </ul>
    </form>
  </div>


  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>