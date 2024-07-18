<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsCategoriatwofieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
