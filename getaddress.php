<?php

require_once "vendor/autoload.php";

use ThiagoLuna\GetZipcode\Search;

$searchCep = new Search;

$result = $searchCep->getAddressFromZipcode('21060-060');

print_r($result);