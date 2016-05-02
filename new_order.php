<?php include 'dbconfig.php';?>
<?php
  session_start();
  $p_name=$_POST['name'];
  $p_company=$_POST['company'];
  $p_price=$_POST['marketprice'];
  $p_status="Originated";
  $timestamp=date('Y-m-d h:i:sa');
  $p_seller=$_POST['seller'];
  $p_deliveryperson = $_POST['deliveryperson'];
  $p_customer=$_SESSION['username'];
  //echo $p_name;
  // echo $p_name;
  // echo $p_deliveryperson;


  try {
    $conn = new PDO("mysql:host={$dbHost};dbname={$dbname}",$dbUser,$dbPass);
    $sql="INSERT INTO new_order (name,company,status,price,customer,seller,delivery_person,timestamp) VALUES(:name,:company,:status,:price,:customer,:seller,:delivery_person,:timestamp);";
    $query= $conn->prepare($sql);
    $result=$query->execute(array(
                                ":name"=>$p_name,
                                ":company"=>$p_company,
                                ":status"=>$p_status,
                                ":price"=>$p_price,
                                ":customer"=>$p_customer,
                                ":seller"=>$p_seller,
                                ":delivery_person"=>$p_deliveryperson,
                                ":timestamp"=>$timestamp
                              ));
   if($result){
     echo "Successfully added the data";
     //header("Location:./placed_order.php");
   }
  } catch (Exception $e) {
  }
?>
