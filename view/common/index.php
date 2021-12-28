<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/head.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/header.php";
?>
</head>
<style>
    .main_img img {width: 100%; height: 500px;}
</style>
<wrap>
    <main>
        <div class="slider main_img">
            <img src="<?=$PATH['RESOURCES']?> . /img/main-img1.jpg" alt="메인이미지">
            <img src="<?=$PATH['RESOURCES']?> . /img/main-img2.jpg" alt="메인이미지">
            <img src="<?=$PATH['RESOURCES']?> . /img/main-img3.jpg" alt="메인이미지">
        </div>
    </main>
</wrap>




<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/footer.php";
    ?>