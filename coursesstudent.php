<?php include "connection.php"; ?>
<?php include "functions1.php"; ?>
<?php 
//global $con;
session_start();
error_reporting(E_ALL ^ E_WARNING);
//extract($_POST);
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
    <style>
        .card{
            max-width: 65rem; 
        height: 54rem; 
        border:4px solid red; 
        border-radius: 1rem; 
        margin:10px; 
        margin-left:70px;
        margin-bottom: 70px;
        background-color: hwb(0 66% 7%);
        display:inline-block;
        }
        .card-body{
              padding: 10px;
              padding-left: 15px;

        }
        .card-title{
            font-size: 30px;
        }
       .pleft{
           padding:20px;
           padding-left: 50px;
           padding-bottom: 10px;
       }
       .title{
           font-size:25px;
           color:black;
           background-color:brown;
           padding:5px;
           padding-left:20px;
           border-radius:45px;
           margin-bottom:16px;
           font-weight:bolder;
       }
       .tag{
           background-color:white; 
           color:black; 
           padding:7px; 
           border-radius:5px; 
           margin-left:50px;
           font-style:italic;
           font-weight:bolder;
           float:right;
           font-size:15px;
           margin-right:20px;
       }
    </style>
    <script src="https://kit.fontawesome.com/3293ba3555.js" crossorigin="anonymous">
    </script>
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
    <section id="title0045">
        <div class="container">
            <div class="entry-title005-left">
                <h2 style="padding-bottom:0px; font-size:40px;">Your Courses</h2> </div> 
                <ul class="nav navbar-nav navbar-right">
                    <li> <form class="d-lg-flex pb-3 mb-3 border-bottom pt-1" name="coursefilter" method="POST">
                        <input class="form-control me-2 btn-outline-dark bg-white" type="search" placeholder="Search"
                          aria-label="Search" name="search"></li>
                        <li><button class="btn btn-outline-secondary text-dark" type="submit" name="submit"><i class="fas fa-search" ></i></button>
                      </form>
                      </li>
                </ul>
    </section>
    <section id="aboutcoachingcenter002">
        
    <?php coursesstudent();?>
        
       
        
        
    </section>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="f-001">
                        <h3>Why Choose</h3>
                        <a href="#">
                            <p>Why Studymate</p>
                        </a>
                        <a href="#">
                            <p>Regular Testing and Feedback</p>
                        </a>
                        <a href="#">
                            <p>Special Workshops</p>
                        </a>
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
                        <a href="#">
                            <p>+008756364749</p>
                        </a>
                        <a href="#">
                            <p>helpline@online.com</p>
                        </a>
                        <a href="#">
                            <p>Facebook</p>
                        </a>
                        <a href="#">
                            <p>Youtube</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-004">
                        <h3>Students Zone</h3>
                        <a href="#">
                            <p>FAQ</p>
                        </a>
                        <a href="#">
                            <p>News & Articles</p>
                        </a>
                        <a href="#">
                            <p>Download Sample Paper</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bootom-footer">
        <h4>@CopyRight 2021</h4> </section>
   
    
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