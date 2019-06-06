<meta charset="utf-8">
<?php $connect = mysqli_connect('127.0.0.1', 'root' , '' , 'dany_ch_15'); 

$query = mysqli_query($connect,'SELECT * FROM tweet ORDER BY id'); 

$res = $query->fetch_assoc();	

echo $res['title'];
echo $res['text'];
echo $res['logo'];
echo $res['img'];
echo $res['id'];

$res = $query->fetch_assoc();

echo $res['title'];
echo $res['text'];
echo $res['logo'];
echo $res['img'];
echo $res['id'];


?>