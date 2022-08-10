<?php
include "user-go-contact.php";

if (isset($_POST['submit'])) {
	$to = "nulz404@proton.me";
	$from = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$subject = "Form submission";
	$subject2 = "Copy of your form submission";
	$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
	$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to, $subject, $message, $headers);
	mail($from, $subject2, $message2, $headers2);
	echo "<script>alert('Mohon Maaf Ini Hanya Tampilan')</script>";
}
?>

<!DOCTYPE html>
<head>
	<title>Contact Developers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Contact Dev ibnusaid.my.id">
</head>
<body>
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap");
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body {
			background: rgba(88,210,241,0.50);
		}
		form {
			display: flex;
			flex-wrap: wrap;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 2rem;
			line-height: 20px;
		}
		form b {
			-webkit-text-fill-color: transparent;
			-webkit-text-stroke-width: 0.70px;
			-webkit-text-stroke-color: #000;
			letter-spacing: 1px;
			padding: 2rem 0 0;
		}
		input[type=text] {
			background: rgba(255,255,255,0.3);
			width: 90%;
			height: 40px;
			padding: 5px;
			border-radius: 15px;
			outline: none;
			border: 1px solid rgba(0,0,0,0.5);
			box-shadow: 0 0 15px rgba(255,255,255,0.3);
		}
		input[type=text]:hover {
			background: transparent;
			box-shadow: 0 0 20px rgba(0,0,0,0.2);
		}
		textarea {
			background: rgba(255,255,255,0.3);
			width: 90%;
			height: 250px;
			padding: 5px;
			border-radius: 15px;
			box-shadow: 0 0 15px rgba(255,255,255,0.3);
			outline: none;
		}
		textarea:hover {
			background: transparent;
			box-shadow: 0 0 20px rgba(0,0,0,0.2);
		}
		input[type=submit] {
			font-size: 20px;
			margin: 2rem;
			padding: 3px 10px 3px;
			border: 1px solid rgba(0,0,0,0.5);
			border-radius: 10px;
		}
	</style>
	<form action="" method="post">
		<b>Nama Depan</b><input type="text" name="first_name">
		<b>Nama Belakang</b><input type="text" name="last_name">
		<b>Email</b><input type="text" name="email">
		<b>Pesan</b><textarea name="message"></textarea>
		<input type="submit" name="submit" value="Kirim">
	</form>

</body>
</html>