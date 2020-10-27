<?php

include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include_once('library/config_read.php');
$log = "visited page: ";

include('./_partials/head.php');
include('./_partials/js.php');

include("menu-mng-hs.php");

?>

<div id="contentnorightbar">

    <h2 id="Intro"><a href="#"><?php echo t('Intro', 'mngmain.php') ?></a></h2>


    <?php
	include('include/config/logging.php');
	?>

</div>

<div id="footer">

    <?php
	include 'page-footer.php';
	?>


</div>

</div>
</div>


</body>

</html>