<?php
require_once('../../../autoload.php');
require_once('../../../includes/config.php');
$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);
$PayPal = new angelleye\PayPal\rest\billing\BillingAPI($configArray);

$planId = 'P-94C59925DN0148020MSKAUAA';                       // Required. The ID of the billing plan for which to show details.

$returnArray = $PayPal->get_plan($planId);
echo "<pre>";
print_r($returnArray);
