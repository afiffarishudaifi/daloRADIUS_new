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

                        <h3>Realms Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="mng-rad-realms-list.php"><b>&raquo;</b><img src='images/icons/userList.gif'
                                        border='0'> List Realms</a></li>
                            <li><a href="mng-rad-realms-new.php"><b>&raquo;</b><img src='images/icons/userNew.gif'
                                        border='0'> New Realm</a></li>
                            <li><a href="javascript:document.mngradrealmedit.submit();""><b>&raquo;</b><img src='images/icons/userEdit.gif' border='0'> Edit Realm<a>
			<form name=" mngradrealmedit" action="mng-rad-realms-edit.php" method="get" class="">
                                    <select onChange="javascript:setStringText(this.id,'realm')" id='realmlist'
                                        name='realmname' tabindex=105 />
                                    <option value=''>Select Realm</option>
                                    <option value=''></option></select> </form>
                            </li>

                            <li><a href="mng-rad-realms-del.php"><b>&raquo;</b><img src='images/icons/userRemove.gif'
                                        border='0'> Remove Realm</a></li>
                        </ul>


                        <h3>Proxys Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="mng-rad-proxys-list.php"><b>&raquo;</b><img src='images/icons/userList.gif'
                                        border='0'> List Proxys</a></li>
                            <li><a href="mng-rad-proxys-new.php"><b>&raquo;</b><img src='images/icons/userNew.gif'
                                        border='0'> New Proxy</a></li>
                            <li><a href="javascript:document.mngradproxyedit.submit();""><b>&raquo;</b><img src='images/icons/userEdit.gif' border='0'> Edit Proxy<a>
			<form name=" mngradproxyedit" action="mng-rad-proxys-edit.php" method="get" class="">
                                    <select onChange="javascript:setStringText(this.id,'proxy')" id='proxylist'
                                        name='proxyname' tabindex=105 />
                                    <option value=''>Select Proxy</option>
                                    <option value=''></option></select> </form>
                            </li>

                            <li><a href="mng-rad-proxys-del.php"><b>&raquo;</b><img src='images/icons/userRemove.gif'
                                        border='0'> Remove Proxy</a></li>
                        </ul>

                    </div>
                </div>