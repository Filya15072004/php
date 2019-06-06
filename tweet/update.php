<?php 
$connect = mysqli_connect('127.0.0.1','root','','dany_ch_15');
$qiery = mysqli_query($connect,"UPDATE tweet SET text ='". $_POST['text'] ."' WHERE id ='" . $_POST['id'] . "'");

header('Location: http://filya/tweet/twitter.php');
?>