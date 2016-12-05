<!-- $_POST has been temporarily replaced with $_GET because $_POST is not allowed on Github servers. -->

<?php
    $to = $_GET['kylevassella@gmail.com'];
	$subject = $_GET['subject'];
    $message = $_GET['message'];
    $name = $_GET['name'];
    $email = $_GET['email'];

    mail($to, $subject, $message, "From: " . $name, $email);

	echo "Your email has been sent";

?>