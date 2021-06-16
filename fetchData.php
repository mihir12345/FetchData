 


 <?php
$mysqli = new mysqli("localhost:3310","pma","","myDB");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT country_code,country_name, state, place, latitude, longitude FROM Br ";
$result = $mysqli -> query($sql);



// Associative array
$row = $result -> fetch_All(MYSQLI_ASSOC);
//printf ("%s %s %s\n", $row["country_code"], $row["country_name"], $row["state"], $row["state"], $row["place"],);



echo json_encode($row);
$mysqli -> close();
?> 