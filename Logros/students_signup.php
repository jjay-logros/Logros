<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/students_signup_stylesheet.css">
  </head>

  <body>
    <h3 style="color: #fefefe; font-weight: bold; text-align: center; font-size:40px">WELCOME STUDENT!<br><br> SIGN UP, PLEASE!</h3>
    <h3 padding: -2000px; margin: -2000px; div class="container">
      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyfields") {
            echo '<p>Fill in all fields!</p>';
          }
          else if ($_GET["error"] == "invaliduidmail") {
            echo '<p>Invalid username and e-mail!</p>';
          }
          else if ($_GET["error"] == "invaliduid") {
            echo '<p>Invalid username!</p>';
          }
          else if ($_GET["error"] == "invalidmail") {
            echo '<p>Invalid e-mail!</p>';
          }
          else if ($_GET["error"] == "passwordcheck") {
            echo '<p>Your passwords do not match!</p>';
          }
          else if ($_GET["error"] == "usertaken") {
            echo '<p>Username is already taken!</p>';
          }
        }
        else if (isset($_GET["signup"])) {
          if ($_GET["signup"] == "success") {
            echo '<p>Signup successful!</p>';
          }
        }
      ?>
      <form action="includes/students_signup.inc.php" method="post">
        <label for="fName"; style="color: black;">First Name<br></label>
        <input type="text" id="fName" name="fName" required><br><br>

        <label for="lName"; style="color: black">Last name<br></label>
        <input type="text" id="lName" name="lName" required><br><br>

        <label for="mail"; style="color: black;">E-mail<br></label>
        <input type="text" id="Email" name="mail" required><br><br>

        <label for="uid"; style="color: black;">Username<br></label>
        <input type="text" id="uid" name="uid" required><br><br>

        <label for="pwd"; style="color: black;">Password<br></label>
        <input type="password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

        <label for="pwd-repeat"; style="color: black;">Repeat password<br></label>
        <input type="password" id="pwd-repeat" name="pwd-repeat" required><br>

        <button type="submit" name="signup-submit" value="Submit">Signup</button>
      </form>
    </div>

    <div id="message">
      <h3>Password must contain the following:</h3>
      <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
      <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
      <p id="number" class="invalid">A <b>number</b></p>
      <p id="length" class="invalid">Minimum <b> 9 characters </b></p>
    </div>

    <script>
      var myInput = document.getElementById("pwd");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      // When the user clicks on the password field, show the message box
      myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
      }

      // When the user clicks outside of the password field, hide the message box
      myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
      }

      // When the user starts to type something inside the password field
      myInput.onkeyup = function() {
      // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }

        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } else {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 9) {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } else {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      }
    </script>
  </body>
</html>
