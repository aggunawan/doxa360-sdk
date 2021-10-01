<?php

use Aggunawan\Doxa360\Service\MemberService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

echo "Member ID : ";
$memberId = trim(fgets(STDIN));

echo "Service URI : ";
$serviceUri = trim(fgets(STDIN));

$memberService = new MemberService();
$memberService->setServiceUrl($serviceUri);

try {
    $freshchat = $memberService->getFreshchat($memberId);
    var_dump($freshchat);
    die;
} catch (GuzzleException $e) {
}
