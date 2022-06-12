<?php

$Name=$_POST["Name"]; 
$Email=$_POST["Email"];
$Comment=$_POST["Comment"];
$rating=$_POST["rating"];
$student=$_POST["student"];

$conn = new mysqli('localhost', 'root','','php');
if ($conn->connect_error) 
{
echo "$conn->connect error";
die ("Connection Failed :". $conn->connect_error); 
} 
else 
{ 
$stmt = $conn->prepare ("insert into php(Name, Email, Comment, rating, student) values (?, ?, ?, ?, ?)"); 
$stmt->bind_param("sssss", $Name, $Email, $Comment, $rating, $student); 
$execval = $stmt->execute(); 
echo "Feedback reported successfully...";
$stmt->close(); 
$conn->close();
}

$aCommon = $_POST['common'];
  if(empty($aCommon)) 
  {
    echo("It's okay.");
  } 
  else 
  {
    $N = count($aCommon);

    echo("You selected $N option(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aCommon[$i] . " ");
    }
  }

?>