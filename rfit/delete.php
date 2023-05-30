<?php
$conn=new mysqli('sql304.epizy.com','epiz_34074149','PE1lXAJcbVr','epiz_34074149_rfit');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
session_start();
$servername = "sql304.epizy.com";
$username = "epiz_34074149";
$password = "PE1lXAJcbVr";
$result='';
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
try
{
    $con=new PDO("mysql:host=$servername;dbname=epiz_34074149_rfit",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
if(isset($_POST['del_btn']))
{
    echo "inside isset";
    $id=$_SESSION['id'];
    // $query = " ";
    // $query_run = mysqli_query($connection, $query);
    $stmt = $con->prepare("DELETE FROM client WHERE user_id='$id'");
$stmt->execute();
 
}

?>