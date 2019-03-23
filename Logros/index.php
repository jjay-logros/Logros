<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logros Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    * {
      font-size: 100%;
      font-family: cursive;
    }

    h1 {
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 3px;
      color: #333;
      font-family: cursive;
    }

    body{
    	background-color:#E0E0E0
    }
  </style>
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
  	<img src="img/logo.png" alt="Logo for Logros" style="width:300px;height:200px;">
  	<h1>LOGROS</h1>
    <p><i>Where Achievement Happens</i></p>
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="support.php">Support</a></li>
          <li><a href="students_login.php">Students Login</a></li>
          <li><a href="students_signup.php">Students Signup</a></li>
          <li><a href="others_login.php">Others Login</a></li>
          <li><a href="others_signup.php">Others Signup</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php
      session_start();
      if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You are logged in!</p>';
      }
      else {
        echo '<p class="login-status">You are logged out!</p>';
      }
    ?>
    <div class="row">
      <div class="col-sm-4">
        <h2>About Logros</h2>
        <p><b>Sign up today and begin tracking your achievements!</b></p>
        <section>
    		    <img class="Slides" src="img/ayee1.jpg" style="width:100%">
  	    </section>
        <p> </p>
        <p>“Always dream and shoot higher than you know you can do. Do not bother just to be better than your contemporaries or predecessors. Try to be better than yourself.”</p>
        <p>-William Faulkner</p>
        <h3><b>Our Goals for Logros</b></h3>
        <ul>
          <li>We aim to help anyone set their milestones, whether it is to set academic milestones or nonacademic.</li>
          <li>Students can not only see their Milestones, they can view a history of their past accomplishments in the site.</li>
          <li>Peer Mentor Consultation here in our site is also convenient and feasible for students.</li>
          <li>We also provide support on how to traverse our site Logros.</li>
        </ul>
        <hr class="hidden-sm hidden-md hidden-lg">
      </div>
      <div class="col-sm-8">
        <h2>Creation of Milestones</h2>
        <p><b>Login and create your Milestones!</b></p>
        <section>
    		    <img class="Slides" src="img/students.jpg" style="width:100%">
  	    </section>
  	  <p></p>
        <p>Students and other users can write all their milestones for the Fall, Spring and Summer. Milestones refer to the goals you desire to accomplish for the semester. You can update your milestones and progress as you make progress.</p>
        <br>
        <h2>Peer Mentor Consultation</h2>
        <h5>This feature is coming soon!</h5>
        <section>
    		    <img class="Slides" src="img/students2.jpg" style="width:100%">
  	    </section>
        <p></p>
        <p> A simplistic chat room will be available for students to get instant help from us as peer mentors. Whenever you're in need of assistance, you're welcome to reach out to any of our peer mentors. View the peer mentor chat room to learn more about this feature! </p>
      </div>
    </div>
  </div>
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p><b>Contact us at Logros@something.com if you have any further concerns or inquiries regarding our site.</b></p>
    <p><b>Any feedback is welcomed!</b></p>
  </div>
</body>
</html>
