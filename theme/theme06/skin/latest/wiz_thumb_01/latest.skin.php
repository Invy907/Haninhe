<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 230;
$thumb_height = 191;
?>
<div class="Slick_wrap">
                                <!-- Carousel Slick_wrap -->
                                <div class="SlickCarousel">
                                    <!-- Item -->
                                    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
                                    <div class="ProductBlock">
                                        <div class="Content">                                     
                                            <div class="img-fill"> <a href="<?php echo $list[$i]['href'] ?>" class="lt_img"><?php echo $img_content; ?></a>
                                                <div class="text_wrap"><?php echo $list[$i]['subject'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <!-- Carousel Slick_wrap -->
                            <script>
                                $(document).ready(function () {
                                    $(".SlickCarousel").slick({
                                        rtl: false, // If RTL Make it true & .slick-slide{float:right;}
                                        autoplay: true
                                        , autoplaySpeed: 5000, //  Slide Delay
                                        speed: 800, // Transition Speed
                                        slidesToShow: 3, // Number Of Carousel
                                        slidesToScroll: 1, // Slide To Move 
                                        pauseOnHover: false
                                        , appendArrows: $(".s-Arrows"), // Class For Arrows Buttons
                                        prevArrow: '<span class="Slick-Prev"></span>'
                                        , nextArrow: '<span class="Slick-Next"></span>'
                                        , easing: "linear"
                                        , responsive: [
                                            {
                                                breakpoint: 801
                                                , settings: {
                                                    slidesToShow: 2
                                                , }
                                            }
                                            , {
                                                breakpoint: 641
                                                , settings: {
                                                    slidesToShow: 2
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
                                })
                            </script>
<div class="pic_lt" hidden>
    <h2 class="lat_title"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <li>
            <a href="<?php echo $list[$i]['href'] ?>" class="lt_img"><?php echo $img_content; ?></a>
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";

            if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

 
            echo "<a href=\"".$list[$i]['href']."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];



            echo "</a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">+ ".$list[$i]['wr_comment']."</span>";

            ?>

            <span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

</div>
