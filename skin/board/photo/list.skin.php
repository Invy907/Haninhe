<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/modify.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/responsive.css">', 0);
?>


<div id="link1" class="index-content">
	
	<section class="section-05" style="margin-top:0px;">
		
		<div class="content" style="margin:0px 0px 20px 0px;">
			<div class="container">
	<div id="bo_btn_top">
    		<div id="bo_list_total">
			<span>TOTAL: <?php echo number_format($total_count) ?></span>, <?php echo $page ?> PAGE
		</div>

		<ul class="btn_bo_user">
			<li><button type="button" class="btn_bo_sch btn_b01 btn" title="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button></li>
		</ul>
	</div>
    	
				<?php if (count($list) > 0) { ?>
				<div class="row ma-n12 ma-lg-n30 mt20">
					<?php 
					for ($i=0; $i<count($list); $i++) { 
						$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/no-image_'.$board['bo_gallery_width'].'_'.$board['bo_gallery_height'].'.png';
						}
					?>
					<div class="col-xs-6 col-md-3">
						<a href="<?=$list[$i]['href']?>" title="<?=$list[$i]['wr_subject']?>">
							<img src="<?=$img_content ?>" alt="<?=$list[$i]['wr_subject']?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;max-width:307px;" title="<?=$list[$i]['wr_subject']?>">
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
								<!--<div class="div_006">
									<div style="color:#1D6DAC;"><?=$list[$i]['wr_1']?></div>
								</div>-->
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
	<?php } else { ?>
	<div style="padding:120px 0px;text-align:center;background-color:#EDE9E6;border-radius:5px;">
		<i class="fa fa-info-circle" aria-hidden="true"></i> 등록된 정보가 없습니다.
		<div style="padding-top:10px;">
			<button class="button3" onclick="location.href='<?=G5_URL?>/<?=$bo_table?>'">리스트화면표시</button>
		</div>
	</div>
	<?php } ?>
			</div>
		</div>
	</section>
</div>


	<!-- 페이지 -->
	<div style="text-align:center;padding-bottom:25px;"><?php echo $write_pages;  ?></div>
	
	<?php if ($list_href || $is_checkbox || $write_href) { ?>
	<div style="padding-top:10px;text-align:center;padding-top:20px;">
		<?php if ($list_href || $write_href) { ?>
			<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_submit btn" title="Add NEWS" style="font-weight:normal;"><i class="fa fa-pencil-square" aria-hidden="true"></i> 기사추가</a><?php } ?>
		<?php } ?>
	</div>
	<?php } ?>


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
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해 주세요.">
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
