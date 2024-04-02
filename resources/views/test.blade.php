<?php

$module = new App\Models\ModuleAccueil();
$botDashboard = $module->get();
var_dump($botDashboard);
?>