<?php

use Aggunawan\Doxa360\Object\Member;
use Aggunawan\Doxa360\Service\MemberService;
use GuzzleHttp\Exception\GuzzleException;

require_once '../vendor/autoload.php';

echo "Member name : ";
$name = trim(fgets(STDIN));

echo "Member phone : ";
$phone = trim(fgets(STDIN));

echo "Member email : ";
$email = trim(fgets(STDIN));

echo "Service URI : ";
$serviceUri = trim(fgets(STDIN));

$memberService = new MemberService;
$memberService->setServiceUrl($serviceUri);

try {
    $member = $memberService->registerMember((new Member())
        ->setName($name)
        ->setPhone($phone)
        ->setEmail($email));

    var_dump($member);
    die;
} catch (GuzzleException $e) {
    var_dump($e);
    die();
}
