<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>daloRADIUS</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
    <link rel="stylesheet" href="css/form-field-tooltip.css" type="text/css" media="screen,projection" />
</head>
<script src="library/javascript/pages_common.js" type="text/javascript"></script>
<script src="library/javascript/rounded-corners.js" type="text/javascript"></script>
<script src="library/javascript/form-field-tooltip.js" type="text/javascript"></script>

<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
    <?php
    include_once("lang/main.php");
    ?> <div id="wrapper">
        <div id="innerwrapper"> <?php
                                $m_active = "Config";
                                include_once("./_partials/navbar.php");
                                include_once("./_partials/js.php");
                                ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">
                        <h2>Configuration</h2>
                        <h3>Management</h3>
                        <ul class="subnav">
                            <li><a href="config-operators-list.php"><b>&raquo;</b>
                                    <img src='images/icons/userList.gif' border='0'>
                                    &nbsp;<?php echo t('button', 'ListOperators') ?></a>
                            </li>
                            <li><a href="config-operators-new.php"><b>&raquo;</b>
                                    <img src='images/icons/userNew.gif' border='0'>
                                    &nbsp;<?php echo t('button', 'NewOperator') ?></a>
                            </li>
                            <li><a href="javascript:document.mngedit.submit();""><b>&raquo;</b>
                            <img src='images/icons/userNew.gif' border='0'>
                            &nbsp;<?php echo t('button', 'EditOperator') ?></a>
			<form name=" mngedit" action="config-operators-edit.php" method="get" class="">
                                    <input name="operator_username" type="text" tooltipText='<?php echo t('Tooltip', 'OperatorName'); ?> <br/>' />
                                    </form>
                            </li>
                            <li><a href="config-operators-del.php"><b>&raquo;</b>
                                    <img src='images/icons/userRemove.gif' border='0'>
                                    &nbsp;<?php echo t('button', 'RemoveOperator') ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    var tooltipObj = new DHTMLgoodies_formTooltip();
                    tooltipObj.setTooltipPosition('right');
                    tooltipObj.setPageBgColor('#EEEEEE');
                    tooltipObj.setTooltipCornerSize(15);
                    tooltipObj.initFormFieldTooltip();
                </script>