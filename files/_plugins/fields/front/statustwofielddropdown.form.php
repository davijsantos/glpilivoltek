<?php

$dropdown = new PluginFieldsStatustwofieldDropdown();
$options = [
   'ddtype' => $_GET['ddtype']
];
include GLPI_ROOT . "/front/dropdown.common.form.php";
