<!DOCTYPE html>
<html>
<head>
	<title>Login Form </title>
<style>
body {
	background: rgba(0, 128, 0, 0.3)
	}
form	{
	text-align:center;
	}

input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #35858B;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=text]:focus {
  background-color: #3E8E7E;
  color : white;
}

.cancel:link, .cancel:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.cancel:hover, .cancel:active {
  background-color: #9B0000;
}

.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.button:hover {
  background-color: #35858B;
  color: white;
}


</style>

</head>

<body>

<img src="smektis.jpg" height="400px" width="1265">

<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
<button class="button">Submit</button>
<a class="cancel" href="home.php">Cancel</a>

</form> 
</body>
</html>

