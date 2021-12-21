<?php

	date_default_timezone_set('Asia/Seoul');

    $GLOBALS['PATH'] = array(
        'FRONT' => '/view',
        'FRAME' => '/frame',
        'ADMIN' => '/admin',
       'COMMON' => '/common',
    'RESOURCES' => '/resources',
    );
    
    $GLOBALS['DB'] = array(	
		'HOST' => 'localhost',
		'ID' => 'root',
		'PW' => '6a48ppsc.,',
		'NAME' => 'test11',
    );
  
    require_once 'util/DB.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['RESOURCES'] . "/js/smw.php";
    
?>