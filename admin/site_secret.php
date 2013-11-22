<?php
/**
 * SIte secret manipulation page
 *
 * @package Elgg
 * @subpackage Core
 */

// Get the Elgg framework
require_once(dirname(dirname(__FILE__)) . "/engine/start.php");

// Make sure only valid admin users can see this
admin_gatekeeper();

// Display main admin menu

$title = elgg_view_title(elgg_echo('admin:settings:advanced:site_secret'));
$main_box = elgg_view("admin/settings/advanced/site_secret");
$content = elgg_view_layout("two_column_left_sidebar", '', $title . $main_box);

page_draw(elgg_echo("admin:site"), $content);