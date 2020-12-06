<html>
<body>
<form action="exam.php" method="GET">
	NAME:<input type="text" name="name">
EMAIL:<input type="text" name="email">
<input type="submit" name="send">
</form>
welcome <?php echo $_GET["name"]; ?> <br>
your email <?php echo $_GET["email"]; ?> 
</body>
</html>
