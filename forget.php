<!DOCTYPE html>
<html>

<head>
	<title>forget.php</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.jumbo-design {
			clip-path: polygon(41% 0, 84% 0, 100% 0, 99% 96%, 71% 83%, 25% 97%, 0 71%, 0 0);
		}

		.b-color {
			background-color: #ff1f1f !important;
		}
	</style>
</head>

<body class="">
	<h1 style="color: red" align="center">
		For retriving password
	</h1>
	<hr>
	<h2 style="color: blue">click all the needed information for changing the password<h2>
			<div class="text-center card">
				<form method="post" action="forgetback.php">
					<div id=bum>
						<label align="center" style="color: white">email :</label>
						<input type="email" name="uemail" placeholder="email" required="">
						<br>
						<label align="center" style="color: white">new pass :</label>
						<input type="password" name="pass" placeholder="new pass" required="">
						<br>
						<br>
						<center><input type="submit" class="btn btn-primary" name="submit" value="submit"></center>
				</form>
			</div>
</body>

</html>