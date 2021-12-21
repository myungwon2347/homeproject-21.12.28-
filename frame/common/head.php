<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=$PATH['RESOURCES']?>/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


    <title>test</title>
    
    <script>
        $(document).ready(function(){

            $('.slider').bxSlider({
                auto:true,
                speed:500,
                mode:'fade',
                responsive:true,
                pager:false
            });
        });

		// PHP 변수 동기화

		var FITSOFT = {};

		FITSOFT['DATA'] = {
			CONTEXT_PATH : "<?=$CONTEXT_PATH?>",

			PATH : {
				RESOURCES : "<?=$PATH['RESOURCES']?>",
				HTTP_ROOT : "<?=$PATH['HTTP_ROOT']?>",
			},
			SITE : {
				LINK : "<?=$SITE['LINK']?>",
			},
			PREFIX : {
				FILE : "<?=$PREFIX['FILE']?>",
				FRONT : "<?=$PREFIX['FRONT']?>",
				ADMIN : "<?=$PREFIX['ADMIN']?>",
			}
		};
	</script>
</head>
<body>