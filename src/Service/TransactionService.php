<?php

namespace Aggunawan\Doxa360\Service;

use Aggunawan\Doxa360\Init;
use Aggunawan\Doxa360\Object\Transaction;
use GuzzleHttp\Exception\GuzzleException;

class TransactionService extends Init
{
    /**
     * @throws GuzzleException
     */
    public function createTransaction(Transaction $transaction): Transaction
    {
        $res = $this->getHttpClient()
            ->post("/member/{$transaction->getMemberId()}/transaction/new", [
                'json' => [
                    'product' => [
                        'name' => $transaction->getProductName(),
                        'price' => $transaction->getProductPrice(),
                        'quantity' => $transaction->getQuantity()
                    ],
                    'tax' => $transaction->getTax(),
                    'signed_by' => [
                        'name' => $transaction->getSignedByName(),
                        'email' => $transaction->getSignedByEmail()
                    ]
                ]
            ]);

        if ($res->getStatusCode() == 201) $transaction->setCode(json_decode($res->getBody())->code);

        return $transaction;
    }

    /**
     * @throws GuzzleException
     */
    public function getTransaction(int $memberId, string $uuid): ?Transaction
    {
        $res = $this->getHttpClient()->get("/member/$memberId/transaction/$uuid");

        return ($res->getStatusCode() == 200) ?
            $this->buildTransaction(json_decode($res->getBody())) :
            null;
    }

    /**
     * @throws GuzzleException
     */
    public function getTransactions(int $memberId): ?array
    {
        $res = $this->getHttpClient()->get("/member/$memberId/transaction");

        if ($res->getStatusCode() == 200) {
            $collection = [];

            foreach (json_decode($res->getBody()) as $item) {
                $collection[] = $this->buildTransaction($item);
            }
            return $collection;
        }

        return null;
    }

    protected function buildTransaction($jsonObject): Transaction
    {
        return (new Transaction())
            ->setId($jsonObject->id)
            ->setCode($jsonObject->code)
            ->setMemberId($jsonObject->member_id)
            ->setSignedByEmail($jsonObject->signed_by_email)
            ->setSignedByName($jsonObject->signed_by_name)
            ->setProductName($jsonObject->product_name)
            ->setProductPrice($jsonObject->product_price)
            ->setQuantity($jsonObject->quantity)
            ->setTax($jsonObject->tax)
            ->setSubTotal($jsonObject->sub_total)
            ->setTotal($jsonObject->total)
            ->setRecordedAt($jsonObject->recorded_at);
    }
}