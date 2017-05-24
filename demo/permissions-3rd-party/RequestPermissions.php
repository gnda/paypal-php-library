<?php
/**
 * Include our config file and the PayPal library.
 */
require_once('../../includes/config.php');
require_once('../../autoload.php');


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
$Scope = $_POST['permissions_scope'];

$RequestPermissionsFields = array(
	'Scope' => $Scope,
	'Callback' => 'http://localhost/paypal-php-library/demo/permissions-3rd-party/RequestPermissions-Callback.php'
    );

$PayPalRequestData = array('RequestPermissionsFields' => $RequestPermissionsFields);

// Pass data into class for processing with PayPal and load the response array into $PayPalResult
$PayPalResult = $PayPal->RequestPermissions($PayPalRequestData);

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>3'rd Party Permission Demo | PHP Class Library | Angell EYE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="/assets/js/less-1.3.3.min.js"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="/assets/js/html5shiv.js"></script>
            <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/images/favicon.png">
        <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/scripts.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div id="header" class="row clearfix">
                        <div class="col-md-6 column">
                            <div id="angelleye_logo"> <a href="/"><img alt="Angell EYE PayPal PHP Class Library Demo" src="../assets/images/logo.png"></a> </div>
                        </div>
                        <div class="col-md-6 column">
                            <div id="paypal_partner_logo"> <img alt="PayPal Partner and Certified Developer" src="../assets/images/paypal-partner-logo.png"/> </div>
                        </div>
                    </div>
                    <h2 align="center">3'rd Party Permission</h2>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Request Permissions Response</div>
                        <div class="panel-body">
                            <div class="col-md-12 text-center">
                                <a href="<?php echo $PayPalResult['RedirectURL'] ?>" class="btn btn-primary btn-lg">Click here for Grant Permission</a>
                            </div>
                            <div class="col-md-12">
                                Below is Sample Request and Response
                                
                                <?php echo "<pre>"; print_r($PayPalResult); echo "</pre>"; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>    
</html>
        