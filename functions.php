<?php

#for signup page
function signup_insert()
{

	global $con;
	session_start();
	#$Uname = $_POST['username'];
	$email = $_POST['email'];
	#$password = $_POST['password'];
	#$r_password = $_POST['rpassword'];
    #$category=$_POST['category'];
    extract($_POST);
	
	$rs=mysqli_query($con,"SELECT * FROM `registeration` WHERE `Email`='$email' ");
	if (mysqli_num_rows($rs)>0)
	{
		echo "<script language='javascript'>alert('Email Id Already Exits');window.location='registration.php'</script>";
			//echo "<br><H3><div class=head1><a href=login.php>ADMIN HOME</a></H3></div>";
	exit;
	} 
	if($password == $rpassword)
	{
    		$query = "INSERT INTO `registeration`( `Name`, `Email`, `Password`, `Category`) VALUES ('$username','$email','$password','$category')";
	    	$result = mysqli_query($con, $query);
			if($result)
	{
		echo "<script>alert('new record created');window.location='login.php'</script>";
		exit();
		 
	}
	else
	echo "<script>alert('error');window.location='registration.php'</script>";
	exit();
			
	    
    }
    else
    {
    	//echo '<div class="alert alert-danger" role="alert">
       // Your password does not match
        //</div>';
    	echo "<script>alert('Your password does not match');window.location='registration.php'</script>";
    }

	
}

#for login page
function login_check()
{
	global $con;
	session_start();
	//$Uname = $_POST['username'];
	//$Pass = $_POST['password'];
	extract($_POST);
	$query = "SELECT Name, Password FROM registeration";
	$result = mysqli_query($con, $query);


	#if(mysqli_num_rows($result) > 0){
		//put them into variables
		
		while($row = mysqli_fetch_assoc($result))
		{
		   
            $flag = 0;
		    //check username and password match or not
		    if($username == $row['Name'] && $password == $row['Password'])
	        {
				$u=$username;
				$p=$password;
			    $flag=1;
			    break;
	        }
		    else
	        {
		        $flag = 0;
		
	        }
        }
        
        if($flag == 1)
        {
        	$_SESSION['loggedin'] = true;
        	$_SESSION['username'] = $username;
			$q2="SELECT Category FROM registeration where Name='$u' and Password='$p' ";
			$res = mysqli_query($con, $q2);
			$r=mysqli_fetch_assoc($res);
			//echo $r['Category'];
			
			if($r['Category']=="student")
        	   header('location: index.php');
			else
			   header('location: Viewcourses.php');
        }
        else
        {
        	echo '<script>alert("Invalid Username or password")</script>';
        }
        
	
}
?>