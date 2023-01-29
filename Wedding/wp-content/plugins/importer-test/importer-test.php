<?php

/**
 * Plugin name: Importer Test
 * Description: This is used to import csv files in wordpress
 * Version: 1.0
 * Author: Rishabh Tyagi
 */

if (!defined('ABSPATH')) {
    header("Location:/youtube");
    die();
}

function importer_test_activation(){
    global $wpdb,$table_prefix;
}
register_activation_hook(__FILE__,'importer_test_activation');

function importer_test_deactivation()
{
    // 
}
register_deactivation_hook(__FILE__, 'importer_test_deactivation');

?>