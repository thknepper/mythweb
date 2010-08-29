<?php
/**
 * Header for the settings section
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @license     GPL
 *
 * @package     MythWeb
 * @subpackage  Settings
/**/

// Set the desired page title
    $page_title = 'MythWeb - '.$Settings[$Path[1]]['name'].' :: '.$Settings[$Path[1]]['choices'][$Path[2]];

// Custom headers
    $headers[] = '<link rel="stylesheet" type="text/css" href="'.skin_url.'/settings.css">';

 // Setup some vars for the ipod template
    $Page_Previous_Location = root_url;
    $Page_Previous_Location_Name = 'Start';
    $Page_Title_Short = 'Settings';

// Print the page header
    require 'modules/_shared/tmpl/'.tmpl.'/header.php';

?>

