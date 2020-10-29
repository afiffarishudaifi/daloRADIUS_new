<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Authors:	Liran Tal <liran@enginx.com>
 *
 *********************************************************************************************************
 */

include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include_once('library/config_read.php');
$log = "visited page: ";


include('./_partials/head.php');
include('./_partials/js.php');

include("menu-mng-users.php");

?>

<!-- <div id="contentnorightbar"> -->
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

</body>

</html>