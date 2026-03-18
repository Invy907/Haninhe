<?php

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
$index = "index";
include_once(G5_THEME_PATH.'/head.php');
?>

<div id="link1" class="index-content">
	<section class="section-05" style="margin-top:30px;">
    		<div class="container">
			<div class="title_wrap" style="padding-top:20px;text-align:center;margin-bottom:60px;">
				<p class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s" style="color:#999;">NEWS</p>
				<h2 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s">공지 <span style="color:#D80C18;font-weight:100;">사항</span></h2>
				<div class="line" style="text-align:center;"></div>
			</div>
			<div class="content">
				<?=latest_news('top_news', 'info', 8, 23); ?>
        		<div class="div_008" style="padding-top:0px;"><a href="<?=G5_URL?>/info" class="bt_lnk  bt_basic_lnk animate" data-animate="fadeInDown" data-duration="1s" data-delay="0.1s"> Read More</a></div>
				<br><br><br>
			</div>
		</div>
	</section>
	
	
	<section class="section-05" style="margin-top:20px;background-color:#F4F3F3;margin-bottom:30px;">
    		<div class="container">
			<div class="title_wrap" style="padding-top:30px;text-align:center;margin-bottom:60px;">
				<p class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s" style="color:#999;">ACTIVITY</p>
				<h2 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s">한인회 <span style="color:#D80C18;font-weight:100;">활동</span></h2>
				<div class="line" style="text-align:center;"></div>
			</div>
			<div class="content">
				<?=latest('top_news', 'activity', 8, 23); ?>
        		<div class="div_008" style="padding-top:0px;"><a href="<?=G5_URL?>/activity" class="bt_lnk  bt_basic_lnk animate" data-animate="fadeInDown" data-duration="1s" data-delay="0.1s"> Read More</a></div>
				<br><br><br>
			</div>
		</div>
	</section>
</div>

    <?php
include_once(G5_THEME_PATH.'/tail.php');
?>