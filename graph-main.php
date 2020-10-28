<?php

include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include_once('library/config_read.php');
$log = "visited page: ";

?>


<?php
include('./_partials/head.php');
include('./_partials/js.php');
include("menu-graphs.php");

?>

<div class="col-lg-9">
    <div class="card">

        <h2 id="Intro"><a href="#"
                onclick="javascript:toggleShowDiv('helpPage')"><?php echo t('Intro', 'graphmain.php'); ?>
                <h144>&#x2754;</h144></a></h2>

        <div id="helpPage" style="display:none;visibility:visible">
            <?php echo t('helpPage', 'graphmain') ?>
            <br />
        </div>
        <br />

        <?php
		include('include/config/logging.php');
		?>

    </div>
</div>
<div id="footer">

    <?php
	include 'page-footer.php';
	?>


</div>

</div>
</div>
</div>

</body>

</html>