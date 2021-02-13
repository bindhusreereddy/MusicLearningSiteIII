<?php
$name = $_POST['name'];
$phn = $_POST['phn'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];

if(!empty($name)|| !empty($phn)|| !empty($mail)|| !empty($msg) ){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "tutors";
	
	
	//create a connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$INSERT = "INSERT Into connect (name, phn, mail, msg) values(?, ?, ?, ?)";
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("siss", $name, $phn, $mail, $msg);
		$stmt->execute();
		echo "Thank you,We'll Reach out as soon as possible";
		$stmt->close();
		$conn->close();
	}
}
else{
	echo "All field are Required";
	die();
}
?>