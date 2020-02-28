<?php

	require_once  'lib_loader.php';
	use SWServices\Authentication\AuthenticationService  as Authentication;
    $params = array(
        "url"=>"http://services.test.sw.com.mx",
        "user"=>"demo",
        "password"=> "123456789"
    );

    try
    {
        header('Content-type: application/json');
        Authentication::auth($params);
        $token = Authentication::Token();
        $pageData->token = $token;
    }
    catch(Exception $e)
    {
        header('Content-type: text/plain');
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>