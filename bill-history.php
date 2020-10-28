<?php

include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include_once('library/config_read.php');
$log = "visited page: ";

?>

<?php
include('./_partials/head.php');
include('./_partials/js.php');
include("menu-bill-history.php");
?>

<div class="col-lg-9">
    <div class="card">

        <h2 id="Intro"><a href="#"><?php echo t('Intro', 'billhistorymain.php') ?></a></h2>


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