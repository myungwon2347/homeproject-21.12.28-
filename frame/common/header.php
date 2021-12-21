<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
?>

<style>
ul, li {list-style: none;}
a {text-decoration: none; color: black;}
* {margin: 0px; padding: 0px;}
nav {background-image: url("<?=$PATH['RESOURCES']?>/img/header-img2.jpg"); background-repeat: no-repeat;}
.nav_dep {display: flex; justify-content: space-between; width: 1200px; margin: 0 auto; padding: 40px;}
.nav_dep a {color: white; font-size: 20px;}
</style>

<header>
    <nav>
        <ul class="nav_dep">
            <li><a href="/"> Home </a></li>
            <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/board"> Board </a></li>
            <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/rooms"> Rooms </a></li>
            <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/reservation"> Reservation </a></li>
            <li><a href="<?=$PATH['FRONT'] . $PATH['COMMON']?>/community"> Community </a></li>
        </ul>
    </nav>
</header>