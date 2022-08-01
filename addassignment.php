<?php include "connection.php"; ?>
<?php include "functions1.php"; ?>
<?php 
if(isset($_POST['add'])){
    session_start();	
	addnotes();
	}
    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Add Notes</title>
</head>

<body background="img4.jpg">

 <!-- Upload response -->
 <?php 
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?>
    <div class="container-fluid" style="min-height:100vh;">
        <div class="container bg-white my-md-3 my-lg-5 my-sm-1">
            <div class="row justify-content-center g-0 mt-md-5 mt-2 p-1">
                <form class="row g-3" style="min-height:75vh; width:800px;" method="POST" enctype="multipart/form-data">
                    <h2><b>Add a Paper</b></h2>
                    <div class="g-0">
                        <label for="selectCategory" class="form-label" style="font-size:20px; color:black;">Select Categories</label>
                        <small class="text-muted d-sm-inline d-none"style="font-size:15px;">(Select at least one Category)</small>
                        <div class="form-check">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <input class="form-check-input" type="radio" name="course" value="C++" id="selPro" required>
                                    <label class="form-check-label" for="selPro">
                                        C++
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Python" id="selPy" required>
                                    <label class="form-check-label" for="selPy">
                                        Python
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Java" id="selJav" required>
                                    <label class="form-check-label" for="selJav">
                                        Java
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="PERL" id="selPerl" required>
                                    <label class="form-check-label" for="selPerl">
                                        PERL
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="HTML" id="selhtml" required>
                                    <label class="form-check-label" for="selhtml">
                                        HTML
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Css" id="selCss" required>
                                    <label class="form-check-label" for="selCss">
                                        Css
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Javascript" id="selJavscr" required>
                                    <label class="form-check-label" for="selJavscr">
                                        Javascript
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="PHP" id="selPhp" required>
                                    <label class="form-check-label" for="selPhp">
                                        PHP
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Networking" id="selNet" required>
                                    <label class="form-check-label" for="selNet">
                                        Networking
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Database" id="selDb" required>
                                    <label class="form-check-label" for="selDb">
                                        Database 
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Mathematics" id="selMat" required>
                                    <label class="form-check-label" for="selMat">
                                        Mathematics
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-check-input" type="radio" name="course" value="Quantitative Apptitude" id="selApt" required>
                                    <label class="form-check-label" for="selApt">
                                       Quantitative Apptitude
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group g-0">
                        <label for="imageLabel" class="form-label me-5" style="font-size:20px; color:black;">Upload Material</label>
                        <input type="file" class="form-control-file" id="imageLabel" name="file" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-danger" type="submit" name="add">Add Notes</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>