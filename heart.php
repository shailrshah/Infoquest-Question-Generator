<?php

//connect to database after schema is finalzed 
    $username = "root";
    //$password = "";
    $password = "bhu123shan90";
    $dbname = "test";
    $con = mysqli_connect("localhost",$username, $password,$dbname) or die('Could not connect: ' . mysql_error());
    $sql="select * from Article;";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    	//$text = $row[]
    	echo $row["Text"];
    
    


    
   //  $retval = mysqli_query($con,$sql);
   //  while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   //    echo "Text {$row['Text']}  <br> ";
   // }


   ?>
