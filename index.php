<?php include "connection.php"; ?>
<?php //include "functions1.php"; ?>
<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coaching Center Demo</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
     </head>

<body>
    <section id="top-menu">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">
                    <img src="image/Google.png" alt=""></a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <form class="navbar-form navbar-left">
        <div class="form-group vnew">
          E-Learning Website
        </div>
        
      </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <?php 
                           if(isset($_SESSION['username']))
                           {
                            echo '<li><a href="coursesstudent.php">Courses</a></li>';
                               
                           }
                           ?>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
                            <ul class="dropdown-menu  animated bounceInLeft">
                                <li><a href="AboutCoachingC.php">About Our Coaching</a></li>
                                <li><a href="our_values.php">Our Values</a></li>
                            </ul>
                        </li>
                        <li><a href="quiz.php">Quiz</a></li>
                        <li><a href="samplepap.php">Interview Questions</a></li>
                        <li><a href="viewdocumentstu.php">Papers</a></li>
                       <?php 
                           if(isset($_SESSION['username']))
                           {
                            
                               echo '<li><a>'.$_SESSION['username'].'</a></li>';
                               ?>
                               <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                                <ul class="dropdown-menu  animated bounceInLeft">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                           </li>
                                <?php
                           }
                           else
                           {
                               echo '<li><a href="registration.php">Signup</a></li>';
                           }
                       ?>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </section>

    <!--    about us section -->
    <section id="about_us">
        
        <div class="container">
            <div class="A-banner-0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="A1-left">
                            <h1>Front end</h1>
                            <h3>HTML, CSS, Javascript and much more..</h3>
                            <p>Everything on this page from the logo to the 
                                <br> search bar, overall layout and how the user 
                                <br> interacts with the page was created by a front end developer.</p>
                        </div>
                        <div class="A2-left">
                            <h1>Who is it for?</h1>
                            <p>* Geeks</p>
                            <p>* to learn Programming</p>
                            <p>* Reasoning</p>
                            <p>* Quantitative Aptitude</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="A1-middle">
                            <h1>Backend</h1>
                            <p>PHP database and much more...</p>
                            <p>Through Backend,stores and arranges data, </p>
                            <p>and also makes sure everything on the client-side of the website works fine.</p>
                        </div>
                        <div class="A2-middle">
                            <h1>Learn and Earn Knowledge</h1>
                            <p>Register Now!</p>
                            <p>Register now to get full time access to your favorite course</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<!--   Services-->
    
    <section id="portfolio" class="text-center">
        <div class="container">
            <h2>Services</h2>
            <div id="filters" class="button-group">
                
               <a href="quiz.php"> <button class="button" >Quizzes</button></a>
               <a href="samplepap.php"> <button class="button" >Interview Questions</button></a>
                <a href="papers.php"><button class="button">Papers</button></a>
               
            </div>
            <div class="grid">
                <div class="element-item transition metal " data-category="transition"><img src="image/quiz.jpg" height=220px width=300px>
                    <div class="isotope-overlay"><br><br><br>
                       <div class="details005">
                       <a href="quiz.php"> <button class="teacher002details" type="button">See More</button></a>
                        
                        </div>
                    
                    
                    </div>
                </div>
                <div class="element-item metalloid " data-category="metalloid"> <img src="image/interview.jpg"  height=220px width=300px>
                    <div class="isotope-overlay"><br><br><br>
                            <div class="details005">
                        <a href="samplepap.php"> <button class="teacher002details" type="button">See More</button></a>
                        
                        </div></div>
                </div>
                <div class="element-item post-transition metal " data-category="alkaline-earth"> <img src="image/paper.jpg" height=220px width=300px>
                    <div class="isotope-overlay"><br><br><br>
    <div class="details005">
                          <a href="viewdocumentstu.php"> <button class="teacher002details" type="button">See More</button></a>
                        
                        </div>
                    </div>
                </div>
             
              
            </div>
             
        </div>
    </section>
    
    
    <section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
        <div class="f-001">
            <h3>Why Choose</h3>
            <a href="#"><p>Why Studymate</p></a>
            <a href="#"><p>Regular Testing and Feedback</p></a>
            <a href="#"><p>Special Workshops</p></a>
            
            </div>
            </div>
               <div class="col-md-3">
        <div class="f-002">
            <h3>Courses Offered</h3>
                        <a href="#">
                            <p>Java</p>
                        </a>
                        <a href="#">
                            <p>Data Structure</p>
                        </a>
                        <a href="#">
                            <p>Reasoning</p>
                        </a>
                        <a href="#">
                            <p>SQL</p>
                        </a>
                        <a href="#">
                            <p>Cloud Computing</p>
                        </a>
                        <a href="#">
                            <p>Apptitude</p>
                        </a>
                        <a href="#">
                            <p>Networking</p>
                        </a>  
            </div>
            </div>
                 <div class="col-md-3">
        <div class="f-003">
            <h3>Contact</h3>
            <a href="#"><p>+008756364749</p></a>
            <a href="#"><p>helpline@online.com</p></a>
<a href="#"><p>Facebook</p></a>
            <a href="#"><p>Youtube</p></a>
                  
            </div>
            </div>
          <div class="col-md-3">
        <div class="f-004">
            <h3>Students Zone</h3>
            <a href="#"><p>FAQ</p></a>
            <a href="#"><p>News & Articles</p></a>
<a href="#"><p>Download Sample Paper</p></a>
            </div>
            </div>
        </div>
        </div>
    
    
    </section>
    <section id="bootom-footer">
    <h4>@CopyRight 2021</h4>
    
    </section>
    
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/isotape.function.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){
        
        
    })
    
    
    </script>
</body>

</html>