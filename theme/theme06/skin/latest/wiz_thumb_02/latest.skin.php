<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 584;
$thumb_height = 381;
?>

<div class="slider-index">
	<div class="arrows_wrap2"><span class="s-Arrows2 animate" data-animate="fadeInDown" data-duration="1.4s" data-delay="0.3s"></span></div>
	<section class="slider-gallery">
		<?php
		$part_list = array("Personal Trainer", "Personal Trainer", "Personal Trainer", "Personal Trainer", "Personal Trainer", "Personal Trainer");
		$name1_list = array("YUDAI HATA", "YU NOGUCHI", "RYOHEI HOSHI", "TAKUYA MARUYAMA", "YOHEI SUZUKI", "NAOKI HINATA");
		$name2_list = array("野口　優", "野口　優", "星　亮平", "丸山　卓也", "鈴木　陽平", "日向　直樹");
		for ($i=0; $i<6; $i++) {
		?>
		<div class="slide">
			<div class="thumb">
				<a href="<?=G5_URL?>/trainer"><img src="<?=G5_URL?>/_img/trainer/trainer0<?=($i+1)?>.jpg" alt="" class="img-responsive"></a>
				<div class="bottom-subj">
					<div style="color:#E96306;font-family:'Ubuntu';font-weight:500;"><?=$part_list[$i]?></div>
					<div style="color:#FFF;font-family:'Ubuntu';font-weight:500;"><?=$name1_list[$i]?></div>
					<div style="color:#FFF;font-size:0.9em;"><?=$name2_list[$i]?></div>
				</div>
			</div>
		</div>
		<?php } ?>
	</section>
</div>
<script>
        $(document).ready(function(){
    $('.slider-gallery').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: false,
        dots: true,
        cssEase: 'linear',
        pauseOnHover: false,

        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                 dots: true
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
</script>


