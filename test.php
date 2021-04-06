<?php 
	
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];

	if (!empty($email) || !empty($username) || !empty($password) || !empty($birthdate) || !empty($gender)) {

		$host = "whatif.database.windows.net";
		$dbUsername = "tarek7669";
		$dbPassword = "Tt0105275971";
		$dbname = "WhatIf_database";

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errorno().')'. mysqli_connect_error()); 
		}
		else {
			$SELECT = "SELECT Email from dbo.Person Where Email = ? Limit 1";
			$INSERT = "INSERT Into dbo.Person (Email, UserName, Password, DateOfBirth, Gender) values (?, ?, ?, ?, ?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $Email);
			$stmt->execute();
			$stmt->bind_result($Email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum == 0) {
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssds", $Email, $UserName, $Password, $DateOfBirth, $Gender);
				$stmt->execute();
				echo "New record inserted successfully";
			}
			else {
				echo "Someone already using this email";
			}
			$stmt->close();
			$conn->close();
		}
	}
	else {
		echo "All field are required";
		die();
	}

?>