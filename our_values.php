<?php include "connection.php"; ?>
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
                <h2>Our Values</h2> </div>
        </div>
    </section>
    <section id="aboutcoachingcenter002">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="deatils469">


                    <div class="vlaues-page5885">
                        <div class="valuedeatils356-info">
                        
                        <p>our coaching – A rich heritage to live up to! Organization values are the foundation stones on which the organization’s image is built. These help the company realize its organizational goals and in turn transform lives. These values are intended to infuse an infectious energy, professionalism and a sense of true empowerment to the workplace.
The solid edifice on which Studymate stands tall today was built on high ideals and values. The company has its roots in the independence movement in the first half of the twentieth century, a cause to empower the nation. We are adaptive to the changing times, while remaining steadfast to the values rooted in our culture.
Our values drive us towards our goals of expansion, diversification and excellence. These values define our philosophy of operations, guide our important decisions and determine our commitment and achievement.</p>
                        </div>
                            <div class="valuedeatils356-info">
                        <h3> Courage</h3>
           <p>To encourage the ability that meets opposition with skill, competence and fortitude.</p>
                        
                        </div>
                            <div class="valuedeatils356-info">
                        <h3> Responsibility</h3>
                       <p>Be accountable for results in line with the company’s objectives, strategies and values.</p>
                        
                        </div>
                              <div class="valuedeatils356-info">
                        <h3> Empowerment</h3>
                       <p>Support our people and give them the freedom to perform and to provide our readers with information to influence their environment.</p>
                        
                        </div>
                              <div class="valuedeatils356-info">
                        <h3> Continuous Self Renewal</h3>
                       <p>Determination to constantly re-examine and re-invent ourselves for further innovation and creativity.</p>
                        
                        </div>
                              <div class="valuedeatils356-info">
                        <h3> People Centric</h3>
                       <p>People are our greatest asset. We invest in them expect a lot and know that the rest will follow.</p>
                        
                        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/isotape.function.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('.reg-button6547').click(function(){
                $('.full-form0056').toggle();
            });
           
            
        });
    </script>
</body>

</html>