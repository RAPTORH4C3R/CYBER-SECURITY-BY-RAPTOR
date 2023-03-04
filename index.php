<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		
		.container {
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			margin: auto;
			margin-top: 50px;
			max-width: 400px;
		}
		
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			border-radius: 5px;
		}
		
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 100%;
		}
		
		button:hover {
			opacity: 0.8;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form action="" method="post">
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit">Login</button>
		</form>
	</div>
</body>
</html>
