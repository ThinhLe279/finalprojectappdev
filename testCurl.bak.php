<?php
$name = $_POST["name"];
$proj = $_POST["project"];
$today = date("Y-m-d H:i:s");
$rec = $today . ' ' . $name . ' ' . $proj . "\n";

$fname = "testCurl.txt";
if (file_exists($fname))
	$fp = fopen($fname, "a");
else
	$fp = fopen($fname, "w");

fwrite($fp, $rec);
fclose($fp);
echo "Data is Recorded!";

 ?>
