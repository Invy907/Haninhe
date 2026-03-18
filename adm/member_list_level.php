<?php
	include_once("./_common.php");

	if ($member['mb_level'] < 10) {
		alert("관리자전용 페이지입니다. 로그인인후 이용해주세요.");
	}
	
	if (!$mb_id || !$mb_level) {
		alert("정상적으로 이용해 주세요.");
	}
	
	// 회원정보삭제
	// 회원자료는 정보만 없앤 후 아이디는 보관하여 다른 사람이 사용하지 못하도록 함 : 061025
	$sql = "UPDATE {$g5['member_table']} SET mb_level={$mb_level} WHERE mb_id = '{$mb_id}' ";
	//echo $sql."<br>";
	sql_query($sql);
	//goto_url('/adm/member_list.php', false);
	goto_url('./member_list.php?'.$qstr);

?>