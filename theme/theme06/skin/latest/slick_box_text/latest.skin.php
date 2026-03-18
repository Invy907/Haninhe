<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<div class="Slick_wrap animate" data-animate="fadeIn" data-duration="2s" data-delay="0.1s">
                        
    <!-- Carousel Slick_wrap -->
    <div class="notice_slick">
        <!-- Item -->
        <?php for ($i=0; $i<count($list); $i++) { ?>
        <div class="content_block"> 
                <div class="box">
                   <span><?php echo $list[$i]["datetime"];?></span>
                    <dl> 
                        <dt><a href="<?php echo $list[$i]['href'];?>"><?php echo $list[$i]['subject']; ?></a></dt>
                        <dd><a href="<?php echo $list[$i]['href'];?>"><?php echo cut_str(strip_tags($list[$i]['wr_content']), 140)?></a></dd>
                    </dl>
                </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- Carousel Slick_wrap -->
<script>
    $(document).ready(function () {
        $(".notice_slick").slick({
            rtl: false, // If RTL Make it true & .slick-slide{float:right;}
            autoplay: true
            , autoplaySpeed: 3000, //  Slide Delay
            speed: 300, // Transition Speed
            slidesToShow: 2, // Number Of Carousel
            slidesToScroll: 1, // Slide To Move 
            pauseOnHover: false
            , appendArrows: $(".s-Arrows2"), // Class For Arrows Buttons
            prevArrow: '<span class="Slick-Prev2"><i class="fas fa-long-arrow-alt-left"></i></span>'
            , nextArrow: '<span class="Slick-Next2"><i class="fas fa-long-arrow-alt-right"></i></span>'
            , easing: "linear"
            , responsive: [
                {
                    breakpoint: 1180
                    , settings: {
                        slidesToShow: 1
                    , }
                            }
                            , {
                    breakpoint: 641
                    , settings: {
                        slidesToShow: 1
                    , }
                            }
                            , {
                    breakpoint: 481
                    , settings: {
                        slidesToShow: 1
                    , }
                            }
                                , ]
        , })

        $(".Slick-Prev2").addClass("active");
        $(".Slick-Next2").click(function(){
             $(".Slick-Prev2").removeClass("active");
         })
        $(".Slick-Prev2").click(function(){
             $(".Slick-Next2").removeClass("active");
         })
        $(".Slick-Prev2").click(function(){
            $(this).addClass("active");
        })
        $(".Slick-Next2").click(function(){
            $(this).addClass("active");
         })
     
        
    })
</script>