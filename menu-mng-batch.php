<script src="library/javascript/rounded-corners.js" type="text/javascript"></script>
<script src="library/javascript/form-field-tooltip.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/form-field-tooltip.css" type="text/css" media="screen,projection" />

<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
    <?php
    include_once("lang/main.php");
    ?>
    <div id="wrapper">
        <div id="innerwrapper">

            <?php
            $m_active = "Management";
            // include_once("include/menu/menu-items.php");
            // include_once("include/menu/management-subnav.php");

            include_once("./_partials/navbar.php");
            include_once("./_partials/js.php");
            ?>
            <br>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">

                        <h2>Management</h2>

                        <h3>Batch Management</h3>
                        <ul class="">

                            <li><a href="mng-batch-list.php"><b>&raquo;</b>
                                    <img src='images/icons/userList.gif' border='0'>
                                    <?php echo t('button', 'ListBatches') ?></a>
                            </li>
                            <li><a href="mng-batch-add.php"><b>&raquo;</b>
                                    <img src='images/icons/userNew.gif' border='0'>
                                    <?php echo t('button', 'BatchAddUsers') ?></a>
                            </li>
                            <li><a href="mng-batch-del.php"><b>&raquo;</b>
                                    <img src='images/icons/userRemove.gif' border='0'>
                                    <?php echo t('button', 'RemoveBatch') ?>
                                </a>
                            </li>

                        </ul>


                        <br /><br />




                    </div>
                </div>

                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
			/** Making dictAttributesCustom interactive **/
	              autoComEdit = new DHTMLSuite.autoComplete();
              </script>";
                }
                ?>