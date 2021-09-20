<?php

namespace Aggunawan\Doxa360\Service;

use Aggunawan\Doxa360\Init;
use Aggunawan\Doxa360\Object\Integration;
use GuzzleHttp\Exception\GuzzleException;

class IntegrationService extends Init
{
    /**
     * @throws GuzzleException
     */
    public function getIntegrations(): array
    {
        $jsonResponse = json_decode((string) $this->getHttpClient()->get('/integration')->getBody());
        $integrations = [];

        foreach ($jsonResponse as $json) {
            $integrations[] = $this->buildIntegrationObject($json);
        }

        return $integrations;
    }

    /**
     * @throws GuzzleException
     */
    public function getIntegration(int $id): ?Integration
    {
        $jsonResponse = json_decode((string) $this->getHttpClient()->get("/integration/$id")->getBody());

        return $jsonResponse ? $this->buildIntegrationObject($jsonResponse) : null;
    }

    protected function buildIntegrationObject($stdClass): Integration
    {
        return (new Integration())
            ->setId($stdClass->id)
            ->setName($stdClass->name)
            ->setDescription($stdClass->description)
            ->setThumbnail($stdClass->thumbnail)
            ->setIsFinished($stdClass->is_finished);
    }
}