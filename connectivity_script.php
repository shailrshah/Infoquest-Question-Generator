<?php
	//connect to database after schema is finalzed 
    $username = "root";
    $password = "bhu123shan90";
    //$password = "bhu123shan90";
    $dbname = "test";
    $con = mysqli_connect("localhost",$username, $password,$dbname) or die('Could not connect: ' . mysql_error());
    //mysql_select_db("tablename", $con);

	//Read JSON string
    //$content = file_get_contents("http://api.diffbot.com/v3/article?token=7a1a52ffbeb6a423f21eea5e3ff85c88&url=http://www.nytimes.com/2015/12/30/world/africa/ebola-guinea-who.html");
    //$content = file_get_contents("http://api.diffbot.com/v3/article?token=7a1a52ffbeb6a423f21eea5e3ff85c88&url=http://www.bbc.com/news/world-us-canada-35336617");
    //convert to PHP array
    //$json = json_decode($content, true);

    //Extract array values
    // $date=date("Y-m-d H:i:s");
    // $text=$json['objects']['0']['text'];
    // $source=$json['objects']['0']['siteName'];
    // $author=$json['objects']['0']['author'];
    //Insert into database
   //$sql = "INSERT INTO article(Date,Text,Source,Author) VALUES(now(),'$text','$source','$author')";
   //if (mysqli_query($con, $sql)) {
    //echo "New record created successfully";
    //} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($con);
    //}
    //print json contnt for testing
    //1print_r($date);
    //print_r($source);
    //print_r($author);
    //print_r($json);
?>
