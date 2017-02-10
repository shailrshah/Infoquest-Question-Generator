<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
	if (isset($_SESSION["login"])) {
 		 echo "set";	
		} else {
  			echo "not set";
  			$_SESSION["login"]="false";
		}
	//$user=$_POST["firstname"];
	//echo $user;
	//$_SESSION["login"]="true";
	//echo $_SESSION["login"];
// Echo session variables that were set on previous page
//echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
//echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
		session_destroy();
?>

</body>
</html