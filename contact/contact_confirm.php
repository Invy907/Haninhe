<?php
include_once('../common.php');
$bo_table = "contact";
include_once('../_head.php');
?>

	<form name="fwrite" method="post" action="./contact_proc.php" enctype="multipart/form-data" style="margin:0px;">
	<input type="hidden" name="wr_name" value="<?=$wr_name ?>">
	<input type="hidden" name="wr_tel" value="<?=$wr_tel ?>">
	<input type="hidden" name="wr_mail" value="<?=$wr_mail ?>">
	<input type="hidden" name="wr_content" value="<?=$wr_content ?>">

	<section class="company_01">
		<div class="div_1">
			<p class="p_1">됴쿄에서 배우고 일하기</p>
			<h3 class="h3_1"><span class="bd_bt">Study and Work </span><span style="color:#E81526;">in TOKYO</span></h3>
			<p class="p_2">
				도쿄에서 생생한 일본어를 배우고, 전문기술과 기능을 몸에 익혀서 취업에 성공하자!
			</p>
		</div>
		<div class="table_wrap mt40">
			<table class="table data-font-size" data-font-size="16px">
                <thead></thead>
                <tbody>
			<tr>
				<th style="width:20%;">이름</th>
				<td><?=$wr_name ?></td>
			</tr>
			<tr>
				<th>연락처</th>
				<td><?=$wr_tel ?> </td>
			</tr>
			<tr>
				<th>메일주소</th>
				<td><?=$wr_mail ?></td>
			</tr>
			<tr>
				<th>내용</th>
				<td><?=conv_content($wr_content, "2")?></td>
			</tr>
                </tbody>
			</table>
			<br>
			<p class="t-middle" style="text-align:center;">
				<button type="button" class="button1" style="width:180px;" onclick="javascript:history.go(-1);"><i class="fa fa-reply" aria-hidden="true"></i> 돌아가기</button>
				<button type="button" class="button2" style="width:180px;" onclick="javascript:fwrite_check(document.fwrite);"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> 보내기</button>
			</p>
        	</div>
	</section>
	</form>
	<script language="javascript">
		function fwrite_check(f) {
			if (confirm('문의내용을 담당자에게 보내시겠습니까?') == true) {
				f.submit();
			}
		}
	</script>

<?php
include_once('../_tail.php');
?>