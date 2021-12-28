<?php
    
    $GLOBALS['DB'] = array(	
		'HOST' => 'inquire01.cafe24.com',
		'ID' => 'inquire01',
		'PW' => 'a48ppsc!',
		'NAME' => 'inquire01',
    );

    $conn = mysqli_connect(
        $DB['HOST'], // 주소
        $DB['ID'],
        $DB['PW'],
        $DB['NAME'],
        );

    $process_name = 'etc';

    $sql = "
    SELECT
    * 
    FROM 
    {$process_name}
    ";

    $result = mysqli_query($conn, $sql);
        var_dump($result($num_rows));
    // if(mysqli_num_rows($result) > 0){
    //     while($etc = mysqli_fetch_assoc($result)){
    //         $etc['name'];
    //     };
    // };
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$etc['name'];?>
</body>
</html>
