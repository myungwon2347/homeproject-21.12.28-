<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<script>

// ★ 세션 ★
//     session_start();
//     $action = $_GET['action'];
    
//     if ($action == "set"){
//         $_SESSION['key'] = 'session_value';
//         redirect("?action=get");
//     }
//     else if ($action == "get"){
//         if (isset($_SESSION['key'])){
//             echo $_SESSION['key'];
//         }else{
//             echo "NO SESSION";
//         }
//     }else
//     if ($action == "remove"){
//         if (isset($_SESSION['key'])){
//             unset($_SESSION['key']);
//         }
//         redirect("?action=get");
//     }
//     $action = $_GET['action'];
//     if ($action == "set"){
//         세션 설정
//     }elseif ($action == "get"){
//         if (세션이 있다면){
//             세션을 출력한다.
//         }else{
//             "NO SESSION" 메세지를 출력한다.;
//         }
//     }elseif ($action == "remove"){
//         if (세션이 있다면){
//             세션을 삭제한다.
//         }
//         세션 삭제 후 "?action=get" 주소로 이동한다.
//     }

// ★ JSON ★
//     $data = array(
//         'key1' => `value1`,
//         'key2' => 2,
//         'key3' => array(
//             'name' => 'yse',
//             'age' => 105
//         )
//     );
//     // PHP 데이터 형식을 JSON 문자열 형식으로 바꿈
//     $json_data = json_encode($data);

//     // JSON 문자열을 PHP 객체 형식으로 바꿈
//     $decode_object = json_decode($json_data);

//     // 2번째 파라미터에 true 를 전달하면 PHP의 객체 대신 배열 형식으로 바꾼다.
//     $decode_array = json_decode($json_data, true);
    
//     var_dump($data);
//     echo "<br /><br />";
//     var_dump($json_data);
//     echo "<br /><br />";
//     var_dump($decode_object);
//     echo "<br /><br />";
//     var_dump($decode_array);
//     echo "<br /><br />";
    <?php
    function smw(){

        // ★ Escaping ★

        // 파라미터에 인코딩 할 '데이터' 입력
        function htmlEncode($data){
            $html = <<<CDATA
            $data
            CDATA;
            $encode = htmlspecialchars($html);
            echo $encode;
        }

        // 파라미터에 디코딩 할 '데이터' 입력
        function htmlDecode($data){
            $html = <<<CDATA
            $data
            CDATA;
            $encode = htmlspecialchars($html);
            echo $encode;

            $decode = htmlspecialchars_decode($encode);
            echo $decode;
        }

        // 파라미터에 암호화 할 '비밀번호' 입력
        function pwCryption($data){
            $pw_encode = password_hash($data, PASSWORD_BCRYPT);
            return $pw_encode;
        }

        // 파라미터에 '파일 이름', '파일 내용' 입력
        function fileSave($name, $content){
            file_put_contents($name, $content);
        }

    }
    smw();
    ?>
</script>