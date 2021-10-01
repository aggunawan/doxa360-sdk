<?php

namespace Aggunawan\Doxa360\Service;

use Aggunawan\Doxa360\Init;
use Aggunawan\Doxa360\Object\Freshchat;
use Aggunawan\Doxa360\Object\Member;
use GuzzleHttp\Exception\GuzzleException;

class MemberService extends Init
{
    /**
     * @throws GuzzleException
     */
    public function registerMember(Member $member): ?Member
    {
        $res = $this->getHttpClient()->post('/member/new', [
            'json' => [
                'name' => $member->getName(),
                'email' => $member->getEmail(),
                'phone' => $member->getPhone(),
                'status' => $member->getStatusCode()
            ]
        ]);

        if ($res->getStatusCode() == 201) {
            $member->setId((json_decode((string)$res->getBody()))->member);
            return $member;
        }

        return null;
    }

    /**
     * @throws GuzzleException
     */
    public function getMember(int $memberId): ?Member
    {
        $res = $this->getHttpClient()->get("/member/$memberId");

        if ($res->getStatusCode() == 200) {
            $jsonResponse = json_decode($res->getBody());

            return (new Member())
                ->setId($jsonResponse->id)
                ->setName($jsonResponse->name)
                ->setEmail($jsonResponse->email)
                ->setPhone($jsonResponse->phone)
                ->setStatusCode($jsonResponse->status)
                ->setStatusLabel($jsonResponse->status_label)
                ->setTypeCode($jsonResponse->type)
                ->setTypeLabel($jsonResponse->type_label)
                ->setRegisteredAt($jsonResponse->registered_at);
        }

        return null;
    }

    /**
     * @throws GuzzleException
     */
    public function getFreshchat(int $memberId): ?Freshchat
    {
        $res = $this->getHttpClient()->get("/member/$memberId/freshchat");
        $json = json_decode($res->getBody());

        return $res->getStatusCode() == 200 ?
            ((new Freshchat())
                ->setAccessToken($json->access_token)
                ->setDomain($json->domain)
                ->setAppId($json->app_id)):
            null;
    }

    /**
     * @throws GuzzleException
     */
    public function patchFreshchat(Member $member, Freshchat $freshchat): ?Freshchat
    {
        $res = $this->getHttpClient()
            ->post("/member/{$member->getId()}/freshchat", [
                'json' => [
                    'app_id' => $freshchat->getAppId(),
                    'domain' => $freshchat->getDomain(),
                    'access_token' => $freshchat->getAccessToken()
                ]
            ]);

        $json = json_decode($res->getBody());

        return $res->getStatusCode() == 200 ?
            (new Freshchat())
                ->setAccessToken($json->access_token)
                ->setDomain($json->domain)
                ->setAppId($json->app_id):
            null;
    }
}