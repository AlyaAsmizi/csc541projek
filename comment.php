<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
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
	/*navigation bar*/
    .navbar {
        overflow: hidden;
        background-color: #9E3B3B;
        position: fixed;
        top: 0; left: 0; right: 0;
        text-align: center;
        background: transparent;
        display: flex;
        justify-content: center;
        padding: 1rem;
    }
    .navbar a {
        font-family: 'Poppins' , sans-serif;
        text-decoration: none;
        color: #631818;
        font-size: 1.2rem;
        border: none;
        cursor: pointer;
        outline: none;
        margin: 0 1rem;
    }
	.navbar a:hover{
        color: #CD5B5B;
        text-shadow: 0 0 15px #631818;
    }
	/*contact*/
    #contact {
		padding-top: 30px;
        padding-bottom: 80px;
		text-align: center;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		position: relative;
    }
    #contact h2 {
		font-family: "Silkscreen", sans-serif;
		color: #9E3B3B;
		text-align: center;
		font-size: 2.5rem;
		margin-bottom: 20px;
    }
    #contact-form {
		margin-top: 15px;
		width: 600px;
		display: grid;
		align-items: center;
		background-color: #B9A5A5;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }
    #contact-form .form-group {
		margin-left: 90px;
		margin-right: 50px;
		margin-bottom: 10px;
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}
    #contact-form label {
        display: block;
		margin-bottom: 5px;
		color: #610E0E;
    }
    #contact-form input, #contact-form textarea {
		width: 400px;
		padding: 5px;
		border: 1px solid #fff;
		border-radius: 5px;
		outline: none;
		box-shadow: 0 0 2px 1px #fff;
		background-color: #fff;
		color: #000;
    }
    .form-group textarea{
		height: 80px;
    }
    #contact-form input::placeholder, #contact-form textarea::placeholder {
		color: #ccc;
		font-family: 'Poppins' , sans-serif;
    }
    #contact-form input[type="text"], #contact-form input[type="email"] {
		height: 25px;
    }
    #contact-form input:hover, #contact-form textarea:hover {
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }
    #contact-form button {
		font-family: 'Poppins' , sans-serif;
		padding: 5px 20px;
		background-color: #610E0E;
		color: #FFF;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		height: 35px;
		margin-top: 20px;
    }
    #contact-form button:hover {
		background-color: #E9AAAA;
		box-shadow: 0 0 15px #610E0E;
    }
	/*bmi*/
	#bmi {
		position: absolute;
		padding-top: 70px;
		padding-bottom: 70px;
		text-align: center;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		bottom: 0;
		width: 100%;
		transform: translateY(50%);
		margin-bottom: -200px;
	}
	#bmi h2 {
		font-family: "Silkscreen", sans-serif;
		color: #9E3B3B;
		text-align: center;
		font-size: 2.5rem;
		margin-bottom: 20px;
    }
	#bmi-form {
		margin-top: 15px;
		width: 600px;
		display: grid;
		align-items: center;
		background-color: #B9A5A5;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }
	#bmi-form .form-group {
		margin-bottom: 10px;
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}
	#bmi-form label {
		display: block;
		margin-bottom: 10px;
		color: #610E0E;
	}
	#bmi-form input {
		width: 400px;
		padding: 5px;
		border: 1px solid #fff;
		border-radius: 5px;
		outline: none;
		box-shadow: 0 0 2px 1px #fff;
		background-color: #fff;
		color: #000;
    }
	#bmi-form input[type="number"] {
		width: 100px;
		height: 20px;
		margin-bottom: 20px;
		font-family: 'Poppins' , sans-serif;
	}
	#bmi-form button {
		font-family: 'Poppins' , sans-serif;
		padding: 5px 20px;
		background-color: #610E0E;
		color: #FFF;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		width: 180px;;
		height: 35px;
		margin-top: 10px;
		margin-bottom: 20px;
	}
	#bmi-form button:hover {
		background-color: #E9AAAA;
		box-shadow: 0 0 15px #610E0E;
	}
	#score, #type {
		font-weight: bold;
		color: #610E0E;
	}
</style>
</head>
<body>
	<div class="navbar">
        <a href="index.php">Home</a>
        <a href="myself.php">Myself</a>
        <a href="education.php">Education</a>
        <a href="passion.php">Passion</a>
		<a href="gallery.php">Gallery</a>
		<a href="comment.php">Comment</a>
    </div>
    <div id="contact">
        <h2>LET'S GET IN TOUCH</h2>
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Enter your comment" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">SEND</button>
            </div>
        </form>
    </div>
	<div id="bmi">
		<h2>BMI Calculator</h2>
		<form id="bmi-form" onsubmit="calculateBMI(); return false;">
			<div class="bmi-group">
				<label for="weight">Weight (kg):</label>
				<input type="number" id="weight" value="60">
			</div>
			<div class="bmi-group">
				<label for="height">Height (m):</label>
				<input type="number" id="height" value="1.65">
			</div>
			<div class="bmi-group">
				<button onclick="calculate()">Calculate BMI</button>
			</div>
			<p>Your BMI is: <span id="score"></span></p>
			<p>Your body type is: <span id="type"></span></p>
		</form>
	</div>
	<script src="script.js"></script>
</body>
</html>