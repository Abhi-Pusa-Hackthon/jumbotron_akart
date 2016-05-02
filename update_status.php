<?php include 'dbconfig.php';?>
<?php
session_start();
echo "we are here in the  data";
$username=$_SESSION['username'];
$p_name= $_POST['name'];
$status=$_POST['status'];
echo $username;
echo $status;

  try {
    $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
    $sql="UPDATE new_order SET status=:status where customer=:username and name=:name;";
    $query= $conn->prepare($sql);
    $result=$query->execute(array(
                                ":status"=>$status,
                                ":username"=>$username,
                                ":name"=> $p_name
                              ));
    if($result){
      echo "Successfully updated the data";
      
    }
  } catch (PDOException $e) {
    echo "Some error happened in connecting to the database";
  }
?>
