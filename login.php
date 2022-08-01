<?php include "connection.php"; ?>
<?php include "functions.php"; ?>
<?php 
if(isset($_POST['submit'])){
	
	login_check();

	}
?>
<html>
<head>
<title>Login Form</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    *
{
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Josefin Sans', sans-serif;
    background-position: center;
    background-size: cover;
}
.form-box{
    width: 350px;
    margin: 100px auto 0;
    box-shadow: 0 0 10px 0 #000;
    padding: 50px 25px;
    background-color: white;
}

.form-box h2{
    font-weight: 400;
    text-align: center;
    margin: -80px auto 50px;
    background: red;
    width: 200px;
    height: 40px;
    padding-top: 20px;
    border-radius: 30px;
    box-shadow: 0 0 4px 0 #000;
}
.form-box p{
    
    text-align: center;
    margin: 30px auto
}

input
{
    width: 100%;
    height: 40px;
    padding: 20px;
    border-radius: 30px;
    border: 1px solid #999;
    outline: none;
    background: transparent;
}
.input-group{
    margin: 20px auto;
    position: relative;
}
label{
    position: absolute;
    top: -7px;
    left: 20px;
    background-color: white;
    padding: 0 5px;
}
button
{
    padding: 10px 18px;
    border: none;
    border-radius: 30px;
    font-size: 14px;
    background-color: #ff1100;
    color: #fff;
    cursor: pointer;
    
}
button:hover
{
    background-color:;
    transition: 0.6s;
}
</style>
</head>
<body background="img4.jpg">

<div class="form-box">
    
    <h2>Login</h2>
    <form method="Post">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" pattern="[A-Za-z0-9\-_\.]{6,20}" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        <button type="submit" name="submit">Submit &#10132;</button>
<a href="index.php"><button type="button"  class="cancelbtn">Cancel</button></a>
  
    </form>  
   

    
</div>
</body>
</html>