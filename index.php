<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="boostrap/css" href="index.css">
	<title>Home</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Jersey+15&family=Silkscreen:wght@400;700&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap');
	body {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		margin: 0;
		background-color: #9A8682;
		background-image: url(image/grain.png);
		font-family: 'Poppins' , sans-serif;
	}
	.container {
		background-color: lightgray;
		width: 70%; /* Full width */
		height: 80vh; /* Full height */
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		text-align: center;
		border-radius: 20px;
		overflow: hidden;
	}
	 
	p {
		font-family: "Silkscreen", sans-serif;
        font-weight: 700;
        font-style: normal;
		font-size: 2.5rem;
		color: #9E3B3B;
		text-align: center;
	}
	 
	ul {
		list-style-type: none;
		padding: 0;
	}

	ul li {
		margin-bottom: 10px;
	}

	ul li a {
		display: block;
		width: 120px;
		padding: 10px;
		text-align: center;
		background-color: #991512;
		border: 1px solid #ccc;
		border-radius: 30px;
		text-decoration: none;
		color: white;
		transition: transform 0.2s ease-in-out;
	}

	ul li a:hover {
		background-color: #DA9E9D;
		transform: scale(1.1);
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
	}
</style>
</head>
<body>
	<div class="container">
		<p>ALAS PAGE</p>
		<ul>
			<li><a href="myself.php">MYSELF</a></li>
			<li><a href="education.php">EDUCATION</a></li>
			<li><a href="passion.php">PASSION</a></li>
			<li><a href="gallery.php">GALLERY</a></li>
			<li><a href="comment.php">COMMENT</a></li>
		</ul>
	</div>
</body>
</html>