<?php include "connection.php"; ?>
<?php include "functions1.php"; ?>
<?php 
//global $con;
session_start();
//error_reporting(E_ALL ^ E_WARNING);
//extract($_POST);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="png" href="../images/icon/favicon.png">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;
subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400,400i" rel="stylesheet">
	<link href="css/new.css" rel="stylesheet" type="text/css">
 </head>

    <body >
    <section id="top-menu">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" >
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
                
    </section>
   
        
    <?php 
    global $con;
    extract($_POST);
    
    $query = "SELECT * FROM notes";
        $result = mysqli_query($con, $query);
        $check=mysqli_num_rows($result);
       if(mysqli_num_rows($result)>0)
       {
        echo "<div class='course vidu' style='padding-bottom:100px'>
		<div class='cbox'>";
           while($row=mysqli_fetch_assoc($result))
           {
        
            ?>
           
		<div class="det"><a href="<?php echo $row['notes']; ?>" target="_blank"><?php echo $row['category'] ?></a></div>
            <?php
            
                  
            
              // echo $row['Title'];
              
           }
           echo "</div></div>";
       }
    ?>
    <!-- <div class="card col col-3 me-md-2 me-sm-0">
            <div class="card-body">
             HEllo   
            <br>
            <a href="<?php echo $row['notes']; ?>" >click</a>
              
              <br><div class="title"><?php echo $row['Category'] ?></div>
             
            </div>
        </div>-->
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