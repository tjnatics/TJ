<?php
  session_start();
    $error='';
      if (isset($_POST['submit'])) {
      if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Empty Fields";
      }
    else
  {

  $username=$_POST['username'];
  $password=$_POST['password'];

  $connection = mysql_connect("localhost", "root", "");
  $db = mysql_select_db("copy", $connection);

  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);



  $query = mysql_query("SELECT * FROM admin where username='$username' AND password='$password'" , $connection);
  $rows = mysql_num_rows($query);
  if ($rows == 1) {
  $_SESSION['login_user']=$username;
  header("location: profile.php");
  } else {
    $error = "Username or Password is invalid";
  }
  mysql_close($connection);
  }
}
?>
