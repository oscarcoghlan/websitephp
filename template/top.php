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
		<link rel="icon" href="/img/favicon.ico" />
		<meta charset="UTF-8">
		<meta name="keywords" content="Oscar Coghlan, Intern, Software Development, Student, Looking for work, University of Canberra, UC, Oscar, Coghlan">
		<meta name="description" content="Personal portfolio website of Oscar Coghlan">
		<meta name="author" content="Oscar Coghlan">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
