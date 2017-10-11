<?php
	$date = date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";
	echo "<br>";
	$n_date = str_replace('-', '/', $date);
	echo "2) Replaced every \"-\" in \$date with \"/\" : ";
	print_r($n_date);
	echo "<br>";
	if ($n_date > $tar)
	{
	echo "3) Compare \$date to \$tar: The future."."<br>";
	}
	elseif ($n_date < $tar)
	{
	echo "3) Compare \$date to \$tar: The past."."<br>";
	}																	
	else																	
	{																	
	echo "3) Compare \$date to \$tar: Oops."."<br>";
	}
	$findme = '/';
	$pos = strpos($n_date,$findme);
	$positions = array();
	$pos = -1;
	while (($pos = strpos($n_date, $findme, $pos+1)) !== false) {
	$positions[] = $pos;
	}
	$result = implode( ' ' , $positions);
	echo "4) The character '$findme' was found in the string \$date"."<br>"."and exists at position(s): ";
	print_r($result);
	echo "<br>";
	$len = strlen($tar);
	echo "6) The length of string \$tar: ";
	print_r($len);
	echo "<br>";
	echo "7) The ASCII value of first character in \$tar string: ";
	print_r(ord($tar));
	echo "<br>";
	echo "8) The last two character in \$date string: ";
	print_r(substr($date, -2));
	echo "<br>";
	$array = explode("/", $n_date);
	echo "9) Date Array: ";
	print_r($array);
	echo "<br>";
?>
