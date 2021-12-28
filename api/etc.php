<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/process/etc.php";

    $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0){
            while($etc = mysqli_fetch_assoc($result)){
                echo $etc['name'];
            };
        };
    if($result === false){
        echo 'DB연결 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
      }
    
?>