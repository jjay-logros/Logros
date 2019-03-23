<?php
if(isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $firstname = $_POST['fName'];
  $lastname = $_POST['lName'];
  $email = $_POST['mail'];
  $username = $_POST['uid'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../students_signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/", $username)) {
    header("Location: ../students_signup.php?error=invalidmailuid");
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../students_signup.php?error=invalidmail&uid=".$username);
    exit();
  }
  else if (!preg_match("/^[a-zA-z0-9]*$/", $username)) {
    header("Location: ../students_signup.php?error=invaliduid&mail=".$email);
    exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location: ../students_signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {
    $sql = "SELECT uidOthers FROM otherUsers WHERE uidOthers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../students_signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0) {
        header("Location: ../students_signup.php?error=usertaken&mail=".$email);
        exit();
      }
      else {
        $sql = "INSERT INTO otherUsers (firstnameOthers, lastnameOthers, emailOthers, uidOthers, pwdOthers) VALUES(?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../students_signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $username, $hashedPwd);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          header("Location: ../students_signup.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../students_signup.php");
  exit();
}
