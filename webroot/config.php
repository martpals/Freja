<?php
/**
 * Config-file for Freja. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Freja paths.
 *
 */
define('FREJA_INSTALL_PATH', __DIR__ . '/..');
define('FREJA_THEME_PATH', FREJA_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(FREJA_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Freja variable.
 *
 */
$freja = array();
 
 
/**
 * Site wide settings.
 *
 */
$freja['lang']         = 'sv';
$freja['title_append'] = ' | Freja en webbtemplate';
$freja['favicon'] = 'img/favicon.ico';
/**
 * Theme related settings.
 *
 */
$freja['stylesheet'] = 'css/style.css';
$freja['favicon']    = 'favicon.ico';