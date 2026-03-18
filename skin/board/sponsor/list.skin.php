<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/modify.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/responsive.css">', 0);
?>

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">


<div id="link1" class="index-content">
	<section class="section-05" style="margin-top:0px;">
		<div class="content" style="margin:0px 0px 20px 0px;">
			<div class="container">
				<div id="bo_btn_top">
			    		<div id="bo_list_total">
						<span>TOTAL: <?php echo number_format($total_count) ?></span>, <?php echo $page ?> PAGE
					</div>

					<ul class="btn_bo_user">
						<li><button type="button" class="btn_bo_sch btn_b01 btn" title="検索"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button></li>
					</ul>
				</div>
    	
				<?php if (count($list) > 0) { ?>
				<div class="row ma-n12 ma-lg-n30 mt20">
					<?php 
					for ($i=0; $i<count($list); $i++) { 
						$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 160, 70, false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/'.rand(1,12).'.jpg';
						}
					?>
					<div class="pa-12 pa-lg-30 col-xs-6  col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
						<div style="border:1px solid #EEE;width:100%;text-align:center;padding:20px 0px;display: flex;justify-content: center;">
							<a href="<?=$list[$i]['href']?>" title="<?=$list[$i]['wr_subject']?>">
								<img src="<?=$img_content ?>" alt="<?=$list[$i]['wr_subject']?>" class="img-responsive" style="max-width:160px;" title="<?=$list[$i]['wr_subject']?>">
							</a>
						</div>
						<div style="padding-top:5px;">
							<div style="padding:10px 0px 5px 0px;">
								<div style="padding-bottom:5px;"><span class="<?=get_show_span_class($list[$i]['ca_name']) ?>"><?=$list[$i]['ca_name']?></span></div>
								<div style="font-size:1.0em;color:#003F77;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-family:'Meiryo UI';">
									<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>"> <a href="<?=$list[$i]['href']?>" style="color:#003F77;"><?=$list[$i]['wr_subject']?></a>
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
				<div class="div_prepare">
					<i class="fa fa-info-circle" aria-hidden="true"></i> 등록된 정보가 없습니다.
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>


	<!-- 페이지 -->
	<?php if($write_pages) { ?>
	<div style="text-align:center;padding-top:25px;"><?php echo $write_pages;  ?></div>
	<?php } ?>
	
	<?php if ($list_href || $is_checkbox || $write_href) { ?>
	<div style="text-align:center;padding-top:20px;">
		<?php if ($list_href || $write_href) { ?>
			<button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn_submit btn" style="padding-top:0px;"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button>
			<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_submit btn" title="Add NEWS" style="font-weight:normal;"><i class="fa fa-pencil-square" aria-hidden="true"></i> 스폰서추가</a><?php } ?>
		<?php } ?>
	</div>
	<?php } ?>
    </form>


<!-- 게시판 検索 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>검색</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">Search Target</label>
        	<input type="hidden" name="sfl" id="sfl" value="wr_subject||wr_content">
            <label for="stx" class="sound_only">keyword<strong class="sound_only"> required</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 키워드를 입력해 주세요.">
                <button type="submit" value="Search" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="Close"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
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
