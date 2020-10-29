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
                        <ul class="subnav">

                            <li><a href="mng-rad-realms-list.php"><b>&raquo;</b>List Realms</a></li>
                            <li><a href="mng-rad-realms-new.php"><b>&raquo;</b>New Realm</a></li>
                            <li><a href="javascript:document.mngradrealmedit.submit();""><b>&raquo;</b>Edit Realm<a>
			<form name=" mngradrealmedit" action="mng-rad-realms-edit.php" method="get" class="sidebar">
                                    <select onChange="javascript:setStringText(this.id,'realm')" id='realmlist'
                                        name='realmname' tabindex=105 />
                                    <option value=''>Select Realm</option>
                                    <option value=''></option></select> </form>
                            </li>

                            <li><a href="mng-rad-realms-del.php"><b>&raquo;</b>Remove Realm</a></li>
                        </ul>


                        <h3>Proxys Management</h3>
                        <ul class="subnav">

                            <li><a href="mng-rad-proxys-list.php"><b>&raquo;</b>List Proxys</a></li>
                            <li><a href="mng-rad-proxys-new.php"><b>&raquo;</b>New Proxy</a></li>
                            <li><a href="javascript:document.mngradproxyedit.submit();""><b>&raquo;</b>Edit Proxy<a>
			<form name=" mngradproxyedit" action="mng-rad-proxys-edit.php" method="get" class="sidebar">
                                    <select onChange="javascript:setStringText(this.id,'proxy')" id='proxylist'
                                        name='proxyname' tabindex=105 />
                                    <option value=''>Select Proxy</option>
                                    <option value=''></option></select> </form>
                            </li>

                            <li><a href="mng-rad-proxys-del.php"><b>&raquo;</b>Remove Proxy</a></li>
                        </ul>

                    </div>
                </div>