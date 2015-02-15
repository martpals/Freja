<?php 
/**
 * This is a Freja pagecontroller.
 *
 */
// Include the essential config-file which also creates the $freja variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Store page content in variables in the Freja container.
$freja['title'] = "Hello World";
 
$freja['header'] = <<<EOD
<img class='sitelogo' src='img/freja.png' alt='Freja Logo'/>
<span class='sitetitle'>Freja webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$freja['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Freja ser ut och fungerar.</p>
EOD;
 
$freja['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mårten Pålsson (j.p.marten (at) gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Page rendered by Freja.
include(FREJA_THEME_PATH);