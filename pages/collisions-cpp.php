<?php
$TITLE = "Project - collisions-cpp";
$BASE_PATH = '/srv/http/';
include($BASE_PATH."template/top.php");
include($BASE_PATH."template/navbar.php");
include($BASE_PATH."template/body.php");
?>
<div class="bodycontent">
	<div class=divwhitespace78></div>
	<span class="contentbox">
		<h2 class="h2title">collisions-cpp</h2>
		<p>
		1. Define the Particle Class:<br>
		The particle class contains the velocity, position, and radius for use with the physics calculations; it also contains the edge count and relative vertex positions (in relation to the centre) of the particle for use with the renderer. The particle class also defines a function that updates it position, and a function that converts its local vertex co-ordinates into global vertex co-ordinates for use with OpenGL. I am sure that doing this conversion on the CPU is not very efficient, however doing it on the GPU is much harder.<br><br>
		2. OpenGL:<br>
		If you are interested then I highly reccomend <u><a href="https://opengl-tutorial.org" target="_blank">opengl-tutorial.org</a></u>. It's what I used.<br><br>
		3. Implement Particle Simulation: <br>
		This entails applying appropriate forces such as gravity to the particles to mimic motion and incorporating collision detection logic and collision resolution logic to create a convincing effect. <br><br>
	If you downloaded the windows binary or built it from source, the key to add particles is 'a'. <br>
		<ul>
			<li>
				<a href="https://github.com/oscarcoghlan/collisions-cpp"> &nbsp; View project on GitHub</a> <br> <br>
			</li>
			<li>
				<a href="/res/collisions-cpp.exe"> &nbsp; Download standalone Windows PE binary</a>
			</li>
		</ul>

		</p>
		<video class="articleimage" controls loop>
			<source src="/media/ballsprev.mp4" type="video/mp4">
			<p>Preview of ball simulation</p>
			Your browser does not support mp4.
		</video>

	</span>
</div>
<?php include($BASE_PATH."template/end.php"); ?>

