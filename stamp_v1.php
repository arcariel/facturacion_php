<?php
    require_once 'vendor/autoload.php';
    use SWServices\Stamp\StampService as StampService;
     try{
        header('Content-type: application/json');

        $params = array(
            "url"=>"http://services.test.sw.com.mx",
            "user"=>"demo",
            "password"=> "123456789"
            );
        $xml = file_get_contents('./vendor/lunasoft/sw-sdk-php/Tests/Resources/file.xml');
        StampService::Set($params);
        $result = StampService::StampV1($xml);
        
        $pageData->stamp1 = $result;

    }
    catch(Exception $e){
        header('Content-type: text/plain');
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>