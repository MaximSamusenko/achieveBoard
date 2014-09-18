<?
	define("eMail", "all-by-my-self@yandex.ru");
	
	function SendEmail()
	{
	  $to = "all-by-my-self@yandex.ru";
	  $subject = "This is subject";
	  $message = "This is test message.";
	  
	  # Get a random 32 bit number using time() as seed.
	  $num = md5( time() );

	  # Define the main headers.
	  $header = "From:all-by-my-self@yandex.ru\r\n";
	  $header .= "MIME-Version: 1.0\r\n";
	  $header .= "Content-Type: multipart/mixed; ";
	  $header .= "boundary=$num\r\n";
	  $header .= "--$num\r\n";

	  # Define the message section
	  $header .= "Content-Type: text/plain\r\n";
	  $header .= "Content-Transfer-Encoding:8bit\r\n\n";
	  $header .= "$message\r\n";
	  $header .= "--$num\r\n";

	  # Send email now
	  $retval = mail ( $to, $subject, "", $header );
	}
?>