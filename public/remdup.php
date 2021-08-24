<?php

// soft delete duplicates from the database
// 25 16 * * * nohup php /var/www/html/remdup.php &
date_default_timezone_set("Asia/Kolkata");

$servername = "localhost";
$username = "tatauser";
$password = "M#VYU456";
$dbname = "tataaialife";
$datestamp = date("Y-m-d h:i:sa");
$msg = $datestamp." Start\n";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE leads SET leads.deleted_at = now() WHERE ID NOT IN (SELECT MAX(ID) AS MaxRecordID FROM (SELECT * FROM leads) AS selfleads GROUP BY contact) and leads.deleted_at is NULL";

if ($conn->query($sql) === TRUE) {
  $msg .= "\n".$datestamp." Records updated successfully";
} else {
  $msg .= "\n".$datestamp." Error updating record: " . $conn->error;
}

$myfile = fopen("/var/www/html/public/duplicates.txt", "a") or die("Unable to open file!");
fwrite($myfile, $msg);
fclose($myfile);

$conn->close();