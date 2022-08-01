<?php include "connection.php"; ?>
<?php
$email="siya123@gmail.com";

$result=mysqli_query($con,"SELECT COUNT(`Email`) FROM `registeration` WHERE `Email` = \"$email\"");
                                          $row=mysqli_fetch_array($result);
                                         echo $total= $row[0];


            ?>