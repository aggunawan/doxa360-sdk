<?php

use Aggunawan\Doxa360\Service\IntegrationService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

echo "Service URI : ";
$serviceUri = trim(fgets(STDIN));

echo "Integration ID : ";
$id = trim(fgets(STDIN));

$transaction = new IntegrationService();
$transaction->setServiceUrl($serviceUri);

try {
    var_dump($transaction->getIntegration($id));
    die();
} catch (GuzzleException $e) {
    die();
}
