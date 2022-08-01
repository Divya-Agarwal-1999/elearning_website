<?php include "connection.php"; ?>
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="../images/icon/favicon.png">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;
subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400,400i" rel="stylesheet">
	<link href="css/new.css" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- NAVIGATION -->
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

<!-- Quick Links -->
	<div class="course vidu">
		<div class="cbox">
		<div class="det"><a href="https://www.interviewbit.com/data-structure-interview-questions/" target="_blank">Data Structure</a></div>
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/c-programming-interview-questions/" target="_blank">C Language</a></div>
		<div class="det"><a href="https://www.softwaretestinghelp.com/cpp-interview-questions/" target="_blank">C++</a></div>
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/python-interview-questions/" target="_blank">Python</a></div>
		<div class="det"><a href="https://www.naukri.com/learning/articles/networking-interview-questions-answers/" target="_blank">Networking</a></div>
		<div class="det"><a href="https://career.guru99.com/top-50-operating-system-interview-questions/" target="_blank">Operating System</a></div>
		<div class="det"><a href="https://www.naukri.com/learning/articles/php-interview-questions-and-answers/" target="_blank">PHP</a></div>
		<div class="det"><a href="https://www.javatpoint.com/html-interview-questions" target="_blank">HTML</a></div>
		</div>
		<div class="cbox">
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/css-interview-questions/">CSS</a></div>
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/javascript-interview-questions/" target="_blank">Javascript</a></div>
		<div class="det"><a href="https://hackr.io/blog/jquery-interview-questions" target="_blank">jquery</a></div>
		<div class="det"><a href="https://www.guru99.com/perl-interview-questions.html">PERL</a></div>
		<div class="det"><a href="https://www.firstnaukri.com/career-guidance/65-logical-reasoning-questions-and-answers-for-freshers">Reasonig</a></div>
		<div class="det"><a href="https://www.wisdomjobs.com/e-university/aptitude-interview-questions.html" target="_blank">Apptitude</a></div>
		<div class="det"><a href="https://www.getmyuni.com/articles/aptitude-questions-and-answers" target="_blank">Big Data</a></div>
		</div>
		<div class="cbox">
		<div class="det"><a href="https://www.mygreatlearning.com/blog/machine-learning-interview-questions/">Machine Learning</a></div>
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/bootstrap-interview-questions/">Bootstrap</a></div>
		<div class="det"><a href="https://www.javatpoint.com/artificial-intelligence-interview-questions">Artificial Intelligence</a></div>
		<div class="det"><a href="https://www.guru99.com/cloud-computing-interview-questions.html">Cloud computing</a></div>
		<div class="det"><a href="https://www.guru99.com/software-engineering-interview-questions.html">Soft Computing</a></div>
		<div class="det"><a href="https://www.guru99.com/software-testing-interview-questions.html">Software Testing</a></div>
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/c-programming-interview-questions/">c#</a></div>
		<div class="det"><a href="https://www.edureka.co/blog/interview-questions/java-interview-questions/">Java</a></div>
		</div>
	</div>

	
	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/isotape.function.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){
        
        
    })
    
    
    </script>

<!-- FOOTER -->


</body>
</html>