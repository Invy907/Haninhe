<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

				<?php 
				if (count($list) > 0) { 
					
						$thumb = get_list_thumbnail($board['bo_table'], $list[0]['wr_id'], 268, 150, false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/'.rand(1,12).'.jpg';
						}
				?>
				<div class="row">
					<div class="col-md-4">
						<a href="<?=$list[$i]["datetime"]?>" title="<?=$list[0]["wr_subject"]?>">
							<img src="<?=$img_content ?>" alt="<?=$list[0]["wr_subject"]?>" class="img-responsive" style="border:1px solid #EEE;width:100%;" title="<?=$list[0]["wr_subject"]?>">
						</a>
						<div class="div_001">
							<div class="div_002">
								<span class="span_001"><?=$list[0]["ca_name"]?></span>
								<div class="div_003"><?=$list[0]["datetime"]?></div>
								<br style="clear:both;">
							</div>
							<div class="div_004">
								<div class="div_005">
									<a href="<?=$list[0]["href"]?>"><?=$list[0]["wr_subject"]?></a>
								</div>
								<div class="div_006">
									<div style="color:#1D6DAC;"><?=$list[0]["wr_1"]?></div>
								</div>
							</div>
						</div>
						<br>
					</div>

					<div class="col-md-8">
						<table class="table_1">
						<?php for ($i=1;$i<count($list); $i++) { ?>
						<tr class="tr_1">
							<td class="td_date"><?=$list[$i]["datetime"]?></td>
							<td class-"td_kbn"><div class="div_007"><?=$list[$i]["ca_name"]?></div></td>
							<td><a href="<?=$list[0]["href"]?>"><?=$list[$i]["wr_subject"]?></a></td>
						</tr>
						<?php } ?>
						</table>
					</div>
				</div>
				<?php } else { ?>
				<div class="div_prepare" style="margin-top:0px; margin-bottom:40px;">
					<i class="fa fa-info-circle" aria-hidden="true"></i> 등록된 정보가 없습니다.
				</div>
				<?php } ?>
