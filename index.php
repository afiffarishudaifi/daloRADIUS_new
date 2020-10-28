<?php
include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include("menu-home.php");

include_once('library/config_read.php');
$log = "visited page: ";
include('include/config/logging.php');

include('./_partials/head.php');
include('./_partials/js.php');
?>



<!-- <div id="contentnorightbar"> -->

<div class="col-lg-9">
    <div class="card">

        <h2 id="Intro"><a href="#"></a></h2>
        <p>

            <?php
            include 'library/exten-welcome_page.php';
            ?>
        </p>
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