<?php

use Aggunawan\Doxa360\Service\MemberService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

echo "Member ID : ";
$memberId = trim(fgets(STDIN));

echo "Service URI : ";
$serviceUri = trim(fgets(STDIN));

$memberService = new MemberService;
$memberService->setServiceUrl($serviceUri);

try {
    $member = $memberService->getMember($memberId);
    var_dump($member);
    die;
} catch (GuzzleException $e) {
    var_dump($e);
    die();
}
