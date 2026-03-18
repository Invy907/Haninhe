<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/modify.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/responsive.css">', 0);

$item_list = array(
	array("DIVE-IN","/_img/sample/item01/01_다이브인 저분자 히알루론산 세럼 50ml.jpg", "ダイブイン低分子ヒアルロン酸セラム", "DIVE IN Low Molecular Hyaluronic Acid Serum","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","肌のくすぐり解消,高水分補充","内保湿の改善,皮膚刺激テスト,敏感皮膚刺激テスト","3800","3300","https://www.qoo10.jp/g/933241218"),
	array("DIVE-IN","/_img/sample/item01/02_다이브인 저분자 히알루론산 토너 300ml.jpg", "ダイブイン低分子ヒアルロン酸トナー", "DIVE IN Low Molecular Hyaluronic Acid Toner","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","肌を整える,水分鎮静","肌の改善,皮膚刺激テスト,敏感皮膚刺激テスト","2800","2310","https://www.qoo10.jp/g/874242374"),
	array("DIVE-IN","/_img/sample/item01/03_다이브인 저분자 히알루론산 스킨부스터 200ml.jpg", "ダイブイン低分子ヒアルロン酸スキンブースター", "DIVE IN Low Molecular Hyaluronic Acid Skin Booster","5D複合低分子ヒアルロン酸,パンテノール,セラミド","保湿ブースト,油水分バランス","内保湿の改善,皮膚刺激テスト","2600","1980","https://www.qoo10.jp/g/860637690"),
	array("DIVE-IN","/_img/sample/item01/04_다이브인 저분자 히알루론산 크림 80ml.jpg", "ダイブイン低分子ヒアルロン酸クリーム", "DIVE IN Low Molecular Hyaluronic Acid Cream","5D複合低分子ヒアルロン酸,アラントイン,オリゴペプチド-1","肌のくすぐり解消,水分強化","内保湿の改善,皮膚刺激テスト","2900","2310","https://www.qoo10.jp/g/858161050"),
	array("DIVE-IN","/_img/sample/item01/05_다이브인 저분자 히알루론산 수딩 크림 100ml.jpg", "ダイブイン低分子ヒアルロン酸スージングクリーム", "DIVE IN Low Molecular Hyaluronic Acid Soothing Cream","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","水分鎮静,速い吸収力","内保湿の改善,皮膚刺激テスト","2900","2640","https://www.qoo10.jp/g/895167745"),
	array("DIVE-IN","/_img/sample/item01/06_다이브인 저분자 히알루론산 클렌징 워터 400ml.jpg", "ダイブイン低分子ヒアルロン酸クレンジングウォーター", "DIVE IN Low Molecular Hyaluronic Acid Cleansing Water","8重複合低分子ヒアルロン酸,パンテノール,アラントイン","簡単洗浄,水分バランス","紫外線遮断剤洗浄力,毛穴洗浄力,皮膚刺激テスト","2980","2420","https://www.qoo10.jp/g/1031162050"),
	array("DIVE-IN","/_img/sample/item01/07_다이브인 저분자 히알루론산 마스크팩 27ml 1매.jpg", "ダイブイン低分子ヒアルロン酸マスクパック", "DIVE IN Low Molecular Hyaluronic Mask","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","肌のくすぐり解消,高水分密着ケア","内保湿の改善,皮膚刺激テスト","300","275","https://www.qoo10.jp/g/874280114"),
	array("DIVE-IN","/_img/sample/item01/08_다이브인 무기자차 마일드 선크림 60ml.jpg", "ダイブインマイルドサンクリーム", "DIVE IN Mild Sun Cream SPF 50+ PA++++","10重複合低分子ヒアルロン酸,パンテノール,ジンクオキシド","湿気保護フィルム","ノンナノ粒子テスト,皮膚刺激テスト,敏感皮膚刺激テスト","2980","2530","https://www.qoo10.jp/g/988247306"),
	array("DIVE-IN","/_img/sample/item01/09_다이브인 저분자 히알루론산 클렌징 폼 150ml.jpg", "ダイブイン低分子ヒアルロン酸クレンジングフォーム", "DIVE IN Low Molecular Hyaluronic Acid Cleansing Foam","8重複合低分子ヒアルロン酸,パンテノール,アラントイン","低刺激洗浄,弱酸性フォーム,水分バランス","皮膚刺激テスト","1980","1650","https://www.qoo10.jp/g/874244982"),
	array("DIVE-IN","/_img/sample/item01/10_다이브인 저분자 히알루론산 멀티패드 80매.jpg", "ダイブイン低分子ヒアルロン酸マルチパッド", "DIVE IN Low Molecular Hyaluronic Multi Pad","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","クーリング鎮静,水分補給","即時皮膚温度低下,皮膚刺激テスト,敏感皮膚刺激テスト","2950","2530","https://www.qoo10.jp/g/874278995"),
	
	array("BALANCEFUL","/_img/sample/item02/01_밸런스풀 시카 마스크 25ml 1매.jpg", "バランスフルCICAマスク25ml", "BALANCEFUL CICA MASK","","","","3000","2100"),
	array("BALANCEFUL","/_img/sample/item02/02_밸런스풀 시카 진정 크림 80ml.jpg", "バランスフルCICA鎭靜クリーム80ml", "BALANCEFUL CICA CREAM","5D複合CICA,ハイドロライズドハイアルロニックアシード,パンテノール","鎮静ケア,水分補給","敏感皮膚刺激テスト,化学的刺激によって損傷した皮膚鎮静テスト","2400","1800",""),
	array("BALANCEFUL","/_img/sample/item02/03_밸런스풀 시카 진정 세럼 50ml.jpg", "バランスフルCICA鎭靜セラム50ml", "BALANCEFUL CICA SERUM","5D複合CICA,ハイドロライズドハイアルロニックアシード,パンテノール","鎮静ケア,水分補給","敏感皮膚刺激テスト,化学的刺激によって損傷した皮膚鎮静テスト","2300","1720",""),
	array("BALANCEFUL","/_img/sample/item02/04_밸런스풀 시카 토너 패드 60매.jpg", "バランスフルCICAトナー パッド60枚", "BALANCEFUL CICA TONER PAD","5D CICAコンプレックス,LHA&PHA,パンテノール","皮脂ケア,鎮静ケア","敏感皮膚刺激テスト","2300","1720",""),
	array("BALANCEFUL","/_img/sample/item02/05_밸런스풀 시카 로션 210ml.jpg", "バランスフルCICAローション210ml", "BALANCEFUL CICA LOTION","5D CICAコンプレックス,パンテノール","油水分バランスケア,鎮静ケア","敏感皮膚刺激テスト", "2400","1800",""),
	array("BALANCEFUL","/_img/sample/item02/06_밸런스풀 시카 클렌징 젤 200ml.jpg", "バランスフルCICAクレンジングジェル200ml", "BALANCEFUL CICA CLEANSING GEL","5D CICAコンプレックス,パンテノールLHA","皮脂ケア,鎮静ケア","即時皮脂洗浄力テスト,即時毛穴清浄度テスト,敏感皮膚刺激テスト","2000","1500",""),
		
	array("SOLID IN","/_img/sample/item03/01_솔리드인 セラミド 립 에센스 11ml.jpg", "ソリッドインセラミドリップエッセンス11ml", "SOLID IN CERAMIDE LIP ESSENCE","5D複合セラミド,オーガニックホホバオイル","保湿膜形成,唇角質ケア","唇粗さの改善,唇弾力性の改善","1000","770","https://www.qoo10.jp/g/924607056"),
	array("SOLID IN","/_img/sample/item03/02_솔리드인 セラミド 올데이 에센스 100ml.jpg", "ソリッドインセラミドオールデイエッセンス100ml", "SOLID IN CERAMIDE ALL DAY ESSENCE","5D複合セラミド,パンテノール","内保湿,保湿膜ケア","三重保湿改善,皮膚刺激テスト","2600","1820",""),
	array("SOLID IN","/_img/sample/item03/03_솔리드인 セラミド 크림 70ml.jpg", "ソリッドインセラミドクリーム70ml", "SOLID IN CERAMIDE CREAM","5D複合セラミド,パンテノール","高保湿ケア,皮膚膜の強化","100時間保湿持続力,皮膚水分膜の改善,皮膚刺激テスト","3750","3080","https://www.qoo10.jp/su/1370241794")

);
for ($i=0; $i<count($item_list); $i++) {
	$tmp_wr_id = $i+1;
	$tmp_wr_5 = $item_list[$i][4];
	$tmp_wr_6 = $item_list[$i][5];
	$tmp_wr_7 = $item_list[$i][6];
	//$sql = "UPDATE g5_write_product SET wr_1='{$item_list[$i][3]}', wr_2='{$item_list[$i][7]}', wr_3='{$item_list[$i][8]}', wr_4='{$item_list[$i][9]}', wr_5='{$tmp_wr_5}', wr_6='{$tmp_wr_6}', wr_7='{$tmp_wr_7}'  WHERE wr_id = '{$tmp_wr_id}'; ";
	//echo $sql."<br>";
	//sql_query($sql);
}

