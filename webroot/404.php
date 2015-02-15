<?php 
/**
 * This is a Freja pagecontroller.
 *
 */
// Include the essential config-file which also creates the $freja variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Store page content in variables in the Freja container.
$freja['title'] = "404";
$freja['header'] = "";
$freja['main'] = "This is a Freja404. Document is not here.";
$freja['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Page rendered by Freja.
include(Freja_THEME_PATH);