<?php

use Aggunawan\Doxa360\Service\TransactionService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

$transactionService = new TransactionService();
$transactionService->setServiceUrl('https://localhost:3000');

try {
    $transactions = $transactionService->getTransactions(19);
    var_dump($transactions);
    die;
} catch (GuzzleException $e) {
    die;
}