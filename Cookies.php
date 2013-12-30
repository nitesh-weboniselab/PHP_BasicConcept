<?php

$name = $_POST['userName'];
 $side= $_POST['webSide'];
setcookie("CookiesTest", $name);
setcookie("CookiesTestOne",$side)


if(isset($_COOKIE["CookiesTest"])){
	 /*$strName = $_COOKIE["CookiesTest"];
	 if ($name === $strName) {
	 	 echo "You are alredy logied in";
*/
	 	  echo "Welcome " . $_COOKIE['CookiesTest']. "!<br>";
	 }
      else {
      	 echo "successfully logied in";
      }


}



?>