<!DOCTYPE html>
<html>
	<head>
<?php 
foreach(array_diff(scandir($BASE_PATH . "css/"), array('..', '.')) as &$value) {
	echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/" . $value . "\">");
}
foreach(array_diff(scandir($BASE_PATH . "js/"), array('..', '.')) as &$value) {
	echo("<script src=\"/js/" . $value . "\" async></script>");
}
echo("<title>" . $TITLE . "</title>");
?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
		<link rel="icon" href="/img/favicon.ico" />
		<meta charset="UTF-8">
		<meta name="keywords" content="Oscar Coghlan, Intern, Software Development, Student, Looking for work, University of Canberra, UC, Oscar, Coghlan, Batchelor of Software Engineering, Batchleor of Software Engineering (560AA.7), Internships, Web Development, Full stack">
		<meta name="description" content="I'm Oscar, a dedicated software engineering student focused on delivering innovative solutions. On this portfolio website, I share my skills, projects, and experiences. I am currently completing a degree in software engineering, and have developed a strong foundation in programming languages, data structures, algorithms, and software design principles. I am actively seeking meaningful opportunities to apply my skills, expand my expertise as a software engineer. ">
		<meta name="author" content="Oscar Coghlan">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
