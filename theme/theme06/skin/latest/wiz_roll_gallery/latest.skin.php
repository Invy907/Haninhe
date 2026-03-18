<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$n_thumb_width = 390;  //썸네일 가로 크기
$n_thumb_height = 260; //썸네일 세로 크기
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<div class="owl-carousel owl-theme">
    <? for ($i=0; $i<count($list); $i++) { ?>
                   <?php
                        $n_thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $n_thumb_width, $n_thumb_height);
                            // 스넵이미지 생성하고 뷰어 시킨다.
                        $n_noimg = "$latest_skin_url/img/noimg.gif";
                            // 이미지가 없을경우의 이미지 위치
                if($n_thumb['src']) {
                        $img_content = '<img src="'.$n_thumb['src'].'" alt="'.$list[$i]['subject'].'   " />';
                } else {
                        $img_content = '<img src="'.$n_noimg.'" width="'.$n_thumb_width.'" height="'.$n_thumb_height.'" alt="이미지없음" />';
                }
                        //echo $img_content;
                ?>
                        <div class="box_table" style="z-index:10000">
                            <div class="img">
                                <div class="scale">
                                    <a href="<?php echo $list[$i]['href'];?>"><?php echo $img_content?></a>
                                </div>
                            </div>
                            <div class="content_wrap">
                                <h3><a href="<?php echo $list[$i]['href'];?>"> 
                                        <?php echo cut_str(strip_tags($list[$i]['wr_subject']), 28)?>
                                    </a>
                                </h3>
                                <p><?php echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></p>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
                        <li>게시물이 없습니다.</li>
                        <?php }  ?>
                    </div>
                     <div class="space"></div>
                    <script>
                    $(document).ready(function () {
                        $('.owl-carousel').owlCarousel({ 
                            loop: true, //     items:4,
                            margin: 20, 
                            autoplay: true, 
                            autoplayTimeout: 2000, 
                            autoplayHoverPause: true, 
                            responsive: {
                                0: {
                                    items: 1, 
                                    nav: true
                                }, 
                                600: {
                                    items: 2, 
                                    nav: false
                                }, 
                                1000: {
                                    items: 3, 
                                    nav: true, 
                                    loop: true
                                }
                            }
                        })
                    });
                </script>
