<nav class="Navbar">
	<a href="/">Home</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="/pages/blog.php">Blog</a>
	<span class="RightAlign">
		<span class="pagelinks">
<?php 
if (isset($NAVBARLINKS)) { 
	include($BASE_PATH . $NAVBARLINKS);
}
?>
		</span>
		<a href="./oscarcresume.pdf">Résumé</a>
	</span>
</nav>

