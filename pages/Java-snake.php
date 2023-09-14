<?php
$TITLE = "UNTITLED PAGE";
$BASE_PATH = '/srv/http/';
include($BASE_PATH."template/top.php");
include($BASE_PATH."template/navbar.php");
include($BASE_PATH."template/body.php");
?>
<div class="bodycontent">
	<div class=divwhitespace78></div>
	<span class="contentbox">
		<h2 class="h2title">Java-snake</h2>
		<p>
		In my opinion, snake is a canonical 'student coding project'. This is for a couple reasons, one being that it's universally understandable - that is, everyone can wrap their head around the gameplay. Another reason is the simplicity, I've found that - if you do it simply, then snake is an extremely simple and easy thing to code. Most of the complexity comes with rendering the whole thing, something that java handles nicely. There really isn't much to talk about when it comes to snake, look upon my works and despair, I guess.<br>
		<ul>
			<li>
				<a href="https://github.com/oscarcoghlan/Java-snake"> &nbsp; View project on GitHub</a> <br> <br>
			</li>
			<li>
				<a href="/res/Java-snake.jar"> &nbsp; Download executable .jar file</a>
			</li>
		</ul>
		</p>
		<video class="articleimage" controls loop>
			<source src="/media/snakeprev.mp4" type="video/mp4">
			<p>Preview of ball simulation</p>
			Your browser does not support mp4.
		</video>
	</span>
</div>
<?php include($BASE_PATH."template/end.php"); ?>

