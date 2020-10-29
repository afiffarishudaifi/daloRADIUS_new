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

						<h2>Logs</h2>
						<ul class="subnav">

							<h3>Log Files</h3>

							<li class="nav-item">
								<a href="javascript:document.daloradius_log.submit();">
									<b>&raquo;</b>
									<img src='images/icons/reportsLogs.png' border='0'>&nbsp;<?php echo t('button', 'daloRADIUSLog') ?>
								</a>
								<form name="daloradius_log" action="rep-logs-daloradius.php" method="get" class="">
									<select class="form-control-sm" name="daloradiusLineCount" type="text">
										<?php if (isset($daloradiusLineCount)) {
											echo "<option value='$daloradiusLineCount'> $daloradiusLineCount Lines </option>";
										} else {
											echo "<option value='50'> 50 Lines Output Limit </option>";
										}
										?>
										<option value="50"></option>
										<option value="20"> 20 Lines </option>
										<option value="50"> 50 Lines </option>
										<option value="100"> 100 Lines </option>
										<option value="500"> 500 Lines </option>
										<option value="1000"> 1000 Lines </option>
									</select>
									<select class="form-control-sm" name="daloradiusFilter" type="text">
										<?php if (isset($daloradiusFilter)) {
											if ($daloradiusFilter == ".")
												echo "<option value='$daloradiusFilter'> Any </option>";
											else
												echo "<option value='$daloradiusFilter'> $daloradiusFilter </option>";
										} else {
											echo "<option value='.'> No filter </option>";
										}
										?>
										<option value="."></option>
										<option value="QUERY"> Query Only </option>
										<option value="NOTICE"> Notice Only </option>
										<option value="INSERT"> SQL INSERT Only </option>
										<option value="SELECT"> SQL SELECT Only </option>
									</select>
								</form>
							</li>

							<li class="nav-item">
								<a href="javascript:document.radius_log.submit();">
									<b>&raquo;</b>
									<img src='images/icons/reportsLogs.png' border='0'>&nbsp;<?php echo t('button', 'RadiusLog') ?>
								</a>
								<form name="radius_log" action="rep-logs-radius.php" method="get" class="">
									<select class="form-control-sm" name="radiusLineCount" type="text">
										<?php if (isset($radiusLineCount)) {
											echo "<option value='$radiusLineCount'> $radiusLineCount Lines </option>";
										} else {
											echo "<option value='50'> 50 Lines Output Limit </option>";
										}
										?>
										<option value="50"></option>
										<option value="20"> 20 Lines </option>
										<option value="50"> 50 Lines </option>
										<option value="100"> 100 Lines </option>
										<option value="500"> 500 Lines </option>
										<option value="1000"> 1000 Lines </option>
									</select>
									<select class="form-control-sm" name="radiusFilter" type="text">
										<?php if (isset($radiusFilter)) {
											if ($radiusFilter == ".")
												echo "<option value='$radiusFilter'> Any </option>";
											else
												echo "<option value='$radiusFilter'> $radiusFilter </option>";
										} else {
											echo "<option value='.'> No filter </option>";
										}
										?>
										<option value="."></option>
										<option value="Auth"> Auth Only </option>
										<option value="Info"> Info Only </option>
										<option value="Error"> Error Only </option>
									</select>
								</form>
							</li>

							<li class="nav-item">
								<a href="javascript:document.system_log.submit();">
									<b>&raquo;</b>
									<img src='images/icons/reportsLogs.png' border='0'>&nbsp;<?php echo t('button', 'SystemLog') ?>
								</a>
								<form name="system_log" action="rep-logs-system.php" method="get" class="">
									<select class="form-control-sm" name="systemLineCount" type="text">
										<?php if (isset($systemLineCount)) {
											echo "<option value='$systemLineCount'> $systemLineCount Lines </option>";
										} else {
											echo "<option value='50'> 50 Lines Output Limit </option>";
										}
										?>
										<option value="50"></option>
										<option value="20"> 20 Lines </option>
										<option value="50"> 50 Lines </option>
										<option value="100"> 100 Lines </option>
										<option value="500"> 500 Lines </option>
										<option value="1000"> 1000 Lines </option>
									</select>
									<input class="form-control-sm" type="text" name="systemFilter" tooltipText='<?php echo t('Tooltip', 'Filter'); ?> <br/>' value="<?php if (isset($systemFilter)) echo $systemFilter; ?>" />
								</form>
							</li>


							<li class="nav-item">
								<a href="javascript:document.boot_log.submit();">
									<b>&raquo;</b>
									<img src='images/icons/reportsLogs.png' border='0'>&nbsp;<?php echo t('button', 'BootLog') ?>
								</a>
								<form name="boot_log" action="rep-logs-boot.php" method="get" class="">
									<select class="form-control-sm" name="bootLineCount" type="text">
										<?php if (isset($bootLineCount)) {
											echo "<option value='$bootLineCount'> $bootLineCount Lines </option>";
										} else {
											echo "<option value='50'> 50 Lines Output Limit </option>";
										}
										?>
										<option value="50"></option>
										<option value="20"> 20 Lines </option>
										<option value="50"> 50 Lines </option>
										<option value="100"> 100 Lines </option>
										<option value="500"> 500 Lines </option>
										<option value="1000"> 1000 Lines </option>
									</select>
									<input class="form-control-sm" type="text" name="bootFilter" tooltipText='<?php echo t('Tooltip', 'Filter'); ?> <br/>' value="<?php if (isset($bootFilter)) echo $bootFilter; ?>" />
								</form>
							</li>

						</ul>


						<br /><br />



					</div>
				</div>

				<script type="text/javascript">
					var tooltipObj = new DHTMLgoodies_formTooltip();
					tooltipObj.setTooltipPosition('right');
					tooltipObj.setPageBgColor('#EEEEEE');
					tooltipObj.setTooltipCornerSize(15);
					tooltipObj.initFormFieldTooltip();
				</script>