<html>
<head>
	<title>Registartion Form</title>
</head>
<style >
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body{
	background: url("https://img.freepik.com/free-photo/crop-pizza-black_23-2147749510.jpg?size=626&ext=jpg");
	color:silver;
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=date]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  position: center;
   border-radius: 12px;

}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;

}

/* Set a style for all buttons */
button {
  background-color:lightgrey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2px;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  position: center;

}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: lightgrey;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 20%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

.reg-box{
	max-width:1000px;
	margin: 100px auto;
	float: none;

}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.img{
	margin-top:10px; 
}
</style>
<body>


      <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwW2QJ-5_qHVCcfP1zl2aphMA1OLwQURN23h7w_C6Vom5sG5TK" width="200px" height="100px" ></center>
      <h1 style="font-size: 40px"><center>Sign Up</center></h1>
      <p><center>Please fill in this form to create an account.</center></p>
      <hr>
      <form action="registration.php" method="post">
      <div class="reg-box">
      
      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="firstname" required>

      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter last name" name="lastname" required>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="passwordrepeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="passwordrepeat" required>
      
      <label for="gender"><b>Gender</b></label>
      <input type="radio" name="gender" value="male" >
           <span> Male </span>                                          
       <input type="radio" name="gender" value="female">
              <span>Female </span> </br></br>                                      
                                                
      <label for="DOB"><b>Date of Birth</b></label>
      <input type="Date" placeholder="Enter Date of Birth" name="DOB" required><br><br>

      <label for="secret"><b>Secret</b></label>
      <input type="password" placeholder="Enter secret word" name="secret" required>


      

      <p><center>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</center></p>

      <div class="clearfix" >
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="color: black"><center>Cancel</center></button>
        <button type="submit" class="signupbtn" style="color: black"><center>Sign Up</center></button>
      </div>
  </div>
    </div>
  </form>
</div>
</div>


</body>
</html>



