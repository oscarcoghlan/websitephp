<?php
$TITLE = "Project - collisions-cpp";
$BASE_PATH = '/srv/http/';
include($BASE_PATH."template/top.php");
include($BASE_PATH."template/navbar.php");
include($BASE_PATH."template/body.php");
?>
<div class="bodycontent">
	<span class="contentbox">
		<h2 class="h2title">automata-gl</h2>
		<p>
		I may not have created a perfect particle simulation, but it certainly looks kind of cool. The process of creation went kind of like this:<br><br>
		1. Define the Particle Class:<br>
		The particle class contains the velocity, position, and radius for use with the physics calculations; it also contains the edge count and relative vertex positions (in relation to the centre) of the particle for use with the renderer. The particle class also defines a function that updates it position, and a function that converts its local vertex co-ordinates into global vertex co-ordinates for use with OpenGL. I am sure that doing this conversion on the CPU is not very efficient, however doing it on the GPU is much harder.<br><br>
		2. Make OpenGL work:<br>
		Now this is a doozy that I wont explain, if you are interested then I highly reccomend <u><a href="https://opengl-tutorial.org" target="_blank">opengl-tutorial.org</a></u>. Or read a book on it.<br><br>
		3. Implement Particle Simulation: <br>
		This entails applying appropriate forces such as gravity to the particles to mimic motion and incorporating collision detection logic and collision resolution logic to create a convincing effect. This was the hardest part. <br><br>
		Oh and by the way if you downloaded the windows binary or built it from source, the key to add particles is 'a'. <br>
		<ul>
			<li>
				<a href="https://github.com/oscarcoghlan/collisions-cpp"> &nbsp; View project on GitHub</a> <br> <br>
			</li>
			<li>
				<a href="/res/collisions-cpp.exe"> &nbsp; Download standalone Windows PE binary</a>
			</li>
		</ul>

		</p>
		<video class="articleimage" style="margin: 22px; width:calc(100% - 44px)" controls loop>
			<source src="/media/ballsprev.mp4" type="video/mp4">
			<p>Preview of ball simulation</p>
			Your browser does not support mp4.
		</video>

	</span>
</div>
</div>
</div>
</body>
</html>

