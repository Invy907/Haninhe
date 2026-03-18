<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

//출판물페이지 https://tsk.or.jp/documents/publication.php?p=1
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/modify.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/responsive.css">', 0);
?>
<!-- ここにボックス追加 -->
<div class="board-wrapper board-<?php echo $bo_table; ?>">						
<div id="link1" class="index-content">
	  
    <!-- 게시판 카테고리 시작 { -->
    <!--
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    	-->
    <!-- } 게시판 카테고리 끝 -->
    
	<section class="section-05" style="margin-top:0px;">
		
				
				<!--
    				<div style="margin-bottom:30px;">
					<button class="tablink" style="background-color:#FFF;width:20%;" id="defaultOpen">すべて</button>
					<button class="tablink" style="border-bottom:1px #cfcfcf solid;width:20%;">NEWS</button>
					<button class="tablink" style="border-bottom:1px #cfcfcf solid;width:20%;">EVENT</button>
					<button class="tablink" style="border-bottom:1px #cfcfcf solid;width:20%;">INFO</button>
					<button class="tablink" style="border-bottom:1px #cfcfcf solid;width:20%;border-right:1px #cfcfcf solid;">ETC</button>
				</div>
				<br><br>
				-->
	<div id="bo_btn_top">
    		<div id="bo_list_total">
			<span>TOTAL: <?php echo number_format($total_count) ?></span>, <?php echo $page ?> PAGE
		</div>

		<ul class="btn_bo_user">
			<li>
				<button type="button" class="btn_bo_sch btn_b01 btn" title="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
			</li>
		</ul>
	</div>

    	<div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col" class="all_chk chk_box">
            	<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                <label for="chkall">
                	<span></span>
                	<b class="sound_only">현재 페이지 게시물  전체선택</b>
				</label>
            </th>
            <?php } ?>
            <th scope="col">번호</th>
            <th scope="col">제목</th>
            <th scope="col" class="div_only_pc1">작성자</th>
            <th scope="col" class="div_only_pc1"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회 </a></th>
            <th scope="col" class="div_only_pc1"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜  </a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        	if ($i%2==0) $lt_class = "even";
        	else $lt_class = "";
		?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk chk_box">
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
            	<label for="chk_wr_id_<?php echo $i ?>">
            		<span></span>
            		<b class="sound_only"><?php echo $list[$i]['wr_subject'] ?></b>
            	</label>
            </td>
            <?php } ?>
            <td class="td_num2" style="text-align:center;width:75px;">
            <?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong class="notice_icon">공지</strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>

            <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px">
                <?php
                if ($is_category && $list[$i]['ca_name']) {
				?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                	
                <div class="div_only_mobile1" style="padding-top:0px;font-size:1.0em;color:#2F3776;float:right;">
                	<i class="fa fa-check" aria-hidden="true"></i> <?php echo $list[$i]['wr_hit'] ?>　<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo str_replace("-", "-", substr($list[$i]['wr_datetime'], 0,10)) ?>
                </div>
                <?php } ?>
                <div class="bo_tit">
                    <a href="<?php echo $list[$i]['href'] ?>">
                        <?php echo $list[$i]['icon_reply'] ?>
                        <?php
                            if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                         ?>
                        <?php echo $list[$i]['subject'] ?>
                    </a>
                </div>
                <div class="div_only_mobile1" style="padding-top:5px;font-size:1.0em;color:#2F3776;">
                	<i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php echo $list[$i]['name'] ?>
                </div>
            </td>
            <td class="td_name sv_use div_only_pc1" style="text-align:center;"><?php echo $list[$i]['name'] ?></td>
            <td class="td_num div_only_pc1"><?php echo $list[$i]['wr_hit'] ?></td>
            <td class="td_datetime div_only_pc1"><?php echo str_replace("-", "-", substr($list[$i]['wr_datetime'], 0,10)) ?></td>

        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="6" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>
    		
	</section>
</div>


	<!-- 페이지 -->
	<div style="text-align:center;padding-top:25px;"><?php echo $write_pages;  ?></div>
	
	<?php if ($list_href || $is_checkbox || $write_href) { ?>
	<div style="padding-top:10px;text-align:center;padding-top:20px;">
		<?php if ($list_href || $write_href) { ?>
			<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_submit btn" title="추가" style="font-weight:normal;"><i class="fa fa-pencil-square" aria-hidden="true"></i> 추가</a><?php } ?>
		<?php } ?>
	</div>
</div>
<!-- ここまでこの一個上のdiv -->

	<?php } ?>


<!-- 게시판 検索 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>검색</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="or">
            <label for="sfl" class="sound_only">검색대상</label>
        	<input type="hidden" name="sfl" id="sfl" value="wr_subject||wr_content">
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> required</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해 주세요.">
                <button type="submit" value="Search" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
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
