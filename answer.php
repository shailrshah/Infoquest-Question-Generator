<?php

	require('login_script.php');

	require('connectivity_script.php');
	
    //$sql="select * from Article;";
    //$result = mysqli_query($con,$sql);
    $ar_id=$_GET['article_id'];
    $sql="select * from questions WHERE Article_Id =".$ar_id;
    $result1 = mysqli_query($con,$sql);
    //$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    //echo $row1['Question_Text'];

    //  while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
    //   //$text = $row1[];
      
    //   printf ("%s\n",$row1['Question_Text']);
    //   echo "<br/><br/><br/>";
    // }
    
   //  $retval = mysqli_query($con,$sql);
   //  while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   //    echo "Text {$row['Text']}  <br> ";
   // }


   ?>
   <html>
	<head>
		<title>Info Quest</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	
</head>
	</head>
	<body>
		 <h2>Questions</h2>
    <?php 
    
    $date=date('Y/m/d H:i:s');
    $str="".$_SESSION['login_id'].$ar_id.$date;
    $no_correct=0;
    $no_wrong=0;
    
    $name_c = 0;
    while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
      //$text = $row1[];
      
      similar_text($_GET['q'.$name_c],$row1['Answer_Text'], $similarity_pst); 
      echo "<div class=jumbotron><label>Question ".($name_c+1)." :-</label>";
      echo "<div class=form-group>
      <label>".$row1['Question_Text']."</label>
    </div>";
    echo "<label>Your Answer :-</label>";
      echo "<div class=form-group>
      <label>".$_GET['q'.$name_c]."</label>
    </div>";
    echo "<label>Expected Answer :-</label>";
      echo "<div class=form-group>
      <label>".$row1['Answer_Text']."</label>
    </div>";
    echo "<div class=form-group>
      <label>".$similarity_pst."</label>
    </div></div>";
    $name_c  = $name_c+1;
    
     $finalresult="";
     if($similarity_pst > 1)
		{
			$finalresult="true";
			$no_correct=$no_correct+1;
		}
	 else
		{
			$finalresult="false";
			$no_wrong=$no_wrong+1;
		}
		
		
     $query="insert into user_log values ('$_SESSION[login_id]','$ar_id','$date','$str','$row1[Question_No]','$finalresult')";
	 $queryresult = mysqli_query($con,$query)  or die('Could not connect: ' . mysql_error()) ;
      //printf ("%s\n",$row1['Question_Text']);
     // echo "<br/><br/><br/>";
    }
    $temp=$no_wrong+$no_correct;
    $query="UPDATE user SET Total_Attempted='$temp' , Right_Attempted='$no_correct' WHERE User_Id = '$_SESSION[login_id]';";
    $queryresult = mysqli_query($con,$query)  or die('Could not connect: ' . mysql_error()) ;
   
    //echo $queryresult;
    
    ?>
    
    <div align="center">

      <a href="articlelist.php"><button type="button" class="btn btn-primary btn-lg" >Next Article</button></a>
      &nbsp&nbsp&nbsp
      <a href="charts.php"><button type="button" class="btn btn-success btn-lg">Past Performance</button></a>
    </div>
	<body>
</html>
