
<?php

	//connect to database after schema is finalzed 

	$username = "root";
	$password = "bhu123shan90";
	$dbname = "test";
	$con = mysqli_connect("localhost",$username, $password,$dbname) or die('Could not connect: ' . mysql_error());



	$i=1;

	while($i <= 5)
	{
		$qhandle = fopen("QuestionGeneration/output/questions-".$i.".txt", "r");
		$ahandle = fopen("QuestionGeneration/output/answers-".$i.".txt", "r");
		if ($qhandle) 
		{
			$ctr=0;
			while (($qline = fgets($qhandle)) !== false && ($aline = fgets($ahandle)) !== false) 
			{
				$ctr=$ctr+1;
				// process the line read.
				echo "".$qline."!!!<br>";
				$ctr = mysqli_real_escape_string($con, $ctr);
				$qline = mysqli_real_escape_string($con, $qline);
				$aline = mysqli_real_escape_string($con, $aline);
				$i = mysqli_real_escape_string($con, $i);
			
	
				$sql="Insert into questions values ('$ctr','$qline','$aline','$i');";
				//$sql="Insert into questions values (1,'q_test','a_test',1);";
				$result = mysqli_query($con,$sql) or die($sql);
				//DONe!!     
	
	
	
			}

			fclose($qhandle);
			fclose($ahandle);
		} 
		else 
		{
			
				// error opening the file.
		} 
		
		$i=$i+1;
		
	}

?>

