<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

				<div class="row mt30">
					<?php 
					for ($i=0;$i<8; $i++) { 
						$thumb = get_list_thumbnail($list[$i]['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/no-image_'.$board['bo_gallery_width'].'_'.$board['bo_gallery_height'].'.png';
						}
					?>
					<div class="col-xs-6 col-md-3">
						<a href="<?=$list[$i]['href']?>" title="<?=$list[$i]['wr_subject']?>">
							<img src="<?=$img_content ?>" alt="<?=$list[$i]['subject']?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;max-width:307px;" title="<?=$list[$i]['subject']?>">
						</a>
						<div class="div_001">
							<div class="div_002">
								<span class="span_001"><?=$list[$i]['ca_name']?></span>
								<div class="div_003"><?=$list[$i]['datetime']?></div>
								<br style="clear:both;">
							</div>
							<div class="div_004">
								<div class="div_005">
									<a href="<?=$list[$i]['href']?>" style="color:#000;"><?=$list[$i]['wr_subject']?></a>
								</div>
								<div class="div_006">
									<div style="color:#1D6DAC;"><?=$list[$i]['wr_1']?></div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
