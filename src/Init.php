<?php

namespace Aggunawan\Doxa360;

use GuzzleHttp\Client;

class Init
{
    protected string $serviceUrl;

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    public function setServiceUrl($serviceUrl): Init
    {
        $this->serviceUrl = $serviceUrl;
        return $this;
    }

    protected function getHttpClient(): Client
    {
        return new Client([
            'base_uri' => $this->getServiceUrl()
        ]);
    }
}