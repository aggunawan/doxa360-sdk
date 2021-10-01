<?php

namespace Aggunawan\Doxa360\Object;

class Freshchat
{
    protected ?string $domain = null;
    protected ?string $app_id = null;
    protected ?string $access_token = null;

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function getAppId(): ?string
    {
        return $this->app_id;
    }

    public function getAccessToken(): ?string
    {
        return $this->access_token;
    }

    public function setDomain(?string $domain): Freshchat
    {
        $this->domain = $domain;
        return $this;
    }

    public function setAppId(?string $appId): Freshchat
    {
        $this->app_id = $appId;
        return $this;
    }

    public function setAccessToken(?string $accessToken): Freshchat
    {
        $this->access_token = $accessToken;
        return $this;
    }
}