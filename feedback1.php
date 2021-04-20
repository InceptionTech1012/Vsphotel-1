<!doctype html>
<include("feedback.php")>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Feedback</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/fontawesome-all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="feed.css">
</head>

<body>
	<div class="title" >
		<h1> FEEDBACK </h1>
		<h2>We will consider your suggestion and improve. </h2>
	</div>
	<div class="form">
		<form action="thanks.php" method="POST">
			<input type="text" name="name"  placeholder="enter your name" required>
			<input type="email" name="email"  placeholder="enter your email" required>
			<textarea name="Suggestion" name="msg" placeholder="Suggestion" rows="4" required></textarea>
			<input type="submit" value="submit" name="Register">
		</form>
		
	</div>
</body>
</html>