<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/boostrap.css" >
	<title>Myself</title>
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
	/*me*/
    #me {
        padding-top: 60px;
        padding-bottom: 40px;
        max-width: 900px;
        margin: 40px auto;
        text-align: center;
		position: relative;
    }
    .about {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 60px;
    }
    .propic {
        border-radius: 10%;
		margin-right: 20px;
		flex-shrink: 0;
		width: 350px;
		height: 350px;
		object-fit: cover;
		transition: transform 0.1s ease-in-out;
    }
    .propic:hover {
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
		transform: scale(1.1);
    }
    .content {
		flex: 1 1 60%;
		margin-bottom: 2rem;
    }
    .text-about{
		font-family: "Silkscreen", sans-serif;
		font-size: 2.5rem;
		color: #9E3B3B;
		text-align: center;
    }
    .content-text {
		font-size: 1.3rem;
		color: #fff;
		margin: 0;
    }
	/*social*/
    #social {
		position: absolute;
		padding-top: 30px;
		padding-bottom: 50px;
		text-align: center;
		height: 60px;
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 20px;
		bottom: -50px;
		left: 0;
		width: 100%;
    }
    .icon {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 50px;
		height: 50px;
		transition: transform 0.2s ease-in-out;
    }
    .icon:hover {
		transform: scale(1.1);
    }
    .icon img {
		width: 45px;
		height: 45px;
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
    <div id="me">
        <div class="about">
            <div class="gambar">
                <img src="image/propic.jpg" alt="Profile Image" class="propic">
            </div>
            <div class="content">
                <h2 class="text-about">ABOUT ME</h2>
                <p class="content-text">Hey there! Welcome to my profile website.</p> 
                <p class="content-text">I'm Nur Alya binti Asmizi. Friends call me Alas.</p>
                <p class="content-text">I'm 21 and a Multimedia Computing student in UiTM Shah Alam. </p>
                <p class="content-text">Currently I'm living in Bandar Baru Bangi with my family.</p>
                <p class="content-text">Hoping you guys can get to know me a lil bit from this website.</p>
            </div>
        </div>
    </div>
	<div id="social">
        <a href="https://www.instagram.com/alyaasmizi/" class="icon">
            <img src="image/insta.png" alt="Instagram">
        </a>
        <a href="https://twitter.com/alyaasmizi" class="icon">
            <img src="image/tweet.png" alt="Twitter">
        </a>
        <a href="mailto:alyaasmizi17@gmail.com" class="icon">
            <img src="image/email.png" alt="Email">
        </a>
    </div>
</body>
</html>