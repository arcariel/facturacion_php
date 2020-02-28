<?php

	$pageData = (object)(array());

	
	require 'authenticator.php';
	print "Token generado: \n";
	print $pageData->token->data->token;

	print "\n\n\n\n";
	print "Timbrar CFDI V1:";
	print "\n";

	require 'stamp_v1.php';
	print json_encode($pageData->stamp1);

	print "\n\n\n\n";
	print "Estan rotos los ejemplos ya no segui mas :(";
?>