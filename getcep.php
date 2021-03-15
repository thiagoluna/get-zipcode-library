<?php

require_once "vendor/autoload.php";

use ThiagoLuna\GetCep\Search;

$searchCep = new Search;

$result = $searchCep->getAddressFromZipcode('21073440');

print_r($result);