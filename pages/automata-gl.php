<?php
$TITLE = "Project - automata-gl";
$BASE_PATH = '/srv/http/';
include($BASE_PATH."template/top.php");
include($BASE_PATH."template/navbar.php");
include($BASE_PATH."template/body.php");
?>
<div class="bodycontent">
	<div class=divwhitespace78></div>
	<span class="contentbox">
		<h2 class="h2title">automata-gl</h2>
		<p>
		This cellular automata implementation is a visual representation of a dynamic system consisting of a grid of cells, each of which can exist as either dead or alive. This simulation follows a set of predefined rules (which can be configured in main.h) to determine the state of each cell in the next iteration based on its current state and the states of its neighboring cells. By iteratively applying these rules, intricate patterns and behaviors emerge, providing suprising complexity and diversity from a seemingly simple set of rules.
<br>
<br>
This implementaion uses C++. Even though C++ was chosen, the program could easily be converted to c code, as standard library functions are used sparingly, only for i/o processes. I was originally torn on whether to use the std::vector object to store the world, but decided that given the size of the world being a finite constant that is defined at compile time, char * (character pointers, native functionality of c) can easily be used instead, resulting in a much smaller memory overhead. 
<br>
<br>
The logic of the program does not contain any fancy optimisations, it simply calculates every cell every frame, resulting in a consistant big O of n<sup>3</sup>, where n is the number of cells. 
<br>
<br>
C++ does not have any tools for rendering available by default. As a lover of speed, the easier SFML was not chosen. This is where OpenGL came in. With some help from <u><a href="https://opengl-tutorial.org" target="_blank">opengl-tutorial.org</a></u>, I was able to use <u><a href="https://www.glfw.org" target="_blank">glfw</a></u> and <u><a href="https://glad.dav1d.de/" target="_blank">glad</a></u> to render a plane with a texture generated from the world state.
<br>
<br>
Have a look at some examples of the program running below.

		</p>
		<video class="articleimage" controls loop>
			<source src="/media/golprev1.mp4" type="video/mp4">
			<p>Preview of game of life cellular automata simulation</p>
			Your browser does not support mp4.
		</video>

		<video class="articleimage rightimg" controls loop>
			<source src="/media/golprev2.mp4" type="video/mp4">
			<p>Preview of H-Trees cellular automata simulation</p>
			Your browser does not support mp4.
		</video>
		<video class="articleimage" controls loop>
			<source src="/media/golprev3.mp4" type="video/mp4">
			<p>Preview of wall cellular automata simulation</p>
			Your browser does not support mp4.
		</video>
		<video class="articleimage rightimg" controls loop>
			<source src="/media/golprev4.mp4" type="video/mp4">
			<p>Preview of qr world cellular automata simulation</p>
			Your browser does not support mp4.
		</video>
<br>
<br>
<ul>
<li>
			<a href="https://github.com/oscarcoghlan/automata-gl"> &nbsp; View project on GitHub</a> <br> <br>
</li>
<li>
			<a href="/res/automata-gl.exe"> &nbsp; Download standalone Windows PE binary</a>
</li>
</ul>

	</span>
</div>
<?php include($BASE_PATH."template/end.php"); ?>
