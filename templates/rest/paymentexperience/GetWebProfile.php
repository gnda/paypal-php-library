<?php

require_once('../../../autoload.php');
require_once('../../../includes/config.php');

$configArray = array(
                'ClientID' => $rest_client_id,
                'ClientSecret' => $rest_client_secret
                );

$PayPal = new \angelleye\PayPal\rest\paymentexperience\PaymentExperianceAPI($configArray);

$ProfileID = '';       // Required. The ID of the profile for which to show details.

$returnArray = $PayPal->get_web_profile($ProfileID);
echo "<pre>";
print_r($returnArray);

?>