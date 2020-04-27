<?php

header('Content-Type: application/json');
require "includes/secret.php"; 

 // Create connection
$conn = mysqli_connect($servername, $username, $password,'crazyhap_lottery');

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$results = array(
		//   "lotteryDate" => array(),
		//    "firstBall" => array(),
		//    "secondBall" => array(),
		//    "thirdBall" => array(),
		//    "fourthBall" => array(),
		//    "fifthBall" => array(),
		//    "megaBall" => array(),
);
$query = "SELECT * FROM megamillions";


if ($res = mysqli_query($conn, $query)) { 
    if (mysqli_num_rows($res) > 0) { 
      while ($row = mysqli_fetch_array($res)) {
		$eachBall = explode(" ",$row['winningnumbers']);
	//	$results["lotteryDate"][] = $row['date'];
		$results[]   = array("date" => $row['date'],"firstBall" => $eachBall[0],'secondBall' => $eachBall[1],'thirdBall' => $eachBall[2],'fourthBall' => $eachBall[3],'fifthBall' => $eachBall[4],'megaBall' => $row['megaball']);
		// $results["secondBall"][]  = array("x" => $row['date'],"y" => $eachBall[1]);
		// $results["thirdBall"][]   = array("x" => $row['date'],"y" => $eachBall[2]);
		// $results["fourthBall"][]  = array("x" => $row['date'],"y" => $eachBall[3]);
		// $results["fifthBall"][]   = array("x" => $row['date'],"y" => $eachBall[4]);
		// $results["megaBall"][]    = array("x" => $row['date'],"y" => $row['megaball']);
		}
    } 
    else { 
        echo "No matching records are found."; 
    } 
	
	echo json_encode($results, JSON_NUMERIC_CHECK);
} 



?>
        