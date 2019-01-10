<html>
<head>
<title>Form 1</title>
</head>
<body>
	<form method="get" action="form_2.php" name="form1" id="form1">
		<p><label>Name: </label> <input type="text" name="name" required /></p>
		<p><label>Email: </label> <input type="email" name="email" required /></p>
		<p><label>Password: </label> <input type="password" name="pass" required /></p>
		<p><label>Contact: </label> <input type="number" name="cont" required /></p>
		<p><label>Address: </label> <textarea cols="20" rows="5" name="addr" required></textarea></p>
		<p><label>Nationality: </label> 
		<select name="nat">
		<option>Choose</option>
		<option selected>Pakistan</option>
		<option>China</option>
		<option>USA</option>
		<option>Japan</option>
		<option>UAE</option>
		<option>Canada</option>
		</select> </p>
		<p><label>Gender: </label> 
		<input type="radio" name="gen" value="Male" checked /> Male 
		<input type="radio" name="gen" value="Female"/> Female </p>
		<p><input type="submit" name="btn1" value="Submit" /></p>	

	</form>
</body>
</html>
