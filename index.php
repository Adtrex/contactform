<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" id="fr" action="contactprocess.php" method="POST">
	<label>FULL NAME</label>
		<input type="text" name="name" id="name" value="" required />
	<br />
	<br />
	<label>EMAIL</label>
		<input type="email" placeholder="adtrex@gmail.com" name="email" id="email" value="" required />
	<br />
	<br />
	<label>SEX</label>
	<br />
  <input type="radio" name="gen_male" value="male" id="gen_male">
  <label for="male">Male</label><br>
  <input type="radio" name="gen_female" value="female" id="gen_female"> Female
    <label for="female">Male</label><br>
  <input type="radio" name="gen_other" value="other" id="gen_other"> 
    <label for="other">Male</label><br>
  	<br />
	<br />
		<textarea placeholder="What do you have to say?" name="message" id="message" value=""></textarea>
	<br />
	<br />
	<input type="submit" value="submit" />

</form>
</body>
</html>