<?php

	
	require('login_script.php');

	require('connectivity_script.php');
	
	$ar_id=$_GET['Title'];
	
	
	
    $sql="select * from article WHERE article_Id =".$ar_id;
    $result = mysqli_query($con,$sql);
    $sql="select * from questions WHERE article_Id =".$ar_id;
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
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>Info Quest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<body>

<div class="container">
  <div class="jumbotron" id="article">
    <?php  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo"<h1>".$row['Title']."</h1><p>". $row['Text']."</p>";
    ?>

     <a href="#form"><button type="button" class="btn btn-success" id="show-questions">Show Questions</button></a>
  </div>
 
  <form role="form" id="form" style="display:none;" action="answer.php" >
    <h2>Questions</h2>
    <?php 
      $name_c = 0;
    while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
      //$text = $row1[];
      echo "<div class=jumbotron>Question ".($name_c+1);
      echo "<div class=form-group>
      <label>".$row1['Question_Text']."</label><input type=text class=form-control name=q".$name_c.">
    </div></div>";
    $name_c  = $name_c+1;
      //printf ("%s\n",$row1['Question_Text']);
     // echo "<br/><br/><br/>";
    }
    ?>
    <input type=hidden name="article_id" value=<?php echo "".$ar_id ?>>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>

</div>
<script>
	$(function(){
		$("#show-questions").click(function(){
			$("#article").hide();
			$("#form").show();
		});
	});
</script>

</body>
</html>
