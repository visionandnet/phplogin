<?php session_start();

	if(isset($_POST['Submit'])){

		$logins = array('username1' => 'password1','username2' => 'password2');
		

		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		

		if (isset($logins[$Username]) && $logins[$Username] == $Password){

			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {

			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <?php if(isset($msg)){?>
    <?php } ?>
      Username
      <input name="Username" type="text">
      Password
      <input name="Password" type="password">
      <input name="Submit" type="submit" value="Login">
</form>
</body>
</html>
