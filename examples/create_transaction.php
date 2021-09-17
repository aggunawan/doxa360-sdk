<?php

use Aggunawan\Doxa360\Object\Transaction;
use Aggunawan\Doxa360\Service\TransactionService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

$transaction = new Transaction();
$transaction->setMemberId(0)
    ->setProductName('Product Name')
    ->setProductPrice(100000)
    ->setQuantity(100)
    ->setTax(10000)
    ->setSignedByName('Signed by Name')
    ->setSignedByEmail('admin@admin.com');

$transactionService = new TransactionService();
$transactionService->setServiceUrl('https://localhost:3000');

try {
    $transaction = $transactionService->createTransaction($transaction);
    var_dump($transaction);
    die;
} catch (GuzzleException $e) {
    die;
}