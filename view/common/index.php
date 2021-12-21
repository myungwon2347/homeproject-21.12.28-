<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/head.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/header.php";
?>
</head>
<style>
    .bx-wrapper {width: 70%; display: inline-block;}
    .main_visual {text-align: center; position: relative;}
    .main_visual_text {position: absolute; background-color: #ffffff; top: 250px; left: 770px; opacity:0.8; padding: 40px 20px;}
    .main_visual_text span:nth-child(1) {font-size: 34px;} 
    .main_visual_text span:nth-child(2) {font-size: 14px;} 
    
    .article {position: relative; margin: 30px 0px;}
    .cs_center {display: inline-block; width: 400px; position: relative; padding-left: 280px;}
    .cs_center .cs_center_img {display: inline-block; background-color: rgb(227, 162, 26); position: relative;}
    .cs_center .cs_center_img span {position: absolute; bottom: 0; left: 37px; color: white;}
    .cs_center_text {display: inline-block;}
    .cs_center_text span:nth-child(1) {position: absolute; top: 0;}
    .cs_center_text span:nth-child(2) {position: absolute; top: 30px;}
    .cs_center_text span:nth-child(3) {position: absolute; bottom: 0;}

    .bank_info {display: inline-block; width: 400px; position: relative; margin-left: 50px;}
    .bank_info .bank_info_img {display: inline-block; background-color: rgb(0, 171, 169); position: relative;}
    .bank_info .bank_info_img span {position: absolute; bottom: 0; left: 37px; color: white;}
    .bank_info_text {display: inline-block;}
    .bank_info_text span:nth-child(1) {position: absolute; top: 0;}
    .bank_info_text span:nth-child(2) {position: absolute; bottom: 0;}

    .reservation {display: inline-block; position: absolute; right: 600px;}
    .reservation_text {position: relative;}
    .reservation_text span {position: absolute; left: 9px;}
    .position {display: inline-block; position: absolute; right: 450px;}
    .position_text {position: relative;}
    .position_text span {position: absolute; left: 18px;}
    .faq {display: inline-block; position: absolute; right: 300px;}
    .faq_text {position: relative;}
    .faq_text span{position: absolute; left: 10px;}

    .preview {background-color: #efefef; height: 475px;}
    .preview_text {padding: 21px 0px 0px 65px; font-size: 20px;}
    .preview_wrap {background-color: white; text-align: center;}
    .preview_img_wrap {margin: 20px 0px;}
    .preview_item {display: inline-block; margin: 20px 30px;}
    .preview_img {display: inline-block; margin: 0px 20px;}
    .preview_img b {font-size: 20px;}
    .preview_img span:nth-last-child(1) {border: 1px solid #ccc; border-radius: 3px; font-size: 13px; padding: 5px; display: inline-block; margin: 5px 0px;}


    .facilities {display: inline-block; background-color: #c9a96b; width: 100%; height: 500px; position: relative; margin: 70px 0px;}
    .facilities_text {position: absolute; right: 30px; top: 200px; color: white;}
    .facilities_text b {font-size: 30px;}
    .facilities_img {display: inline-block; position: relative;}
    .facilities_img img {margin: 20px; position: absolute;}
    .facilities_img:nth-child(1) img {left: 0px; z-index: 1;}
    .facilities_img:nth-child(2) img {left: 100px; z-index: 1;}
    .facilities_img:nth-child(3) img {left: 200px; z-index: 1;}
    .facilities_img:nth-child(4) img {left: 300px; z-index: 1;}

    .aa {left: 100px;}
    .google_map {text-align:center;}
    
</style>





<!-- 메인 작성 시작 -->

<body>
    <div class="main_visual">
        <div class="slider">
            <div><img src="<?=$PATH['RESOURCES']?>/img/main-img1.jpg" alt="메인이미지1"></div>
            <div><img src="<?=$PATH['RESOURCES']?>/img/main-img2.jpg" alt="메인이미지2"></div>
            <div><img src="<?=$PATH['RESOURCES']?>/img/main-img3.jpg" alt="메인이미지3"></div>
            <div><img src="<?=$PATH['RESOURCES']?>/img/main-img4.jpg" alt="메인이미지4"></div>
        </div>
        <div class="main_visual_text">
            <span>Welcome to our Pension</span><br />
            <span>계시는 동안 즐겁고 편안한 시간이 될 수 있도록</span><br />
            <span>정성껏 모시겠습니다.</span>
        </div>
    </div>

<!-- 메인 슬라이드 이미지 끝 -->
    <div class="article">

        <div class="cs_center">
            <div class="cs_center_img">
                <img src="<?=$PATH['RESOURCES']?>/img/cs_center.png" alt="">
                <span>CS CENTER</span>
            </div>
            <div class="cs_center_text">
                <span>고객센터</span>
                <span>041-553-1852</span>
                <span>궁금한 사항은 연락주세요.</span>
            </div>
        </div>

        <div class="bank_info">
            <div class="bank_info_img">
                <img src="<?=$PATH['RESOURCES']?>/img/bank_info.png" alt="">
                <span>BANK INFO</span>
            </div>
            <div class="bank_info_text">
                <span>입금계좌안내</span>
                <span>입금 후 전화나 문자 바랍니다.</span>
            </div>
        </div>

        <div class="reservation">
            <a href="">
                <img src="<?=$PATH['RESOURCES']?>/img/reservation.png" alt="">
                <div class="reservation_text">
                    <span>실시간예약</span>
                </div>
            </a>
        </div>

        <div class="position">
            <a href="">
                <img src="<?=$PATH['RESOURCES']?>/img/position.png" alt="">
                <div class="position_text">
                    <span>오시는길</span>
                </div>
            </a>
        </div>

        <div class="faq">
            <a href="">
                <img src="<?=$PATH['RESOURCES']?>/img/faq.png" alt="">
                <div class="faq_text">
                    <span>묻고답하기</span>
                </div>
            </a>
        </div>

    </div>
    <div class="preview">
        <div class="preview_text">Rooms Preview</div>
        <div class="preview_wrap">
            <div class="preview_img_wrap">

                <div class="preview_item">
                    <div class="preview_img">
                        <a href="" alt="">
                            <img src="<?=$PATH['RESOURCES']?>/img/room-detail1.jpg" alt=""></br>
                        </a>
                            <b> 1동 1층</b></br>
                            <span> 132㎡ / 40평</span></br>
                            <span> 25 / 30명</span></br>
                            <a href="" alt="">
                            <span> 상세보기 </span>
                            </a>
                    </div>
                </div>
                <div class="preview_item">
                    <div class="preview_img">
                        <a href="" alt="">
                            <img src="<?=$PATH['RESOURCES']?>/img/room-detail2.jpg" alt=""></br>
                        </a>
                            <b> 1동 2층</b></br>
                            <span> 66㎡ / 20평</span></br>
                            <span> 8 / 10명</span></br>
                            <a href="" alt="">
                            <span> 상세보기 </span>
                            </a>                        
                    </div>
                </div>
                <div class="preview_item">
                    <div class="preview_img">
                        <a href="" alt="">
                            <img src="<?=$PATH['RESOURCES']?>/img/room-detail3.jpg" alt=""></br>
                        </a>
                            <b> 2동 1호</b></br>
                            <span> 99㎡ / 30평</span></br>
                            <span> 15 / 17명</span></br>
                            <a href="" alt="">
                            <span> 상세보기 </span>
                            </a>                        
                    </div>
                </div>
                <div class="preview_item">
                    <div class="preview_img">
                        <a href="" alt="">
                            <img src="<?=$PATH['RESOURCES']?>/img/room-detail4.jpg" alt=""></br>
                        </a>
                            <b> 2동 2호</b></br>
                            <span> 43㎡ / 13평</span></br>
                            <span> 6 / 8명</span></br>
                            <a href="" alt="">
                            <span> 상세보기 </span>
                            </a>                        
                    </div>  
                </div>
                <div class="preview_item">
                    <div class="preview_img">
                        <a href="" alt="">
                            <img src="<?=$PATH['RESOURCES']?>/img/room-detail5.jpg" alt=""></br>
                        </a>
                            <b> 2동 3호</b></br>
                            <span> 43㎡ / 13평</span></br>
                            <span> 7 / 8명</span></br>
                            <a href="" alt="">
                            <span> 상세보기 </span>
                            </a>                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="facilities">
            <div class="facilities_img">
                <img src="<?=$PATH['RESOURCES']?>/img/main-img11.jpg" alt="">
            </div>
            <div class="facilities_img">
                <img src="<?=$PATH['RESOURCES']?>/img/main-img21.jpg" alt="">
            </div>
            <div class="facilities_img">
                <img src="<?=$PATH['RESOURCES']?>/img/main-img31.jpg" alt="">
            </div>
            <div class="facilities_img">
                <img src="<?=$PATH['RESOURCES']?>/img/main-img41.jpg" alt="">
            </div>
        <div class="facilities_text">
            <b>Facilities</b> </br>
            다양한 시설과 함께 </br>
            즐거움을 만끽하세요.
        </div>
    </div>
    <div class="google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.463532220888!2d127.26866351563369!3d36.83137327364331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b2c97319de9a3%3A0x98f8d3d3eb9b0a2c!2z7Lap7LKt64Ko64-EIOyynOyViOyLnCDrj5nrgqjqtawg67aB66m0IOychOuhgOyEseuhnCA3Nzc!5e0!3m2!1sko!2skr!4v1639487784796!5m2!1sko!2skr" width="1000" height="450" style="border:1;" allowfullscreen="" loading="lazy"></iframe>    
    </div>

    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/footer.php";
    ?>