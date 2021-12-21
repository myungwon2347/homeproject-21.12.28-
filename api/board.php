<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/process/board.php";

    $create = function($process_name, $result){
        
        if(false){}
        
        else if($process_name = 'board' && mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_assoc($result)){
                echo nl2br("{$data['idx']}
                {$data['title']}
                {$data['name']}
                {$data['date']}
                "
                );
            };
        };
    };
    echo $create('board', $result);
    if($result === false){
        echo 'DB연결 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
      }
    
?>