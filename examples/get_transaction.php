<?php

use Aggunawan\Doxa360\Service\TransactionService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

$transactionService = new TransactionService();
$transactionService->setServiceUrl('https://localhost:3000');

try {
    $transaction = $transactionService->getTransaction(0, 'uuid');
    var_dump($transaction);
    die;
} catch (GuzzleException $e) {
    die;
}