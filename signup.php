<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
       $name=$_POST['uname'];
       $email=$_POST['uemail'];
       $phone=$_POST['uphn'];
       $password=$_POST['upass'];

      if($password==$_POST['urpass']){
      $sql="INSERT INTO `user`(`user_name`, `user_email`, `user_phone`, `user_password`) VALUES ('$name','$email','$phone','$password')";
      if(mysqli_query($con,$sql))
      {
        ?>
        <script>
          alert('Sign-Up Successfully!!');
          window.open('sign_in.php','_self');
        </script>
        <?php
      }
      else{
          echo mysqli_error($con);
      }
    }
    else{
      ?>
      <script>
          alert('Password does not match!!');
          window.open('signup.php','_self');
      </script>
    <?php
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STUDENT JOB PLATFORM | Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="shortcut icon" href="assests/icon.png" type="image/x-icon"/>
  </head>
  <body>
  <header>
            <nav>
                    <div class="icon"><a href="index.php">STUDENT JOB PLATFORM</a></div>
            </nav>
    </header>
    <div class="container">
      <div class="content">
        <h2>Create an account in  STUDENT JOB PLATFORM</h2>
        <p><b>STUDENT JOB PLATFORM</b>  Helps get a job for yourself.</p>
      </div>
      <div class="form-content">
        <form class="" action="" method="POST">
          <label for="" class="label">Name</label>
          <input type="text" name="uname" value="" placeholder="Enter Your Name" required>

          <label for="" class="label">Email</label>
          <input type="text" name="uemail" value="" placeholder="Enter Your Email" required>

          <label for="" class="label">Phone Number</label>
          <input type="text" name="uphn" value="" placeholder="Enter Your phone" maxlength="10" required>

          <label for="" class="label">Password</label>
          <input type="password" name="upass" value="" placeholder="******" required>

          <label for="" class="label">Re-Type Password</label>
          <input type="password" name="urpass" value="" placeholder="re-type ******" required>
          <input type="submit" name="submit">
        </form>
      </div>
      </div>
    </div>
    <?php
		   if (isset($_POST['submit'])) {

			   $mailto = $_POST['uemail'];
			   $mailSub = $_POST['uname'];
			   $mailMsg = $_POST['uphn'];

			   require 'PHPMailer-master/PHPMailerAutoload.php';
			   $mail = new PHPMailer();
			   $mail ->IsSmtp();
			   $mail ->SMTPDebug = 0;
			   $mail ->SMTPAuth = true;
			   $mail ->SMTPSecure = 'tls';
			   $mail ->Host = "smtp.gmail.com";
			   $mail ->Port = 587; // or 578
			   $mail ->IsHTML(true);
			   $mail ->Username = "studentmoduleplatform@gmail.com";
			   $mail ->Password = "vyysacigovdslnzy";
			   $mail ->SetFrom("studentmoduleplatform@gmail.com");
			   $mail ->Subject = $mailSub;
         
			   $mail ->Body =
        
			   

         '
					<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="UTF-8">
						<title>massage</title>
					</head>
					<body>
						<h3></h3>
						<p class="text-danger">You have successfully registered on STUDENTMODULEPLATFORM.</p>
						<p class="text-dark">Start your job search:</p>
						<p>We offer the best services </p>
						<p>*********WELCOME*********</p>
					</body>
					</html>
			   '
         ; 
			   $mail ->AddAddress($mailto);

			   if(!$mail->Send())
			   {
			    ?>
					<script>
						swal("Mail Not Send", "You clicked the button!", "error");
					</script>
		 		<?php
			   }
			   else
			   {
			      ?>
			      <script>
			        sweetAlert(
			              {
			                  title: "Thanks for contact us..",
			                  text: "Just wait for the email!",
			                  type: "success"
			              },

			          function () {
			              window.location.href = 'signup.php';
			          });
			      </script>
			    <?php
			   }
		}

		?>



   


		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
