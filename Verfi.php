<?php
				if (isset($_POST['sing_in'])) {
					require "conn.php";
					$email=$_POST['email'];
					$pwd=$_POST['pwd'];
					$req="select * from clients where email ='$email' and passeword='$pwd'";
					$res=$con->query($req);
					$data=$res->fetch();
					if ($res->rowCount()>0) {
						session_start();
						$_SESSION['nom']=$data["nom"];
						$_SESSION['prenom']=$data["prenom"];
                        $_SESSION['email']=$email;
						header("location:page2.php");
					}
					else {
						header("location:INDEX.php");
					}
				}
				?>