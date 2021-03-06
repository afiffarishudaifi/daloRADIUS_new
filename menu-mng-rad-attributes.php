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

                        <h3>Attributes Management</h3>
                        <ul class="nav nav-pills nav-sidebar flex-column subnav">

                            <li><a href="javascript:document.mngradattributeslist.submit();"><b>&raquo;</b><img
                                        src='images/icons/userList.gif' border='0'>
                                    <?php echo t('button', 'ListAttributesforVendor') ?>
                                </a>
                                <form name="mngradattributeslist" action="mng-rad-attributes-list.php" method="get"
                                    class="">
                                    <?php
                                    include 'include/management/populate_selectbox.php';
                                    populate_vendors("Select Vendor", "vendor", "");
                                    ?>
                                </form>
                            </li>

                            <li><a href="mng-rad-attributes-new.php"
                                    tabindex=2><b>&raquo;</b><?php echo t('button', 'NewVendorAttribute') ?></a></li>
                            <li><a href="javascript:document.mngradattributesedit.submit();"
                                    tabindex=3><b>&raquo;</b><img src='images/icons/userEdit.gif' border='0'>
                                    <?php echo t('button', 'EditVendorAttribute') ?></a>
                                <form name="mngradattributesedit" action="mng-rad-attributes-edit.php" method="get"
                                    class="">
                                    <input name="vendor" type="text" id="vendornameEdit"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'VendorName'); ?> <br/>'
                                        value="<?php if (isset($vendor)) echo $vendor ?>" tabindex=4>
                                    <input name="attribute" type="text" id="attributenameEdit"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'AttributeName'); ?> <br/>'
                                        value="<?php if (isset($attribute)) echo $attribute  ?>" tabindex=5>
                                </form>
                            </li>
                            <li><a href="javascript:document.mngradattributessearch.submit();"
                                    tabindex=6><b>&raquo;</b><img src='images/icons/userSearch.gif' border='0'>
                                    <?php echo t('button', 'SearchVendorAttribute') ?></a>
                                <form name="mngradattributessearch" action="mng-rad-attributes-search.php" method="get"
                                    class="">
                                    <input name="attribute" type="text" id="attributenameSearch"
                                        <?php if ($autoComplete) echo "autocomplete='off'"; ?>
                                        tooltipText='<?php echo t('Tooltip', 'AttributeName'); ?> <br/>'
                                        value="<?php if (isset($attribute)) echo $attribute ?>" tabindex=7>
                                </form>
                            </li>
                            <li><a href="mng-rad-attributes-del.php" tabindex=8><b>&raquo;</b><img
                                        src='images/icons/userRemove.gif' border='0'>
                                    <?php echo t('button', 'RemoveVendorAttribute') ?></a></li>
                            <li><a href="mng-rad-attributes-import.php" tabindex=8><b>&raquo;</b><img
                                        src='images/icons/reportsHistory.png' border='0'>
                                    <?php echo t('button', 'ImportVendorDictionary') ?></a>
                            </li>

                        </ul>

                    </div>
                </div>

                <?php
                include_once("include/management/autocomplete.php");

                if ($autoComplete) {
                    echo "<script type=\"text/javascript\">
                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('attributenameSearch','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteAttributes');

                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('attributenameEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteAttributes');

                      autoComEdit = new DHTMLSuite.autoComplete();
                      autoComEdit.add('vendornameEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteVendorName');
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