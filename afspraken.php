<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p3-klanten.php</title>
</head>
<body>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$database =  "kapsalon";
$conn = new mysqli($host, $user, $pass, $database);
if($conn->connect_error){
    echo $conn->connect_error;
}
$sql = "SELECT * FROM afspraken";
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_row()) {
      echo  "<a  href='afspraken.php?id=" . $row[1] . "'>" . " " . $row[2] . " " . $row[3] . "</a>" . "<br>";
    }
}
$result->close();
$conn->close(); 
?>
</body>
</html>