<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

	<div id="divpop2" class="layer_popup">
		<div style="background-color:white;box-shadow: 5px 5px 5px rgba(0,0,0,0.4);border-top:1px solid #D2D2D2;border-left:1px solid #D2D2D2;padding:15px 15px 10px 15px;">
			<?php 
				$thumb = get_list_thumbnail($board['bo_table'], $list[0]['wr_id'], 480, 0, false, true);
				if($thumb['src']) {
					$img_content = $thumb['src'];
				} else {
					$img_content = G5_URL.'/_img/no-image/no-image_'.$board['bo_gallery_width'].'_'.$board['bo_gallery_height'].'.png';
				}
			?>
			<div>
				<a href="<?=$list[0]['href']?>" title="<?=$list[0]['wr_subject']?>">
					<img src="<?=$img_content ?>" alt="<?=$list[0]['subject']?>" class="img-responsive" style="border:1px solid #EEE;width:100%;" title="<?=$list[0]['subject']?>">
				</a>
			</div>
			<div style="paddding-top:40px;">
				<div class="div_002">
					<span class="span_001"><?=$list[0]['ca_name']?></span>
					<div class="div_003"><?=$list[0]['datetime']?></div>
					<br style="clear:both;">
				</div>
				<div style="font-weight:bold;padding-top:7px;padding-bottom:5px;color:white;font-size:1.2em;">
					<a href="<?=$list[0]['href']?>" style="color:#000;"><?=$list[0]['wr_subject']?></a>
				</div>
			</div>
		</div>
		<div style="background-color:#2F3776;color:#FFF;text-align:center;padding:10px 0px;box-shadow: 5px 5px 5px rgba(0,0,0,0.4);"><input type="checkbox" name="chkbox" value="divpop2" onclick="closeWin('divpop2',this);">  今日はこのポップアップを表示しない <a href="javascript:closeWin2();" style="color:#FFF;">[閉じる]</a></div>
	</div>
	<script language="JavaScript">
		cookiedata = document.cookie;  
		if (cookiedata.indexOf("divpop2=done") < 0) {    
			document.getElementById('divpop2').style.display = "block";
		} else {
			document.getElementById('divpop2').style.display = "none";
		}
		function setCookie(name, value, expirehours) {
			var todayDate = new Date();
			todayDate.setHours( todayDate.getHours() + expirehours );
			document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
		}
		function closeWin(divpop,checkbox) {
			if (checkbox.checked ) {
				setCookie( divpop, "done" , 1 );
			}
			document.getElementById(divpop).style.display = "none";
		}
		function closeWin2(divpop,checkbox) {
			document.getElementById('divpop2').style.display = "none";
		}
	</script>