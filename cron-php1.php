<?php
    
  //connect to database after schema is finalzed 
  
  $username = "root";
  $password = "bhu123shan90";
  $dbname = "test";
  $con = mysqli_connect("localhost",$username, $password,$dbname) or die('Could not connect: ' . mysql_error());
  $sql="select * from article";
  $result = mysqli_query($con,$sql);
  
  
  $arr=["1","2","3","4","5"];
  $i=0;
  
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
  //for($j=0; $j<10; $j++){
    $var=$row['Text'];
    //$var=$j;
    //$sub=$row['Article_Id'];
    echo "".$var;
    echo "<br><br>Article split";
    //$content = "some text here";
    
      $fp = fopen("QuestionGeneration/input/file-".$arr[$i].".txt","wb") or die("Cant open file");
      fwrite($fp,"" . $var);
      fclose($fp);      
    
    $i=$i+1;
  }
    
?>

