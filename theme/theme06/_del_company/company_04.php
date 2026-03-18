<?php
$pageNum = "0";
$subNum = "3";
$depth1 = "comapny";
$depth2 = "찾아오시는 길";
include_once('../../../common.php');
include_once('../../../_head.php');
?>

    <section class="company_04">

<!--        <h3 class="section_title_01">창업이래 쌓아온 Know-How와 응집된 첨단 기술력을 바탕으로<br>IT영역의 주역이 될 것임을 약속합니다.</h3>-->
        <div id="map" class='embed-container'>
        <p class="sky">(주)위즈테마 본사</p></div> 
        <script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=77f3ce94d86ba3b8ec49f78b3ecc8604"></script>
        <script>
            var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                mapOption = {
                    center: new daum.maps.LatLng(37.4852200, 126.8774380), // 지도의 중심좌표
                    level: 3, // 지도의 확대 레벨
                    mapTypeId: daum.maps.MapTypeId.ROADMAP // 지도종류
                };
            // 지도를 생성한다 
            
            var map = new daum.maps.Map(mapContainer, mapOption);
            // 지도에 마커를 생성하고 표시한다
            var marker = new daum.maps.Marker({
                position: new daum.maps.LatLng(37.4852200, 126.8774380), // 마커의 좌표
                map: map // 마커를 표시할 지도 객체
            });
            // 커스텀 오버레이를 생성하고 지도에 표시한다
            var customOverlay = new daum.maps.CustomOverlay({
                map: map
                , content: '<div style="padding:2px 8px;background:#fff; border: 1px #000 solid; color:#000; border-radius: 0; font-size:13px; font-weight:600;">(주)위즈테마 본사</div>'
                , position: new daum.maps.LatLng(37.4852200, 126.8774380), // 커스텀 오버레이를 표시할 좌표
                xAnchor: 0.5, // 컨텐츠의 x 위치
                yAnchor: 0 // 컨텐츠의 y 위치
            });
        </script>
        <div id="map2" class='embed-container mt30'>
        <p class="sky">(주)위즈테마 자회사</p></div> 
        <script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=77f3ce94d86ba3b8ec49f78b3ecc8604"></script>
        <script>
            var mapContainer = document.getElementById('map2'), // 지도를 표시할 div 
                mapOption = {
                    center: new daum.maps.LatLng(36.01498903082054, 129.34825829230024), // 지도의 중심좌표
                    level: 3, // 지도의 확대 레벨
                    mapTypeId: daum.maps.MapTypeId.ROADMAP // 지도종류
                };
            // 지도를 생성한다 
            
            var map = new daum.maps.Map(mapContainer, mapOption);
            // 지도에 마커를 생성하고 표시한다
            var marker = new daum.maps.Marker({
                position: new daum.maps.LatLng(36.01498903082054, 129.34825829230024), // 마커의 좌표
                map: map // 마커를 표시할 지도 객체
            });
            // 커스텀 오버레이를 생성하고 지도에 표시한다
            var customOverlay = new daum.maps.CustomOverlay({
                map: map
                , content: '<div style="padding:2px 8px;background:#fff; border: 1px #000 solid; color:#000; border-radius: 0; font-size:13px; font-weight:600;">(주)위즈테마 자회사</div>'
                , position: new daum.maps.LatLng(36.01498903082054, 129.34825829230024), // 커스텀 오버레이를 표시할 좌표
                xAnchor: 0.5, // 컨텐츠의 x 위치
                yAnchor: 0 // 컨텐츠의 y 위치
            });
        </script>

        <!-- 탭 -->
        <div class="table_wrap mt30">
            <table class="table table-hover data-font-size" data-font-size="16px">
                <caption><i class="far fa-arrow-alt-circle-down"></i> 위즈테마 찾아오시는 길 <p class="pull-right"><a href="https://www.google.co.kr/maps/place/%EA%B2%BD%EC%83%81%EB%B6%81%EB%8F%84+%ED%8F%AC%ED%95%AD%EC%8B%9C+%EB%82%A8%EA%B5%AC+%EB%8C%80%EC%9D%B4%EB%8F%99+%ED%9D%AC%EB%A7%9D%EB%8C%80%EB%A1%9C659%EB%B2%88%EA%B8%B8+51/@36.0149198,129.3461422,17z/data=!3m1!4b1!4m5!3m4!1s0x356701bc4f76e8b3:0x16ad43001fd8b4e1!8m2!3d36.0149155!4d129.3483309?hl=ko" class="btn btn-pack data-border-radius data-border" data-border-radius="0" data-border="1px #000 solid" target="_blank"><i class="fas fa-plus-circle"></i> 크게보기 </a></p></caption>
                <thead></thead>
                <tbody>
                    <tr>
                    <th>업체명</th>
                    <td>(주)위즈테마</td>
                </tr>
              <tr>
                    <th>대표</th>
                    <td>난대표</td>
                </tr>
                <tr>
                    <th>주소</th>
                    <td>본 사 : 서울시 금천구 가마산로 96 대륭테크노8차 000호<br>자회사 : 서울시 강남구 대치동 엄청큰빌딩 1003호
</td>
                </tr>

            

                <tr>
                    <th>연락처</th>
                    <td><strong>Tel</strong> :  02.2698.5355 , <strong>Fax</strong> 02.2698.5355 , <strong>담당자</strong> : 010.7138.2914 </td>
                </tr>

                <tr>
                    <th>E-Mail</th>
                    <td>nccnn@naver.com </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
<?php include_once('../../../_tail.php');?>