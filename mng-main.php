<?php

include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include_once('library/config_read.php');
$log = "visited page: ";


include('./_partials/head.php');
include('./_partials/js.php');
include("menu-mng-users.php");

?>

<div class="col-lg-9">
    <div class="card">
        <div class="card-body">

            <h2 id="Intro"><a href="#"><?php echo t('Intro', 'mngmain.php') ?></a></h2>

            <p>
                <table>
                    <center><br />
                        <img src="library/chart-mng-total-users.php" />
                </table>
                </center>

            </p>


            <?php
            include('include/config/logging.php');
            ?>

        </div>
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
</div>


</body>

</html>