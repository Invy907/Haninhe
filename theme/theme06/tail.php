<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if(!$index){ ?>
</div> <!-- container end -->
</div> <!-- sub_content end -->
<?php } ?>

<div id="link1" class="index-content">
	<section class="section-05" style="margin-top:70px;background-color:#FFF;">
		<!--
		<div class="title_wrap" style="padding-top:30px;margin-bottom:40px;">
			<h2 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s" style="font-family:ubuntu;">SPONSOR</h2>
			<p class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s">함께하는 단체 & 기업 / 관련단체</p>
			<div class="line"></div>
		</div>
		-->
    		<div class="container" style="padding-bottom:45px;">
    			<?=latest('top_sponsor', 'sponsor', 100, 23, 1, "표시"); ?>
    			<?php if ($is_admin) { ?>
    			<div style="text-align:right;padding-top:40px;text-align:center;">
				<a href="<?=G5_URL?>/sponsor" class="btn_b14" style="padding: 9px 30px 9px 30px;color:#E51221;"><i class="fa fa-lock" aria-hidden="true"></i> SPONSOR 관리</a>
			</div>
			<?php } ?>
		</div>
	</section>
	
</div>
	
<div class="footer">
	<div style="background-color:#353A40;border-top:1px solid #EEE;padding:20px 0px 20px 0px;">
		<div class="container" style="padding:30px 20px 20px 20px;;">
			<div class="row ma-n12 ma-lg-n30">
				<div class="col-sm-4 col-md-4 col-lg-4 col-4">
					<div style="margin-bottom:20px;">
						<table>
						<tr>
							<td rowspan="2"><img src="<?=G5_URL?>/_img/logo_tail.png"></td>
							<td><div style="padding-top:0px;padding-left:10px;color:#fff;font-size:1.6em;;">재일본도쿄한국인연합회</div></td>
						</tr>
						<tr>
							<td><div style="padding-top:3px;padding-left:11px;color:#fff;font-size:0.55em;font-wegith:900;;">THE TOKYO FEDERATION OF KOREAN ASSOCIATIONS</div></td>
						</tr>
						</table>
					</div>
				</div>
				<div class="col-sm-5 col-md-5 col-lg-5 col-5">
					<div style="padding-top:5px;margin-bottom:20px;">
						<div style="color:#FFF;">
							〒169-0072 東京都新宿区大久保 2-1-8 プラザ新大樹ビル本棟 408号
						</div>
						<div style="color:#FFF;padding-top:12px;font-weight:100;">
							TEL : <a href="tel:03-5286-6485" style="color:#FFF;">03-5286-6485</a><br>
							FAX : 03-5286-6486
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 col-3">
					<div>
						<ul style="list-style:disc;line-height:2.2em;padding-left:18px;">
							<li style="color:#FFF;"><a href="<?=G5_URL?>/bbs/register.php" style="color:#FFF;">기업/개인 회원가입 절차 및 안내</a></li>
							<li style="color:#FFF;"><a href="<?=G5_URL?>/constitution" style="color:#FFF;">재일본도쿄한국인연합회 회칙</a></li>
							<li style="color:#FFF;"><a href="<?=G5_URL?>/contact" style="color:#FFF;">중요 연락처</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color:#FFF;padding:10px 0px;">
		<div style="text-align:center;">
			<div style="color:#FFF;font-family:'Noto Sans JP';color:#111;">Copyright © 2001-<?=date("Y")?> haninhe.com. All Right Reserved.</div>
		</div>
	</div>
</div>

