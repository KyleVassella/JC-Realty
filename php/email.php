<?php
    $to = $_POST['kylevassella@gmail.com'];
	$subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    mail($to, $subject, $message, "From: " . $name, $email);

	echo "Your email has been sent";

?>