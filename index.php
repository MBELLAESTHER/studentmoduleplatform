<?php
  session_start();
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="navbar.css" />
    <link rel="shortcut icon" href="assests/icon.png" type="image/x-icon"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>STUDENT JOB PLATFORM | Home</title>
  </head>
  <body>
  
  <h1>WELCOME******** TO ******STUDENT *********PORTAL</h1>
  
    <header>
    
        <div class="menu">
          <span class="bar"></span>
          
        </div>
      <nav>
        <ul>
          <li><a  href="#home">Home</a></li>
         
          <li><a  href="resume.php">upload resume</a></li>
         
          <?php 
          if($_SESSION['U_TYPE']==''){
          ?>
                <li><a href="sign_in.php">sign in</a></li>
               
          <?php }
           else{ 
                if($_SESSION['U_TYPE']=='USER'){?>
                <li class="user"><a href="#"><?php echo $_SESSION['U_NAME']." <i class='fa fa-chevron-down'></i>";?></a></li>
                <div id="box">
                <li class="mennuu"><a href="user_home.php">dashboard</a></li>
                <li class="mennuu"><a href="logout.php">logout</a></li>
                </div>
          <?php } 
                else{?>
                <li class="user"><a href="#"><?php echo $_SESSION['U_NAME']." <i class='fa fa-chevron-down'></i>";?></a></li>
                <div id="box">
                <li class="mennuu"><a href="employer_home.php">dashboard</a></li>
                <li class="mennuu"><a href="logout.php">logout</a></li>
                </div>
          <?php 
                }}?>
                
        </ul>
      </nav>
    
        <div class="imgg">
       
        </div>
      </div>
    </header>
   
   
   
    
    <section class="forcmp">
        <div class="title-forcmp">
         
        </div>
        <div class="imgg">
        </div> 

       <h1></h1>
<p></p>
  <div class="btn-wrap">
  <a href="#"></a>
  </div>
</div>

         <img src="assests/employees.svg" alt="">
         
       
    </section>
    <section class="steps">
      <div class="stepback">
        <div class="text">

          <h2>Just Follow simple Steps</h2>
          <p>look for a job that suits you</p>
        </div>
        <div class="info">
          <div class="create" data-tool-tip="first thing is to create your own account.">
            <div class="c1" ><img src="assests/user.png" alt=""></div>
          </div>
          <div class="bulid" data-tool-tip="Build or Upload Your resume.">
              <div class="c2" ><img src="assests/form.png" alt=""></div>
          </div>
          <div class="sector" data-tool-tip="Select appropriate job option." >
              <div class="c3" ><img src="assests/check.png" alt=""></div>
          </div>
          <div class="status" data-tool-tip="Then just wait for approval">
              <div class="c4" ><img src="assests/pending.png" alt=""></div>
          </div>
          <div class="done" data-tool-tip="You get notifed,once approved.">
              <div class="c5" ><img src="assests/complete.png" alt=""></div>
          </div>
        </div>
      </div>
    </section>

    <section class="benefits">
        <div class="title">
          <h4>Making your job search easy</h4>
          <h2>How STUDENT JOB PLATFORM can help</h2>
        </div>
        <div class="grid-content">
          <div class="sal">
            <img src="assests/sal.svg" alt="">
            <h3>Compare Own Salary</h3>
            <p>see how your salary compares to others with the same job title in your area. Not only can you compare your salary, but you can also see what skills you are missing to earn more money</p>
          </div>
          <div class="quick">
             <img src="assests/time.svg" alt="">
             <h3>Quick Apply</h3>
             <p>Easily apply to multiple jobs with one click! Quick Apply shows you recommended jobs based off your most recent search and allows you to apply to 25+ jobs in a matter of seconds!</p>
          </div>
          <div class="alert">
             <img src="assests/notify.svg" alt="">
             <h3>Job Alert Emails</h3>
             <p>Keep track of positions that you're interested in by signing up for job alert emails. You'll be notifed via email when new jobs are posted in that search.</p>
          </div>
        </div>
    </section>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
     $('.user').on('click',function(){
        $('#box').toggleClass('flicker');
     });
    </script>
  </body>
                                                                                  
<?php include('footer.php'); ?>
        
</html>
