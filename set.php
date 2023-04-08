<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php
	$connect = mysqli_connect('localhost', 'u1985655_test1', 'qwerty123', 'u1985655_test1');
	$id = $_SESSION['user']['id'];
	$number = mysqli_query($connect, "UPDATE `users` SET `zak`=`zak`+`num` WHERE `Id`=0");
?>