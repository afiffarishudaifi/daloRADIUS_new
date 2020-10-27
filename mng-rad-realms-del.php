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

include('library/check_operator_perm.php');

isset($_REQUEST['realmname']) ? $realmnameArray = $_REQUEST['realmname'] : $realmnameArray = "";

$logAction = "";
$logDebugSQL = "";

$showRemoveDiv = "block";

if (isset($_REQUEST['realmname'])) {

	if (!is_array($realmnameArray))
		$realmnameArray = array($realmnameArray, NULL);

	$allRealms = "";

	include 'library/opendb.php';

	if (isset($configValues['CONFIG_FILE_RADIUS_PROXY'])) {
		$filenameRealmsProxys = $configValues['CONFIG_FILE_RADIUS_PROXY'];
		$fileFlag = 1;
	} else {
		$filenameRealmsProxys = "";
		$fileFlag = 0;
	}

	foreach ($realmnameArray as $variable => $value) {
		if (trim($value) != "") {

			$realmname = $value;
			$allRealms .= $realmname . ", ";

			// delete all realms
			$sql = "DELETE FROM " . $configValues['CONFIG_DB_TBL_DALOREALMS'] . " WHERE realmname='" .
				$dbSocket->escapeSimple($realmname) . "'";
			$res = $dbSocket->query($sql);
			$logDebugSQL .= $sql . "\n";

			$successMsg = "Deleted realm(s): <b> $allRealms </b>";
			$logAction .= "Successfully deleted realm(s) [$allRealms] on page: ";
		} else {
			$failureMsg = "no realm was entered, please specify a realm name to remove from database";
			$logAction .= "Failed deleting realm(s) [$allRealms] on page: ";
		}
	} //foreach

	/*******************************************************************/
	/* enumerate from database all realm entries */
	include_once('include/management/saveRealmsProxys.php');
	/*******************************************************************/

	include 'library/closedb.php';

	$showRemoveDiv = "none";
}


include_once('library/config_read.php');
$log = "visited page: ";
include('./_partials/head.php');
include('./_partials/js.php');
?>
<script src="library/javascript/pages_common.js" type="text/javascript"></script>
<?php

include("menu-mng-rad-realms.php");

?>

<div id="contentnorightbar">

    <h2 id="Intro"><a href="#"
            onclick="javascript:toggleShowDiv('helpPage')"><?php echo t('Intro', 'mngradrealmsdel.php') ?>
            <h144>&#x2754;</h144></a></h2>

    <div id="helpPage" style="display:none;visibility:visible">
        <?php echo t('helpPage', 'mngradrealmsdel') ?>
        <br />
    </div>
    <?php
	include_once('include/management/actionMessages.php');
	?>


    <div id="removeDiv" style="display:<?php echo $showRemoveDiv ?>;visibility:visible">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <fieldset>

                <h302> <?php echo t('title', 'RealmInfo') ?> </h302>
                <br />

                <label for='realmname' class='form'><?php echo t('all', 'RealmName') ?></label>
                <input name='realmname[]' type='text' id='realmname' value='<?php echo $realmname ?>' tabindex=100 />
                <br />

                <br /><br />
                <hr><br />

                <input type='submit' name='submit' value='<?php echo t('buttons', 'apply') ?>' tabindex=1000
                    class='button' />

            </fieldset>

        </form>
    </div>


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