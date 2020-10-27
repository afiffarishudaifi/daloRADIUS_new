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
                <a class="nav-link" href="index.php"
                    <?php echo ($m_active == "Home") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Home'); ?>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="mng-main.php"
                    <?php echo ($m_active == "Management") ? "class=\"active\"" : "" ?>>
                    <?php echo t('menu', 'Managment'); ?> </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="mng-main.php"
                        <?php echo ($m_active == "Management") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Managment'); ?>
                    </a>
                    <a class="dropdown-item" href="mng-users.php"><em>U</em>sers</a>
                    <a class="dropdown-item" href="mng-batch.php"><em>B</em>atch Users</a>
                    <a class="dropdown-item" href="mng-hs.php"><em>H</em>otspots</a>
                    <a class="dropdown-item" href="mng-rad-nas.php"><em>N</em>as</a>
                    <a class="dropdown-item" href="mng-rad-usergroup.php"><em>U</em>ser-Groups</a>
                    <a class="dropdown-item" href="mng-rad-profiles.php"><em>P</em>rofiles</a>
                    <a class="dropdown-item" href="mng-rad-hunt.php">HuntG<em>r</em>oups</a>
                    <a class="dropdown-item" href="mng-rad-attributes.php"><em>A</em>ttributes</a>
                    <a class="dropdown-item" href="mng-rad-realms.php"><em>R</em>ealms/Proxys </a>
                    <a class="dropdown-item" href="mng-rad-ippool.php"><em>I</em>P-Pool </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="rep-main.php"
                    <?php echo ($m_active == "Reports") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Reports'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="rep-main.php"
                        <?php echo ($m_active == "Reports") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Reports'); ?>
                    </a>

                    <a class="dropdown-item" href="rep-main.php"><em>G</em>eneral</a>
                    <a class="dropdown-item" href="rep-logs.php"><em>L</em>ogs</a>
                    <a class="dropdown-item" href="rep-status.php"><em>S</em>tatus</a>
                    <a class="dropdown-item" href="rep-batch.php"><em>B</em>atch Users</a>
                    <a class="dropdown-item" href="rep-hb.php"><em>D</em>ashboard</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="acct-main.php"
                    <?php echo ($m_active == "Accounting") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Accounting'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="rep-main.php"
                        <?php echo ($m_active == "Accounting") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Accounting'); ?>
                    </a>
                    <a class="dropdown-item" href="acct-main.php"><em>G</em>eneral</a>
                    <a class="dropdown-item" href="acct-plans.php"><em>P</em>lans</a>
                    <a class="dropdown-item" href="acct-custom.php"><em>C</em>ustom</a>
                    <a class="dropdown-item" href="acct-hotspot.php"><em>H</em>otspot</a>
                    <a class="dropdown-item" href="acct-maintenance.php"><em>M</em>aintenance</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="acct-main.php"
                    <?php echo ($m_active == "Billing") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Billing'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="rep-main.php"
                        <?php echo ($m_active == "Billing") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Billing'); ?>
                    </a>
                    <a class="dropdown-item" href="bill-pos.php"><em>P</em>OS</a>
                    <a class="dropdown-item" href="bill-plans.php"><em>P</em>lans</a>
                    <a class="dropdown-item" href="bill-rates.php"><em>R</em>ates</a>
                    <a class="dropdown-item" href="bill-merchant.php"><em>M</em>erchant-Transactions</a>
                    <a class="dropdown-item" href="bill-history.php"><em>B</em>illing-History</a>
                    <a class="dropdown-item" href="bill-invoice.php"><em>I</em>nvoices</a>
                    <a class="dropdown-item" href="bill-payments.php">Pa<em>y</em>ments</a>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="gis-main.php"
                    <?php echo ($m_active == "Gis") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Gis'); ?>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="graph-main.php"
                    <?php echo ($m_active == "Graphs") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Graphs'); ?>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="acct-main.php"
                    <?php echo ($m_active == "Config") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Config'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="rep-main.php"
                        <?php echo ($m_active == "Config") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Config'); ?>
                    </a>
                    <a class="dropdown-item" href="config-main.php"><em>G</em>eneral</a>
                    <a class="dropdown-item" href="config-reports.php"><em>R</em>eporting</a>
                    <a class="dropdown-item" href="config-maint.php"><em>M</em>aintenance</a>
                    <a class="dropdown-item" href="config-operators.php"><em>O</em>perators</a>
                    <a class="dropdown-item" href="config-backup.php"><em>B</em>ackup</a>
                </div>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="help-main.php"
                    <?php echo ($m_active == "Help") ? "class=\"active\"" : "" ?>><?php echo t('menu', 'Help'); ?>
                </a>
            </li>
        </ul>
    </div>
</nav>