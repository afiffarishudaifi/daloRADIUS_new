<?php

include("library/checklogin.php");
$operator = $_SESSION['operator_user'];

include_once('library/config_read.php');
$log = "visited page: ";
include('include/config/logging.php');

?>


<?php

include_once("./_partials/head.php");
include_once("./_partials/js.php");
include("menu-help.php");

?>

<div class="col-lg-9">
    <div class="card">

        <h2 id="Intro"><a href="#">Help</a></h2>
        <p>

            One of several communication mediums available at your disposal:<br /><br />

            <b>daloRADIUS website</b>: <a href="http://www.daloradius.com">daloRADIUS blog</a><br /><br />
            <b>daloRADIUS Project at GitHub</b>: <a href="https://github.com/lirantal/daloradius">GitHub
                project</a><br />
            At GitHub you may find the trackers for submitting tickets for support, bugs or features for next
            releases.<br />
            The official daloRADIUS package is available at
            GitHub as well.<br /><br />
            <b>daloRADIUS Project at SourceForge</b>: <a href="http://sourceforge.net/projects/daloradius/">SourceForge
                project</a><br />
            Forums and the mailing list archive to review and search for issues.<br />
            The daloRADIUS packages here are old, use the GitHub ones instead.<br /><br />
            <b>daloRADIUS Mailing List</b>: Email to daloradius-users@lists.sourceforge.net, though registration to the
            mailing list<br />
            is required first <a
                href="https://lists.sourceforge.net/lists/listinfo/daloradius-users">here</a><br /><br />

            <b>daloRADIUS IRC</b>: you can find us at #daloradius on irc.freenode.net
        </p>
    </div>
</div>
<div id="footer">

    <?php
	include 'page-footer.php';
	?>

</div>

</div>
</div>
</div>

</body>

</html>