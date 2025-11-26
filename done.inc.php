<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
  $cardholder = $_POST['cardholder'];
  $cardnumber = $_POST['cardnumber'];
  $expirymonth = $_POST['expirymonth'];
  $expiryyear = $_POST['expiryyear'];
  $cvv = $_POST['cvv'];
  $amount = $_POST['amount'];
  try{
      require_once"payment.php";

    $query = "INSERT INTO payment (cardholder, cardnumber, expirymonth, expiryyear, cvv, amount) VALUES
    (?, ?, ?, ?, ?, ?);"; 
    
    
    $stmt = $pdo->prepare($query);
   
    $stmt->execute([$cardholder, $cardnumber, $expirymonth, $expiryyear, $cvv,$amount]);

    $pdo = null;
    $stmt = null;
    header("Location: ../pay.php");
    die();

    
  }catch(PDOException $e){
    die("Query failed: ". $e->getMessage());
  }

}else{
    header("Location: ../pay.php");
}


?>

