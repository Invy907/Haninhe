<?php
include_once("./_common.php");

	if ($member['mb_level'] < 10) {
		alert("관리자전용 페이지입니다. 로그인인후 이용해주세요.");
	}
	
	if (!$mb_id) {
		alert("정상적으로 이용해 주세요.");
	}
	
	// 회원정보삭제
	// 회원자료는 정보만 없앤 후 아이디는 보관하여 다른 사람이 사용하지 못하도록 함 : 061025
	$sql = "DELETE FROM {$g5['member_table']} WHERE mb_id = '{$mb_id}' ";
	//echo $sql."<br>";
	sql_query($sql);

	// 포인트 테이블에서 삭제
	$sql = "DELETE FROM {$g5['point_table']} WHERE mb_id = '$mb_id' ";
	//echo $sql."<br>";
	sql_query($sql);

	// 아이콘 삭제
	//echo G5_DATA_PATH.'/member/'.substr($mb_id,0,2).'/'.$mb_id.'.gif<br>';
	//@unlink(G5_DATA_PATH.'/member/'.substr($mb_id,0,2).'/'.$mb_id.'.gif');

	// 프로필 이미지 삭제
	//echo G5_DATA_PATH.'/member_image/'.substr($mb_id,0,2).'/'.$mb_id.'.gif<br>';
	//@unlink(G5_DATA_PATH.'/member_image/'.substr($mb_id,0,2).'/'.$mb_id.'.gif');

goto_url('/adm/member_list.php', false);

?>