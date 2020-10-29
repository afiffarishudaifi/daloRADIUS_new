<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>daloRADIUS</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="library/js_date/datechooser.css">
    <!--[if lte IE 6.5]>
<link rel="stylesheet" type="text/css" href="library/js_date/select-free.css"/>
<![endif]-->

</head>
<script src="library/js_date/date-functions.js" type="text/javascript"></script>
<script src="library/js_date/datechooser.js" type="text/javascript"></script>
<script src="library/javascript/pages_common.js" type="text/javascript"></script>

<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">

    <?php
    include_once("lang/main.php");
    ?>

    <div id="wrapper">
        <div id="innerwrapper">

            <?php
            $m_active = "Accounting";
            include_once("./_partials/navbar.php");
            ?>


            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">

                        <h2>Accounting</h2>

                        <h3>Maintenance</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="acct-maintenance-cleanup.php"><b>&raquo;</b><i
                                        class="far fa-circle nav-icon"></i>
                                    <?php echo t('button', 'CleanupStaleSessions') ?>
                                </a></li>
                            <li><a href="acct-maintenance-delete.php"><b>&raquo;</b><i
                                        class="far fa-circle nav-icon"></i>
                                    <?php echo t('button', 'DeleteAccountingRecords') ?>
                                </a></li>
                        </ul>

                        <br /><br />


                    </div>
                </div>