<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php 

$link = mysqli_connect("localhost", "root", "", "hlasovanie");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



if (isset($_POST['checkbox']))  {

if (isset($_POST['radio']))  {
	
echo "You voted for: ";
  echo  $_POST['radio'];


$case = $_POST['radio'];
$sql = "INSERT INTO hlasovanie (Vote)
VALUES ('$case')";
if(mysqli_query($link, $sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

echo "<div>Batman Votes</div>";
$sql="SELECT vote FROM hlasovanie WHERE vote='Batman'";


  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  mysqli_free_result($result);


echo "<div>Superman Votes</div>";
echo "<div>Black Widow Votes</div>";
echo "<div>Deadpool Votes</div>";
echo "<div>Spiderman Votes</div>";


}
else
  echo "You didnt select.";



}


else
  echo "You didnt confirmed Terms";
mysqli_close($link);
?>


</body>
</html>