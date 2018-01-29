<?php use app\Application;?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ENGAGE</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=Application::load_wconfig()['domain']?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=Application::load_wconfig()['domain']?>/public/css/simple-sidebar.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript -->
    <script src="<?=Application::load_wconfig()['domain']?>/public/vendor/jquery/jquery.min.js"></script>
    <script src="<?=Application::load_wconfig()['domain']?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>

	<div id="wrapper" class="toggled">

	        <!-- Sidebar -->
	        <div id="sidebar-wrapper">
	            <ul class="sidebar-nav">
	                <li class="sidebar-brand">
	                    <a href="/">Start Engage</a>
	                </li>
	                <li>
	                    <a href="/test">Test</a>
	                </li>
	                <li>
	                    <a href="/user">Users</a>
	                </li>
	            </ul>
	        </div>
	        <!-- /#sidebar-wrapper -->

	        <!-- Page Content -->
	        <div id="page-content-wrapper">
	            <div class="container-fluid">
	                <!--a href="#menu-toggle" id="menu-toggle">Menu</a-->

	                <?=$content?>

	            </div>
	        </div>
	        <!-- /#page-content-wrapper -->

	    </div>
	    <!-- /#wrapper -->

	    <!-- Menu Toggle Script -->
	    <script>
	    	$(document).ready(function(){
	    		$("#menu-toggle").click(function(e) {
	    		    e.preventDefault();
	    		    $("#wrapper").toggleClass("toggled");
	    		});
	    	});
	    
	    </script>

</body>
</html>