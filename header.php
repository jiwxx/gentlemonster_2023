<header>
    <h1><a href="#"><img src="./images/logo.png" alt=""></a></h1>
    <div class="right">
        <a href="#">Shop in KR</a>
        <form action="#" method="get" id="searchFrm">
            <fieldset>
                <legend class="skip">검색 양식</legend>
                <input type="text" name="search" id="#searchTxt" placeholder="상품명을 입력해주세요">
                <button type="button" id="searchBtn"><img src="./images/icon_search.png" alt="검색하기"></button>
            </fieldset>
        </form>
        <a href="./login.html" id="login"><img src="./images/icon_user.png" alt=""></a>
        <a href="#" id="cart"><img src="./images/icon_cart.png" alt=""></a>
        <a href="#" id="menu"><img src="./images/icon_menu.png" alt=""></a>
    </div>
    <!-- nav 클릭 시 open nav -->
    <div id="open_nav">
        <!-- 닫기 버튼 -->
        <button id="nav_close" type="button"><img src="./images/nav_close.png" alt="닫기"></button>
        <!-- 광고 슬라이드 -->
        <div class="swiper" id="nav_adver">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">나에게 어울리는 제품을 찾으세요? 실시간 라이브 채팅으로 제품 추천을 받아보세요.</a>
                </div>
                <div class="swiper-slide">
                    <a href="#">선물하기 서비스를 통해 소중한 분에게 마음을 전하세요.</a>
                </div>
                <div class="swiper-slide">
                    <a href="#">무료 배송 반품 서비스로 젠틀몬스터의 서비스를 경험하세요.</a>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div> <!-- end swiper adver -->
        </div>
        <!-- 내비게이션 -->
        <nav>
            <a href="#">선글라스</a>
            <a href="./product_list.html">안경</a>
            <a href="#">콜라보레이션</a>
            <a href="#">스타일</a>
            <a href="#">브랜드이슈</a>
            <a href="./map.html">매장보기</a>
            <a href="#">수리서비스</a>
        </nav>
    </div>
</header>