<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hlasovanie";


$countsuperman=0;
$countblackwidow=0;
$countdeadpool=0;
$countspiderman=0;



$conn = new mysqli($servername, $username, $password, $dbname);

$count;
 

if (isset($_POST["checkbox"]))  {

if (isset($_POST["radio"]))  {
	



echo "You voted for: ";
  echo  $_POST['radio'];



if ($_POST["radio"] =="batman") {
$countbatman=0;
 $countbatman++;



  $sql="UPDATE hlasovanie SET batman=$countbatman";

  $result = $conn->query($sql);
  


}


$case = $_POST['radio'];


$sql = "SELECT batman from hlasovanie";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div> Batman Votes: " . $row["batman"]. "</div>";
    }
} else {
    echo "1 results";
}

$sql = "SELECT superman from hlasovanie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div> Superman Votes: " . $row["superman"]. "</div>";
    }
} else {
    echo "1 results";
}
$sql = "SELECT blackwidow from hlasovanie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div> Black Widow Votes: " . $row["blackwidow"]. "</div>";
    }
} else {
    echo "1 results";
}



$sql = "SELECT deadpool from hlasovanie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div> Deadpool Votes: " . $row["deadpool"]. "</div>";
    }
} else {
    echo "1 results";
}
$sql = "SELECT spiderman from hlasovanie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div> Spiderman Votes: " . $row["spiderman"]. "</div>";
    }
} else {
    echo "1 results";
}


}
else
  echo "You didnt select.";



}


else
  echo "You didnt confirmed Terms";
$conn->close();
?>


</body>
</html>