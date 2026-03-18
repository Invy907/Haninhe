<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

				<?php if (count($list) > 0) { ?>
				<div class="row ma-n12 ma-lg-n30">
					
					<?php 
					for ($i=0; $i<count($list); $i++) { 
						$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 251, 251, false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/'.rand(1,12).'.jpg';
						}
					?>
					<div class="pa-12 pa-lg-30 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
						<a href="<?=$list[$i]['href']?>" title="<?=$list[$i]['wr_subject']?>">
							<img src="<?=$img_content ?>" alt="<?=$list[$i]['wr_subject']?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;" title="<?=$list[$i]['wr_subject']?>">
						</a>
						<div class="div_11">
							<div class="div_12">
								<div class="div_13"><span class="span_11"><?=$list[$i]['ca_name']?></span></div>
								<br style="clear:both;">
							</div>
							<div class="div_14">
								<div class="div_15">
									<a href="<?=$list[$i]['href']?>" style="color:#003F77;"><?=$list[$i]['wr_1']?></a>
								</div>
								<div class="div_16">
									<a href="<?=$list[$i]['href']?>" style="color:#333;"><?=$list[$i]['wr_subject']?></a>
								</div>
							</div>
							<br>
							<!--
							<div class="div_116">
								<table width="100%">
								<tr>
									<td align="left"><span class="span_101"><?=ceil(($list[$i]['wr_2']-$list[$i]['wr_3']) / $list[$i]['wr_2'] * 100)?>%</span></td>
									<td align="center" class="td_101"><?=number_format($list[$i]['wr_2'])?>円</td>
									<td align="right" class="td_102"><?=number_format($list[$i]['wr_3'])?>円</td>
								</tr>
								</table>
							</div>
							<div class="div_17"><button class="button1" onclick="location.href='<?=$list[$i]['href']?>'" style="width:100%;"><i class="fa fa-wpforms" aria-hidden="true"></i> 詳細内容</button></div>
							-->
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } else { ?>
				<div style="padding:120px 0px;text-align:center;background-color:#EDE9E6;border-radius:5px;">
					<i class="fa fa-info-circle" aria-hidden="true"></i> 製品情報がありません。
				</div>
				<?php } ?>
