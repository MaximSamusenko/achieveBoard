<?
/*	define("serverUrl", "localhost");//"mysql.hostinger.ru";
	define("userName", "root");//"u229117890_root";
	define("pass", "");//"achieveBoard";
	define("dbName", "achieveboard");//"u229117890_achbd"; */
	define("serverUrl", "mysql.hostinger.ru");
	define("userName", "u229117890_root");
	define("pass", "achieveBoard");
	define("dbName", "u229117890_achbd");
	
	function CleanString($value)
	{
		$connection = mysql_connect(serverUrl, userName, pass) or die('Cant connect : ' . mysql_error());;		
		$db = mysql_select_db(dbName, $connection) or die('Cant select DB: ' . mysql_error());
		if ( get_magic_quotes_gpc() )
		{
			$value = stripslashes( $value );
		}
		// escape things properly
		$result = mysql_real_escape_string( $value, $connection );
		mysql_close($connection);
		return $result;
	}
	
	function ExecQueryAndReturnResult( $query )
	{
		$connection = mysql_connect(serverUrl, userName, pass) or die('Cant connect : ' . mysql_error());;		
		$db = mysql_select_db(dbName, $connection) or die('Cant select DB: ' . mysql_error());
		$rows = mysql_query($query);
		
		while($row = mysql_fetch_array($rows, MYSQL_NUM))
		{
			$result[] = $row;
		}
		mysql_close($connection);
		return $result;
	}

	function ExecQuery($query)
	{
		$con = mysqli_connect(serverUrl, userName, pass,dbName);
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		if (!mysqli_query($con,$query))
		{
			die('Error: ' . mysqli_error($con));
		}
		mysqli_close($con);
	}
?>