<?php
require __DIR__ . '/lib/__init__.php';

use lib\app\widgets\NavBarWidget;
use lib\WaterStation;

$navBar = new NavBarWidget(null);
echo $navBar->build(2);