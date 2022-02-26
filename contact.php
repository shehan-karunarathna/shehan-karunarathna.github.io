<?php

	$name = $_GET['name'];
	$email = $_GET['email'];
	$companyName = $_GET['companyName'];
	$contactNo = $_GET['contactNo'];
	$message = $_GET['message'];

/*Database connection*/
$conn = new mysqli('localhost','root','','intimacy');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contact_us(name,email,companyName,contactNo,message)
		values(?,?,?,?,?)");  
	$stmt->bind_param("sssis",$name, $email, $companyName, $contactNo, $message);  
	$stmt->execute();
	echo "Thank you for your feedback..!";
	$stmt->close();
	$conn->close();
}

?>