?>


<div id="link1" class="index-content">
	<section class="section-05" style="margin-top:0px;">
		
		<div class="content" style="margin:0px 0px 20px 0px;">
			<div class="container">
				
    				<div style="margin-bottom:30px;">
    					<?php if ($sca=="DIVE-IN") {?>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=DIVE-IN'" style="background-color:#FFF;width:33%;">DIVE-IN</button>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=BALANCEFUL'" style="border-bottom:1px #cfcfcf solid;width:34%;">BALANCEFUL</button>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=SOLID-IN'" style="border-bottom:1px #cfcfcf solid;width:33%;border-right:1px #cfcfcf solid;">SOLID-IN</button>
					<?php } else if ($sca=="BALANCEFUL") { ?>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=DIVE-IN'" style="border-bottom:1px #cfcfcf solid;width:33%;">DIVE-IN</button>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=BALANCEFUL'" style="background-color:#FFF;width:34%;">BALANCEFUL</button>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=SOLID-IN'" style="border-bottom:1px #cfcfcf solid;width:33%;border-right:1px #cfcfcf solid;">SOLID-IN</button>
					<?php } else if ($sca=="SOLID-IN") { ?>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=DIVE-IN'" style="border-bottom:1px #cfcfcf solid;width:33%;">DIVE-IN</button>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=BALANCEFUL'" style="border-bottom:1px #cfcfcf solid;width:34%;">BALANCEFUL</button>
					<button class="tablink" onclick="location.href='<?=G5_URL?>/product?sca=SOLID-IN'" style="background-color:#FFF;width:33%;border-right:1px #cfcfcf solid;">SOLID-IN</button>
					<?php } ?>
				</div>
				<br><br>
	<div id="bo_btn_top">
    		<div id="bo_list_total">
			<span>TOTAL: <?php echo number_format($total_count) ?></span>, <?php echo $page ?> PAGE
		</div>

		<ul class="btn_bo_user">
			<li><button type="button" class="btn_bo_sch btn_b01 btn" title="検索"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">検索</span></button></li>
		</ul>
	</div>
    	

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
								<div class="div_15" style="text-align:center;">
									<a href="<?=$list[$i]['href']?>" style="color:#003F77;"><?=$list[$i]['wr_1']?></a>
								</div>
								<div class="div_16" style="text-align:center;font-weight:bold;">
									<a href="<?=$list[$i]['href']?>" style="color:#333;"><?=$list[$i]['wr_subject']?></a>
								</div>
								<div style="color:#999;height:54px;padding-top:10px;overflow:hidden;font-family:'Meiryo UI';text-align:center;">
									<?php if ($list[$i]['wr_8']) { ?>
									<?=$list[$i]['wr_8'] ?>
									<?php } else { ?>
									軽めのテクスチャーでうるおい続く！軽めのテクスチャーでうるおい続く！
									<?php } ?>
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
			</div>
		</div>
	</section>
</div>


	<!-- 페이지 -->
	<div style="text-align:center;padding-top:25px;"><?php echo $write_pages;  ?></div>
	
	<?php if ($list_href || $is_checkbox || $write_href) { ?>
	<div style="padding-top:10px;text-align:center;padding-top:20px;">
		<?php if ($list_href || $write_href) { ?>
			<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_submit btn" title="Add NEWS" style="font-weight:normal;"><i class="fa fa-pencil-square" aria-hidden="true"></i> 商品追加</a><?php } ?>
		<?php } ?>
	</div>
	<?php } ?>


<!-- 게시판 検索 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>検索</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">Search Target</label>
        	<input type="hidden" name="sfl" id="sfl" value="wr_subject||wr_content">
            <label for="stx" class="sound_only">keyword<strong class="sound_only"> required</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" キーワードを入力してください。">
                <button type="submit" value="Search" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">検索</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="Close"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">閉じる</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
    jQuery(function($){
        // 게시판 検索
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
        });
    });
    </script>
    <!-- } 게시판 検索 끝 --> 

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
