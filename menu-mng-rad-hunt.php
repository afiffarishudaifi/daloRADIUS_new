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

            include_once("./_partials/navbar.php");
            include_once("include/management/autocomplete.php");
            ?>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">

                        <h2>Management</h2>

                        <h3>HuntGroup Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="mng-rad-hunt-list.php" tabindex=1><b>&raquo;</b><img
                                        src='images/icons/userList.gif' border='0'>
                                    <?php echo t('button', 'ListHG') ?></a>
                            </li>
                            <li><a href="mng-rad-hunt-new.php" tabindex=2><b>&raquo;</b><img
                                        src='images/icons/userNew.gif' border='0'>
                                    <?php echo t('button', 'NewHG') ?></a>
                            </li>
                            <li><a href="javascript:document.mngradhuntedit.submit();" tabindex=3><b>&raquo;</b><img
                                        src='images/icons/userEdit.gif' border='0'>
                                    <?php echo t('button', 'EditHG') ?></a>
                                <form name="mngradhuntedit" action="mng-rad-hunt-edit.php" method="get" class="">
                                    <input name="nasipaddress" type="text" id="nashostEdit"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'hgNasIpAddress'); ?> <br/>' tabindex=4 />
                                    <input name="groupname" type="text" value=""
                                        tooltipText='<?php echo t('Tooltip', 'hgGroupName'); ?> <br/>' tabindex=5 />

                                </form>
                            </li>
                            <li><a href="mng-rad-hunt-del.php" tabindex=5><b>&raquo;</b><img
                                        src='images/icons/userRemove.gif' border='0'>
                                    <?php echo t('button', 'RemoveHG') ?></a></li>

                        </ul>

                    </div>
                </div>

                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('nashostEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteHGHost');
                      </script>";
                }

                ?>

                <script type="text/javascript">
                var tooltipObj = new DHTMLgoodies_formTooltip();
                tooltipObj.setTooltipPosition('right');
                tooltipObj.setPageBgColor('#EEEEEE');
                tooltipObj.setTooltipCornerSize(15);
                tooltipObj.initFormFieldTooltip();
                </script>