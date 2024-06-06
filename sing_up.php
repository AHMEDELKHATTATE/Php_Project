<!doctype html>
<html lang="en">
  <head>
  	<title>Digital Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg1.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">SING_UP</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">CREATE  ACCOUNT</h3>
		      	<form action="" class="signin-form"  method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="nom" placeholder="nom" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" class="form-control" name="prenom" placeholder="prenom" required>
		      		</div>
					  <div class="form-group">
		      			<input type="text" class="form-control" name="email" placeholder="E-mail" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="Password" name="pwd" class="form-control" placeholder="Password" required>	            </div>
	            <div class="form-group"><br><br>
	            	<button type="submit" name='ok' class="form-control btn btn-danger  px-3"  style="background:red;">Sign In</button>
	            </div>
    <?php
        if (isset($_POST["ok"])) {
            require "conn.php";
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $email=$_POST["email"];
            $pwd=$_POST["pwd"];
            $req="INSERT INTO clients ( nom, prenom, email, passeword) VALUES  ( '$nom','$prenom','$email','$pwd')";
            $res=$con->query($req);
            header('location:index.html');
        }  
    ?>
	         </form>
	</section>	
</body>
</html>
