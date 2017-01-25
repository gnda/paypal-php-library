<?php
// Include required library files.
require_once('../includes/config.php');
require_once('../autoload.php');


// Create PayPal object.
$PayPalConfig = array(
					  'Sandbox' => $sandbox,
					  'DeveloperAccountEmail' => $developer_account_email,
					  'ApplicationID' => $application_id,
					  'DeviceID' => $device_id,
					  'IPAddress' => $_SERVER['REMOTE_ADDR'],
					  'APIUsername' => $api_username,
					  'APIPassword' => $api_password,
					  'APISignature' => $api_signature,
					  'APISubject' => $api_subject, 
					  'PrintHeaders' => $print_headers,
					  'LogResults' => $log_results, 
					  'LogPath' => $log_path,
					);

$PayPal = new angelleye\PayPal\Adaptive($PayPalConfig);

// Prepare request arrays
// Please refer remarks before fillup details (https://developer.paypal.com/docs/classic/api/adaptive-accounts/GetVerifiedStatus_API_Operation/#id_remark)
$GetVerifiedStatusFields = array(
                            'AccountIdentifierEmailAddress' => '',                      // must be present if the emailAddress field below is not) The identifier of the PayPal account holder. The email address of the PayPal account holder. Use this emailAddress field for new integrations.
                            'AccountIdentifierMobilePhoneNumber' => '',                 // must be present if the emailAddress field below is not) The identifier of the PayPal account holder. The mobile phone number of the PayPal account holder.
                            'AccountIdentifierAccountId' => '',                         // must be present if the emailAddress field below is not) The identifier of the PayPal account holder. The account Id of the PayPal account holder.
                            'EmailAddress' => '', 					// must be present if the accountIdentifier field below is not) The email address of the PayPal account holder. Not recommended for future integrations. For new integrations, use the accountIdentifier field instead.
                            'FirstName' => '', 						// The first name of the PayPal account holder.  Required if MatchCriteria is NAME
                            'LastName' => '', 						// The last name of the PayPal account holder.  Required if MatchCriteria is NAME
                            'MatchCriteria' => ''					// Required.  The criteria must be matched in addition to EmailAddress.  Currently, only NAME is supported.  Values:  NAME, NONE   To use NONE you have to be granted advanced permissions
                        );

$PayPalRequestData = array('GetVerifiedStatusFields' => $GetVerifiedStatusFields);

// Pass data into class for processing with PayPal and load the response array into $PayPalResult
$PayPalResult = $PayPal->GetVerifiedStatus($PayPalRequestData);

// Write the contents of the response array to the screen for demo purposes.
echo '<pre />';
print_r($PayPalResult);
?>