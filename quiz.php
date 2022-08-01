<?php include "connection.php"; ?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Quiz on LearnEd</title>
	<link rel="stylesheet" type="text/css" href="qustyle.css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="script.js"></script>
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

<!-- MAIN Heading of Page -->
	<div class="title" id="title">
		<span>Daily Quiz on LearnEd</span>
		<div class="shortdesc" style="color:red;"><br>
			<p>The best prepparation for tomorrow is doing your best today</p>
		</div>
		<button onclick="startquiz()" style="background-color:red;">Start Now</button>
	</div>


<div class="panel" id="panel">
	
	<div class="left-side" id="left">
		<ul>
			<li onclick="quizt(1)">HOME</li>
			<li onclick="quizt(2)">DATA STRUCTURE</li>
			<li onclick="quizt(3)">C++</li>
			<li onclick="quizt(4)">JAVA</li>
			<li onclick="quizt(5)">PHP</li>
			<li onclick="quizt(6)">HTML</li>
			<li onclick="quizt(7)">Python</li>
			<li onclick="quizt(8)">Javascript</li>
			<li onclick="quizt(9)">PERL</li>
			<li onclick="quizt(10)">Algorithm</li>
			<li onclick="quizt(11)">Networking</li>
		</ul>
	</div>

	<div class="right-side" id="right">
		<div id="quiz-container">
			
			<div id="f1"><div class="quiz-frame main-frame"></div></div>

			<div id="f2"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSd16buMmSs-WlzJ4_IkVioAn-HcgX2gFHhMtFwYiuxw1J_p3w/viewform?embedded=true" width="640" height="1786" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f3"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSfXE8aghiJXUO0BpeQLVE_krKeBC7GW_NJgDMczGuO_Tv6uoA/viewform?embedded=true" width="640" height="824" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f4"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSerenmtVZnlvOkstWZcmpiQ46jTgxVzzwsug0-SvVA_RgO7aw/viewform?embedded=true" width="640" height="744" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f5"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSe1xs1-41MAbLN7KkXrJwtGdbl5ydxe_vX_nmFRjf6c0wtYkA/viewform?embedded=true"  frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></iframe></div>
			
			<div id="f6"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSdHFDm_BakVxro_zJI78OF2OLJpXgDzzaAVMHD9hptWlXBSpA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f7"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSdgD7yFEJtqpkImDiLAaQ7w9VcsO688gr1V3Gl7FqwM5yXtWQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f8"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSchDBnai_Aup7YFJQegg4z-qoB338p010VgZRxBYDT17xoRew/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f9"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSfY5oIAz4R9Ty-LBpx7h4th6OJ0-RkrxIlLslRV4NjwwW8_uw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f10"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSflwS89sG7H98J9vFgFqJgsKaZ5gpq3yUlOiW3up7RQQ-qRnw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f11"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSe_aS8-CMNFdUzI1UE73zahC2bmMwJkmB6FJXPIeKbLIBqB4Q/viewform?embedded=true" frameborder="0" marginheiclass="quiz-frame" ght="0" marginwidth="0">Loading…</iframe></div>

		</div>
	</div>

</div>

	<script type="text/javascript" src="../script.js"></script>
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