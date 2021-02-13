<?php
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
		$sql = "SELECT firstname, phone, email, gender, qual, lang FROM tablenew where qual='Drums'";
		$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "firstname: " . $row["firstname"]."<br> - phone: " . $row["phone"]."<br> email:" . $row["email"]."<br> - gender: ". $row["gender"] . "<br> - qual: ". $row["qual"] . "<br> - lang: ". $row["lang"] . "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	}
?>

