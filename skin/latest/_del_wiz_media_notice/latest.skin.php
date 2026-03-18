<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$n_thumb_width = 170;  //썸네일 가로 크기
$n_thumb_height = 110; //썸네일 세로 크기
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="latest-paper">
    <div class="container">
            <? for ($i=0; $i<count($list); $i++) { ?>
               <?php
                    $n_thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $n_thumb_width, $n_thumb_height);
                        // 스넵이미지 생성하고 뷰어 시킨다.
                    $n_noimg = "$latest_skin_url/img/noimg.gif";
                        // 이미지가 없을경우의 이미지 위치
            if($n_thumb['src']) {
                    $img_content = '<img src="'.$n_thumb['src'].'" alt="'.$list[$i]['subject'].'" class="media-object"/>';
            } else {
                    $img_content = '<img src="'.$n_noimg.'" width="'.$n_thumb_width.'" height="'.$n_thumb_height.'" class="media-object" alt="이미지없음" />';
            }
                    //echo $img_content;
            ?>
        <div class="media">
            <div class="media-left hidden-xs hidden-sm">
                <div class="notice">
                    <div class="data"><?php echo $list[$i]["datetime"];?></div>
                    <div class="cate"><?php if($list[$i]["ca_name"]){ ?><?php echo $list[$i]["ca_name"];?><?php }else{ ?>공지<?php } ?></div> 
                </div>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><a href="<?php echo $list[$i]['href'];?>"><?php echo $list[$i]['subject']?></a></h4> <?php echo cut_str(strip_tags($list[$i]['wr_content']), 120)?></div>
            <div class="media-right">
                <a href="<?php echo $list[$i]['href'];?>"><?php echo $img_content?></a>
            </div>
        </div>
        <?php } ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <li>게시물이 없습니다.</li>
        <?php }  ?>
        <div class="btn_wrap">
       <a href="<?php echo get_pretty_url($bo_table); ?>" class="bt_lnk black bt_basic_lnk">READ MORE</a>
            
    </div>
    </div>
    
</div>
<script>
    $(window).on('scroll', function () {
    // console.log($(window).height());
    scroll_pos = $(window).scrollTop() + $(window).height();
    element_pos = $('.section-03').offset().top + $('.section-05').height();
    if (scroll_pos > element_pos) {
        $('.media').each(function(i) {
	$(this).delay((i++) * 300).fadeTo(1500, 1); })
    };

});
              
</script>