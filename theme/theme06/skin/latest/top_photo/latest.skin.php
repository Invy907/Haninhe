<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 584;
$thumb_height = 381;
?>

<div class="container">
	<div class="box_wrap">
		<link rel="stylesheet" href="<?=G5_URL?>/theme/theme06/skin/board/bootstrap_nomal_gallery/style.css?ver=171222">
		<link rel="stylesheet" href="<?=G5_URL?>/theme/theme06/skin/board/bootstrap_nomal_gallery/modify.css?ver=171222">
		<link rel="stylesheet" href="<?=G5_URL?>/theme/theme06/skin/board/bootstrap_nomal_gallery/responsive.css?ver=171222">
            <div id="bo_gall" style="width:100%">
			<div class="review-wrap">
				<div class="row">
					<?php
					for ($i=0; $i<count($list); $i++) { 
					$n_thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height);
					if($n_thumb['src']) {
						// IMAGE
					} else {
						// NOIMAGE
					}
					?>
					<div class="col-md-3 col-xs-12 mb30">
						<div class="thumbnail">
							<a href="<?=$n_thumb['ori']?>" title="<?=$list[$i]['subject']?>" data-featherlight="image">
                    					<img src="<?=$n_thumb['src']?>" class="image" alt="" width="674" height="424" title="" style="opacity: 1;">
            					</a>
                           			<div class="caption"><h3><?=$list[$i]['subject']?></h3></div>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>