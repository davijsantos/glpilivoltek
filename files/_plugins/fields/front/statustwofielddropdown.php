<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsStatustwofieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
