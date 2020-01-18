<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="syle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<style>
	
body{
	margin: 0;
	padding:0;
	background: url("https://image.freepik.com/free-photo/delicious-meat-mushroom-pizza-with-fork-knife-dark-background_23-2147922417.jpg");
  color: white;
	/**background position: center;
	background size: cover;
	font-family: sans-serif;
	color: white;*/
	}

 input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 12px;
}

button {
  background-color: #D3D3D3;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  border-width: 12px;
}



button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #D3D3D3;
  border-radius: 12px;
}
.login {
  background-color: #D3D3D3;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  border-width: 12px;
  color: black;
}


.container {
  padding: 12px;
  max-width: 70%;
  max height: 60%
}

span.psw {
  float: right;
  padding-top: 12px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width:100%;
  }
}
</style>
</head>
<body>

<h2><center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwW2QJ-5_qHVCcfP1zl2aphMA1OLwQURN23h7w_C6Vom5sG5TK" width="200px" height="100px"  ></center></h2>
<h2><center>Sign In</center></h2>
<hr>
<h4><center>Enter your username and password to login,or<a href="http://localhost/registration/signup.html"> create an account</a> to get started<center></center></h4>


 <form action="validation.php" method="post">

  <div class="container" >
    
    <label for="username"><b>Username</b></label>
    <input type="text" style="color: black" placeholder="Enter Username" name="username" required >

    <label for="password"><b>Password</b></label>
    <input type="password"style="color: black" placeholder="Enter Password" name="password" required>


    <input type="submit" name="login" id="login" value="login" style="width: 300px; height:50px; style="color: black" background-color:##FFEFD5; " >
        
    
    <label>
      <input type="checkbox" checked="" name="remember"> Remember me
    </label>

  </div>
</form>

  <div class="container" style="background-color:#f1f1f1 width: 400px">
    <button type="button" class="cancelbtn" style="color: black">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>


</body>
</html>