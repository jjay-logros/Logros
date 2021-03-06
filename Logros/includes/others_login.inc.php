<?php
if(isset($_POST['login-submit'])) {
  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if (empty($mailuid) || empty($password)) {
    header("Location: ../others_login.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM otherUsers WHERE uidOthers=? OR emailOthers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../others_login.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdOthers']);
        if ($pwdCheck == false) {
          header("Location: ../others_login.php?error=wrongpwd");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idOthers'];
          $_SESSION['userUid'] = $row['uidOthers'];

          header("Location: ../others_login.php?login=success");
          exit();
        }
      }
      else {
        header("Location: ../others_login.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../others_login.php");
  exit();
}
