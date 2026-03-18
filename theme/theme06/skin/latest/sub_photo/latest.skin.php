<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 584;
$thumb_height = 381;
?>


<div class="row mt20">
	<?php 
	for ($i=0; $i<count($list); $i++) { 
	$n_thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height);
	if($n_thumb['src']) {
		// IMAGE
	} else {
		// NOIMAGE
	}
	?>
	<div class="col-md-4" style="text-align:center;">
		<a href="<?=$n_thumb['ori']?>" title="space gray" data-featherlight="image"><img src="<?=$n_thumb['src']?>" class="img-responsive"></a>
		<div class="div_top_photo1"><?=$list[$i]['subject']?></div>
	</div>
	<?php } ?>
</div>
