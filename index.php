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
    margin: 0;
    padding:0;
    background-image: url(https://image.freepik.com/free-photo/pink-blue-leaves-pink-background-with-copyspace-top-side_24972-579.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: sans-serif:
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    background: black(0, 0, 0, 0, 5);
    padding: 20px;
    width: 300px;
    box-shadow: 0 0 10px 5px black;

    background-color: black(0,0,0,.7);
    box-shadow: 0 0 10px black(255,255,255,.3);
}
.container h1{
    text-align: left;
    color: black;
    margin-bottom: 30px;
    text-transform: black;
    border-bottom: 4px solid #2979ff;
}
.container label{
    text-align: center;
    color: black;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: black;
    font-size: 20px;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: black;
    background-color:#2979ff;
    font-size: 18px;
    color: black;
}
</style>

    </head>

<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<div class="container">
		<form>
		<h1>Login</h1>
				<label>Username</label><br>
				<input type="text" name="username"><br>
				<label>Password</label><br>
				<input type="password" name="password"><br>
			<button><input type="submit" value="LOGIN"></button>
			
		</div>		
	</form>
</body>
</html>