<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/switch.php');
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
?>
	<?php 
	if (defined('_INDEX_') == true) { 
	?>
	<?=latest('top_popup', 'activity', 1, 100); ?>
	<?php } ?>
<div id="header_wrap" class="top_menu_06 transparent " style="box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);position: fixed;">
    <div id="top_menu" class="container div_top_container">
        <a href="<?=G5_URL?>/"><img src="/_img/logo/logo3.png" style="width:280px;"></a>
        <button type="button" class="navbar-toggle collapsed js-offcanvas-btn"> <span class="sr-only">Toggle navigation</span> <span class="hiraku-open-btn-line <?php if($index){ echo "white"; }else{ echo "black"; }?>"></span> </button>
        <div class="menu_wrap">
            <ul id="gnb" class="container gnb">
            	<li class="depth1" style="width:115px;"> <a href="<?=G5_URL?>/">HOME</a>
                    <ul class="depth2">
                        <li><a href="<?=G5_URL?>/purpose" style="line-height:1.5em;font-weight:400;">창립목적</a></li>
                        <li><a href="<?=G5_URL?>/history" style="line-height:1.5em;font-weight:400;">연혁</a></li>
                        <li><a href="<?=G5_URL?>/president" style="line-height:1.5em;font-weight:400;">역대회장소개</a></li>
                        <li><a href="<?=G5_URL?>/access" style="line-height:1.5em;font-weight:400;">찾아오시는길</a></li>
                    </ul>
            	</li>
                <li class="depth1" style="width:155px;"> <a href="<?=G5_URL?>/12th">제12대한인회</a>
                    <ul class="depth2">
                        <li><a href="<?=G5_URL?>/12th" style="line-height:1.5em;font-weight:400;">제12대한인회</a></li>
                        <li><a href="<?=G5_URL?>/news" style="line-height:1.5em;font-weight:400;">공지사항</a></li>
                    </ul>
            	</li>
                <li class="depth1" style="width:135px;"> <a href="<?=G5_URL?>/info">한인회활동</a>
                    <ul class="depth2">
                        <li><a href="<?=G5_URL?>/info" style="line-height:1.5em;font-weight:400;">한인회소식</a></li>
                        <li><a href="<?=G5_URL?>/activity" style="line-height:1.5em;font-weight:400;">한인회활동</a></li>
                    </ul>
            	</li>
                <li class="depth1" style="width:200px;"> <a href="<?=G5_URL?>/member_news">한인기업 및 단체소개</a>
                    <ul class="depth2">
                        <li><a href="<?=G5_URL?>/member_news" style="line-height:1.5em;font-weight:400;">기업/단체소개</a></li>
                        <li><a href="<?=G5_URL?>/member_activity" style="line-height:1.5em;font-weight:400;">기업/단체 활동소식</a></li>
                    </ul>
            	</li>
                <li class="depth1" style="width:140px;"> <a href="<?=G5_URL?>/media">커뮤니티</a>
                    <ul class="depth2">
                        <li><a href="<?=G5_URL?>/media" style="line-height:1.5em;font-weight:400;">매스컴보도</a></li>
                        <li><a href="<?=G5_URL?>/recruit" style="line-height:1.5em;font-weight:400;">구인・구직</a></li>
                        <!--<li><a href="<?=G5_URL?>/job_search" style="line-height:1.5em;font-weight:400;">구직</a></li>-->
                        <li><a href="<?=G5_URL?>/life_info" style="line-height:1.5em;font-weight:400;">생활정보</a></li>
                    </ul>
            	</li>
            </ul>
		<div class="top_right_menu">
			<?php if($is_member){ ?>
			<button type="button" class="btn btn-white" onclick="location.href='<?=G5_URL?>/bbs/logout.php'"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 로그아웃</button> 
			<?php if($is_admin){ ?>
			<button type="button" class="btn btn-white" onclick="location.href='<?php echo G5_URL ?>/adm/member_list.php'"><i class="fa fa-wpforms" aria-hidden="true"></i> 관리자페이지</button>
			<?php } else { ?>
			<button type="button" class="btn btn-white" onclick="location.href='<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php'"><i class="fa fa-wpforms" aria-hidden="true"></i>　내정보</button>
			<?php } ?>
			<?php } else { ?>
			<button type="button" class="btn btn-white" onclick="location.href='<?=G5_URL?>/bbs/login.php'"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 로그인</button>　
			<button type="button" class="btn btn-white" onclick="location.href='<?=G5_URL?>/bbs/register.php'"><i class="fa fa-wpforms" aria-hidden="true"></i> 회원가입</button>
			<?php } ?>
		</div>
        </div>
    </div>
