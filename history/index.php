<?php
include_once('../common.php');
$bo_table = "history";
include_once('../_head.php');

if (!$year) {
	$year = "5";
}
?>

<section class="company_03">
	<div class="div_1">
		<p class="p_1">재일본도쿄한국인연합회에 오신것을 환영합니다.</p>
		<h3 class="h3_1"><span class="bd_bt"><span style="color:#E81526;">The Tokyo</span> Federation of Korean Associations</span></h3>
	</div>
    <h3 class="section_title_01">한인회는 재일 한국인의 권익옹호를 위해 노력하고 있습니다.</h3>

	<aside id="sct_ct_1" class="sct_ct">
		<ul>
	       	<li <?php if ($year=="5") { ?>style="background: #c92033;color:#fff;"<?php } ?>><a href="<?=G5_URL?>/history?year=5" <?php if ($year=="5") { ?>style="color:#fff;"<?php } ?>>2023년～2021년</a></li>
			<li <?php if ($year=="4") { ?>style="background: #c92033;color:#fff;"<?php } ?>><a href="<?=G5_URL?>/history?year=4" <?php if ($year=="4") { ?>style="color:#fff;"<?php } ?>>2020년～2016년</a></li>
			<li <?php if ($year=="3") { ?>style="background: #c92033;color:#fff;"<?php } ?>><a href="<?=G5_URL?>/history?year=3" <?php if ($year=="3") { ?>style="color:#fff;"<?php } ?>>2015년～2011년</a></li>
			<li <?php if ($year=="2") { ?>style="background: #c92033;color:#fff;"<?php } ?>><a href="<?=G5_URL?>/history?year=2" <?php if ($year=="2") { ?>style="color:#fff;"<?php } ?>>2010년～2006년</a></li>
			<li <?php if ($year=="1") { ?>style="background: #c92033;color:#fff;"<?php } ?>><a href="<?=G5_URL?>/history?year=1" <?php if ($year=="1") { ?>style="color:#fff;"<?php } ?>>2005년～2000년</a></li>
		</ul>
	</aside>

