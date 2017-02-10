<?php

	require('connectivity_script.php');
	require('login_script.php');
    if (isset($_POST['email']) && isset($_POST['password'])){

		$email = mysqli_real_escape_string($con,$_POST['email']); //Prevent SQLInjections
        $password =  mysqli_real_escape_string($con,$_POST['password']);
        echo $email;
        echo $password;


        $sql = "SELECT * FROM user WHERE Email_Id = '$email' and Password = '$password'";
        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['Name'];
        $count = mysqli_num_rows($result);
        echo $active;
		
		
		if($count == 1) {
			echo "Nice coding"; 
			
			$_SESSION['login_user'] = $active;
			$_SESSION['login_id'] = $row['User_Id'];
			
			header('Location:index.php');
      
		}	
		else {
				$error = "Your Login Name or Password is invalid";
				header('Location:register.php');
         
		}
	} 
	else 
		echo "Not set";
   



  //       $sql = "select Name from User where Email_Id='".$email."' ;";
  //       $x = mysqli_query($con, $sql);
  //    //    if ($x) {
  //   	// 	echo "New record created successfully";
  //   	// 	} else {
  //   	// 	echo "Error: " . $sql . "<br>" . mysqli_error($con);
  //   	// 	die('Could not connect: ' . mysql_error());
  //   	// }
  //   	//echo $x;
  //   	while($row = mysql_fetch_array($x, MYSQL_ASSOC))
  //   	{
  //   		echo "User ID :{$row['Name']}  <br> ";
  //   	}

  //   }
  //   session_start();
  //   //$_SESSION["login"]=$x;
  //   //echo $x;
	 // //header('Location:index.php');

    ?>
