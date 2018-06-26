<?php

/*
This first lab is actually just parsing without object orientation, we're going to try this first.

this is my controller file where I call everything.

*/

require_once('inc/parse.inc.php');
require_once('inc/html.inc.php');
require_once('inc/file.inc.php');
require_once('inc/config.inc.php');

$fileContents = getFileContents();
//var_dump($fileContents);

$parse = parseData($fileContents);


htmlHeader();
dispData($parse);
htmlFooter();
?>