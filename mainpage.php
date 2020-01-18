

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.img1 {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 40px;
  font-weight: 900;
  font-family: Courier New;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="mainpage.php">Home</a></li>
  <li><a href="reservations.php">Reservations</a></li>
  <li><a href="locations.php">Location & Hours</a></li>
  <li><a href="orders.php">Order Online</a></li>
  <li style="text-align: right;"> <a href="">Welcome <?php echo $_SESSION ['username']?> </a></li>
</ul>


<div class="img1">
<img src="https://cdn.pixabay.com/photo/2016/04/09/09/22/pizza-1317699_1280.jpg" alt="Pizza" width="100%" height="400">
<div class="centered"><b>THE </br>PIZZA RESTAURANT</b></div>
</div>


</body>
</html>
