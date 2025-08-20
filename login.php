<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>
  <?php
  session_start();
  if ($_SESSION['logueado'] = true) {
    include_once("config_login.php"); // ver usar require()
    include_once("db.class.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $link = new Db();
      $usr = $_POST['username'];
      $pass = $_POST['password'];
      $hashed_pass = hash('sha256', $pass);
      $sql = "select * from users where (username=? or email=?) and password=? and active='SI'";
      $stmt = $link->run($sql, [$usr, $usr, $hashed_pass]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if (!$row) {
        echo "Los datos ingresados no son validos !";
      } else {
        session_start();
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $_SESSION['time'] = date('H:i:s');
        $_SESSION['username'] = $usr;
        $_SESSION['logueado'] = true;
        header("location:welcome.php");
      }
    }
  }
  ?>
</body>

</html>