</div>

<!-- header -->
<div class="row-offcanvas row-offcanvas-right"> <!-- mobile container 모바일 메뉴는 tail.php -->
    <?php if($index){ 
    // 비주얼 슬로건 아래 오른쪽 슬라이드 슬로건 
    $slogan01 = "재일본<br>한국인<br>연합회"; 
    //$slogan02 = "도쿄에서 배우고 일하기"; 
    //$slogan03 = "일본유학부터 취업까지"; 
    // 11, 13, 19, 20
    ?>
    
    <div id="index_swiper" class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="swiper-content">
                <div class="container">
                    <div class="content text-left">
                        <h1 class="animated" data-swiper-animation="fadeInUp" data-duration="1.8s" data-delay="2s"   data-swiper-out-animation="fadeIn" data-out-duration="1s" style="font-size:4.5em;color:#000;">재일본<br>동경<br>한인회</h1>
                        <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s"  data-swiper-out-animation="fadeIn" data-out-duration="1s" style="color:#000;">THE FEDERATION OF KOREAN<br>ASSOCIATIONS, TOKYO JAPAN</p> 
                        <!--<div class="btn_wrap"><a href="<?=G5_URL?>/#"  class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s"   data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>-->
                    </div>
                </div>
            </div>
             <div class="overlay data-overlay"  data-overlay="0,0,0,0"></div>
            <div class="swiper-img slide-1 data-image" data-background="<?=G5_URL?>/_img/top_slider/top01.jpg"></div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-content">
                <div class="container">
                    <div class="content text-left">
                        <h1 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"   data-swiper-out-animation="fadeIn" data-out-duration="1s">재일본동경한국인연합회에<br><span>오신것을 환영합니다.</span></h1> 
                        <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.2s"  data-swiper-out-animation="fadeIn" data-out-duration="1s"></div>
                        <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s"  data-swiper-out-animation="fadeIn" data-out-duration="1s">THE FEDERATION OF KOREAN<br>ASSOCIATIONS, TOKYO JAPAN</p>
                        <div class="btn_wrap"><a href="<?=G5_URL?>/purpose"  class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s"   data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                    </div>
                </div>
            </div>
            <div class="overlay data-overlay"  data-overlay="0,0,0,0.4"></div>
-            <div class="bg-dot  data-opacity"  data-opacity="0.3"></div>
            <div class="swiper-img slide-1 data-image" data-background="<?=G5_URL?>/_img/top_slider/top04.jpg" style='animation: zoom 15s ease-in-out;animation-fill-mode: forwards;animation-iteration-count: 1;'></div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-content">
                <div class="container">
                    <div class="content text-left">
                        <h1 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"   data-swiper-out-animation="fadeIn" data-out-duration="1s">재일본동경한국인연합회에<br><span>오신것을 환영합니다.</span></h1> 
                        <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.2s"  data-swiper-out-animation="fadeIn" data-out-duration="1s"></div>
                        <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s"  data-swiper-out-animation="fadeIn" data-out-duration="1s">THE FEDERATION OF KOREAN<br>ASSOCIATIONS, TOKYO JAPAN</p>
                        <div class="btn_wrap"><a href="<?=G5_URL?>/purpose"  class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s"   data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                    </div>
                </div>
            </div>
            <div class="overlay data-overlay"  data-overlay="0,0,0,0.4"></div>
-            <div class="bg-dot  data-opacity"  data-opacity="0.3"></div>
            <div class="swiper-img slide-1 data-image" data-background="<?=G5_URL?>/_img/top_slider/top02.jpg" style='animation: zoom 15s ease-in-out;animation-fill-mode: forwards;animation-iteration-count: 1;'></div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-content">
                <div class="container">
                    <div class="content text-left">
                        <h1 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"   data-swiper-out-animation="fadeIn" data-out-duration="1s">THE FEDERATION OF KOREAN<br>ASSOCIATIONS, <span style="color:#E81526;">TOKYO JAPAN</span></h1> 
                        <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.2s"  data-swiper-out-animation="fadeIn" data-out-duration="1s"></div>
                        <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s"  data-swiper-out-animation="fadeIn" data-out-duration="1s">재일본동경한국인연합회에 오신것을 환영합니다.</p>
                        <div class="btn_wrap"><a href="<?=G5_URL?>/purpose"  class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s"   data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                    </div>
                </div>
            </div>
            <div class="overlay data-overlay"  data-overlay="0,0,0,0.3"></div>
-            <div class="bg-dot  data-opacity"  data-opacity="0.3"></div>
            <div class="swiper-img slide-1 data-image" data-background="<?=G5_URL?>/_img/top_slider/top03.jpg" style='animation: zoom 15s ease-in-out;animation-fill-mode: forwards;animation-iteration-count: 1;'></div>
        </div>
        <div class="swiper-slide">
            <div class="swiper-content">
                <div class="container">
                    <div class="content text-center">
                        <h1 class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"   data-swiper-out-animation="fadeIn" data-out-duration="1s">THE FEDERATION OF KOREAN<br>ASSOCIATIONS, <span style="color:#E81526;">TOKYO JAPAN</span></h1> 
                        <!--<div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.2s"  data-swiper-out-animation="fadeIn" data-out-duration="1s"></div>-->
                        <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s"  data-swiper-out-animation="fadeIn" data-out-duration="1s">재일본동경한국인연합회에 오신것을 환영합니다.</p>
                        <div class="btn_wrap"><a href="<?=G5_URL?>/bbs/register.php"  class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s"   data-swiper-out-animation="fadeIn" data-out-duration="2s">회원가입</a></div>
                    </div>
                </div>
            </div>
            <div class="overlay data-overlay"  data-overlay="0,0,0,0.4"></div>
-            <div class="bg-dot  data-opacity"  data-opacity="0.3"></div>
            <div class="swiper-img slide-1 data-image" data-background="<?=G5_URL?>/_img/top_slider/main03.jpg" style='animation: zoom 15s ease-in-out;animation-fill-mode: backwards;animation-iteration-count: 1;'></div>
        </div>
    </div>
    	
    <!-- pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>

    
	<?php } else{ ?>
	<div class="s_visual_wrap">
		<div class="slide">
			<div class="content">
				<div class="container" style="text-align:center;">
					<?php
					$tmp_i = rand(0,2);
					$cclist = array(
						array("도쿄도전수학교각종학교협회는","도쿄 도내의 전수학교 · 각종학교를 대표하는 유일한 단체로서"),
						array("<span style='font-weight:100;'>Study And Work</span> <span style='color:#E81526;'>in TOKYO</span>","도쿄에서 배우고 일하기"),
						array("일본유학부터 취업까지","도쿄에서 생생한 일본어를 배우고")
					);
					?>
    					<h1 class="h1_top_1"><div style="padding-top:12px;font-size:1.0em;color:#000;"><?=$depth1?></div></h1>
					<!--<h1 class="h1_top_1" style="background:url('<?=G5_URL?>/_img/bg/bg_h1_top.png') no-repeat left center;height:64px;border:1px solid #000;padding:10px 200px;background-origin: content-box;"><?=$depth1?></h1>
					<p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100" style="font-family:Meiryo;"><?=$cclist[$tmp_i][1]?></p>-->
				</div>
			</div>
			<ul>
				<li class="data-image" data-background="<?=G5_URL?>/_img/sub_img/sub01.jpg?v=4"> </li>
			</ul>
			<div class="overlay data-overlay" data-overlay="0, 0, 0, 0"></div>
		</div>
	</div>
	<?php } ?>
	<?php if(!$index){ ?>
	<div id="sub_content">
		<div class="container">
			<div class="page-header">
				<h2 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100" style="padding-top:20px;margin-bottom:0px;"><?=$depth2 ?></h2>
				<div class="line"></div>
				<!--<h1><?php if($depth2) { echo $depth2; } else{ echo "재일본한국인연합회"; } ?></h1>-->
			</div>
				
			<?php if ($pageNum=="0") { ?>
			<div class="div_only_pc">
				<nav id="bo_cate" style="margin-bottom:40px;">
					<ul id="bo_cate_ul">
						<li style="width:25%;"><a href="<?=G5_URL?>/purpose" <?php if ($bo_table=="purpose") echo "id='bo_cate_on'" ?>>창립목적</a></li><li style="width:25%;"><a href="<?=G5_URL?>/history" <?php if ($bo_table=="history") echo "id='bo_cate_on'" ?>>연혁</a></li><li style="width:25%;"><a href="<?=G5_URL?>/president" <?php if ($bo_table=="president") echo "id='bo_cate_on'" ?>>역대회장소개</a></li><li style="width:25%;"><a href="<?=G5_URL?>/access" <?php if ($bo_table=="access") echo "id='bo_cate_on'" ?>>찾아오시는길</a></li>
					</ul>
				</nav>
			</div>
			<div class="div_only_mobile" style="padding-bottom:20px;">
				<select class="frm_input full_input" onchange="location.href=this.value">
					<option value="<?=G5_URL?>/purpose" <?php if ($bo_table=="purpose") echo "selected" ?>>창립목적</option>
					<option value="<?=G5_URL?>/history" <?php if ($bo_table=="history") echo "selected" ?>>연혁</option>
					<option value="<?=G5_URL?>/president" <?php if ($bo_table=="president") echo "selected" ?>>역대회장소개</option>
					<option value="<?=G5_URL?>/access" <?php if ($bo_table=="access") echo "selected" ?>>찾아오시는길</option>
				</select>
			</div>
			<?php } ?>
			<?php if ($pageNum=="3" && $bo_table=="member_news") { ?>
			<div class="div_only_pc">
				<nav id="bo_cate" style="margin-bottom:40px;">
					<ul id="bo_cate_ul">
						<li style="width:7.7%;"><a href="<?=G5_URL?>/member_news" <?php if (!$sca) echo "id='bo_cate_on'" ?>>전체</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=식품유통" <?php if ($sca=="식품유통") echo "id='bo_cate_on'" ?>>식품유통</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=항공해운" <?php if ($sca=="항공해운") echo "id='bo_cate_on'" ?>>항공해운</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=서비스업" <?php if ($sca=="서비스업") echo "id='bo_cate_on'" ?>>서비스업</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=여행사" <?php if ($sca=="여행사") echo "id='bo_cate_on'" ?>>여행사</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=야키니쿠" <?php if ($sca=="야키니쿠") echo "id='bo_cate_on'" ?>>야키니쿠</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=인쇄디자인" <?php if ($sca=="인쇄디자인") echo "id='bo_cate_on'" ?>>인쇄디자인</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=세무법률" <?php if ($sca=="세무법률") echo "id='bo_cate_on'" ?>>세무법률</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=무역제조" <?php if ($sca=="무역제조") echo "id='bo_cate_on'" ?>>무역제조</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=한식" <?php if ($sca=="한식") echo "id='bo_cate_on'" ?>>한식</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=교육유학" <?php if ($sca=="교육유학") echo "id='bo_cate_on'" ?>>교육유학</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=건설" <?php if ($sca=="건설") echo "id='bo_cate_on'" ?>>건설</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=IT" <?php if ($sca=="IT") echo "id='bo_cate_on'" ?>>IT</a></li><li style="width:7.1%;"><a href="<?=G5_URL?>/member_news?sca=기타" <?php if ($sca=="기타") echo "id='bo_cate_on'" ?>>기타</a></li>
					</ul>
				</nav>
			</div>
			<div class="div_only_mobile" style="padding-bottom:20px;">
				<select class="frm_input full_input" onchange="location.href=this.value">
					<option value="<?=G5_URL?>/member_news" <?php if (!$sca) echo "selected" ?>>전체</option>
					<option value="<?=G5_URL?>/member_news?sca=식품유통" <?php if ($sca=="식품유통") echo "selected" ?>>식품유통</option>
					<option value="<?=G5_URL?>/member_news?sca=항공해운" <?php if ($sca=="항공해운") echo "selected" ?>>항공해운</option>
					<option value="<?=G5_URL?>/member_news?sca=서비스업" <?php if ($sca=="서비스업") echo "selected" ?>>서비스업</option>
					<option value="<?=G5_URL?>/member_news?sca=여행사" <?php if ($sca=="여행사") echo "selected" ?>>여행사</option>
					<option value="<?=G5_URL?>/member_news?sca=야키니쿠" <?php if ($sca=="야키니쿠") echo "selected" ?>>야키니쿠</option>
					<option value="<?=G5_URL?>/member_news?sca=인쇄디자인" <?php if ($sca=="인쇄디자인") echo "selected" ?>>인쇄디자인</option>
					<option value="<?=G5_URL?>/member_news?sca=세무법률" <?php if ($sca=="세무법률") echo "selected" ?>>세무법률</option>
					<option value="<?=G5_URL?>/member_news?sca=무역제조" <?php if ($sca=="무역제조") echo "selected" ?>>무역제조</option>
					<option value="<?=G5_URL?>/member_news?sca=한식" <?php if ($sca=="한식") echo "selected" ?>>한식</option>
					<option value="<?=G5_URL?>/member_news?sca=교육유학" <?php if ($sca=="교육유학") echo "selected" ?>>교육유학</option>
					<option value="<?=G5_URL?>/member_news?sca=건설" <?php if ($sca=="건설") echo "selected" ?>>건설</option>
					<option value="<?=G5_URL?>/member_news?sca=IT" <?php if ($sca=="IT") echo "selected" ?>>IT</option>
					<option value="<?=G5_URL?>/member_news?sca=기타" <?php if ($sca=="기타") echo "selected" ?>>기타</option>
				</select>
			</div>
			<?php } ?>
			<?php if ($pageNum=="4") { ?>
			<div class="div_only_pc">
				<nav id="bo_cate" style="margin-bottom:40px;">
					<ul id="bo_cate_ul">
						<li style="width:33%;"><a href="<?=G5_URL?>/media" <?php if ($bo_table=="media") echo "id='bo_cate_on'" ?>>매스컴보도</a></li><li style="width:33%;"><a href="<?=G5_URL?>/recruit" <?php if ($bo_table=="recruit") echo "id='bo_cate_on'" ?>>구인・구직</a></li><li style="width:34%;"><a href="<?=G5_URL?>/life_info" <?php if ($bo_table=="life_info") echo "id='bo_cate_on'" ?>>생활정보</a></li>
					</ul>
				</nav>
			</div>
			<div class="div_only_mobile" style="padding-bottom:20px;">
				<select class="frm_input full_input" onchange="location.href=this.value">
					<option value="<?=G5_URL?>/media" <?php if ($bo_table=="media") echo "selected" ?>>매스컴보도</option>
					<option value="<?=G5_URL?>/recruit" <?php if ($bo_table=="recruit") echo "selected" ?>>구인・구직</option>
					<option value="<?=G5_URL?>/life_info" <?php if ($bo_table=="life_info") echo "selected" ?>>생활정보</option>
				</select>
			</div>
			<?php } ?>
			<?php if ($bo_table=="adm_visit" || $bo_table=="member_list" || $bo_table=="sponsor") { ?>
			<div class="div_only_pc">
				<nav id="bo_cate" style="margin-bottom:20px;">
					<ul id="bo_cate_ul">
						<li style="width:33%;"><a href="<?=G5_URL?>/adm/member_list.php" <?php if ($bo_table=="member_list") echo "id='bo_cate_on'" ?>>회원관리</a></li><li style="width:34%;"><a href="<?=G5_URL?>/sponsor" <?php if ($bo_table=="sponsor") echo "id='bo_cate_on'" ?>>스폰서관리</a></li><li style="width:33%;"><a href="<?=G5_URL?>/adm/visit_list.php" <?php if ($bo_table=="adm_visit") echo "id='bo_cate_on'" ?>>접속자집계</a></li>
					</ul>
				</nav>
			</div>
			<?php } ?>
	<?php } ?>
