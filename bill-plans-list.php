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


//setting values for the order by and order type variables
isset($_REQUEST['orderBy']) ? $orderBy = $_REQUEST['orderBy'] : $orderBy = "id";
isset($_REQUEST['orderType']) ? $orderType = $_REQUEST['orderType'] : $orderType = "asc";




include_once('library/config_read.php');
$log = "visited page: ";
$logQuery = "performed query for listing of records on page: ";

?>

<script src="library/javascript/pages_common.js" type="text/javascript"></script>
<script src="library/javascript/rounded-corners.js" type="text/javascript"></script>
<script src="library/javascript/form-field-tooltip.js" type="text/javascript"></script>
<script type="text/javascript" src="library/javascript/ajax.js"></script>
<script type="text/javascript" src="library/javascript/ajaxGeneric.js"></script>

<?php

include('./_partials/head.php');
include('./_partials/js.php');
include("menu-bill-plans.php");
?>

<div class="col-lg-9">
	<div class="card">
		<div class="card-body">
			<h2 id="Intro"><a href="#" onclick="javascript:toggleShowDiv('helpPage')"><?php echo t('Intro', 'billplanslist.php') ?>
					<h144>&#x2754;</h144></a></h2>

			<div id="helpPage" style="display:none;visibility:visible">
				<?php echo t('helpPage', 'billplanslist') ?>
				<br />
			</div>
			<br />


			<?php


			include 'library/opendb.php';
			include 'include/management/pages_common.php';
			include 'include/management/pages_numbering.php';		// must be included after opendb because it needs to read the CONFIG_IFACE_TABLES_LISTING variable from the config file

			//orig: used as maethod to get total rows - this is required for the pages_numbering.php page
			$sql = "SELECT planId, planName, planType FROM " . $configValues['CONFIG_DB_TBL_DALOBILLINGPLANS'];
			$res = $dbSocket->query($sql);
			$numrows = $res->numRows();

			$sql = "SELECT planId, planName, planType FROM " . $configValues['CONFIG_DB_TBL_DALOBILLINGPLANS'] .
				" ORDER BY $orderBy $orderType LIMIT $offset, $rowsPerPage;";
			$res = $dbSocket->query($sql);
			$logDebugSQL = "";
			$logDebugSQL .= $sql . "\n";

			/* START - Related to pages_numbering.php */
			$maxPage = ceil($numrows / $rowsPerPage);
			/* END */


			echo "<form name='listbillplans' method='post' action='bill-plans-del.php'>";

			echo "<table border='0' class='table1'>\n";
			echo "
					<thead>
                                                        <tr>
                                                        <th colspan='10' align='left'>
                                Select:
                                <a class=\"table\" href=\"javascript:SetChecked(1,'planName[]','listbillplans')\">All</a> 
                                
                                <a class=\"table\" href=\"javascript:SetChecked(0,'planName[]','listbillplans')\">None</a>
	                 <br/>
                                <input class='button' type='button' value='Delete' onClick='javascript:removeCheckbox(\"listbillplans\",\"bill-plans-del.php\")' />
                                <br/><br/>

        ";

			if ($configValues['CONFIG_IFACE_TABLES_LISTING_NUM'] == "yes")
				setupNumbering($numrows, $rowsPerPage, $pageNum, $orderBy, $orderType);

			echo " </th></tr>
                                        </thead>

                        ";

			if ($orderType == "asc") {
				$orderTypeNextPage = "desc";
			} else  if ($orderType == "desc") {
				$orderTypeNextPage = "asc";
			}

			echo "<thread> <tr>
		<th scope='col'>
		<a title='Sort' class='novisit' href=\"" . $_SERVER['PHP_SELF'] . "?orderBy=planid&orderType=$orderTypeNextPage\">
		" . t('all', 'PlanId') . "</a>
		</th>

		<th scope='col'> 
		<a title='Sort' class='novisit' href=\"" . $_SERVER['PHP_SELF'] . "?orderBy=planname&orderType=$orderTypeNextPage\">
		" . t('all', 'PlanName') . "</a>
		</th>

		<th scope='col'> 
		<a title='Sort' class='novisit' href=\"" . $_SERVER['PHP_SELF'] . "?orderBy=plantype&orderType=$orderTypeNextPage\">
		" . t('all', 'PlanType') . "</a>
		</th>
	</tr> </thread>";

			while ($row = $res->fetchRow()) {
				printqn("<tr>
                        <td> <input type='checkbox' name='planName[]' value='$row[1]'> $row[0] </td>

                        <td> <a class='tablenovisit' href='#'
								onclick='javascript:return false;'
                                tooltipText='
                                        <a class=\"toolTip\" href=\"bill-plans-edit.php?planName=$row[1]\">
                                                " . t('button', 'EditPlan') . "</a>
                                        <br/><br/>'
                                >$row[1]</a>
                        </td>

				<td> $row[2] </td>
		</tr>");
			}

			echo "
                                        <tfoot>
                                                        <tr>
                                                        <th colspan='10' align='left'>
        ";
			setupLinks($pageNum, $maxPage, $orderBy, $orderType);
			echo "
                                                        </th>
                                                        </tr>
                                        </tfoot>
                ";


			echo "</table>";
			echo "</form>";

			include 'library/closedb.php';
			?>


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
<script type="text/javascript">
	var tooltipObj = new DHTMLgoodies_formTooltip();
	tooltipObj.setTooltipPosition('right');
	tooltipObj.setPageBgColor('#EEEEEE');
	tooltipObj.setTooltipCornerSize(15);
	tooltipObj.initFormFieldTooltip();
</script>

</body>

</html>