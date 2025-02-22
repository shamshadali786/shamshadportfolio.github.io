<?php
error_reporting(0);

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];

	$to = 'sa8650984@gmail.com';
	$subject = $subject;
	$message = "Name:" . $name . "\n" . "Subject:" . $subject . "\n\n" . "wrote the following:" . "\n\n" . $msg;
	$headers = "From:" . $email;

	if (mail($to, $subject, $message, $headers)) {
		echo "<script> alert('Sent successefully !! Thank You " . "" . $name . ", We will contact You shortlly'); </script>";

?>
		<!-- this is used for refer back page and referesh -->
		<META http-equiv="Refresh" content="0; url=https://workdemos.000webhostapp.com/contact-ali.html">
<?php
	} else {
		echo "<script> alert('somthing went wrong!!'); <script>";
	}
}

?>