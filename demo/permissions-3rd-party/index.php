<?php
require_once('../../includes/config.php');
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
                        <div class="panel-heading">Request Permissions</div>
                        <div class="panel-body">   
                             <div class="row">
                                <div class="col-md-12">
                                    <p class="bg-info"><label>Call Back URL : </label>Your callback URL that specifies actions to take after the account holder grants or denies the request.
                                        <br><code>http://localhost/paypal-php-library/demo/permissions-3rd-party/RequestPermissions-Callback.php</code>
                                    </p>
                                </div>          
                                <div class="clearfix"></div>
                            </div>                            
                            
                            <form name="request_permission_form" action="RequestPermissions.php" method="post">                                                              
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-sm" id="checkall" data-checked='false'>Check all</button>
                            </div>
                            <div class="clearfix"></div>    
                            <div class="col-md-4">                                                             
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='EXPRESS_CHECKOUT' />
                                        EXPRESS_CHECKOUT
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='DIRECT_PAYMENT' />
                                        DIRECT_PAYMENT
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='AUTH_CAPTURE' />
                                        AUTH_CAPTURE
                                    </label>
                                </div>

                                <!--                                <div class="checkbox">
                                                                   <label>
                                                                    <input type="checkbox" name="permissions_scope[]" value='AIR_TRAVEL' />
                                                                    AIR_TRAVEL
                                                                   </label>
                                                                </div>-->

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='TRANSACTION_SEARCH' />
                                        TRANSACTION_SEARCH
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='NON_REFERENCED_CREDIT' />
                                        NON_REFERENCED_CREDIT
                                    </label>
                                </div>

                                <!--                                <div class="checkbox">
                                                                   <label>
                                                                    <input type="checkbox" name="permissions_scope[]" value='SETTLEMENT_CONSOLIDATION' />
                                                                    SETTLEMENT_CONSOLIDATION
                                                                   </label>
                                                                </div>-->

                                <!--                                <div class="checkbox">
                                                                   <label>
                                                                    <input type="checkbox" name="permissions_scope[]" value='SETTLEMENT_REPORTING' />
                                                                    SETTLEMENT_REPORTING
                                                                   </label>
                                                                </div>-->
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='ACCESS_BASIC_PERSONAL_DATA' />
                                        ACCESS_BASIC_PERSONAL_DATA
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='ACCESS_ADVANCED_PERSONAL_DATA' />
                                        ACCESS_ADVANCED_PERSONAL_DATA
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='RECURRING_PAYMENTS' />
                                        RECURRING_PAYMENTS
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='ACCOUNT_BALANCE' />
                                        ACCOUNT_BALANCE
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='ENCRYPTED_WEBSITE_PAYMENTS' />
                                        ENCRYPTED_WEBSITE_PAYMENTS
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='REFUND' />
                                        REFUND
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='BILLING_AGREEMENT' />
                                        BILLING_AGREEMENT
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='REFERENCE_TRANSACTION' />
                                        REFERENCE_TRANSACTION
                                    </label>
                                </div>

                                <!--                                <div class="checkbox">
                                                                   <label>
                                                                    <input type="checkbox" name="permissions_scope[]" value='MASS_PAY' />
                                                                    MASS_PAY
                                                                   </label>
                                                                </div>-->

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='TRANSACTION_DETAILS' />
                                        TRANSACTION_DETAILS
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='BUTTON_MANAGER' />
                                        BUTTON_MANAGER
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='MANAGE_PENDING_TRANSACTION_STATUS' />
                                        MANAGE_PENDING_TRANSACTION_STATUS
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='RECURRING_PAYMENT_REPORT' />
                                        RECURRING_PAYMENT_REPORT
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='EXTENDED_PRO_PROCESSING_REPORT' />
                                        EXTENDED_PRO_PROCESSING_REPORT
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='EXCEPTION_PROCESSING_REPORT' />
                                        EXCEPTION_PROCESSING_REPORT
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='ACCOUNT_MANAGEMENT_PERMISSION' />
                                        ACCOUNT_MANAGEMENT_PERMISSION
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="permissions_scope[]" value='INVOICING' />
                                        INVOICING
                                    </label>
                                </div>                                                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 text-center">
                                <input type="submit" name="submit_permissions" id="submit_permissions" class="btn btn-primary btn-lg"/>
                            </div>
                           </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
    $(document).ready(function(){
        $('#checkall:button').click(function(e){
            e.preventDefault();
            if ($(':checkbox').is(':checked')) {
                $(':checkbox').prop('checked', false);
                $(this).html('Checkall');
            }
            else{
                $(':checkbox').prop('checked', true);
                $(this).html('UnCheck all');
            }
        });
    });

    </script>
</html>
