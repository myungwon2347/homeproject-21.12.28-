<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

    $process_name = 'board';

    $sql = "
    SELECT
    * 
    FROM 
    {$process_name}
    ";
?>