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
            $m_active = "Billing";
            include_once("./_partials/navbar.php");
            include_once("./_partials/js.php");
            include_once("include/management/autocomplete.php");
            ?>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">

                        <h2>Billing</h2>

                        <h3>Point of Sales Management</h3>
                        <ul class="subnav">

                            <li>
                                <a href="javascript:document.billposlist.submit();"><b>&raquo;</b><?php echo t('button', 'ListUsers') ?></a>
                                <form name="billposlist" action="bill-pos-list.php" method="get" class="sidebar">
                                    <br />
                                    <?php
                                    include 'include/management/populate_selectbox.php';
                                    populate_plans("Select Plan", "planname", "generic");
                                    ?>
                                </form>
                            </li>
                            <li><a href="bill-pos-new.php"><b>&raquo;</b><?php echo t('button', 'NewUser') ?></a></li>
                            <li><a href="javascript:document.billposedit.submit();"><b>&raquo;</b><?php echo t('button', 'EditUser') ?><a>
                                        <form name="billposedit" action="bill-pos-edit.php" method="get" class="sidebar">
                                            <input class="form-control-sm" name="username" type="text" id="usernameEdit" <?php if ($autoComplete) echo "autocomplete='off'"; ?> tooltipText='<?php echo t('Tooltip', 'Username'); ?> <br/>' value="<?php if (isset($edit_username)) echo $edit_username; ?>" tabindex=1>
                                        </form>
                            </li>

                            <li><a href="bill-pos-del.php"><b>&raquo;</b><?php echo t('button', 'RemoveUsers') ?></a>
                            </li>

                        </ul>

                        <br /><br />



                    </div>
                </div>

                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
                        /** Making usernameEdit interactive **/
                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('usernameEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteUsernames');
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