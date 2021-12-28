<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
?>

<style>
    header {display: fixed; height: 100px; width: 100%; z-index: 999;}
    header .header_wrap {position: relative; height: 100px; max-width: 1200px; margin: 0 auto;}
    header .header_wrap .logo {top: 32px; float: left; position: absolute;}
    header .header_wrap nav {position: absolute; z-index: 110; left: 30%; width: 70%; top: 40px; text-align: center; font-weight: 300;}
    nav > ul > li {float: left; width: 16.6%;}
    nav > ul > li a {font-size: 19px;}
    nav > ul > li > ul > li {display: none;}
    nav > ul > li > ul > li > a {font-size: 19px;}
    
</style>
<header>
    <div class="header_wrap">
        <div class="logo">
            <a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/index.php">
                <img src="<?=$PATH['RESOURCES']?> . /img/webparadise-logo.png" alt="메인이미지">
            </a>
        </div>
        <nav>
            <ul class="detph1">
                <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu1">COMPANY</a>
                    <ul class="detph2">
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu1/?">menu1-1</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu1/?">menu1-2</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu1/?">menu1-3</a></li>
                    </ul>
                </li>
                <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu2">BUSINESS</a>
                    <ul class="detph2">
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu2/?">menu2-1</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu2/?">menu2-2</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu2/?">menu2-3</a></li>
                    </ul>
                </li>
                <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu3">GALLERY</a>
                    <ul class="detph2">
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu3/?">menu3-1</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu3/?">menu3-2</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu3/?">menu3-3</a></li>
                    </ul>
                </li>
                <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu4">INQUIRY</a>
                    <ul class="detph2">
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu4/?">menu4-1</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu4/?">menu4-2</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu4/?">menu4-3</a></li>
                    </ul>
                </li>
                <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu5">CUSTOMER</a>
                    <ul class="detph2">
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu5/?">menu5-1</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu5/?">menu5-2</a></li>
                        <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/menu5/?">menu5-3</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>