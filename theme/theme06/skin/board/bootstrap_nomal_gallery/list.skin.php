<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/modify.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/responsive.css">', 0);

$is_checkbox = false;
?>
<style>
.review-wrap img {
	opacity: 0;
}
</style>
<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:<?php echo $width; ?>">
	<?php if ($is_category) { ?>
	<nav id="bo_cate">
		<h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
		<ul id="bo_cate_ul" class="cate_int_<?php echo $cnt?>">
			<?php echo $category_option ?>
		</ul>
	</nav>
	<?php } ?>

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
	<div id="bo_btn_top">
    		<div id="bo_list_total">
			<span>TOTAL: <?php echo number_format($total_count) ?></span>, <?php echo $page ?> PAGE
		</div>

		<ul class="btn_bo_user">
			<li><button type="button" class="btn_bo_sch btn_b01 btn" title="検索"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">検索</span></button></li>
		</ul>
	</div>
	<?php if ($is_checkbox) { ?>
	<div id="gall_allchk">
		<label for="chkall" class="sound_only">全体</label>
		<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
	</div>
	<?php } ?>
 
	<div class="review-wrap">
		<div class="row"> 
			<?php for ($i=0; $i<count($list); $i++) {
            		if($i>0 && ($i % $bo_gallery_cols == 0))
                			$style = 'clear:both;';
            		else
                			$style = '';
            		if ($i == 0) $k = 0;
            		$k += 1;
            		if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
         		?>
			<div class="col-md-3 col-xs-12 mb30">
				<?php if ($is_checkbox) { ?>
				<label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
				<?php } ?>
				<div class="thumbnail">
					<a href="<?php echo $list[$i]['href'] ?>">
                    <?php
                    if ($list[$i]['is_notice']) { // 공지사항  ?>
                        <strong style="width:<?php echo $board['bo_gallery_width'] ?>px;height:<?php echo $board['bo_gallery_height'] ?>px">通知</strong>
                    <?php } else {
                           $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);

	                        if($thumb['src']) {
	                            $img_content = '<img src="'.$thumb['src'].'" class="image" alt="'.$thumb['alt'].'" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
	                        } else {
	                            $img_content = '<span style="width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">no image</span>';
	                        }
	                        echo $img_content;
                    }
                     ?>
					</a>
					<div class="caption">
					<?php
                    if ($is_category && $list[$i]['ca_name']) {
                     ?>
<!--                    <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>-->
                    <?php } ?>
				<a href="<?php echo $list[$i]['href'] ?>">
                        <h3><?php echo $list[$i]['subject'] ?></h3>
				</a>
			</div>
		</div>
		</div> 

		<?php } ?>
		</div>
	</div>

	<?php if ($list_href || $is_checkbox || $write_href) { ?>
	<div class="bo_fx" style="padding-top:10px;">
		<?php if ($list_href || $write_href) { ?>
		<ul class="btn_bo_user">
			<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="記事作成" style="font-weight:normal;"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">記事作成</span></a></li><?php } ?>
		</ul>
		<?php } ?>
	</div>
	<?php } ?>
	</form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages;  ?>

<!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>検索</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">検索対象</label>
        	<input type="hidden" name="sfl" id="sfl" value="wr_subject||wr_content">
            <label for="stx" class="sound_only">キーワード<strong class="sound_only"> 必須</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" キーワードを入力してください。">
                <button type="submit" value="検索" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">検索</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="閉じる"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">閉じる</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
    jQuery(function($){
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
        });
    });
    </script>
    <!-- } 게시판 검색 끝 --> 
<script>
$(function() {
	$('.review-wrap img').each(function(i) {
	$(this).delay((i++) * 400).fadeTo(1000, 1); })
});
</script>
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
