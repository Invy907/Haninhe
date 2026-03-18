<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

				<?php if (count($list) > 0) { ?>
				<div class="row ma-n12 ma-lg-n30 mt20">
					<?php 
					for ($i=0; $i<count($list); $i++) { 
						$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 268, 150, false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/'.rand(1,12).'.jpg';
						}
					?>
					<div class="pa-12 pa-lg-30 col-xs-6  col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
						<a href="<?=$list[$i]['href']?>" title="<?=$list[$i]['wr_subject']?>">
							<img src="<?=$img_content ?>" alt="<?=$list[$i]['wr_subject']?>" class="img-responsive" style="border:1px solid #EEE;width:100%;" title="<?=$list[$i]['wr_subject']?>">
						</a>
						<div style="padding-top:5px;">
							<div style="padding:10px 2px 0px 0px;">
								<span style="border:1px solid #999;padding:1px 10px 1px 10px;border-radius:5px;font-size:0.8em;font-family:'Meiryo UI';"><?=$list[$i]['ca_name']?></span>
								<div style="float:right;padding:2px 0px 1px 10px;font-size:0.8em;font-family:'Meiryo UI';"><?=get_datetime_format($list[$i]['wr_datetime'])?></div>
								<br style="clear:both;">
							</div>
							<div style="padding:10px 0px 5px 0px;">
								<div style="font-size:1.0em;color:#003F77;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-family:'Meiryo UI';">
									<a href="<?=$list[$i]['href']?>" style="color:#003F77;"><?=$list[$i]['wr_subject']?></a>
								</div>
								<div style="padding-top:3px;font-size:0.8em;color:#E74F3D;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-family:'Meiryo UI';">
									<a href="<?=$list[$i]['href']?>" style="color:#E74F3D;"><?=$list[$i]['wr_1']?></a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } else { ?>
				<div style="padding:120px 0px;text-align:center;background-color:#EDE9E6;border-radius:5px;">
					<i class="fa fa-info-circle" aria-hidden="true"></i> 新着ニュース情報がありません。
				</div>
				<?php } ?>
