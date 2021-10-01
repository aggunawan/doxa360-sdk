<?php

use Aggunawan\Doxa360\Object\Freshchat;
use Aggunawan\Doxa360\Object\Member;
use Aggunawan\Doxa360\Service\MemberService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

$freshchat = new Freshchat();
$freshchat->setAppId('app-id')
    ->setDomain('domain')
    ->setAccessToken('access-token');

$member = new Member();
$member->setId(5);

$memberService = new MemberService();
$memberService->setServiceUrl('https://domain');

try {
    $freshchat = $memberService->patchFreshchat($member, $freshchat);
    var_dump($freshchat);
    die;
} catch (GuzzleException $e) {
    var_dump($e);
    die;
}
