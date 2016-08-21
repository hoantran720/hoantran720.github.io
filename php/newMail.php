<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
		if(mail("kries720@gmail.com", $_POST["subject"], $_POST["body"], $headers))
                     echo "Mail successful!";
                else
                     echo "Mail unsuccessful";
	}
?>