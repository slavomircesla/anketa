<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hlasovanie";






 

if (isset($_POST["checkbox"]))  {
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST["radio"]))  {
	



echo "You voted for: ";
  echo  $_POST['radio'];



if ($_POST["radio"] =="batman") {



  $sql="UPDATE hlasovanie SET batman=batman+1";

  $result = $conn->query($sql);
  
}
if ($_POST["radio"]=="blackwidow") 
{
    $sql="UPDATE hlasovanie SET blackwidow=blackwidow+1";
 
 $result = $conn->query($sql);   
}
if ($_POST["radio"]=="superman") 
{
    $sql="UPDATE hlasovanie SET superman=superman+1";
 
 $result = $conn->query($sql);   
}
if ($_POST["radio"]=="deadpool") 
{
    $sql="UPDATE hlasovanie SET deadpool=deadpool+1";
 
 $result = $conn->query($sql);   
}
if ($_POST["radio"]=="spiderman") 
{
    $sql="UPDATE hlasovanie SET spiderman=spiderman+1";
 
 $result = $conn->query($sql);   
}







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
    // output data of each 
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
{
  echo "You didnt confirmed Terms";
}

?>



</body>

</html>