<?php 
$connect = mysqli_connect('127.0.0.1', 'root','','dany_ch_15');

$que = "DELETE FROM tweet WHERE id ='" . $_POST['id'] . "'";

mysqli_query($connect, $que);

header('Location: http://filya/tweet/twitter.php');

?>
