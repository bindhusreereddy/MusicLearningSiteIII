<?php
$firstname = $_POST['firstname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$qual = $_POST['qual'];
$lang = $_POST['lang'];
//echo $firstname."<br>".$email."<br>".$gender."<br>".$qual."<br>".$lang;
	
if(!empty($firstname)|| !empty($phone)|| !empty($email)|| !empty($gender)|| !empty($qual)|| !empty($lang) ){
	//echo "inside if";
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "tutors";
	
	//$port = "3306";
	//create a connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT = "SELECT email From tablenew Where email = ? Limit 1";
		$INSERT = "INSERT Into tablenew (firstname, phone, email, gender, qual, lang) values(?, ?, ?, ?, ?, ?)";
		//prepare a statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0){
			//$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssss", $firstname, $phone, $email, $gender, $qual, $lang);
			$stmt->execute();
			echo "New Record Inserted Successfully";
		}
		else{
			echo "Someone already registered using this email";
		}
		$stmt->close();
		$conn->close();
	}
}
else{
	echo "All field are Required";
	die();
}
?>