<style>
/* 상품 목록 카테고리 목록 */
.sct_ct {}
.sct_ct ul {zoom:1}
.sct_ct ul:after {display:block;visibility:hidden;clear:both;content:""}
.sct_ct a {text-decoration:none}
.sct_ct_parent {font-weight:bold}
.sct_ct_here {color:#ff3600 !important}

#sct_ct_1{border-left:1px solid #ddd;margin:10px 0}
#sct_ct_1 li {float:left;width:20%;border:1px solid #ddd;background:#fff;border-left:0;margin-top:-1px;text-align:center;}
#sct_ct_1 li a{display:block;padding:10px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
#sct_ct_1 li a:hover{background:#c92033;color:#fff}
#sct_ct_1 li:nth-child(6n+1){width:20%}

#sct_ct_2 li {margin:0 0 10px}
#sct_ct_2 a {display:inline-block;width:120px}
#sct_ct_3 li {float:left;margin:0 10px 10px 0;width:120px}
</style>


    <div class="row mt40">
        <div class="col-md-5">
            <div class="history-left">
                <h2 style="font-size:1.8em;">책임과 의무, 지역사회공존</h2>
                <p class="clearfix text"> 한국인으로서의 민족적 긍지를 잃지 않고 일본사회의 당당한 구성원으로 서기 위해 분투하고 있습니다. <br>지역사회와 공존할 수 있도록 다양한 친목도모사업을 전개할 것이며, 나아가 한일 교류의 실질적 담당자로서의 역할을 적극적으로 개척해 갈 것입니다.
                </p>
                <p class="image"><img src="./001.jpg" class="img-responsive"></p>

            </div>
        </div>
        <div class="col-md-7">
            <div class="history-right">
            	<?php if ($year=="5") { ?>
                <ul class="list-unstyled">
                    <li class="title">2023년</li>
                    <li>
                		<span class="mon badge">05월</span> 창립(문예차회)<br>
					<span class="pr37">　</span>청구학원 츠쿠바중고등학교 입학식 참석<br>
					<span class="pr37">　</span>동경청년상공회 제 46기 정기총회 참석
                	</li>
                    <li>
                		<span class="mon badge">04월</span> 민단동경주최 3.1절행사 참석<br>
					<span class="pr37">　</span>대통령과 함께하는 동포간담회 참석<br>
					<span class="pr37">　</span>경남도민회 친선골프콤페 참석<br>
					<span class="pr37">　</span>튀르키예대지진 기금모금 전달(튀르키에한인회 송금)<br>
					</li>
                    <li>
                		<span class="mon badge">02월</span> 경상남도도민회 신년회 참석<br>
					<span class="pr37">　</span>2.8독립기념 제104주년 기념식 참석<br>
					<span class="pr37">　</span>동경한국상공회의소 60주년 기념회 참석
                	</li>
                    <li>
                		<span class="mon badge">01월</span> 주일본대한민국대사관 신년인사회 참석<br>
					<span class="pr37">　</span>재일본한국인연합회 2023년도 신년회<br>
					<span class="pr37">　</span>동경한국학교 졸업식 시상 및 참석
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2022년</li>
                    <li>
                		<span class="mon badge">12월</span> 한일의원연맹 여성의원단과 고.이수현님 헌화 및 오찬<br>
					<span class="pr37">　</span>재일본귀금속협회 송년회<br>
					<span class="pr37">　</span>재일본한국인연합회 송년의 밤
                	</li>
                    <li>
                		<span class="mon badge">11월</span> 재일본한국인연합회 제11대 회장,이사장 취임식<br>
					<span class="pr37">　</span>제26회 재일본한국인연합회 채리티 골프대회
				</li>
                    <li>
                		<span class="mon badge">10월</span> 2022세계한인회장대회 [인천 송도 컨벤시아]<br>
					<span class="pr37">　</span>신주쿠상인연합회 골프콤페<br>
					<span class="pr37">　</span>재일한국기업연맹 골프콤페<br>
					<span class="pr37">　</span>재일한국귀금속협회 골프콤페<br>
					<span class="pr37">　</span>일한친선협회 골프콤페<br>
					<span class="pr37">　</span>동경한국상공회 골프콤페<br>
                	</li>
                    <li>
                		<span class="mon badge">09월</span> 제99주년 관동대지진동포추도식<br>
					<span class="pr37">　</span>클린활동 [윤덕민특명전권대사와 함께한 클린활동 및 간담회]<br>
					<span class="pr37">　</span>임시이사회 개최<br>
					<span class="pr37">　</span>동경한국학교 이사회<br>
					<span class="pr37">　</span>한일의원연맹단 오찬 
				</li>
                    <li>
                		<span class="mon badge">08월</span> 한일의원연맹단 오찬간담회<br>
					<span class="pr37">　</span>제77주년 광복절 기념행사
                	</li>
                    <li>
                		<span class="mon badge">07월</span> 표경방문 - 주일대한민국대사관 및 영사관 등 
                	</li>
                    <li>
                		<span class="mon badge">06월</span> 제 21차 정기총회 이사회총회 개최
                	</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2021년</li>
                    <li>
					<span class="mon badge">08월</span>클린활동<br>
					<span class="pr37">　</span>광복절기념식 참석
				</li>
                    <li>
					<span class="mon badge">07월</span>클린활동
				</li>
                    <li>
					<span class="mon badge">03월</span>3.1절 기념식 참석<br>
					<span class="pr37">　</span>구성증서 수여식 참석<br>
				</li>
                    <li>
					<span class="mon badge">01월</span>이수현추도식 참석
				</li>
                </ul>
                <?php } ?>
            	<?php if ($year=="4") { ?>
                <ul class="list-unstyled">
                    <li class="title">2020년</li>
                    <li>
					<span class="mon badge">12월</span>홈리스 봉사활동
				</li>
                    <li>
					<span class="mon badge">11월</span>재외동포재단 주재관 간담회<br>
					<span class="pr37">　</span>동경상공회의소 콤페 참가<br>
					<span class="pr37">　</span>세계한인회장대회<br>
					<span class="pr37">　</span>유공동포 포상 전수식
				</li>
                    <li>
					<span class="mon badge">08월</span>제10대 한인회장 선거 임시총회
				</li>
                    <li>
					<span class="mon badge">07월</span>총영사 주최 재외동포단체장 간담회<br>
					<span class="pr37">　</span>재외동포재단 실무자 간담회
				</li>
                    <li>
					<span class="mon badge">06월</span>재외동포재단 실무자 간담회
				</li>
                    <li>
					<span class="mon badge">02월</span>동경항국학교 졸업식<br>
					<span class="pr37">　</span>재일세계한인상공인연합회<br>
					<span class="pr37">　</span>한국농식품문화 교류의 밤(회장 및 임원 취임식)
				</li>
                    <li>
					<span class="mon badge">01월</span>2020년도 재일본한국인총연합회 신년회<br>
					<span class="pr37">　</span>중앙민단.동경본부 합동 신년회<br>
					<span class="pr37">　</span>민단 신주쿠지부 신년회<br>
					<span class="pr37">　</span>KOBA 기업연합회 송년회<br>
					<span class="pr37">　</span>동경한상 신년회
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2019년</li>
				<li>
					<span class="mon badge">12월</span>12월 클린활동<br>
					<span class="pr37">　</span>한인회 송년회<br>
					<span class="pr37">　</span>귀금속협회 2019년 망년회<br>
					<span class="pr37">　</span>옥타동경 신・구회장단 이・취임식 겸 송년회<br>
					<span class="pr37">　</span>대사관 영사과 주최 제4회 재일동포 청년 교류회
				</li>
				<li>
					<span class="mon badge">11월</span>제3회 코리아페스티벌<br>
					<span class="pr37">　</span>11월 클린활동<br>
					<span class="pr37">　</span>2019년 한일축제한마당 실행위원회<br>
					<span class="pr37">　</span>훈포장 전수식<br>
					<span class="pr37">　</span>토치기 경우회 골프 콤페<br>
					<span class="pr37">　</span>한일축제한마당 제3회 실행위원회
				</li>
				<li>
					<span class="mon badge">10월</span>10월 클린활동<br>
					<span class="pr37">　</span>제1회 한인 청소년 멘토링 스쿨<br>
					<span class="pr37">　</span>2019년 세계한인회장대회<br>
					<span class="pr37">　</span>국정감사단 한인회 방문
				</li>
				<li>
					<span class="mon badge">09월</span>9월 클린활동<br>
					<span class="pr37">　</span>옥타동경 골프콤페<br>
					<span class="pr37">　</span>동경한국학교 이사회<br>
					<span class="pr37">　</span>귀금속협회 골프콤페<br>
					<span class="pr37">　</span>2019년도 한일축제한마당 
				</li>
				<li>
					<span class="mon badge">08월</span>국회 방일단 한인회 방문 간담회<br>
					<span class="pr37">　</span>제74주년 광복절 기념행사<br>
					<span class="pr37">　</span>대한민국 헌정회 한인회 방문 간담회<br>
					<span class="pr37">　</span>일한친선협회 한국 목포 친선
				</li>
				<li>
					<span class="mon badge">07월</span>7월 클린활동<br>
					<span class="pr37">　</span>2019 한일축제한마당 실행위원회<br>
					<span class="pr37">　</span>제2회 전국한인회 워크샵<br>
					<span class="pr37">　</span>2019 한일축제한마당 출점 상세 설명회<br>
					<span class="pr37">　</span>재외동포재단 지도점검
				</li>
				<li>
					<span class="mon badge">06월</span>제24회 한인회 채리티 골프대회 <br>
					<span class="pr37">　</span>6월 클린활동<br>
					<span class="pr37">　</span>재일본한국인연합회 이사회 정기 총회<br>
					<span class="pr37">　</span>동경한국학교 이사회<br>
					<span class="pr37">　</span>동경한상 골프 콤페<br>
					<span class="pr37">　</span>문화원 원장 한인회 방문<br>
					<span class="pr37">　</span>큐슈한인회 정기총회<br>
					<span class="pr37">　</span>문재인 대통령 주최 동포 간담회
				</li>
				<li>
					<span class="mon badge">05월</span>동경한국상공회의소 정기총회<br>
					<span class="pr37">　</span>제39주년 동경 5･18광주 민주항쟁 기념식 <br>
					<span class="pr37">　</span>신주쿠상점진흥가 정기총회 간친회<br>
					<span class="pr37">　</span>위기대응훈련 관련 동포단체 대상 간담회 <br>
					<span class="pr37">　</span>제24대 남관표 특명전권대사 환영회 <br>
					<span class="pr37">　</span>우리대학 특허제품과 주일 기업 비지니스 매칭 세미나<br>
					<span class="pr37">　</span>동경한국상공회의소 채리티 골프콤페<br>
					<span class="pr37">　</span>제18차 정기총회
				</li>
				<li>
					<span class="mon badge">04월</span>중앙선관위원회 면담회, 오찬<br>
					<span class="pr37">　</span>민단신주쿠지부 골프콤페<br>
					<span class="pr37">　</span>4월 클린활동<br>
					<span class="pr37">　</span>동경청년상공회 정기총회<br>
					<span class="pr37">　</span>여성회 멘토링 - 재외동포재단 장정환 주재관<br>
					<span class="pr37">　</span>사랑의 나눔 발족식<br>
					<span class="pr37">　</span>이수훈 주일본국 대한민국 특명전권대사 송별회
				</li>
				<li>
					<span class="mon badge">03월</span>제100주년 3.1절 기념 리셉션 - 대사관 <br>
					<span class="pr37">　</span>3월 클린활동<br>
					<span class="pr37">　</span>한일축제한마당 2019 제1회 실행위원회<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동<br>
					<span class="pr37">　</span>클린 신오쿠보 사업단 발족식<br>
					<span class="pr37">　</span>한창우•철(哲)문화재단, 연구비 지원증서 수여식, 일한교류 리셉션<br>
					<span class="pr37">　</span>동경한국학교 이사회
				</li>
				<li>
					<span class="mon badge">02월</span>KOBA 한일경제의 밤 기업연합회<br>
					<span class="pr37">　</span>2월 클린활동 <br>
					<span class="pr37">　</span>재일세계한인상공인연합회 新春のつどい<br>
					<span class="pr37">　</span>2.8 독립선업 100주년 기념식 참가<br>
					<span class="pr37">　</span>동경한국학교 졸업식 참가<br>
					<span class="pr37">　</span>대전광역시 도쿄통상사무소 개소식 참가
				</li>
				<li>
					<span class="mon badge">01월</span>2019 한인회 신년회<br>
					<span class="pr37">　</span>2019년 중앙민단 신년회 참가<br>
					<span class="pr37">　</span>2019년 대사관 신년회인사회 참가<br>
					<span class="pr37">　</span>민단신주쿠 지부 송년회 참가<br>
					<span class="pr37">　</span>제5회 스피치대회 예선<br>
					<span class="pr37">　</span>동경한국상공회의소 신년회 참가
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2018년</li>
				<li>
					<span class="mon badge">12월</span>12월 클린활동<br>
					<span class="pr37">　</span>한일마쯔리 3차 실행위원회 참석<br>
					<span class="pr37">　</span>재일한국상공회의소 송년회 참석<br>
					<span class="pr37">　</span>제4회 전일본스피치대회 본선<br>
					<span class="pr37">　</span>월례회/ 클린활동 /송년회<br>
					<span class="pr37">　</span>귀금속협회 망년회/ 회장 이・취임식 참석
				</li>
				<li>
					<span class="mon badge">11월</span>제2회 코리아페스티벌 개최<br>
					<span class="pr37">　</span>여성회 회의&교육원원장 강연간담회<br>
					<span class="pr37">　</span>동경한국학원 이사회<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동
				</li>
				<li>
					<span class="mon badge">10월</span>하토야마유키오 전 일본총리 명예 정치학박사 학위 수여식<br>
					<span class="pr37">　</span>국경일 국군의날 리셉션<br>
					<span class="pr37">　</span>세계한인회장대회<br>
					<span class="pr37">　</span>일한 파트너 쉽 20주년 기념 심포지움<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동<br>
					<span class="pr37">　</span>강윤모 주재관 송별 간담회<br>
					<span class="pr37">　</span>오오쿠보마쯔리<br>
					<span class="pr37">　</span>일한친선골프대회<br>
					<span class="pr37">　</span>대사관 국정 감사팀 동포간담회<br>
					<span class="pr37">　</span>기업연합회 골프대회
				</li>
				<li>
					<span class="mon badge">09월</span>동경청년상공회 채리티골프대회<br>
					<span class="pr37">　</span>옥타골프대회<br>
					<span class="pr37">　</span>신주쿠한국상인회연합회 정기총회<br>
					<span class="pr37">　</span>김미복 위원장 한국전통무용 김미복춤판Vol.5<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동<br>
					<span class="pr37">　</span>동경한국상공회의소 정기총회<br>
					<span class="pr37">　</span>동경한국학교 이사회<br>
					<span class="pr37">　</span>2018 재외선거 재도 개선 간담회<br>
					<span class="pr37">　</span>관서한인회 정기총회<br>
					<span class="pr37">　</span>귀금속협회 채리티 골프대회
				</li>
				<li>
					<span class="mon badge">08월</span>제73주년 광복절 중앙기념식<br>
					<span class="pr37">　</span>재일한국상공회의소 屋形船
				</li>
				<li>
					<span class="mon badge">07월</span>재일세계한인상공인연합회 정기총회<br>
					<span class="pr37">　</span>대사관관계자, 조선통신사와 동경한국학교 방문<br>
					<span class="pr37">　</span>동경 옥타 차세대 무역스쿨 입교식<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동<br>
					<span class="pr37">　</span>한일축제한마당 제2차 실행위원회<br>
					<span class="pr37">　</span>토치기민단 70주년 기념식
				</li>
				<li>
					<span class="mon badge">06월</span>제23회재일본한국인연합회 골프대회<br>
					<span class="pr37">　</span>6동경일한친선협회연합회 정기총회<br>
					<span class="pr37">　</span>한일축제한마당 출점 상세 설명회<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동<br>
					<span class="pr37">　</span>동경한국학교 이사회
				</li>
				<li>
					<span class="mon badge">05월</span>신오쿠보 상점가 진흥조합 정기총회<br>
					<span class="pr37">　</span>동경한국상공회의소 제57회 정기총회<br>
					<span class="pr37">　</span>신주쿠 발전 위원회 클린활동<br>
					<span class="pr37">　</span>제17기 정기총회, 이사회 임시총회
				</li>
				<li>
					<span class="mon badge">04월</span>민단신주쿠지부 골프대회 참석<br>
					<span class="pr37">　</span>월례회/클린활동<br>
					<span class="pr37">　</span>재일한국상공회의소 제56회 정기총회 / 신회장 이/취임식 참석<br>
					<span class="pr37">　</span>동경한국청년상공회의소 제41기 정기총회 참석
				</li>
				<li>
					<span class="mon badge">03월</span>한일축제한마당 제1차 실행위원회 참석<br>
					<span class="pr37">　</span>카나가와현한인회 채리티 골프 콤페 참석<br>
					<span class="pr37">　</span>월례회/클린활동<br>
					<span class="pr37">　</span>청년상공회의 채리티 골프대회 참석<br>
					<span class="pr37">　</span>재외동포재단 지원금 지도점검 
				</li>
				<li>
					<span class="mon badge">02월</span>기업연합회 한일경제인교류의밤 참석<br>
					<span class="pr37">　</span>동경 한국학교 졸업식 참석<br>
					<span class="pr37">　</span>재일한인상공인연합회 신년회 참석<br>
					<span class="pr37">　</span>평창동계 올림픽 개회식 참석<br>
					<span class="pr37">　</span>월례회/클린활동 <br>
					<span class="pr37">　</span>전라도정도1000년 신년회 기념축하 신년회 참석<br>
					<span class="pr37">　</span>중앙민단 신 삼 기관장 취임 축하회 참석<br>
					<span class="pr37">　</span>동경한국학교 제2학교 건립 지원 간담회 
				</li>
				<li>
					<span class="mon badge">01월</span>대사관 신년인사회 참석<br>
					<span class="pr37">　</span>중앙/동경 민단 신년회 참석<br>
					<span class="pr37">　</span>재일본한국인연합회 2018 신년회<br>
					<span class="pr37">　</span>재일충청협회 신년회 참석<br>
					<span class="pr37">　</span>동경한상 신년회 참석<br>
					<span class="pr37">　</span>농식품 연합회 신년회/ 신・구회장 및 임원 취임식 참석<br>
					<span class="pr37">　</span>민단 신주쿠 지부 신년회 참석
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2017년</li>
				<li>
					<span class="mon badge">12월</span>12월 클린활동<br>
					<span class="pr37">　</span>한일마쯔리 3차 실행위원회 참석<br>
					<span class="pr37">　</span>재일한국상공회의소 송년회 참석<br>
					<span class="pr37">　</span>이수훈 특명전권대사 환영회 참석<br>
					<span class="pr37">　</span>제4회 전일본스피치대회 본선<br>
					<span class="pr37">　</span>월례회/ 클린활동 /송년회<br>
					<span class="pr37">　</span>귀금속협회 망년회/ 회장 이・취임식 참석<br>
					<span class="pr37">　</span>OKTA Tokyo 신・구회장단 이・취임식 겸 송년회 참석<br>
					<span class="pr37">　</span>민단 신주쿠 지부 신년회 참석
				</li>
				<li>
					<span class="mon badge">11월</span>11월 클린활동<br>
					<span class="pr37">　</span>한창우 철 문화재단 재일 뉴커머 역사서의 편찬 프로젝트 참석 <br>
					<span class="pr37">　</span>일한친선협회 골프대회 참석<br>
					<span class="pr37">　</span>민단청년회  결성 45주년 기념식 참석<br>
					<span class="pr37">　</span>제1회 코리아페스티벌<br>
					<span class="pr37">　</span>제4회 전일본한국어스피치대회 예선<br>
					<span class="pr37">　</span>토치기 상공회의소 골프대회 참석<br>
					<span class="pr37">　</span>민단 전 중앙 단장 추도식 참가<br>
					<span class="pr37">　</span>포상 전수식 참석
				</li>
				<li>
					<span class="mon badge">10월</span>국경일& 국군의 날 행사 참석<br>
					<span class="pr37">　</span>이준규 대사 송별회 참석<br>
					<span class="pr37">　</span>큐슈한인회 골프대회 참석<br>
					<span class="pr37">　</span>월례회/클린활동 <br>
					<span class="pr37">　</span>동경민단 70주년 기념식/축하회 참석<br>
					<span class="pr37">　</span>한인회 주최 이준규 대사 송별회<br>
					<span class="pr37">　</span>제4회 글로벌 한인 리더 육성 K-MOVE 스쿨<br>
					<span class="pr37">　</span>제36회 오오쿠보 마쯔리 참석<br>
					<span class="pr37">　</span>귀금속협회 친선 골프대회 참석<br>
					<span class="pr37">　</span>동경청년상공회 설립40주년 기념식 참석
				</li>
				<li>
					<span class="mon badge">09월</span>9월 클린활동<br>
					<span class="pr37">　</span>제7회 재일본한국인연합회 워크숍<br>
					<span class="pr37">　</span>동경한국청년상공회 채리티 골프콤페 참석<br>
					<span class="pr37">　</span>한국해군 순항 훈련 리셉션 참석<br>
					<span class="pr37">　</span>World-OKTA Tokyo GOLF대회 참석<br>
					<span class="pr37">　</span>2016 한일축제한마당 준비위원회<br>
					<span class="pr37">　</span>주일한국대사배 2016 일한친선골프대회 참석<br>
					<span class="pr37">　</span>2016년 한일축제한마당 한식부스 운영
				</li>
				<li>
					<span class="mon badge">08월</span>관서한인회 제5회 채리티 골프대회 참석<br>
					<span class="pr37">　</span>민단 제72주년 광복절 행사 참석<br>
					<span class="pr37">　</span>제2회 청년 포럼<br>
					<span class="pr37">　</span>동경한상「納涼会・屋形船」참석<br>
					<span class="pr37">　</span>제2회 청년포럼
				</li>
				<li>
					<span class="mon badge">07월</span>7월 클린활동<br>
					<span class="pr37">　</span>제22회 재일본한국인연합회 주최 대사배 골프 대회<br>
					<span class="pr37">　</span>재일세계한인상공인연합회 제12기 정기총회 참석<br>
					<span class="pr37">　</span>큐슈한인회 제3대 회장 취임식 참석<br>
					<span class="pr37">　</span>월례회/클린활동<br>
					<span class="pr37">　</span>동경일한친선협회연합회 29년도 정기총회 참석<br>
					<span class="pr37">　</span>한일축제한마당 제2회 실행위원회 참석
				</li>
				<li>
					<span class="mon badge">06월</span>6월 클린활동<br>
					<span class="pr37">　</span>동경한국학교 이사회 참석<br>
					<span class="pr37">　</span>정세균 국회의장 주최 동포 초청 간담회 참석<br>
					<span class="pr37">　</span>동경한국상공회의소 제56회 정기총회 참석<br>
					<span class="pr37">　</span>카나가와한인회 제5회 정기총회 참석<br>
					<span class="pr37">　</span>옥타동경 제15회 재외동포차세대무역스쿨2017 개교식 참석
				</li>
				<li>
					<span class="mon badge">05월</span>5월 클린활동 <br>
					<span class="pr37">　</span>총영사 한인회 사무국 방문<br>
					<span class="pr37">　</span>신주쿠상점가진흥회 총회 간친회 참석<br>
					<span class="pr37">　</span>주일한국상공회의소 설립55주년 기념식 참석<br>
					<span class="pr37">　</span>특사단 동포간담회 만찬 참석<br>
					<span class="pr37">　</span>월례회/클린활동<br>
					<span class="pr37">　</span>제16차 재일본한국인연합회 정기 총회 <br>
					<span class="pr37">　</span>재일본한국인총연합회 발족식<br>
					<span class="pr37">　</span>제14차 이사회 정기총회 개최<br>
					<span class="pr37">　</span>2017 민주 평통 통일 골든벨 일본대회참석
				</li>
				<li>
					<span class="mon badge">04월</span>민단신주쿠지부 골프대회 <br>
					<span class="pr37">　</span>세계한인회장단과 함께하는 특파원 간담회<br>
					<span class="pr37">　</span>동경한국청년상공회의소 정기총회
				</li>
				<li>
					<span class="mon badge">03월</span>카나가와현한인회 채리티 골프 콤페<br>
					<span class="pr37">　</span>평창올림픽 홍보단 방문 오찬, 신오오쿠보 홍보 활동<br>
					<span class="pr37">　</span>전국한인회 워크샵 (시가켄)<br>
					<span class="pr37">　</span>한일마쯔리 1차 실행위원회
				</li>
				<li>
					<span class="mon badge">02월</span>재외동포재단 관계자 한인회사무실 방문<br>
					<span class="pr37">　</span>재일세계한인상공인연합회 신년회<br>
					<span class="pr37">　</span>동경한국학교 졸업식 <br>
					<span class="pr37">　</span>2.8독립선언 98주년 기념식 <br>
					<span class="pr37">　</span>주일한국기업연합회 한일경제인교류의밤 <br>
					<span class="pr37">　</span>신주쿠일한친선협회 설립총회  <br>
					<span class="pr37">　</span>윤동주시인 100주년 행사 참석
										
					<span class="pr37">　</span>
					<span class="pr37">　</span>
				</li>
				<li>
					<span class="mon badge">01월</span>
					<span class="pr37">　</span>2017년도 대사관 신년 인사회<br>
					<span class="pr37">　</span>민단중앙본부 2017년 신년회<br>
					<span class="pr37">　</span>재일본한국인연합회 2017년 신년회<br>
					<span class="pr37">　</span>재일세계한인상공인연합회 실버아카데미<br>
					<span class="pr37">　</span>동경한국상공회의소 2017年新春賀詞交歓会<br>
					<span class="pr37">　</span>2017년 Cool Japan 전략연구회 제1회<br>
					<span class="pr37">　</span>2017년 민단신주쿠지부 신년회
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2016년</li>
				<li>
					<span class="mon badge">12월</span>제3회전일본한국어스피치대회<br>
					<span class="pr37">　</span>동경일한친선협회 설립40주년 기념회<br>
					<span class="pr37">　</span>귀금속협회 2016년 망년회<br>
					<span class="pr37">　</span>대사배 한인회 주최 골프대회 채리티 기금 전달<br>
					<span class="pr37">　</span>OKTA TOKYO 송년회<br>
					<span class="pr37">　</span>총영사, 동포단체 간부와의 간담회
				</li>
				<li>
					<span class="mon badge">11월</span>제3회 신오쿠보 영화제<br>
					<span class="pr37">　</span>K-Food Festa 2016 in TOKYO<br>
					<span class="pr37">　</span>한인회, 민단동경본부, 귀금속협회 식사회<br>
					<span class="pr37">　</span>친선골프대회<br>
					<span class="pr37">　</span>영남향우회 정기골프대회<br>
					<span class="pr37">　</span>주일세계한인상공인연합회 설립10주년 골프콤페<br>
					<span class="pr37">　</span>민주시민교육 강연회<br>
					<span class="pr37">　</span>한일문화교류 모임2016<br>
					<span class="pr37">　</span>한일 마쯔리 제3차 실행 위원회, 만찬회<br>
					<span class="pr37">　</span>대사배 한인회 주최 채리티 골프대회
				</li>
				<li>
					<span class="mon badge">10월</span>귀금속협회 골프대회 참석<br>
					<span class="pr37">　</span>국경일 및 국군의날 리셉션 참석<br>
					<span class="pr37">　</span>2016년 세계한인회장대회(서울) 참석<br>
					<span class="pr37">　</span>신주쿠 오쿠보 마쯔리 퍼레이드 참석<br>
					<span class="pr37">　</span>신주쿠 클린활동<br>
					<span class="pr37">　</span>재외동포재단 이사장 오찬<br>
					<span class="pr37">　</span>민단 창립 70주년 기념식 만찬회<br>
					<span class="pr37">　</span>제3회 글로벌 리더육성스쿨<br>
					<span class="pr37">　</span>KOBA 한기련 대사배 친선대회
				</li>
				<li>
					<span class="mon badge">09월</span>제7회 재일본한국인연합회 워크숍<br>
					<span class="pr37">　</span>동경한국청년상공회 채리티 골프콤페 참석<br>
					<span class="pr37">　</span>한국해군 순항 훈련 리셉션 참석<br>
					<span class="pr37">　</span>World-OKTA Tokyo GOLF대회 참석<br>
					<span class="pr37">　</span>2016 한일축제한마당 준비위원회<br>
					<span class="pr37">　</span>주일한국대사배 2016 일한친선골프대회 참석<br>
					<span class="pr37">　</span>2016년 한일축제한마당 한식부스 운영
				</li>
				<li>
					<span class="mon badge">08월</span>미래창단포럼 제15회 정책검토위원회 참석<br>
					<span class="pr37">　</span>서울대학교 자유전공 학부 현장 학습<br>
					<span class="pr37">　</span>한일축제한마당 부스 출점자 1차회의<br>
					<span class="pr37">　</span>제71주년 광복절기념행사 참석<br>
					<span class="pr37">　</span>이준규대사 한인회 방문, 오찬 간담회 참석<br>
					<span class="pr37">　</span>한인회 이사회 총회, 신임 이사장 취임식<br>
					<span class="pr37">　</span>동경한국상공회의소 屋形船 참석
				</li>
				<li>
					<span class="mon badge">07월</span>7월 클린활동<br>
					<span class="pr37">　</span>동경옥타 차세대 무역스쿨 2016 참석<br>
					<span class="pr37">　</span>재일세계한인상공인연합회 정기총회 참석<br>
					<span class="pr37">　</span>일한교류마쯔리 실행위원회 참가<br>
					<span class="pr37">　</span>이준규 주일본대사 취임 상견다과회(대사관저) 참석<br>
					<span class="pr37">　</span>이준규 주일본대사 환영회 (뉴오타니호텔)참석
				</li>
				<li>
					<span class="mon badge">06월</span>6월 클린활동<br>
					<span class="pr37">　</span>동경상공회의소 정기총회 참석<br>
					<span class="pr37">　</span>동경일한친선협회 정기총회 참석<br>
					<span class="pr37">　</span>민단동경본부단장배 볼링대회 참석<br>
					<span class="pr37">　</span>영호남향후회 공동자선골프대회 참석<br>
					<span class="pr37">　</span>민주평화자문회의 참석<br>
					<span class="pr37">　</span>제2차 청년 일본 취업 지원 민간협의회 참석
				</li>
				<li>
					<span class="mon badge">05월</span>5월 클린활동<br>
					<span class="pr37">　</span>제15차 정기총회 개최<br>
					<span class="pr37">　</span>제7대 제8대 회장 이취임식 제8대 회장 구철씨 선출<br>
					<span class="pr37">　</span>신오쿠보상점가진흥회 정기총회 참석<br>
					<span class="pr37">　</span>재일세계 한인상공인 연합회 강연회 참석<br>
					<span class="pr37">　</span>민단중앙본부 미래창단포럼 참석<br>
					<span class="pr37">　</span>신주쿠 SNS 뉴스 다문화 방재 페스타신주쿠 참석
				</li>
				<li>
					<span class="mon badge">04월</span>귀금속연합회 차리티 야다이 참석<br>
					<span class="pr37">　</span>제8대 한인회장 후보등록 마감<br>
					<span class="pr37">　</span>제1회 한골련정기골프대회 주관<br>
					<span class="pr37">　</span>동경한국학교 입학식 참석<br>
					<span class="pr37">　</span>제15차 정기총회 및 회장 이취임식 준비위원회 구성
				</li>
				<li>
					<span class="mon badge">03월</span>청년일본취업지원민간협의회 참가<br>
					<span class="pr37">　</span>제8대 한인회장 선거관리위원회 구성(위원장 박재세고문)<br>
					<span class="pr37">　</span>일한교류마츠리 실행위원회의 참가<br>
					<span class="pr37">　</span>한창우 철재단 증서수여식 참가<br>
					<span class="pr37">　</span>동경한국학교 초, 중등부 졸업식 참가<br>
					<span class="pr37">　</span>민단동경본부 대의원대회 참가<br>
					<span class="pr37">　</span>김용길총영사와 간담회<br>
					<span class="pr37">　</span>신주쿠다문화공생연락회 회원회의<br>
					<span class="pr37">　</span>제20대국회의원 재외국민투표<br>
					<span class="pr37">　</span>제8대 한인회장 후보 등록 공고
				</li>
				<li>
					<span class="mon badge">02월</span>동경일한친선협회 신년회 참가<br>
					<span class="pr37">　</span>동경한국학교 고등부 졸업식 참가<br>
					<span class="pr37">　</span>재일한인상공인연합회 신년회 참가<br>
					<span class="pr37">　</span>전남도민회 신년회 참가<br>
					<span class="pr37">　</span>가나가와한인회 신년회 참가<br>
					<span class="pr37">　</span>재일 한인단체장 초청 대사관 만찬 참석<br>
					<span class="pr37">　</span>동경한국교원장(남정순) 환송회 참석<br>
					<span class="pr37">　</span>선거관리규정개정위원회 구성
				</li>
				<li>
					<span class="mon badge">01월</span>주일대사관 신년회 참가<br>
					<span class="pr37">　</span>한국기업연합회 신년회 참가<br>
					<span class="pr37">　</span>동경민단중앙민단 합동 신년회 참가<br>
					<span class="pr37">　</span>재일본한국인연합회 신년회 개최<br>
					<span class="pr37">　</span>제1회한인회장상 청소년글짓기대회 시상식<br>
					<span class="pr37">　</span>동경한국상공회의소 신년회 참가<br>
					<span class="pr37">　</span>신주쿠민단 신년회 참가<br>
					<span class="pr37">　</span>한인타운 로고공모전 실시<br>
					<span class="pr37">　</span>신주쿠민단 신년회 참가<br>
					<span class="pr37">　</span>동포재단지원금관련 설명회 참가
				</li>
                </ul>
                <?php } ?>
            	<?php if ($year=="3") { ?>
                <ul class="list-unstyled">
                    <li class="title">2015년</li>
				<li>
					<span class="mon badge">12월</span>민주평통 세계여성컨퍼런스대회 참가<br>
					<span class="pr37">　</span>재일한인단체장 초정 간담회 개최<br>
					<span class="pr37">　</span>재외국민선거100만인등록운동 일본본부 발족식<br>
					<span class="pr37">　</span>통합과 화합을 위한 한인의 밤 개최<br>
					<span class="pr37">　</span>제2회 전일본 한국어스피치대회 개최<br>
					<span class="pr37">　</span>재일경제인대회 참가 <br>
					<span class="pr37">　</span>2015년도재외동포지원금평가회<br>
					<span class="pr37">　</span>동북지방재해민 초청 간담회<br>
					<span class="pr37">　</span>옥타 동경지회 송년회 참석
				</li>
				<li>
					<span class="mon badge">11월</span>재일한국인귀금속협회 골프대회 참가<br>
					<span class="pr37">　</span>김무성의원등 국회의원들과 간담회 개최<br>
					<span class="pr37">　</span>제2회 글로벌리더육성K-MOVE스쿨개최<br>
					<span class="pr37">　</span>유공해외동포표창 전수식(박재세고문 대통령표창 등)<br>
					<span class="pr37">　</span>중부한인회의 정기총회 참석
				</li>
				<li>
					<span class="mon badge">10월</span>국경절 행사 참가<br>
					<span class="pr37">　</span>관서한인회 정기총회 참석<br>
					<span class="pr37">　</span>2015세계한인회장대회 참가<br>
					<span class="pr37">　</span>세계한상대회 참가<br>
					<span class="pr37">　</span>신주쿠 오쿠보 마츠리 퍼레이드 참가<br>
					<span class="pr37">　</span>일한친선협회 동경민단 골프대회 참가<br>
					<span class="pr37">　</span>제20회 재일본한국인연합회 챠리티 골프콤페 개최<br>
					<span class="pr37">　</span>한국기업연합회 골프대회 참가
				</li>
				<li>
					<span class="mon badge">09월</span>한일상속세 세미나 참가<br>
					<span class="pr37">　</span>월드옥타동경지회 골프콤페 참가<br>
					<span class="pr37">　</span>동경청년상공회 골프콤페 참가<br>
					<span class="pr37">　</span>국정감사단과 오찬간담회 개최<br>
					<span class="pr37">　</span>한일축제한마당 한식품부스운영
				</li>
				<li>
					<span class="mon badge">08월</span>유흥수 주일대사님과 오찬간담회 개최<br>
					<span class="pr37">　</span>제70회 광복절 기념식전 참가
				</li>
				<li>
					<span class="mon badge">07월</span>집행부 고문단회의 개최<br>
					<span class="pr37">　</span>월드옥타동경지회 차세대무역스쿨 참석<br>
					<span class="pr37">　</span>민단동경본부 볼링대회 참석<br>
					<span class="pr37">　</span>귀금속연합회 볼링대회 참석<br>
					<span class="pr37">　</span>동경상공회의소 屋形船
				</li>
				<li>
					<span class="mon badge">06월</span>동경한국상공회의소정기총회 참석<br>
					<span class="pr37">　</span>백진훈참의원과 간담회<br>
					<span class="pr37">　</span>카나가와한인회 정기총회 참석<br>
					<span class="pr37">　</span>제14차 이사회 정기총회 개최<br>
					<span class="pr37">　</span>한일국교정상화50주년행사 참석<br>
					<span class="pr37">　</span>일한친선협회 정기총회 참석
				</li>
				<li>
					<span class="mon badge">05월</span>신오쿠보상점가진흥회 정기총회 참석<br>
					<span class="pr37">　</span>제14차 정기총회 개최
				</li>
				<li>
					<span class="mon badge">04월</span>재외국민선거 개선 방안을 위한 간담회<br>
					<span class="pr37">　</span>일한월드센타 개관식 참가<br>
					<span class="pr37">　</span>제1회 재일영호남향우회 자선골프대회 주관<br>
					<span class="pr37">　</span>제1회 한골련정기골프대회 주관<br>
					<span class="pr37">　</span>동경한국학교 입학식 참석<br>
					<span class="pr37">　</span>제14차 정기총회 준비위원회 구성(위원장 김운천 부회장)<br>
					<span class="pr37">　</span>신주쿠 다문화공생 네트워크 발족식 <br>
					<span class="pr37">　</span>KCON 2015 JAPAN F&B 운영
				</li>
				<li>
					<span class="mon badge">03월</span>FOODEX JAPAN2015 관람<br>
					<span class="pr37">　</span>일한교류마츠리 실행위원회의 참가<br>
					<span class="pr37">　</span>한창우 철재단 증서수여식 참가<br>
					<span class="pr37">　</span>한일수교50주년기념 백건우 피아노리사이틀 단체 관람<br>
					<span class="pr37">　</span>마음의 집 동경양로원 착공기념행사 참가<br>
					<span class="pr37">　</span>회칙개정위원회 구성 (위원장 이기진 감사)<br>
					<span class="pr37">　</span>신주쿠다문화공생연락회 회원회의
				</li>
				<li>
					<span class="mon badge">02월</span>동경일한친선협회 신년회 참가<br>
					<span class="pr37">　</span>박원순 서울시장 강연회 참가<br>
					<span class="pr37">　</span>재일한인상공인연합회 신년회 참가<br>
					<span class="pr37">　</span>동경한국학교 졸업식 참석<br>
					<span class="pr37">　</span>전남도민회 신년회 참가<br>
					<span class="pr37">　</span>가나가와한인회 신년회 참가<br>
					<span class="pr37">　</span>외교부 이명렬 재외동포영사국장과 오찬간담회 개최<br>
					<span class="pr37">　</span>홍동호 경제공사 및 재일단체장과의 오찬간담회 참석<br>
					<span class="pr37">　</span>한일청소년무용교류회 참가<br>
					<span class="pr37">　</span>한인타운 로고공모전 시상식
				</li>
				<li>
					<span class="mon badge">01월</span>주일대사관 신년회 참가<br>
					<span class="pr37">　</span>한국기업연합회 신년회 참가<br>
					<span class="pr37">　</span>동경민단중앙민단 합동 신년회 참가<br>
					<span class="pr37">　</span>재일본한국인연합회 신년회 개최<br>
					<span class="pr37">　</span>제1회한인회장상 청소년글짓기대회 시상식<br>
					<span class="pr37">　</span>동경한국상공회의소 신년회 참가<br>
					<span class="pr37">　</span>신주쿠민단 신년회 참가<br>
					<span class="pr37">　</span>한인타운 로고공모전 실시<br>
					<span class="pr37">　</span>신주쿠민단 신년회 참가<br>
					<span class="pr37">　</span>동포재단지원금관련 설명회 참가
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2014년</li>
				<li>
					<span class="mon badge">12월</span>동경한국상공회의소 골프대회 참가<br>
					<span class="pr37">　</span>재일한국경제인대회 참석<br>
					<span class="pr37">　</span>제1회 재일한인청년포럼 개최<br>
					<span class="pr37">　</span>제1회 전일본 한국어스피치대회 개최<br>
					<span class="pr37">　</span>동경한국상공회의소 송년회 참석<br>
					<span class="pr37">　</span>재외동포재단 조규형 이사장님과 간담회 개최<br>
					<span class="pr37">　</span>옥타 동경지회 송년회 참석<br>
					<span class="pr37">　</span>제1회 재일한인사회 미래혁신포럼 개최<br>
					<span class="pr37">　</span>한인회 송년회 개최<br>
					<span class="pr37">　</span>중앙민단주최 헤이토스피치근절 심포지움 참가<br>
					<span class="pr37">　</span>부경대학교와 MOU체결
				</li>
				<li>
					<span class="mon badge">11월</span>11월 클린활동 실시(유흥수 대사님 김용길 총영사님 참석)<br>
					<span class="pr37">　</span>유흥수 대사님, 김용길 총영사님과 간담회 개최<br>
					<span class="pr37">　</span>재일한국상공회의소 50주년 기념행사 참가<br>
					<span class="pr37">　</span>중앙민단주최 시민공개강좌 참가
				</li>
				<li>
					<span class="mon badge">10월</span>국경일 리셉션 참가<br>
					<span class="pr37">　</span>재일한국인귀금속협회 골프대회 참가<br>
					<span class="pr37">　</span>신주쿠 오쿠보 마츠리 퍼레이드 참가<br>
					<span class="pr37">　</span>일한친선협회 동경민단 골프대회 참가<br>
					<span class="pr37">　</span>제19회 재일본한국인연합회 챠리티 골프콤페 개최<br>
					<span class="pr37">　</span>한국기업연합회 골프대회 참가
				</li>
				<li>
					<span class="mon badge">09월</span>클린활동 실시<br>
					<span class="pr37">　</span>유흥수 주일대사님 취임 환영회 참가<br>
					<span class="pr37">　</span>한일축제한마당 집행위원회<br>
					<span class="pr37">　</span>한일축제한마당 한식품부스운영
				</li>
				<li>
					<span class="mon badge">08월</span>주일특파원 초청간담회 개최<br>
					<span class="pr37">　</span>제1회 만남콘서트(중앙민단 오공태 단장님:재일코리안의 역사와 미래)<br>
					<span class="pr37">　</span>제69회 광복절 기념식전 참가
				</li>
				<li>
					<span class="mon badge">07월</span>동경한국상공회의소와 공동주최로 미얀마투자설명회 개최<br>
					<span class="pr37">　</span>클린활동 7월부터 CJ재팬 참가
				</li>
				<li>
					<span class="mon badge">06월</span>동경한국상공회의소정기총회 참석<br>
					<span class="pr37">　</span>백진훈참의원과 간담회<br>
					<span class="pr37">　</span>카나가와한인회 정기총회 참석<br>
					<span class="pr37">　</span>제14차 이사회 정기총회 개최<br>
					<span class="pr37">　</span>한일국교정상화50주년행사 참석<br>
					<span class="pr37">　</span>일한친선협회 정기총회 참석
				</li>
				<li>
					<span class="mon badge">05월</span>신오쿠보상점가진흥회 정기총회 참석<br>
					<span class="pr37">　</span>제13정기총회 개최
				</li>
				<li>
					<span class="mon badge">04월</span>재외국민선거 개선 방안을 위한 간담회<br>
					<span class="pr37">　</span>일한월드센타 개관식 참가<br>
					<span class="pr37">　</span>제1회 재일영호남향우회 자선골프대회 주관<br>
					<span class="pr37">　</span>제1회 한골련정기골프대회 주관<br>
					<span class="pr37">　</span>동경한국학교 입학식 참석<br>
					<span class="pr37">　</span>제14차 정기총회 준비위원회 구성(위원장 김운천 부회장)<br>
					<span class="pr37">　</span>신주쿠 다문화공생 네트워크 발족식 <br>
					<span class="pr37">　</span>KCON 2015 JAPAN F&B 운영
				</li>
				<li>
					<span class="mon badge">03월</span>중앙민단 3.1절 기념식 참석<br>
					<span class="pr37">　</span>3월 클린활동 (이병기 대사님, 김용길 총영사님 참가)<br>
					<span class="pr37">　</span>이병기 대사님과 간담회 <br>
					<span class="pr37">　</span>제6회 한인회 워크샵 <br>
					<span class="pr37">　</span>신오쿠보 드라마・영화제 개막식 참가<br>
					<span class="pr37">　</span>주일 한국대사관 신년회 참가
				</li>
				<li>
					<span class="mon badge">02월</span>재일 세계한인상공인연합회 신년회 참가<br>
					<span class="pr37">　</span>동경한국학교 졸업식 참가<br>
					<span class="pr37">　</span>신오오쿠보 영화제 발족식 참가
				</li>
				<li>
					<span class="mon badge">01월</span>주일 한국대사관 신년 인사회 참석<br>
					<span class="pr37">　</span>1월 클린활동<br>
					<span class="pr37">　</span>재일본대한민국민단중앙본부 신년회 참가<br>
					<span class="pr37">　</span>재일한국농식품연합회 신구이사장단 이취임식 참가<br>
					<span class="pr37">　</span>재일본한국인연합회 신년회 개최<br>
					<span class="pr37">　</span>대사관 k move 민간협의회 참석<br>
					<span class="pr37">　</span>동경한국상공회의소 신춘명함교환회 참가<br>
					<span class="pr37">　</span>카나가와현 한인회 신년회 참가
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2013년</li>
				<li>
					<span class="mon badge">12월</span>동경 상공회의소 송년회 참가<br>
					<span class="pr37">　</span>재외동포재단 이사장 방일 <br>
					<span class="pr37">　</span>홍동호 경제공사 방문<br>
					<span class="pr37">　</span>한인회 12월 연석회의 및 송년회<br>
					<span class="pr37">　</span>세계한인무역협회 동경지회 (OKTA) 송년회 참가 <br>
					<span class="pr37">　</span>후쿠시마 가설주택 주민 식사 초대
				</li>
				<li>
					<span class="mon badge">11월</span>구철 이사장 취임식 개최<br>
					<span class="pr37">　</span>정기 클린활동 실시<br>
					<span class="pr37">　</span>제 4회 재일한국인 경제인 대회 참석<br>
					<span class="pr37">　</span>한일 우호 챠리티 한마당 2013 참가<br>
					<span class="pr37">　</span>제18회 재일본한국인연합회 챠리티 골프대회 개최 <br>
					<span class="pr37">　</span>한일 의원연맹  행사 참가
				</li>
				<li>
					<span class="mon badge">10월</span>재일한국귀금속협회 친선골프대회 참가<br>
					<span class="pr37">　</span>정기 클린활동 실시
				</li>
				<li>
					<span class="mon badge">09월</span>정기 클린활동 실시<br>
					<span class="pr37">　</span>관서한인회 정기총회 참석
				</li>
				<li>
					<span class="mon badge">08월</span>한인회 임시 정기 총회 및 제7대 회장 취임 리셉션 개최<br>
					<span class="pr37">　</span>한인회 제68주년 광복절 기념행사 참가<br>
					<span class="pr37">　</span>재일본중부한국인연합회 워크샵 참가
				</li>
				<li>
					<span class="mon badge">07월</span>이 병기 대사님 클린활동 참가<br>
					<span class="pr37">　</span>이 병기 대사님과 간담회<br>
					<span class="pr37">　</span>서울시 수출 상담회 참가
				</li>
				<li>
					<span class="mon badge">06월</span>재일본한국인연합회 사무실이전<br>
					<span class="pr37">　</span>한인회 재일본큐슈한국인연합회 창립 1주년 정기총회 참가<br>
					<span class="pr37">　</span>한인회 동경한국학교 장학금 전달<br>
					<span class="pr37">　</span>이 병기 주일한국대사 환영회 참가
				</li>
				<li>
					<span class="mon badge">05월</span>민단중앙본부 오 공태단장 강연회 개최–포럼오레 1주년 기념강연<br>
					<span class="pr37">　</span>한인회 회장,이사장단 민단중앙본부 오 공태단장과 간담회 개최<br>
					<span class="pr37">　</span>비상대책위원회 1차 회의 개최
				</li>
				<li>
					<span class="mon badge">04월</span>한인회 간부 재일본가나가와현 한국인연합회 발대식 참가<br>
					<span class="pr37">　</span>재일본한국인연합회 이사회 임시총회 개최<br>
					<span class="pr37">　</span>한인회 4월정기 크린활동 실시
				</li>
				<li>
					<span class="mon badge">03월</span>한인회3월 정기 클린활동 실시<br>
					<span class="pr37">　</span>KOTRA동경 주최 재일 한국인 유학생 취업 참가<br>
					<span class="pr37">　</span>한창우▪철 문화재단 장학금 수여식
				</li>
				<li>
					<span class="mon badge">02월</span>한인회 2월정기 크린활동 실시<br>
					<span class="pr37">　</span>재일본한국인연합회 대통령 취임식 참가 후 한인회 워크샵 개최<br>
					<span class="pr37">　</span>재일본한국인연합회 박원순 서울특별시장과의 간담회 개최
				</li>
				<li>
					<span class="mon badge">01월</span>주일 한국대사관 신년회<br>
					<span class="pr37">　</span>한인회 간부 재외동포재단 김 경근 이사장과 면담회 <br>
					<span class="pr37">　</span>한인회 2013년 신년회<br>
					<span class="pr37">　</span>서울시 통상산업진흥원 수출상담회
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2012년</li>
				<li>
					<span class="mon badge">12월</span>방학시 미귀국 유학생 초청 송년회 개최<br>
					<span class="pr37">　</span>재일본 한국인학교 초등학생 태권도 시범단 후원
				</li>
				<li>
					<span class="mon badge">11월</span>중부 재일한국인 연합회 창립총회 참가<br>
					<span class="pr37">　</span>재일본 유학생 장학금 조성 한인회 챠리티골프 대회 개최<br>
					<span class="pr37">　</span>제3호 재일본한인회 신문 발행<br>
					<span class="pr37">　</span>한인회 간부들 정부 해외동포 유공상 수상(총수상자 7명중 4명)
				</li>
				<li>
					<span class="mon badge">10월</span>박 원순 서울시장외 과장5명과 서울시,한인회 상호협조사항 간담회<br>
					<span class="pr37">　</span>민단중앙본부 오 공태 단장, 감찰위원장, 부단장과 한인회 회장 외 간부 5명과<br>
					<span class="pr37">　</span>상호 발전방향 간담회<br>
					<span class="pr37">　</span>재일본유학생연합회  [한마음체육대회] 후원 및 참가<br>
					<span class="pr37">　</span>동경대학교 유학생 대표단 간담회<br>
					<span class="pr37">　</span>2012 한국인 유학생합동 취업박람회 개최 KOTRA연계<br>
					<span class="pr37">　</span>신오오쿠보 지역 축제 한국음식부스 보란티어 참가
				</li>
				<li>
					<span class="mon badge">09월</span>일본내 반한 데모로 인한 재일본 한국인 안전 및 대응책 간담회<br>
					<span class="pr37">　</span>월드 옥타 권 병하 회장 래일 간담회 <br>
					<span class="pr37">　</span>[한일축제한마당]  SUB회장 (오오쿠보공원) 성공적 개최
				</li>
				<li>
					<span class="mon badge">08월</span>대한민국 재향군인회 일본지회 창립50주년 기념식 참가(2012년8월7일)<br>
					<span class="pr37">　</span>신쥬쿠 발전 위원회 간담회 개최 (2012년8월8일)<br>
					<span class="pr37">　</span>재일본대한민국민단동경본부 제67주년 광복절 경축기념식 참가(2012년8월15일)<br>
					<span class="pr37">　</span>제 1회 한인회 무료 요리교실 개최(2012년8월22일)<br>
					<span class="pr37">　</span>재일본한국인연합회 백 영선 회장외 재일본중부한국인연합회 준비위원회 발족식 참가(2012년8월25일)<br>
					<span class="pr37">　</span>동경한국상공회의소 주최 납량대회 한인회 백 영선회장 참가(2012년8월31일)
				</li>
				<li>
					<span class="mon badge">07월</span>한인회 임원 재일세계 한인상공인 연합회 표경 방문<br>
					<span class="pr37">　</span>주일본대사관 총영사관 표경 방문<br>
					<span class="pr37">　</span>경시청 방문 <br>
					<span class="pr37">　</span>한인회 임원 주일본 대한민국 대사관 경제과 표경방문 <br>
					<span class="pr37">　</span>한인회 임원 제7기 (재일세계한인 상공인 연합회) 정기 총회 참가 <br>
					<span class="pr37">　</span>한인회 동경 상공회의소 표경방문 (2012년7월10일)<br>
					<span class="pr37">　</span>한인회 민단 중앙본부 표경방문 (2012년7월11일)<br>
					<span class="pr37">　</span>한인회 민단 동경지방본부 표경방문 (2012년7월11일)<br>
					<span class="pr37">　</span>옥타 제10기 재외동포 차세대무역스쿨 2012 개교식 참가(2012년7월13일)<br>
					<span class="pr37">　</span>신쥬쿠 구청 나카야마 구청장 표경방문 (2012년7월26일)<br>
					<span class="pr37">　</span>주일한국기업연합회 표경방문(2012년7월30일)
				</li>
				<li>
					<span class="mon badge">06월</span> 제2회 재일한국인 경제인대회 성공리에 개최<br>
					<span class="pr37">　</span>김지민 이사 축하공연<br>
					<span class="pr37">　</span>집행부 회의<br>
					<span class="pr37">　</span>큐슈 한인회 창립기념식<br>
					<span class="pr37">　</span>릿교대학 학생들의 한인회 방문
				</li>
				<li>
					<span class="mon badge">05월</span> 재일본 한국인 연합회 정기총회 및 신임회장 이취임식
				</li>
				<li>
					<span class="mon badge">04월</span>2012여수세계박람회 홍보 및 은퇴자도시 투자 설명회<br>
					<span class="pr37">　</span>클린활동<br>
					<span class="pr37">　</span>집행부, 이사회 연석회의<br>
					<span class="pr37">　</span>제6대 한인회 회장 등록<br>
					<span class="pr37">　</span>2012년 여수세계박람회 홍보전시전
				</li>
				<li>
					<span class="mon badge">03월</span> 동일본 대지진 기금 전달식<br>
					<span class="pr37">　</span>후쿠시마 봉사활동<br>
					<span class="pr37">　</span>한인회 신문창간 준비위원회<br>
					<span class="pr37">　</span>클린활동<br>
					<span class="pr37">　</span>한테츠 문화재단 조성금 수여식<br>
					<span class="pr37">　</span>집행부 월례회의<br>
					<span class="pr37">　</span>동경증권거래소 한국세미나<br>
					<span class="pr37">　</span>제주도 워크숍<br>
					<span class="pr37">　</span>신주쿠소방서와의 협정체결
				</li>
				<li>
					<span class="mon badge">02월</span>동경한국학교 2011학년도 고등부 제54회 졸업식<br>
					<span class="pr37">　</span>｢한일축제한마당2012｣ 제1회 운영위원회<br>
					<span class="pr37">　</span>2.8독립선언 제93주년 기념식 <br>
					<span class="pr37">　</span>재일본대한체육회 창립60주년 기념식전<br>
					<span class="pr37">　</span>재일한국인유학생연합회와 간담회<br>
					<span class="pr37">　</span>집행부 월례회의<br>
					<span class="pr37">　</span>신주쿠 오오쿠보 지역 초카이 및 상점회와의 간친회<br>
					<span class="pr37">　</span>클린활동<br>
					<span class="pr37">　</span>재일본대한민국민단 중앙본부 표경방문<br>
					<span class="pr37">　</span>재일세계한인상공인연합회 신년회
				</li>
				<li>
					<span class="mon badge">01월</span>주일한국대사관 신년회 참석<br>
					<span class="pr37">　</span>한인회 신년회 <br>
					<span class="pr37">　</span>클린활동<br>
					<span class="pr37">　</span>재일대한민국민단 신년회 참석<br>
					<span class="pr37">　</span>동경상공회의소 신주쿠지부 신년회 참석<br>
					<span class="pr37">　</span>여수 상공회의소 주최 오찬 <br>
					<span class="pr37">　</span>여수세계박람회2012 현장 시찰<br>
					<span class="pr37">　</span>여수시청 투자설명회 참석<br>
					<span class="pr37">　</span>여수 오동도, 진남관 방문<br>
					<span class="pr37">　</span>여수세계박람회 준비위원회 주최 오찬<br>
					<span class="pr37">　</span>여수국가산업단지와 남해화학 산업시설 방문<br>
					<span class="pr37">　</span>정희선 여수시 문화원장 간담회<br>
					<span class="pr37">　</span>한류 대책회의 참석<br>
					<span class="pr37">　</span>동경 한국상공회의소 신춘 명함 교환회 참석<br>
					<span class="pr37">　</span>재일한국농식품연합회 신임회장 취임식 참석<br>
					<span class="pr37">　</span>재일대한민국민단 신주쿠지부 신년회 참석<br>
					<span class="pr37">　</span>주일한국 대사관영사부와의 재외선거관련 대책회의
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2011년</li>
				<li>
					<span class="mon badge">12월</span>신오오쿠보 캠페인 참가<br>
					<span class="pr37">　</span>｢재일한국인의 자녀를 위한 글로벌 인재 교육세미나｣ 개최<br>
					<span class="pr37">　</span>김덕룡 대통령특보와의 간담회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 12월 클린활동 실시<br>
					<span class="pr37">　</span>연석회의 및 송년회 개최<br>
					<span class="pr37">　</span>워킹홀리데이회의 참석<br>
					<span class="pr37">　</span>｢제1회 재일한국인경제인대회｣ 참가 
				</li>
				<li>
					<span class="mon badge">11월</span>일본다도연구반 일본지역연수<br>
					<span class="pr37">　</span>현대 옻칠 디자인 교류전 ｢漆옻칠うるし：옻의 재발견｣ 전시회 개최<br>
					<span class="pr37">　</span>｢제16회 한인회 챠리티 골프대회｣ 개최<br>
					<span class="pr37">　</span>집행부 11월 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 11월 클린활동과 지역정화 계몽활동 실시<br>
					<span class="pr37">　</span>제1차 재일한인경제인 네트워킹 강화실행회의 참석<br>
					<span class="pr37">　</span>재일동포 관련 세미나 참석<br>
					<span class="pr37">　</span>｢제1회 한인회 친선볼링대회｣ 개최
				</li>
				<li>
					<span class="mon badge">10월</span>｢한국인경영자를 위한 금융세미나｣ 개최<br>
					<span class="pr37">　</span>｢제30회 오오쿠보 축제｣ 참가<br>
					<span class="pr37">　</span>집행부 10월 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회10월 클린활동 실시<br>
					<span class="pr37">　</span>신오오쿠보 지역간담회 개최<br>
					<span class="pr37">　</span>｢제1회 재일 한인경제인 네트워킹 강화 간담회｣ 참석<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 긴급 지역 간담회 개최
				</li>
				<li>
					<span class="mon badge">09월</span>｢제4회 한인회 워크숍｣ 개최<br>
					<span class="pr37">　</span>한인회 무료 일본어교실 개강<br>
					<span class="pr37">　</span>｢한일축제한마당2011 in Tokyo｣ 2차 운영위원회 참가<br>
					<span class="pr37">　</span>주일한국대사관 신각수 특명전권대사 주최 단체장 회의 참가<br>
					<span class="pr37">　</span>주일한국대사관 정재남 경제공사 참사관과의 간담회 개최<br>
					<span class="pr37">　</span>집행부・이사회 연석회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회9월 클린활동 실시<br>
					<span class="pr37">　</span>한인회 무료 영어교실 개강<br>
					<span class="pr37">　</span>｢다문화공생 페스타 신주쿠2011｣ 참가<br>
					<span class="pr37">　</span>｢재일본관서한국인연합회 제1차 정기총회｣ 참석<br>
					<span class="pr37">　</span>｢한일축제한마당2011 in Tokyo｣참가
				</li>
				<li>
					<span class="mon badge">08월</span>｢동일본대지진 부흥지원・한일우호 챠리티광장｣ 의연금 전달식<br>
					<span class="pr37">　</span>집행부 8월 월례회의 개최<br>
					<span class="pr37">　</span>동일본대지진 재해 교민 위로금 지급관련 4차회의 참가
				</li>
				<li>
					<span class="mon badge">07월</span>한나라당 재외국민위원장 조진형의원과의 간담회 개최<br>
					<span class="pr37">　</span>동경한국학교 양원택 교장과의 간담회 개최<br>
					<span class="pr37">　</span>한국태권도재단 유진환 사무총장과의 간담회 개최<br>
					<span class="pr37">　</span>월드코리안 신문사와의 간담회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 7월 클린활동 실시<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 회의 개최<br>
					<span class="pr37">　</span>집행부・이사회 연석회의 개최<br>
					<span class="pr37">　</span>한옥마을 추진 관련 간담회 개최<br>
					<span class="pr37">　</span>｢한인회 가족동반 야유회｣ 개최
				</li>
				<li>
					<span class="mon badge">06월</span>집행부 6월 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 6월 클린활동 실시<br>
					<span class="pr37">　</span>｢동일본대지진 부흥지원・한일우호 챠리티 광장｣ 개최<br>
					<span class="pr37">　</span>동일본대지진 재해 교민 위로금 지급관련 3차회의 참가<br>
					<span class="pr37">　</span>고문단 회의 개최<br>
					<span class="pr37">　</span>이사회 총회 개최
				</li>
				<li>
					<span class="mon badge">05월</span>집행부 5월 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회5월 클린활동 실시<br>
					<span class="pr37">　</span>｢한일축제한마당2011 in Tokyo｣ 1차 운영위원회 개최<br>
					<span class="pr37">　</span>신오오쿠보 상점가 진흥조합 간친회 참가<br>
					<span class="pr37">　</span>동일본대지진 재해 교민 위로금 지급관련 2차회의 참가<br>
					<span class="pr37">　</span>신주쿠 다문화공생 전체 연락회의 참가<br>
					<span class="pr37">　</span>회장단, 이사장단 간담회 개최<br>
					<span class="pr37">　</span>한인회 장학위원회 장학생 선정심사<br>
					<span class="pr37">　</span>｢한인회 창립10주년 정기총회 및 기념행사｣ 개최<br>
					<span class="pr37">　</span>주일본한국대사관 영사부 김진식 총영사와의 간담회 개최
				</li>
				<li>
					<span class="mon badge">04월</span>｢방사능이 인체에 미치는 영향에 대한 설명회｣ 개최<br>
					<span class="pr37">　</span>집행부・이사회 연석회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 4월 클린활동 실시<br>
					<span class="pr37">　</span>한국교회 희망봉사단 기금전달식
				</li>
				<li>
					<span class="mon badge">03월</span>주일본대한민국대사관 영사부 총영사와의 간담회<br>
					<span class="pr37">　</span>집행부 3월 월례회의 및 정기총회 준비위원회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 3월 클린활동 실시<br>
					<span class="pr37">　</span>신주쿠한인타운 지진피해현황 시찰<br>
					<span class="pr37">　</span>동일본대지진 비상대책회의 개최 <br>
					<span class="pr37">　</span>고문단 회의 개최<br>
					<span class="pr37">　</span>대한 장애인체육회 윤석용 회장과의 간담회 개최<br>
					<span class="pr37">　</span>동일본 대지진 피해 지역에 구호물품전달
				</li>
				<li>
					<span class="mon badge">02월</span>주일대한민국대사관 김현중 총영사와의 간담회 개최<br>
					<span class="pr37">　</span>동경도 합동연락회의 참가<br>
					<span class="pr37">　</span>재외국민 안전 간담회 참석<br>
					<span class="pr37">　</span>｢국제화 시민포럼 in TOKYO｣ 참가<br>
					<span class="pr37">　</span>2월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 2월 클린활동 실시
				</li>
				<li>
					<span class="mon badge">01월</span>2011년 한인회 신년회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 1월 클린활동 실시
				</li>
                </ul>
                <?php } ?>
            	<?php if ($year=="2") { ?>
                <ul class="list-unstyled">
                    <li class="title">2010년</li>
				<li>
					<span class="mon badge">12월</span>2010년도 한국 인재 설명회 참가<br>
					<span class="pr37">　</span>한인회 집행부 오찬간담회 개최<br>
					<span class="pr37">　</span>고문단 회의, 연석회의 및 송년회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 12월 클린활동 실시 
				</li>
				<li>
					<span class="mon badge">11월</span>주일본대한민국대사관 권철현 특명전권대사와의 간담회 참석<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 11월 클린활동 실시<br>
					<span class="pr37">　</span>11월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>모의 재외국민선거 실시<br>
					<span class="pr37">　</span>한인회 단합대회 개최
				</li>
				<li>
					<span class="mon badge">10월</span>｢한일축제한마당 2010 in Tokyo｣참가<br>
					<span class="pr37">　</span>｢제29회 오오쿠보 축제｣참가<br>
					<span class="pr37">　</span>10월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 10월 클린활동 실시<br>
					<span class="pr37">　</span>제15회 한인회 챠리티 골프 대회 개최 
				</li>
				<li>
					<span class="mon badge">09월</span>전북 수출상담회 참가<br>
					<span class="pr37">　</span>동경도 합동 연락회의 참가<br>
					<span class="pr37">　</span>9월 집행부, 이사회 연석회의 개최 <br>
					<span class="pr37">　</span>신주쿠한인발전위원회 9월 클린활동 실시<br>
					<span class="pr37">　</span>한일축제한마당 2010 in Tokyo 제 2회 운영위원회 참가<br>
					<span class="pr37">　</span>워킹홀리데이 동경지원협의회 참가<br>
					<span class="pr37">　</span>재일본관서 한국인연합회 창립총회 참가 
				</li>
				<li>
					<span class="mon badge">08월</span>2012 여수세계박람회 국제 심포지엄 준비 회의 개최<br>
					<span class="pr37">　</span>8월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>김충석 여수시장과의 간담회 개최<br>
					<span class="pr37">　</span>2012 여수세계박람회 한인화 홍보분과위원회 출범식 및<br>
					<span class="pr37">　</span>재일한국인 경제단체와 여수시간 투자유치 업무협력 협약식 개최<br>
					<span class="pr37">　</span>2012 여수세계박람회 국제 심포지엄 개최 
				</li>
				<li>
					<span class="mon badge">07월</span>한국무역협회 전북지부와의 간담회 개최<br>
					<span class="pr37">　</span>관서지방 한인회 창립 준비 모임 개최<br>
					<span class="pr37">　</span>7월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 7월 클린활동 실시<br>
					<span class="pr37">　</span>순천청암대학과의 MOU체결<br>
					<span class="pr37">　</span>주일대한민국대사관 조세형 정무공사와의 간담회 개최<br>
					<span class="pr37">　</span>집행부, 이사회 친선 모임 개최
				</li>
				<li>
					<span class="mon badge">06월</span>주일대한민국대사관 세무협력관과의 간담회 개최<br>
					<span class="pr37">　</span>한인회 임원진 제주도 워크숍 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 6월 클린활동 실시<br>
					<span class="pr37">　</span>6월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>2010 남아프리카 월드컵 한국대표팀 응원전 개최<br>
					<span class="pr37">　</span>한국무역협회 동경지부와의 간담회 개최<br>
					<span class="pr37">　</span>고문단 회의 개최<br>
					<span class="pr37">　</span>제9차 이사회 총회 개최
				</li>
				<li>
					<span class="mon badge">05월</span>한인회 고문단 회의 개최<br>
					<span class="pr37">　</span>제16회 사츠키 마쯔리 참가<br>
					<span class="pr37">　</span>동경한국학교 김명식 교장과의 간담회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 5월 클린활동 실시<br>
					<span class="pr37">　</span>5월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>주일대한민국대사관 이혁 정무공사와의 오찬 간담회 개최<br>
					<span class="pr37">　</span>제9차 한인회 정기총회 및 심포지움, 힌마당 축제 개최<br>
					<span class="pr37">　</span>박재세 회장 1일 명예총영사 위촉<br>
					<span class="pr37">　</span>주일대한민국대사관 임병재 정무 2공사와의 간담회 참가
				</li>
				<li>
					<span class="mon badge">03월</span>신주쿠지역 상점회, 초카이(町会)단체장과의 간담회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 클린활동 실시<br>
					<span class="pr37">　</span>4월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>경찰청 형사국 조직범죄대책부 해외연락관과의 간담회 개최<br>
					<span class="pr37">　</span>일본어교실 개강<br>
					<span class="pr37">　</span>제14회 한인회 챠리티 골프 대회 개최
				</li>
				<li>
					<span class="mon badge">03월</span>주일대한민국대사관 정재남 참사관과의 간담회 개최<br>
					<span class="pr37">　</span>민주당 재외동포사업추진단과의 오찬간담회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 제9차 회의 개최<br>
					<span class="pr37">　</span>3월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>신주쿠지역 조직범죄 예방을 위한 간담회 개최<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 클린활동 실시<br>
					<span class="pr37">　</span>민단중앙본부와의 간담회 개최<br>
					<span class="pr37">　</span>신주쿠 오오쿠보지역 한글게시판 설치<br>
					<span class="pr37">　</span>한인회 집행부・이사회 연석회의 개최
				</li>
				<li>
					<span class="mon badge">02월</span>민주당 재외동포산업추진단장 김성곤 의원과의 간담회<br>
					<span class="pr37">　</span>신주쿠한인발전위원회 제8차 회의 개최<br>
					<span class="pr37">　</span>2월 집행부 월례회의 개최<br>
					<span class="pr37">　</span>재일 한인단체장 협의회 개최
				</li>
				<li>
					<span class="mon badge">01월</span>2010년 한인회 신년회 개최<br>
					<span class="pr37">　</span>외교통상부 이정관 영사국장과의 간담회 개최<br>
					<span class="pr37">　주일대한민국 대사관 김현중 총영사와의 간담회 개최
				</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2009년</li>
                    <li><span class="mon badge">12월</span>민주화해협력범국민협의회 김덕룡 대표상임의장과의 간담회 개최 <br>
					<span class="pr37">　</span>신주쿠한인발전위원회 신주쿠지역 클린활동 및 제 7차 회의 개최<br>
					<span class="pr37">　</span>집행부・이사회・고문단 연석회의 및 송년회 개최 집행부 오찬간담회 개최</li>
                    <li><span class="mon badge">11월</span>주일대한민국 대사관 영사과와 비상연락망 회의 개최<br>
					<span class="pr37">　</span>한인회 홈페이지 신규 리뉴얼<br>
					<span class="pr37">　</span>제13회 한인회 챠리티 골프대회 개최<br>
					<span class="pr37">　</span>재일경제인 초청 강연회 개최 – ㈜마루한 한창우 회장<br>
					<span class="pr37">　</span>재외동포재단 방문</li>
                    <li><span class="mon badge">10월</span>재일 단체장 간담회 개최<br>
					<span class="pr37">　</span>｢신주쿠 니시토야마 물산 이벤트｣ 참가<br>
					<span class="pr37">　</span>｢제28회 오오쿠보 축제｣ 참가<br>
					<span class="pr37">　</span>｢동경 워킹홀리데이 비자 프로그램 지원 협의회 발족식｣ 참가</li>
                    <li><span class="mon badge">09월</span>주일본 대한민국 대사관 이혁 정무공사와의 오찬 간담회 개최<br>
					<span class="pr37">　</span>제3회 재일본한국인연합회 워크숍 개최<br>
					<span class="pr37">　</span>외교 통상부 글로벌 인턴지원단과의 간담회 개최 <br>
					<span class="pr37">　</span>｢한일축제한마당 2009 in Tokyo｣ 참가 <br>
					<span class="pr37">　</span>권철현 대사님과의 간담회 개최</li>
                    <li>
                		<span class="mon badge">08월</span>주일 대한민국 대사관 영사부와의 간담회 개최 <br>
					<span class="pr37">　</span>제64주년 광복절 중앙기념식전 참석<br>
					<span class="pr37">　</span>동경한국학교 초등부 증축 기공식 참석<br>
					<span class="pr37">　</span>재일 세계한인 상공인 연합회와의 간담회 개최</li>
                    <li><span class="mon badge">07월</span>신쥬쿠세무서부서장 표경방문</li>
                    <li>
                		<span class="mon badge">06월</span>일본 법무국에서 한인회 표경방문<br>
					<span class="pr37">　</span>신주쿠 한인 발전위원회1차 회의 <br>
					<span class="pr37">　</span>제5대재일본 한국인연합회 이사장 김효섭씨 선출<br>
					<span class="pr37">　</span>부이사장4명 선출 김영건, 강중식, 구철, 김지웅</li>
                    <li>
                		<span class="mon badge">05월</span>제5대 재일본 한국인연합회 회장으로 박재세씨 선출<br>
					<span class="pr37">　</span>수석부회장 전남수 부회장 배오성, 이효열 
				</li>
                    <li>
                		<span class="mon badge">04월</span>한인회 집행부와 이사회 연석회의<br>
					<span class="pr37">　</span>신주쿠 한인발전위원회 발족식 개최</li>
                    <li>
                		<span class="mon badge">03월</span>한인회 선거분비위원회 1차 회의<br>
					<span class="pr37">　</span>신주쿠 내 지역 단체들과 간담회 개최</li>
                    <li>
                		<span class="mon badge">02월</span>요코하마 차이나 타운 및 가와사키 코리아타운 시찰<br>
					<span class="pr37">　</span>한인회 집행부와 이사회 연석회의</li>
                    <li><span class="mon badge">01월</span>신년 하례식 개최</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2008년</li>
                    <li>
                		<span class="mon badge">12월</span>한인회 집행부와 이사회 연석회의<br>
					<span class="pr37">　</span>신년회 개최</li>
                    <li><span class="mon badge">11월</span>한인회 집행부와 이사회 연석회의</li>
                    <li><span class="mon badge">10월</span>성남문화원 전통예절교실 운영</li>
                    <li>
                		<span class="mon badge">09월</span>코리아 프드 페스타 2009 참석<br>
					<span class="pr37">　</span>권철현 대사님과의 간담회 개최</li>
                    <li>
                		<span class="mon badge">08월</span>일본 공명당 국회의원, 중의원, 도쿄 도의원 한인회 방문<br>
					<span class="pr37">　</span>김현중 총영사와의 간담회 개최<br>
					<span class="pr37">　</span>한인회 집행부와 이사회 연석회의</li>
                    <li><span class="mon badge">07월</span>한인회 집행부와 이사회 연석회의</li>
                    <li><span class="mon badge">06월</span>제7차 이사회 정기총회</li>
                    <li>
                		<span class="mon badge">05월</span>한인회 집행부와 이사회 연석회의<br>
					<span class="pr37">　</span>제7차 재일본한국인연합회 정기총회 개최
				</li>
                    <li>
                		<span class="mon badge">04월</span>제11회 재일한국인연합회 친선 골프대회<br>
					<span class="pr37">　</span>재일대한민국 대사관 김경수 상무관과의 간담회 개최<br>
					<span class="pr37">　</span>이명박 대통령 주최 재일동포 리셥선에 한인회 간부들 다수 참석</li>
                    <li>
                		<span class="mon badge">02월</span>신주쿠 세무서 부서장 등 한인회 표경방문<br>
					<span class="pr37">　</span>제17대 이명박 대통령 취임식에 한인회 간부 참석</li>
                    <li><span class="mon badge">01월</span>신년회 개최, 한인회 임원단 확대 간부 회의</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2007년</li>
                    <li>
                		<span class="mon badge">07월</span>[본국의 법률개정에 따른 설명회 및 교민생활 설명회]개최<br>
                		<span class="pr37">　</span> - 한인회,  주일 대한민국 영사관 공동 개최. </li>
                    <li>
                		<span class="mon badge">04월</span>재일본한국인연합회 이사회 제6차 정기총회 개최<br>
                		<span class="pr37">　</span>제4대 이사장 라승도씨 선출<br>
					<span class="pr37">　</span>재일본한국인연합회 특별위원회 구성(대외협력 특위)
                	</li>
                    <li><span class="mon badge">05월</span>재일본한국인연합회 6주년 정기총회 개최 4대 회장 조옥제씨 선출</li>
                    <li><span class="mon badge">03월</span>제9회 한인회 친선 골프대회 개최</li>
                    <li><span class="mon badge">01월</span>한인회 신년회 개최</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2006년</li>
                    <li><span class="mon badge">11월</span>제8회 한인회 차리티 골프대회 개최(불우이웃성금모금)</li>
                    <li>
                		<span class="mon badge">10월</span>[제3회 오오쿠보 아시아 축제]참가<br>
					<span class="pr37">　</span>한인회 자문위원회 발족 (위원장: 요쿄하마 국립대학 유혁수 교수) <br>
					<span class="pr37">　</span>(유혁수 교수외 한국인 교수 2명, 일본인 변호사, 교수 3명으로 구성) 
       	   		</li>
                    <li><span class="mon badge">07월</span>일본동경상공회의소가 주최하고 한인회가 후원한<br>
					<span class="pr37">　</span>[한일우호 경제인 교류회2006] 개최<br>
					<span class="pr37">　</span>한인회 이사회 제5차 정기총회 개최 
    				</li>
                    <li><span class="mon badge">05월</span>재일본한국인연합회 5주년 정기총회 개최</li>
                    <li><span class="mon badge">04월</span>제7회 한인회 친선골프대회 개최</li>
                </ul>
                <?php } ?>
            	<?php if ($year=="1") { ?>
                <ul class="list-unstyled">
                    <li class="title">2005년</li>
                    <li><span class="mon badge">12월</span>일본 동경상공회의소가 주최하고 한인회가 후원한 [한일예술교류2005]개최</li>
                    <li><span class="mon badge">10월</span>제6회 한인회 차리티 골프대회 개최(불우이웃성금모금) </li>
                    <li><span class="mon badge">07월</span>재일본한국인연합회 사무실 이전</li>
                    <li>
                		<span class="mon badge">06월</span>재일본한국인연합회 특별위원회 구성(발전특위, 조직강화특위)
					<span class="pr37">　</span>재일본한국인연합회 이사회 제4차 정기총회 개최<br>
					<span class="pr37">　</span>제3대 이사장 라승도씨 선출 
                	</li>
                    <li>
                	<span class="mon badge">05월</span>재일본한국인연합회 4 주년 정기총회 개최<br>
					<span class="pr37">　</span>3대 회장 조옥제씨 선출
                	</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2004년</li>
                    <li><span class="mon badge">06월</span>재일본한국인연합회 이사회 제3차 정기총회 개최</li>
                    <li><span class="mon badge">05월</span>재일본한국인연합회 3 주년 정기총회 개최</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2003년</li>
                    <li>
                		<span class="mon badge">06월</span>노무현 대통령과 동포 대표자와의 환담회 참석
					<span class="pr37">　</span>김영삼 전 대통령과의 간담회 개최<br>
					<span class="pr37">　</span>재일본한국인연합회 이사회 제3차 정기총회 개최<br>
					<span class="pr37">　</span>제2대 이사장 이인봉씨 선출<br>
                	</li>
                    <li><span class="mon badge">05월</span>재일본한국인연합회 2 주년 정기총회 개최  2대 회장 김희석씨 재선출 </li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2002년</li>
                    <li><span class="mon badge">06월</span>6월 재일본한국인연합회 1주년 이사회 정기총회 개최 이사장 재선출 조옥제씨 선출</li>
                    <li><span class="mon badge">05월</span>재일본한국인연합회 1 주년 정기총회 개최</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2001년</li>
                    <li><span class="mon badge">06월</span>6월 재일본한국인연합회 (초대이사장 조한철씨 선출(10월사임))</li>
                    <li><span class="mon badge">05월</span>재일본한국인연합회 창립 (초대회장 김희석씨 선출)</li>
                </ul>
                <ul class="list-unstyled">
                    <li class="title">2000년</li>
                    <li><span class="mon badge">12월</span>재일 한국인사회를 생각하는 모임 결성</li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php
include_once('../_tail.php');
?>