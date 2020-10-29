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

                        <h3>Plans Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column">

                            <li><a href="bill-plans-list.php"><b>&raquo;</b><?php echo t('button', 'ListPlans') ?></a>
                            </li>
                            <li><a href="bill-plans-new.php"><b>&raquo;</b><?php echo t('button', 'NewPlan') ?></a></li>
                            <li><a href="javascript:document.billplansedit.submit();""><b>&raquo;</b><?php echo t('button', 'EditPlan') ?><a>
			<form name=" billplansedit" action="bill-plans-edit.php" method="get" class="sidebar">
                                    <input name="planName" type="text" id="planNameEdit"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'BillingPlanName'); ?> <br/>'
                                        value="<?php if (isset($edit_planname)) echo $edit_planname; ?>" tabindex=3>
                                    </form>
                            </li>

                            <li><a href="bill-plans-del.php"><b>&raquo;</b><?php echo t('button', 'RemovePlan') ?></a>
                            </li>

                        </ul>

                        <br /><br />



                    </div>
                </div>

                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('planNameEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteBillingPlans');
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