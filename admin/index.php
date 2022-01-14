<!DOCTYPE html>
<html>
<head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
<style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(https://id-live-05.slatic.net/p/c0e90152500b2420f9693aab79ba05cb.jpg_720x720q80.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

    </head>
<body>
	<h2>Halaman Utama</h2>
	
	<br/>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<div class="container"></div>
	<h4>Selamat datang, anda telah login.</h4>

	<br/>
	<br/>

	<a href="logout.php">LOGOUT</a>
</div>
</body>
</html>