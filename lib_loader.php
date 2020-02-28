<?php

	file_exists("vendor/autoload.php")?require "vendor/autoload.php":"";
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Services.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Authentication/AuthenticationService.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Authentication/AuthRequest.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Stamp/StampRequest.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Stamp/StampService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Issuer/IssuerService.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Cancelation/CancelationService.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Cancelation/CancelationRequest.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Cancelation/CancelationHandler.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/AccountBalance/AccountBalanceRequest.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/AccountBalance/AccountBalanceService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Validation/ValidateRequest.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Validation/ValidateXMLService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Validation/ValidateLcoService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Validation/ValidateLrfcService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/JSonIssuer/JsonIssuerRequest.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/JSonIssuer/JsonIssuerService.php';
    require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Toolkit/SignService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/SatQuery/SatQueryRequest.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/SatQuery/SatQueryService.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Csd/CsdRequest.php';
    //require_once dirname(__FILE__) . '/vendor/lunasoft/sw-sdk-php/SWServices/Csd/CsdService.php';

?>