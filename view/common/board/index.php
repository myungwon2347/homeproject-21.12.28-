<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/head.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/header.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/api/board.php";

?>

<div class='container' id='container-basic-list'>
    <div class='middle-cont'>
        <div class='board-title-area'>
            <h2 class='ta-main-tit'>실적스토어</h2>
        </div>

        <!-- 공지사항 목록 -->
        <div class='list-table'>
            <div class='table th'>
                <p class='table-item item01'>번호</p>
                <p class='table-item item02'>제목</p>
                <p class='table-item item03'>작성자</p>
                <p class='table-item item04'>등록일</p>
            </div>
            
            <div id='list-getList<?=$target_flag?>Notice'>

            <div class='table td item-data'>\
                    <p class='table-item item01'></p>\
                    <p class='table-item item02'></p>\
                    <p class='table-item item03'></p>\
                    <p class='table-item item04'></p>\
            </div>

            <div id='list-getList<?=$target_flag?>'>
            </div>
            <div id='no-getList<?=$target_flag?>'>
                검색된 데이터가 없습니다.
            </div>
        </div> 

        <div class='pagenation-cont item-data' data-api_name='getList<?=$target_flag?>'></div>

        <div class='board-cate'>    
            <!-- 검색 폼 -->
            <div class='cont-search_board'>
                <div class='tit-search'>
                    <!-- <div class='tit-search-txt'>검색</div> -->
                    <form class='filter-purpose form-search' data-event_type='submit' onsubmit='return false;'>
                        <input class='event-search_keyword' type='text' data-search_key='search_keyword' placeholder='제목이나 작성자를 검색해주세요.'/>
                        <button class='search-btn'>검색</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/footer.php";
    // htmlEncode('하이');
    // echo pwCryption(1234);
    // fileSave('test','hi');
    // echo date("Y-m-d H:i:s");
?>