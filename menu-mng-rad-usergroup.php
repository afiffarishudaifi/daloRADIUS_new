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

                        <h3>User-Group Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="mng-rad-usergroup-list.php"><b>&raquo;</b><img src='images/icons/userList.gif'
                                        border='0'> <?php echo t('button', 'ListUserGroup') ?></a>
                            </li>
                            <li><a href="javascript:document.mngradusrgrplist.submit();""><b>&raquo;</b><img src='images/icons/userList.gif' border='0'> <?php echo t('button', 'ListUsersGroup') ?><a>
			<form name=" mngradusrgrplist" action="mng-rad-usergroup-list-user.php" method="get" class="">
                                    <input name="username" type="text" id="usernameList"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'Username'); ?> <br/>' />
                                    </form>
                            </li>

                            <li><a href="mng-rad-usergroup-new.php"><b>&raquo;</b><img src='images/icons/userNew.gif'
                                        border='0'> <?php echo t('button', 'NewUserGroup') ?></a>
                            </li>
                            <li><a href="javascript:document.mngradusrgrpedit.submit();""><b>&raquo;</b><img src='images/icons/userEdit.gif' border='0'> <?php echo t('button', 'EditUserGroup') ?><a>
			<form name=" mngradusrgrpedit" action="mng-rad-usergroup-edit.php" method="get" class="">
                                    <input name="username" type="text" value="" id="usernameEdit"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'Username'); ?> <br/>' />
                                    <input name="group" type="text" value="" id="groupnameEdit"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'GroupName'); ?> <br/>' />
                                    </form>
                            </li>


                            <li><a href="mng-rad-usergroup-del.php"><b>&raquo;</b>
                                    <img src='images/icons/userRemove.gif' border='0'>
                                    <?php echo t('button', 'RemoveUserGroup') ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('usernameList','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteUsernames');

                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('usernameEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteUsernames');

                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('groupnameEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteGroupName');
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