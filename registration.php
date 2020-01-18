<?php



$conn = mysqli_connect("localhost","root","","userregistration");

/*if (!$conn){
	die("Connection failed:" .mysqli_error());
}else{
	echo "Registration successful";
}*/




	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordrepeat = $_POST['passwordrepeat'];
	$gender = $_POST['gender'];
	$DOB = $_POST['DOB'];
	$secret = $_POST['secret'];
	




if (empty($firstname) || empty($lastname) || empty($username) ||empty($password) || empty($passwordrepeat) || empty($email)
|| empty($gender) ||empty($DOB) || empty($secret) ) {
	header("location: ../signup.html?error=emptyfields");
		exit();
	}
	


 else if(!preg_match("/^[a-zA-Z]*$/",$firstname ) || !preg_match("/^[a-zA-Z]*$/",$lastname )){
	header("location: ../signup.html?error=invalidname");
		exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$username )){
	header("location: ../signup.html?error=invalidusername");
		exit();
}

else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("location: ../signup.html?error=invalidemail");
		exit();
}
 
 else if($password !== $passwordrepeat){
 	header("location: ../signup.html?error=Passwordcheck");
		exit();
	}




 else{
 	$sql = "INSERT INTO user (firstname, lastname ,email,password,passwordrepeat,DOB,gender,secret, username)
VALUES ('".$firstname."','".$lastname."','".$email."','".$password."','".$passwordrepeat."','".$DOB."','".$gender."', '".$secret."','".$username."')";

if (mysqli_query($conn, $sql)) {
    header("location: ../registration/login.html");
    echo "Signup succesful";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
		exit();

}

?>
