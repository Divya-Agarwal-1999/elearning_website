<?php

#add course
function addcourse(){
    global $con;
    extract($_POST);
    $user=$_SESSION['username'];

    #video insertion
    $maxsize = 5242880; // 5MB
    
    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
        $name = $_FILES['file']['name'];
        $target_dir = "storevideo/";
        $target_file = $target_dir . $_FILES["file"]["name"];

         // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo '<script>alert("File too large. File must be less than 5MB.")</script>';
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                #storing in database
                $query = "INSERT INTO `courses`(`Category`,`Title`,`Description`,`Video`,`Username`) VALUES ('$course','$title','$description','$target_file','$user')";
	            $result = mysqli_query($con, $query);
                //$_SESSION['message'] = echo '<script>alert("Upload successfully.")</script>';//"Upload successfully.";
                if($result){
                echo '<script>alert("Upload successfully.")</script>';
                header('location: viewcourses.php');
                }
            }
        }

       }
    else{
        echo '<script>alert("Invalid file extension.")</script>';
    }
}
else{
    echo '<script>alert("Please select a file.")</script>';
    //$_SESSION['message'] = "Please select a file.";
}  
}

function coursesstudent()
{
    global $con;
    extract($_POST);
    
    $query = "SELECT * FROM courses where Category='$search'";
        $result = mysqli_query($con, $query);
        $check=mysqli_num_rows($result);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {

            ?>
            <div class="card col col-3 me-md-2 me-sm-0">
            <div class="card-body">
                <video width="580" height="270" class="pleft" controls>
                    <source src="<?php echo $row['Video'] ?>" type="video/mp4">
                    
                  Your browser does not support the video tag.
                  </video>
            <br>
              
              <br><div class="title"><?php echo $row['Title'] ?><span class="tag"><?php echo $row['Category'] ?></span></div>
              <p class="card-text text-wrap"><?php echo $row['Description'] ?></p>
            </div>
        </div>
            <?php
              // echo $row['Title'];
              
           }
       }
    }

    function addnotes()
    {
        global $con;
        extract($_POST);
        
    
        #document insertion
        $maxsize = 5242880; // 5MB
        
        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
            $name = $_FILES['file']['name'];
            $target_dir = "storenotes/";
            $target_file = $target_dir . $_FILES["file"]["name"];
    
             // Select file type
           $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
           // Valid file extensions
           $extensions_arr = array("pdf","docx","epub","doc","ppt");
    
           // Check extension
           if( in_array($extension,$extensions_arr) ){
     
              // Check file size
              if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                echo '<script>alert("File too large. File must be less than 5MB.")</script>';
              }else{
                 // Upload
                 if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                    #storing in database
                    $query = "INSERT INTO `notes`(`category`,`notes`) VALUES ('$course','$target_file')";
                    $result = mysqli_query($con, $query);
                    //$_SESSION['message'] = echo '<script>alert("Upload successfully.")</script>';//"Upload successfully.";
                    if($result){
                    echo '<script>alert("Upload successfully.")</script>';
                    //header('location: viewcourses.php');
                    }
                }
            }
    
           }
        else{
            echo '<script>alert("Invalid file extension.")</script>';
        }
    }
    else{
        echo '<script>alert("Please select a file.")</script>';
        $_SESSION['message'] = "Please select a file.";
    }  
    }

    function viewnotes()
{
    global $con;
    extract($_POST);
    
    $query = "SELECT * FROM notes where Category='$search'";
        $result = mysqli_query($con, $query);
        $check=mysqli_num_rows($result);
       if(mysqli_num_rows($result)>0)
       {
           while($row=mysqli_fetch_assoc($result))
           {
        
            ?>
            <div class="card col col-3 me-md-2 me-sm-0">
            <div class="card-body">
                
            <br>
            <a href="<?php echo $row['notes']; ?>" >click</a>
              
              <br><div class="title"><?php echo $row['Category'] ?></div>
             
            </div>
        </div>
            <?php
            
                  
            
              // echo $row['Title'];
              
           }
       }
    }


?>
 