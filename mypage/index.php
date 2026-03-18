<?php
include_once('../common.php');
$bo_table = "mypage";
include_once('../_head.php');

if ($member['mb_level'] != "2") {
	alert("권한이 없습니다.");
}
?>
<section class="company_01"> 
	<div class="table_wrap mt30">
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px" style="font-size: 16px;">
			<caption>등록정보 </caption>
			<thead></thead>
			<tbody>
				<tr>
					<th>로그인 ID</th>
					<td><?=$member['mb_id'] ?></td>
				</tr>
				<tr>
				    <th>이름</th>
				<td><?=$member['mb_name'] ?></td>
				</tr>
				<tr>
				    <th>닉네임</th>
				<td><?=$member['mb_nick'] ?></td>
				</tr>
				<tr>
					<th>메일주소</th>
					<td><?=$member['mb_email'] ?></td>
				</tr>
				<tr>
					<th>생년월일</th>
					<td><?=get_birth_format($member['mb_birth']) ?></td>
				</tr>
				<tr>
					<th>성별</th>
					<td><?=get_sex_text($member['mb_sex']) ?></td>
				</tr>
				<tr>
					<th>회원등록일</th>
					<td><?=$member['mb_datetime'] ?></td>
				</tr>
				<tr>
					<th>마지막 로그인날짜</th>
					<td><?=null2blank($member['mb_today_login']) ?></td>
				</tr>
			</tbody>
		</table>
	</div>
		
	<div style="padding-top:0px;text-align:right;">
		<button type="button" class="btn btn-info" onclick="location.href='<?=G5_URL?>/myinfo_update'" >내 정보수정</button>
	</div>
		
	<br><br>
	<div style="padding-bottom:10px;">
		<div style="float:left;"><h2>최근 등록 기사 5건</h2></div>
		<br style="clear:both;">
	</div>
</section>
<?php
include_once('../_tail.php');
?>