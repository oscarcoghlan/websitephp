<?php
$TITLE = "404 File Not Found";
$BASE_PATH = '/srv/http/';
include($BASE_PATH."template/top.php");
include($BASE_PATH."template/navbar.php");
include($BASE_PATH."template/body.php");
?>
<div class="fullpage">
	<div class="title">
		<h3>Error 404 </h3><h4> File not found</h4>
		<a href="/"><u>home</u></a>
	</div>
</div>
<?php include($BASE_PATH."template/end.php"); ?>

