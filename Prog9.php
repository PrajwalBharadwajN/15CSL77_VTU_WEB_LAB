<?php
 $allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
 $statesArray = [];
 $states1 = explode(' ', $allTheStates);
 foreach ($states1 as $state) {
 	if (preg_match('/xas$/', ($state))) {
 		$statesArray[0] = ($state);
 		echo "<br>9a. The states that ends in xas:" . $state;
 	}
 	if (preg_match('/^k.*s$/i', ($state))) {
 		$statesArray[1] = ($state);
 		echo "<br>9b. The states that begins with k ans ends in s:" . $state;
 	}
 	if (preg_match('/^M.*s$/', ($state))) {
 		$statesArray[2] = ($state);
 		echo "<br>9c. The states that begins with M and ends in s:" . $state;
 	}
 	if (preg_match('/a$/', ($state))) {
 		$statesArray[3] = ($state);
 		echo "<br>9d The states that ends in a:" . $state;
 	}
	echo "<br>";
 }
 print_r($statesArray);
?>