<div class="sidebar-offcanvas" id="sidebar">
    <div class="js-offcanvas">
        <div class="title_wrap" style="background-color:#FFF;padding:15px 10px 20px 15px;">
        	<img src="<?=G5_URL?>/_img/logo/logo3.png" style="width:230px;">
    		<p class="close-btn js-close-btn" style="color:#111;"><i class="fas fa-times "></i></p>
        </div>
        <div off-canvas="slidebar-1 left reveal">
            <ul class="sidebar-menu">
                <li><a href="<?=G5_URL?>/"><span>HOME</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?=G5_URL?>/purpose">창립목적</a></li>
                        <li><a href="<?=G5_URL?>/history">연혁</a></li>
                        <li><a href="<?=G5_URL?>/president">역대회장소개</a></li>
                        <li><a href="<?=G5_URL?>/access">찾아오시는길</a></li>
                    </ul>
                </li>
                <li><a href="<?=G5_URL?>/12th"><span>제12대한인회</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?=G5_URL?>/12th">제12대한인회</a></li>
                        <li><a href="<?=G5_URL?>/news">공지사항</a></li>
                    </ul>
                </li>
                <li><a href="<?=G5_URL?>/info"><span>한인회 활동</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?=G5_URL?>/info">한인회소식</a></li>
                        <li><a href="<?=G5_URL?>/activity">한인회활동</a></li>
                    </ul>
                </li>
    			<li><a href="<?=G5_URL?>/member_news"><span>한인기업 및 단체소개</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?=G5_URL?>/member_news">기업/단체소개</a></li>
                        <li><a href="<?=G5_URL?>/member_activity">기업/단체 활동소식</a></li>
                    </ul>
                </li>
                <li><a href="<?=G5_URL?>/media"><span>커뮤니티</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?=G5_URL?>/media">매스컴보도</a></li>
                        <li><a href="<?=G5_URL?>/recruit">구인・구직</a></li>
                        <li><a href="<?=G5_URL?>/life_info">생활정보</a></li>
                    </ul>
                </li>
            </ul>
    		<br>
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
			<?php if($is_member){ ?>
                <a href="<?=G5_URL?>/bbs/logout.php" class="btn btn btn-pack" style="color:#FFF;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 로그아웃</a>
				<?php if($is_admin){ ?>
               		<a href="javascript:alert('관리자 페이지는 PC에서 확인해주세요.');" class="btn btn btn-pack" style="color:#FFF;"><i class="fa fa-wpforms" aria-hidden="true"></i> 관리자페이지</a>
				<?php } else { ?>
                	<a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" class="btn btn btn-pack" style="color:#FFF;"><i class="fa fa-wpforms" aria-hidden="true"></i> 내정보</a>
				<?php } ?>
			<?php } else { ?>
                <a href="<?=G5_URL?>/bbs/login.php" class="btn btn btn-pack" style="color:#FFF;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 로그인</a>
                <a href="<?=G5_URL?>/bbs/register.php" class="btn btn btn-pack" style="color:#FFF;"><i class="fa fa-wpforms" aria-hidden="true"></i> 회원가입</a>
			<?php } ?>
                <div class="copy" style="padding-top:15px;">copyright&copy; <?php echo date("Y"); ?> haninhe.com</div>
            </div>
            
        </div>
        
    </div>
</div><!-- mobile container end -->
<?php if(!$index){ ?>
<button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">TO TOP</span>
    </button>
<?php } ?>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
<script type="text/javascript">
//new GambitSmoothScroll();
</script>

<!-- 레이어 팝업 -->
<div id="popup1" class="overlay-popup">
	<div class="popup-content">
		<h2>개인정보보호정책</h2> 
		<a class="close" href="#0">&times;</a>
		<div class="content">
			내용이 나옵니다.
		</div>
	</div>
</div>
<div id="popup2" class="overlay-popup">
	<div class="popup-content">
		<h2>이용안내</h2> 
		<a class="close" href="#0">&times;</a>
		<div class="content">
			내용이 나옵니다.
		</div>
	</div>
</div>
<!-- mobile container end -->
<script>
$(document).ready(function(){
  $(window).resize(function(){
    var windowHeight = $(window).height();
    var ninetypercent = .6 * windowHeight;
    $(document).scroll(function(){
      var y = $(this).scrollTop();
      if( y > ninetypercent) {
        $('.sub_three_map_wrap').addClass('sticky');
      } else {
        $('.sub_three_map_wrap').removeClass('sticky');
      }
    });
  }).resize();
}); 
</script>
<?php if($index){ ?>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/swiper/dist/js/swiper.ani.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/swiper/dist/js/swiper.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/swiper/dist/js/swiper.sc.js"></script>
<script>
var swiperAnimation = new SwiperAnimation();
var menu = ['<?php echo $slogan01 ;?>', '<?php echo $slogan02 ;?>', '<?php echo $slogan03 ;?>']
var swiper = new Swiper('.swiper-container', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }, 
    effect: 'fade',
    loop: false,
    speed: 2500,
    autoplay: {
    delay: 4500,
},   
    on: {

            init: function () {
                swiperAnimation.init(this).animate();
            }
            , slideChange: function () {
                swiperAnimation.init(this).animate();
            }

        }

});
    </script>
<?php } ?>
    
<script> 
var topDepth = '<?php echo $pageNum ;?>';
var subDepth = '<?php echo $subNum ;?>';
</script>  
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/scrolla/scrolla.jquery.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/bootstrap/js/bootstrap.min.js"></script>
<script src='<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/hiraku.js'></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/index.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/sidebar-menu.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/js/wiz.js"></script>

<script>
    $.sidebarMenu($('.sidebar-menu'))
</script>
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>