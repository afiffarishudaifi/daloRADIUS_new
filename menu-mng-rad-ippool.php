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
            ?>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">

                        <h2>Management</h2>

                        <h3>IP Pools</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="mng-rad-ippool-list.php" tabindex=1><b>&raquo;</b><img
                                        src='images/icons/userList.gif' border='0'>
                                    <?php echo t('button', 'ListIPPools') ?></a></li>
                            <li><a href="mng-rad-ippool-new.php" tabindex=2><b>&raquo;</b><img
                                        src='images/icons/userNew.gif' border='0'>
                                    <?php echo t('button', 'NewIPPool') ?></a></li>
                            <li><a href="javascript:document.mngradippooledit.submit();" tabindex=3><b>&raquo;</b><img
                                        src='images/icons/userEdit.gif' border='0'>
                                    <?php echo t('button', 'EditIPPool') ?></a>
                                <form name="mngradippooledit" action="mng-rad-ippool-edit.php" method="get" class="">
                                    <input name="poolname" type="text"
                                        tooltipText='<?php echo t('Tooltip', 'PoolName'); ?> <br/>'
                                        value="<?php if (isset($poolname)) echo $poolname ?>" tabindex=4>
                                    <input name="ipaddressold" type="text"
                                        tooltipText='<?php echo t('Tooltip', 'IPAddress'); ?> <br/>'
                                        value="<?php if (isset($ipaddressold)) echo $ipaddressold  ?>" tabindex=4>
                                </form>
                            </li>
                            <li><a href="mng-rad-ippool-del.php" tabindex=5><b>&raquo;</b><img
                                        src='images/icons/userRemove.gif' border='0'>
                                    <?php echo t('button', 'RemoveIPPool') ?></a></li>

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