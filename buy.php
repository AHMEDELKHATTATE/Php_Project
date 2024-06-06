<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
    <style>
        body{
  background-image: url("images/HH.jpg");
  background-size: cover;
  background-position:center;
  
}
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

*, *:after, *:before {
	box-sizing: border-box;
}

body {
	font-family: "DM Sans", sans-serif;
	line-height: 1.5;
	background-color: #f1f3fb;
	padding: 0 2rem;
}

img {
	max-width: 100%;
	display: block;
}

 
input {
	appearance: none;
	border-radius: 0;
}

.card {
	margin: 2rem auto;
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 425px;
	background-color: #FFF;
	border-radius: 10px;
	box-shadow: 0 10px 20px 0 rgba(#999, .25);
	padding: .75rem;
}

.card-image {
	border-radius: 8px;
	overflow: hidden;
	padding-bottom: 5%;
	background-image: url('<?php echo "<img src='".$_GET['id_produit']."'>";?>');
	background-repeat: no-repeat;
	background-size: 100%;
	background-position: 0 5%;
	position: relative;
}

.card-heading {
	position: absolute;
	left: 10%;
	top: 15%;
	right: 10%;
	font-size: 1.75rem;
	font-weight: 700;
	color: #735400;
	line-height: 1.222;
	small {
		display: block;
		font-size: .75em;
		font-weight: 400;
		margin-top: .25em;
	}
}

.card-form {
	padding: 2rem 1rem 0;
}

.input {
	display: flex;
	flex-direction: column-reverse;
	position: relative;
	padding-top: 1.5rem;
	&+.input {
		margin-top: 1.5rem;
	}
}

.input-label {
	color: #8597a3;
	position: absolute;
	top: 1.5rem;
	transition: .25s ease;
}

.input-field {
	border: 0;
	z-index: 1;
	background-color: transparent;
	border-bottom: 2px solid #eee; 
	font: inherit;
	font-size: 1.125rem;
	padding: .25rem 0;
	&:focus, &:valid {
		outline: 0;
		border-bottom-color: #6658d3;
		&+.input-label {
			color: #6658d3;
			transform: translateY(-1.5rem);
		}
	}
}

.action {
	margin-top: 2rem;
}

.action-button {
	font: inherit;
	font-size: 1.25rem;
	padding: 1em;
	width: 100%;
	font-weight: 500;
	background-color: #6658d3;
	border-radius: 6px;
	color: #FFF;
	border: 0;
	&:focus {
		outline: 0;
	}
}

.card-info {
	padding: 1rem 1rem;
	text-align: center;
	font-size: .875rem;
	color: #8597a3;
	a {
		display: block;
		color: #6658d3;
		text-decoration: none;
	}
}






    </style>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-image">	
            <?php
echo "<img src='".$_GET['id_produit']."'>";
?>
<h3>Complete your Order :</h3>
		</div>
		<form class="card-form" action="" method="post">
			<div class="input">
				<input type="text" class="input-field"  value="<?php 
                require "Verfi.php";
                session_start();
                echo $_SESSION['nom']." ".$_SESSION['prenom'] ?>" name="Full_name" required/>
				<label class="input-label">Full name</label>
			</div>
						<div class="input">
				<input type="text" class="input-field" value="" name="email" required/>
				<label class="input-label">Email</label>
			</div>
						<div class="input">
				<input type="text" class="input-field" name="Telephone" required/>
				<label class="input-label">Telephone</label>
			</div>
			
            <input type="submit" value="Get Started" name="ok" class="action-button">
	
            
			
		</form>
		<?php
		if (isset($_POST["ok"])) { 
            require "conn.php";
			$Full_name=$_POST["Full_name"];
            $email=$_POST["email"];
            $Telephone=$_POST["Telephone"];
            $req="INSERT INTO commande ( Full_name, email, Telephone) VALUES ( '$Full_name','$email','$Telephone')";
            $res=$con->query($req);
			header('location:page2.php');
		}
		?>
		
	</div>
</div>
</body>
</html>


