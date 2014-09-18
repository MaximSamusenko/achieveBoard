<?	
	include_once "DBManager.php";
	include_once "EMailManager.php";

	if (isset($_GET["action"]))
	{
		switch($_GET["action"])
		{
			case "login":
				Login();
				break;
			case "register":
				Register();
				break;
			default:
				exit("Unknown param action=".$_GET["action"]);
		}
	}
	else
	{
		exit("Empty params");
	}
	
	function Login()
	{
		if(!isset($_GET["login"]) or !isset($_GET["pass"]))	
		{
			exit("Login or password not set");
		}
		$login = CleanString($_GET["login"]);
		$pass = CleanString($_GET["pass"]);
		$result = ExecQueryAndReturnResult("SELECT `Id` FROM `users` WHERE `Login` = '$login' and `Password` = '$pass' and `Banned` = 0");
		
		if(count($result) == 1)
		{
			session_start();
			$_SESSION['login_user']=$result[0][0];
			echo "OK";
		}
		else
		{
			exit("Wrong password");
		}
	}
	
	function Register()
	{
		if(!isset($_GET["new_login"]) or !isset($_GET["new_pass"]) or !isset($_GET["invite"]))  // не работает? как и в логине
		{
			exit("Fields not set");
		}
		$new_login = CleanString($_GET["new_login"]);
		$new_pass = CleanString($_GET["new_pass"]);
		$invite = CleanString($_GET["invite"]);
		
		$good_code = ExecQueryAndReturnResult("SELECT `Valid` FROM `invites` WHERE `InviteCode` = '$invite'");
	
		if((count($good_code) == 1) and ($good_code[0][0] == 1))
		{
			//проверим, есть ли уже пользователь с указанным именем
			$usersCount = ExecQueryAndReturnResult("Select Count(*) From `users` where `Login` = '$new_login'");
			if((count($usersCount) == 1) and ($usersCount[0][0] == 0))
			{
				ExecQuery("INSERT INTO `users`(`Login`, `Password`) VALUES ('$new_login', '$new_pass')");
				ExecQuery("UPDATE `invites` SET `Valid`=0 WHERE `InviteCode` = '$invite'");

				$result = ExecQueryAndReturnResult("SELECT `Id` FROM `users` WHERE `Login` = '$new_login' and `Password` = '$new_pass' and `Banned` = 0");	
				if(count($result) == 1)
				{
					session_start();
					$_SESSION['login_user']=$result[0][0];
					echo "OK";
				}
			}
			else
			{
				echo "User with the same name already exist";
			}
		}
		else
		{
			echo "Wrong invite code";
		}
	}
?>