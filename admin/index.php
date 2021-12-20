<?php
include("files/login.php");
	if(isset($_POST["user"]) || isset($_POST["pass"])){
		if($_POST["user"] == $uadm && $_POST["pass"] == $padm){
			session_start();
			$_SESSION["ulog"]=$_POST["user"];
			$_SESSION["plog"]=$_POST["pass"];
			header("Location: painel.php");
		}
		else{
			if($_POST["user"] != $uadm && $_POST["pass"] != $padm){
				$text="Usuário & Senha Incorretos!";
			}
			if($_POST["user"] != $uadm && $_POST["pass"] == $padm){
				$text="Usuário Incorreto!";
			}
			if($_POST["user"] == $uadm && $_POST["pass"] != $padm){
				$text="Senha Incorreta!";
			}
		}
	}
	else{
		$text="Inserir Credenciais";	
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Painel Itaucard - Login  By Spyryt</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

	<script language="javascript">
function ExecValidatesLogin(){
	if(document.login.user.value == ""){
		document.login.user.focus();
		return false;
	}
	if(document.login.pass.value == ""){
		document.login.pass.focus();
		return false;
	}
}
</script>
	
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png">
                            </a>
                        </div>
                        <div class="login-form">
                           <form name="login" id="login" method="post" action="" onsubmit="return ExecValidatesLogin();">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input class="au-input au-input--full" type="text" id="user" name="user" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="au-input au-input--full" type="password" name="pass"  id="pass" placeholder="Password">
                                </div>
                                <button id="send" name="send" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Logar</button>
                            </form>
							        <span id="text"><?php echo "".$text.""; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->