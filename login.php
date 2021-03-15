
<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <img class="wave" src="img/wave.png">
	<div class="containerlogin">
		<div class="img">
			<img src="img/img-login-banner.png">
		</div>
		<div class="login-content">
			<form class="form1"  method="post" action="Processe.php" >
				<img src="img/unknown2.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email"  >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password"  >
            	   </div>
            	</div>
            	<a href="#" class="fp">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" name="Login" >
            </form>
        </div>
    </div>
    <script type="text/javascript" src="JS/main.js"></script>
</body>
</html>
