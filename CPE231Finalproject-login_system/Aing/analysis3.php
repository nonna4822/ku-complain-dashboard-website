<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jobtrainning');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT COUNT(s.staffid)AS CountStaff,b.branchname
FROM staff s JOIN branch b on s.branchid=b.branchid
WHERE s.position='teacher'
GROUP BY b.branchid;");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
while ($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  $data[] = $rs;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>