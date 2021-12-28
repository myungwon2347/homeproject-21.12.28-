<?php

	date_default_timezone_set('Asia/Seoul');

    $GLOBALS['PATH'] = array(
        'FRONT' => '/view',
        'FRAME' => '/frame',
        'ADMIN' => '/admin',
       'COMMON' => '/common',
    'RESOURCES' => '/resources',
    );
    
    $GLOBALS['ETC'] = array(
      'NAME' => '요양원웹제작소',
      'CEO' => '서명원',
      'TEL' => '010-7297-2347',
      'REGISTRATION' => '000-0000-00000',
      'EMAIL' => 'inquire01@naver.com',
    );

    $GLOBALS['DB'] = array(	
		'HOST' => 'inquire01.cafe24.com',
		'ID' => 'inquire01',
		'PW' => 'a48ppsc!',
		'NAME' => 'inquire01',
    );
  
    require_once 'util/DB.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['RESOURCES'] . "/js/smw.php";
    
?>