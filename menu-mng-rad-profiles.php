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

                        <h3>Profiles Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="mng-rad-profiles-list.php"><b>&raquo;</b>
                                    <img src='images/icons/groupsList.png' border='0'>
                                    <?php echo t('button', 'ListProfiles') ?></a></li>
                            <li><a href="mng-rad-profiles-new.php"><b>&raquo;</b>
                                    <img src='images/icons/groupsAdd.png' border='0'>
                                    <?php echo t('button', 'NewProfile') ?></a></li>
                            <li><a href="javascript:document.mngradprofileedit.submit();""><b>&raquo;</b>
			<img src='images/icons/groupsEdit.png' border='0'>
			<?php echo t('button', 'EditProfile') ?><a>
			<form name=" mngradprofileedit" action="mng-rad-profiles-edit.php" method="get" class="">
                                    <?php
                                    include 'include/management/populate_selectbox.php';
                                    populate_groups("Select Profile", "profile", "");
                                    ?>
                                    </form>
                            </li>

                            <li><a href="mng-rad-profiles-duplicate.php"><b>&raquo;</b>
                                    <img src='images/icons/groupsEdit.png' border='0'>
                                    <?php echo t('button', 'DuplicateProfile') ?></a></li>

                            <li><a href="mng-rad-profiles-del.php"><b>&raquo;</b>
                                    <img src='images/icons/groupsRemove.png' border='0'>
                                    <?php echo t('button', 'RemoveProfile') ?></a></li>
                        </ul>

                    </div>
                </div>


                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
			/** Making usernameEdit interactive **/
	              autoComEdit = new DHTMLSuite.autoComplete();
              </script>";
                }
                ?>