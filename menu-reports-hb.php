<script src="library/javascript/pages_common.js" type="text/javascript"></script>
<script src="library/javascript/rounded-corners.js" type="text/javascript"></script>
<script src="library/javascript/form-field-tooltip.js" type="text/javascript"></script>

<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
	<?php
	include_once("lang/main.php");
	?>

	<div id="wrapper">
		<div id="innerwrapper">

			<?php
			$m_active = "Reports";
			// include_once("include/menu/menu-items.php");
			// include_once("include/menu/reports-subnav.php");
			include_once("./_partials/navbar.php");
			?>

			<div class="row">
				<div class="col-lg-3">
					<div class="card" id="sidebar">

						<h2>Heartbeat</h2>
						<ul class="subnav">

							<h3>Dashboard</h3>

							<li><a href="rep-hb-dashboard.php"><b>&raquo;</b><?php echo t('button', 'Dashboard') ?></a></li>

						</ul>


						<br /><br />




					</div>
				</div>