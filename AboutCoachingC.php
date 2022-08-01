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
                <h2>About Coching Center</h2> </div>
        </div>
    </section>
    <section id="aboutcoachingcenter002">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="deatils469">
                        <figure> <img src="image/1495314857081.jpg" alt=""> </figure>
                        <div class="deatils456-info">
                        <h3> Empowering Masses Through Quality Education</h3>
                        <p>HT Media Limited is India’s foremost media company and is the force behind three of the nation’s leading newspapers – Hindustan Times (English daily), Hindustan (Hindi daily) and Mint (Business daily). HT has a vision of empowering India’s youth through information, entertainment and education. In the area of Education it has taken several initiatives such as HT Pace – a newspaper for school children to encourage reading habit, HT Education – a weekly education supplement, HT Campus – an online platform for students looking for higher education options and HT Paathshala – program to facilitate education of under-privileged children.</p>
                        
                        </div>
                            <div class="deatils456-info">
                        <h3> Quality Delivery That Gives Your Child An Edge</h3>
                        <p>At Studymate, the child benefits from a comprehensive curriculum delivered by experienced and expert faculty through an interactive and blended teaching pedagogy. Studymate prides itself in having faculty of the highest caliber, as we believe they form the backbone of our learning center. We ensure that our faculty inherently displays values, which are synonymous with Studymate, namely – patience, approachability, confidence, result orientation and an unbiased attitude.
Our centers are equipped with best in class infrastructure with clean and well lit classrooms running on optimum batch size to ensure attention to the needs of each child. Within the classroom, learning is simplified by Technology-Aided Teaching as well as having study material and study notes collated by teachers who’ve demonstrated years of subject expertise.
Apart from support for pure academic excellence, we go the extra mile by providing a 48 hour board exam helpline. This interface addresses a student’s counseling and emotional needs, helps the student manage stress and clear last minute doubts as well. Our ‘Ask A Teacher’ 48 hour board exam helpline initiative last year received tremendous response and was applauded by the school principals as well as the CBSE.
Apart from academic support, we focus on overall development of the child through periodic sessions that are adequately sensitized and imbibe naturally the components of life skills, attitudes and values. As part of our offering we have partnered with Admissionz Campuz to provide our students career guidance and college admission assistance. Through this initiative our endeavour is, to equip the child in staying ahead in life.
The recent CBSE board exams are strong endorsement for Studymate. Our students did extremely well across classes. Not only did a large proportion achieve above 90%, but a significant number of students registered a substantial improvement in their results.
The encouraging feedback received from both parents and students have further strengthened our belief that it was a step taken in the right direction. In the coming years we further plan to build on our learning from the initial years and grow exponentially with a single minded vision to impart high quality coaching to our students.</p>
                        
                        </div>
                            <div class="deatils456-info">
                        <h3> Empowering Masses Through Quality Education</h3>
                        <p>HT Media Limited is India’s foremost media company and is the force behind three of the nation’s leading newspapers – Hindustan Times (English daily), Hindustan (Hindi daily) and Mint (Business daily). HT has a vision of empowering India’s youth through information, entertainment and education. In the area of Education it has taken several initiatives such as HT Pace – a newspaper for school children to encourage reading habit, HT Education – a weekly education supplement, HT Campus – an online platform for students looking for higher education options and HT Paathshala – program to facilitate education of under-privileged children.</p>
                        
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