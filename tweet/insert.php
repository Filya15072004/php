<?php 
$connect = mysqli_connect('127.0.0.1','root','','dany_ch_15');

$query = mysqli_query($connect,"INSERT INTO tweet(title,text,img,logo) VALUES ('i mogu','" . $_POST['text'] . "','viverna', 'lal')");

header('Location: http://filya/tweet/twitter.php');
?> 