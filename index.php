<?php
require_once "load.php";

$objLayouts->heading();
$objMenu->main_menu();
$objMenu->main_right_side_menu();
$objLayouts->card();
$objContents->main_content();
$objContents->side_bar();
$objLayouts->footer();
