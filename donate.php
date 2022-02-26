<?php

$Name = $_GET['Name'];
$amount = $_GET['amount'];
$cardno = $_GET['cardno'];
$expdate=$_GET['expdate'];
$cvv=md5($_GET['cvv']);

echo $Name."<br>";
echo $amount."<br>";
echo $cardno."<br>";
echo $expdate."<br>";
echo $cvv."<br>";

$conn=new mysqli('localhost','root','','donate');
if($conn->connect_error){
    die('connection Falied:'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into imdonations(Name,amount,cardno,expdate,cvv)values(?,?,?,?,?)");
    $stmt->bind_param("ssiii",$Name,$amount,$cardno,$expdate,$cvv);
    $stmt->execute();
    echo "danation successffully";
    $stmt->close();
    $conn->close();

}


 ?>
