<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root' , '' , 'dany_ch_15'); ?>
<div class="container bg-light line1">
	<div class="row">

	<!--левая колонка-->
	<div class="col-3 line ">
	
	<div class="row mb-5 bg-light">
		<div class="col-3">
			<img src="images/avatar.jpg" class="rounded-circle mt-3"> 
		</div>
		<div class="col-9">
			<h6 class="mt-3"><a href="">Menya zovut Yarik</a></h6>
			<h6 class="mt-3"><a href="">@Menya zovut Yarik</a></h6>
		</div>
	</div>
	<div class="row bg-light">
		<div class="col-3">
		<h6 class="mr-3"><a href="">Твиты</a></h6>
		<p><a href="">666</a></p>
		</div>
		<div class="col-9">
				<h6 class="ml-5"><a href="">Друзья</a></h6>
				<p class="ml-5"><a href="">У вас нет друзей</a></p>
				</div>
	</div>
	<!--пост-->
	<div class="bg-light mb-3 mt-4 ">
		<h3>Актуальные темы для вас</h3>
		
	</div>


	</div>
	<div class="col-6 line">

<form action="insert.php" method="POST">
		<input type="" name="text">
		<button class="btn-success btn-sm btn">Twit</button>
</form>

<?php $query = mysqli_query($connect,'SELECT * FROM tweet ORDER BY id DESC'); ?>

<?php  for ($i = 0; $i < $query->num_rows; $i++) { 
	 $res = $query->fetch_assoc();	
	
		 ?>

	<div class="row mt-4">	
				<a class="ml-3" href=""><img src="images/post2.png"></a>	
	<div>
	 	<h2 class="ml-3"><?php echo $res['text']; ?></h2>
	</div>

			<?php echo $res['id']?>

		<!---CENTER--->
<form method="POST" action="del.php" class="ml-5 mr-4">
	<?php echo '<input type="" name="id" value="' . $res['id'] .'"style= "display: none">' ?>
			<button class="btn btn-secondary btn-sm ">Del</button>
</form>

<form method="POST" action="1.php">
	<?php echo '<input type="" name="text" value="' . $res['text'] .'" style= "display:none" >'?>
	<?php echo '<input type="" name="id" value="' . $res['id'] .'" style= "display:none" >'?>
	<button class="btn btn-secondary btn-sm">Create</button>
</form>
			
		<div class="row">

			<div class="col-3 mt-5">
				
					<img src="images/retweet.png"> 
			</div>

			<div class="col-3 mt-5">
					<img src="images/like.png">
					
			</div>
			<div class="col-3 mt-5">
					<img src="images/envelope.png">
					
			</div>
			
				
		</div>
				
		
	
		</div>
<?php } ?>
		</div>
	
	</div>
</div>
</body>
</html>