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
            <br>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" id="sidebar">

                        <h2>Management</h2>

                        <h3>Hotspots Management</h3>
                        <ul class="">

                            <li><a href="mng-hs-list.php"><b>&raquo;</b><?php echo t('button', 'ListHotspots') ?></a>
                            </li>
                            <li><a href="mng-hs-new.php"><b>&raquo;</b><?php echo t('button', 'NewHotspot') ?></a></li>
                            <li><a href="javascript:document.mnghsedit.submit();""><b>&raquo;</b><?php echo t('button', 'EditHotspot') ?><a>
			<form name=" mnghsedit" action="mng-hs-edit.php" method="get" class="sidebar">
                                    <input name="name" type="text" id="hotspotEdit" autocomplete="off"
                                        tooltipText='<?php echo t('Tooltip', 'HotspotName'); ?> <br/>'
                                        value="<?php if (isset($edit_hotspotname)) echo $edit_hotspotname; ?>"
                                        tabindex=3>
                                    </form>
                            </li>

                            <li><a href="mng-hs-del.php"><b>&raquo;</b><?php echo t('button', 'RemoveHotspot') ?></a>
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
                      autoComEdit.add('hotspotEdit','include/management/dynamicAutocomplete.php','_small','getAjaxAutocompleteHotspots');
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