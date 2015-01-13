
<?php
$password=trim($_POST["psw"]);
if($password=="lang8524560")
{
	$lifetime=3600;
	session_set_cookie_params($lifetime);

	$_SESSION["admin"]=$password;
	echo "<script>alert('Ok.');location.href='index.php'</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<form action="" method="post">
<input name="psw" type="text" />
<input name="" type="submit" value="Login" />
</form>
</body>
</html>