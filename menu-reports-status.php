<script src="library/javascript/pages_common.js" type="text/javascript"></script>

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

			<div id="sidebar">

				<h2>Status</h2>
				<ul class="subnav">

					<h3>Status</h3>

					<li><a href="rep-stat-server.php"><b>&raquo;</b>
							<img src='images/icons/reportsStatus.png' border='0'>&nbsp;<?php echo t('button', 'ServerStatus') ?></a></li>
					<li><a href="rep-stat-services.php"><b>&raquo;</b>
							<img src='images/icons/reportsStatus.png' border='0'>&nbsp;<?php echo t('button', 'ServicesStatus') ?></a></li>

				</ul>

				<ul class="subnav">
					<h3>Extended Peripherals</h3>

					<li><a href="rep-stat-cron.php"><b>&raquo;</b>
							<img src='images/icons/reportsStatus.png' border='0'>&nbsp;CRON Status</a></li>
					<li><a href="rep-stat-ups.php"><b>&raquo;</b>
							<img src='images/icons/reportsStatus.png' border='0'>&nbsp;UPS Status</a></li>
					<li><a href="rep-stat-raid.php"><b>&raquo;</b>
							<img src='images/icons/reportsStatus.png' border='0'>&nbsp;RAID Status</a></li>


				</ul>


				<br /><br />




			</div>