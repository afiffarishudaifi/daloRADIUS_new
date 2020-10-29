<?php include("library/checklogin.php");
$operator = $_SESSION['operator_user']; ?>
<nav class="navbar navbar-expand-lg navbar-lightblue navbar-light">
    <a class="navbar-brand" href="#"> <img src="images/daloradius_small.png" width="90" height="30"
            alt="Malas Ngoding"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Left navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a style="color:white;" class="nav-link" href="index.php"
                    <?php echo ($m_active == "Home") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Home'); ?>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="mng-main.php"
                    <?php echo ($m_active == "Management") ? "class=\"active\"" : "" ?>>
                    <?php echo t('menu', 'Managment'); ?> </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="mng-users.php">Users</a>
                    <a class="dropdown-item" href="mng-batch.php">Batch Users</a>
                    <a class="dropdown-item" href="mng-hs.php">Hotspots</a>
                    <a class="dropdown-item" href="mng-rad-nas.php">Nas</a>
                    <a class="dropdown-item" href="mng-rad-usergroup.php">User-Groups</a>
                    <a class="dropdown-item" href="mng-rad-profiles.php">Profiles</a>
                    <a class="dropdown-item" href="mng-rad-hunt.php">HuntGroups</a>
                    <a class="dropdown-item" href="mng-rad-attributes.php">Attributes</a>
                    <a class="dropdown-item" href="mng-rad-realms.php">Realms/Proxys </a>
                    <a class="dropdown-item" href="mng-rad-ippool.php">IP-Pool </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="rep-main.php"
                    <?php echo ($m_active == "Reports") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Reports'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="rep-main.php">General</a>
                    <a class="dropdown-item" href="rep-logs.php">Logs</a>
                    <a class="dropdown-item" href="rep-status.php">Status</a>
                    <a class="dropdown-item" href="rep-batch.php">Batch Users</a>
                    <a class="dropdown-item" href="rep-hb.php">Dashboard</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="acct-main.php"
                    <?php echo ($m_active == "Accounting") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Accounting'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="acct-main.php">General</a>
                    <a class="dropdown-item" href="acct-plans.php">Plans</a>
                    <a class="dropdown-item" href="acct-custom.php">Custom</a>
                    <a class="dropdown-item" href="acct-hotspot.php">Hotspot</a>
                    <a class="dropdown-item" href="acct-maintenance.php">Maintenance</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="acct-main.php"
                    <?php echo ($m_active == "Billing") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Billing'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="bill-main.php">Billing Main</a>
                    <a class="dropdown-item" href="bill-pos.php">POS</a>
                    <a class="dropdown-item" href="bill-plans.php">Plans</a>
                    <a class="dropdown-item" href="bill-rates.php">Rates</a>
                    <a class="dropdown-item" href="bill-merchant.php">Merchant-Transactions</a>
                    <a class="dropdown-item" href="bill-history.php">Billing-History</a>
                    <a class="dropdown-item" href="bill-invoice.php">Invoices</a>
                    <a class="dropdown-item" href="bill-payments.php">Payments</a>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a style="color:white;" class="nav-link" href="gis-main.php"
                    <?php echo ($m_active == "Gis") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Gis'); ?>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a style="color:white;" class="nav-link" href="graph-main.php"
                    <?php echo ($m_active == "Graphs") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Graphs'); ?>
            </li>
            <li class="nav-item dropdown">
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="acct-main.php"
                    <?php echo ($m_active == "Config") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Config'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="config-main.php">General</a>
                    <a class="dropdown-item" href="config-reports.php">Reporting</a>
                    <a class="dropdown-item" href="config-maint.php">Maintenance</a>
                    <a class="dropdown-item" href="config-operators.php">Operators</a>
                    <a class="dropdown-item" href="config-backup.php">Backup</a>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a style="color:white;" class="nav-link" href="help-main.php"
                    <?php echo ($m_active == "Help") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Help'); ?>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <?php echo $operator;
                ?>
                <a style="color:white;" href="graph-main.php">
                    <span class="fa fa-sign-out" style="color: white;"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>