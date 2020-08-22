<?php
$con = mysqli_connect("sql200.epizy.com","epiz_22042869","vMvKLOGK0Dv0","epiz_22042869_client");
if(isset($_POST['register'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

$query = "INSERT into user (name,email,phone,subject,comment)
		  value('$name', '$email', '$phone', '$subject', '$comment')";
		  echo "$query";

		  mysqli_query($con, $query);
		header('Location: index.html');
}
?>