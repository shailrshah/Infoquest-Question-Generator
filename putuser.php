<?php

	require('connectivity_script.php');
	require('login_script.php');
    //mysql_select_db("tablename", $con);
    if (isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];

        $email = $_POST['email'];

        $password = $_POST['password'];
        $date=date('Y/m/d H:i:s');

    	$sql = "INSERT INTO user(Name,Password,Date_Of_Joining,Email_Id) VALUES('$username','$password','$date','$email')";
   		if (mysqli_query($con, $sql)) {
    		echo "New record created successfully";
    		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($con);
    	}
	}
    //session_start();
    $_SESSION['login_user'] = $username;
	//$_SESSION['login_id']=;
	 header('Location:index.php');
    ?>
