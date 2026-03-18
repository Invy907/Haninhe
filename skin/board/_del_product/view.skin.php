<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/modify.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/responsive.css">', 0);
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<section class="company_01">
	<div class="row" style="margin-top:60px;">
		<div class="col-md-6">
			<div style="color:#6EB0D2;font-size:0.9em;"><?=$view['wr_1']?></div>
			<p class="subj h2_1" style="margin-bottom:5px;"><span><strong><?=$view['wr_subject'] ?></strong></span></p>
			<div class="div_116" style="padding-top:0px;">
				<div style="font-size:0.8em;color:#999;">
				<?php if ($view['wr_8']) { ?>
				<?=$view['wr_8']?>
				<?php } else { ?>
				軽めのテクスチャーでうるおい続く！軽めのテクスチャーでうるおい続く！
				<?php } ?>
				</div>
				<!--<div class="td_102"><span class="span_101" style="font-weight:normal;"><?=number_format($view['wr_3'])?>円</span></div>-->
				<!--<table width="250">
				<tr>
					<td align="left"><span class="span_101"><?=price_p($view['wr_2'], $view['wr_3']) ?>%</span></td>
					<td align="center" class="td_101"><?=number_format($view['wr_2'])?>円</td>
					<td align="right" class="td_102"><?=number_format($view['wr_3'])?>円</td>
				</tr>
				</table>-->
			</div>

			<div class="table_wrap mt10">
				<table class="table data-font-size" data-font-size="14px" style="font-size: 14px;">
				<thead></thead>
				<tbody>
					<tr>
						<th style="width:30%;">販売価格</th>
						<td align="left"><?=number_format($view['wr_3'])?>円</td>
					</tr>
					<?php if ($view['wr_9']) { ?>
					<tr>
						<th style="width:30%;">容量</th>
						<td align="left"><?=$view['wr_9']?></td>
					</tr>
					<?php } ?>
					<tr>
						<th>販売店</th>
						<td align="left">
							<a href="https://www.rakuten.ne.jp/gold/torriden-official" target="_blank"><i class="fa fa-shopping-bag" aria-hidden="true" style="color:#78ACC4;"></i> 楽天ショップ</a>　
							<a href="https://www.qoo10.jp/shop/marumanhnb" target="_blank"><i class="fa fa-shopping-bag" aria-hidden="true" style="color:#78ACC4;"></i> Q10ショップ</a>
							<!--<button class="button1" onclick="window.open('https://www.rakuten.ne.jp/gold/torriden-official')" style="width:45%;"></button>
							<button class="button1" onclick="window.open('https://www.rakuten.ne.jp/gold/torriden-official')" style="width:45%;"></button>-->
						</td>
					</tr>
					<tr>
						<th style="width:30%;">INGREDIENTS</th>
						<td align="left"><?=conver_conma_br($view['wr_5']) ?></td>
					</tr>
					<tr>
						<th>GOOD FOR</th>
						<td align="left"><?=conver_conma_br($view['wr_6']) ?></td>
					</tr>
					<tr>
						<th>BENEFIT</th>
						<td align="left"><?=conver_conma_br($view['wr_7']) ?></td>
					</tr>
			        </tbody>
			    </table>
			    	<style>
			    		section .table_wrap .table th, section .table_wrap .table td {
			    			padding-top:10px;
			    			padding-bottom:10px;
			    		}
			    	</style>
			</div>
			<?php if ($view['wr_4'] && false) { ?>
			<div class="div_17" style="margin-top:30px;"><button class="button1" onclick="window.open('https://www.rakuten.ne.jp/gold/torriden-official')" style="width:100%;"><i class="fa fa-shopping-bag" aria-hidden="true" style="color:#78ACC4;"></i> 楽天ショップへ</button></div>
			<?php } ?>
            </div>
		<div class="col-md-6 ceo">
			<?php
	           if ($view['file'][0]['view']) {
	          	?>
			<a href="<?=$view['file'][0]['path'] ?>/<?=$view['file'][0]['file'] ?>" title="<?=$view['wr_subject'] ?>" data-featherlight="image"><img src="<?=$view['file'][0]['path'] ?>/<?=$view['file'][0]['file'] ?>" class="img-responsive thumbnail2"></a>
			<?php
	            }
			?>
		</div>
	</div>
	<br>
	<p class="subj h2_1" style="border-bottom:1px solid #CCC;"><span><strong>詳細情報</strong></span></p>
	<div id="bo_v_con" style="text-align:center;"><?php echo get_view_thumbnail($view['content']); ?></div>
				
	<?php if($is_admin) { ?>
	<div style="text-align:center;">
		<div>
			<?php if ($update_href) { ?> <a href="<?php echo $update_href ?>" class="btn_submit btn" style="font-weight:normal;"><i class="fa fa-pencil-square" aria-hidden="true"></i> 修正</a><?php } ?>
			<?php if ($delete_href) { ?> <a href="<?php echo $delete_href ?>" class="btn_submit btn btn-danger btn-lg" onclick="del(this.href); return false;" style="font-weight:normal;"><i class="fa fa-trash-o" aria-hidden="true"></i> 削除</a><?php } ?>
		</div>
	</div>
	<?php } ?>
			
</section>
<br><br><br>
