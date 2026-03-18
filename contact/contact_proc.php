<?php
include_once('../common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

$wr_name = $_POST["wr_name"];
$wr_tel = $_POST["wr_tel"];
$wr_mail = $_POST["wr_mail"];
$wr_content = $_POST["wr_content"];

if (isset($wr_mail)) {

	$m_from_mail = "no-reply@tsk.or.kr";
	$m_title = "【tsk.or.kr】홈페이지에서 문의하기 내용이 도착하였습니다.";
	$message = "※본 메일은 「tsk.or.kr」의 발신전용 메일주소에서 자동적으로 발송된 메일입니다.
（본 메일에 답변을 하셔도 답변을 드릴수 없으니 양해 부탁드립니다.）

【tsk.or.kr】 홈페이지에서 문의하기 내용이 도착하였습니다.

・이름 ： ".$wr_name."
・연락처 ： ".$wr_tel."
・메일주소 ： ".$wr_mail."
・내용 ： 
".$wr_content."

------------------------------------------------------------------------------------------------------
  tsk.or.kr Support Team
  All rights reserved, ©Copyright https://tsk.or.kr
------------------------------------------------------------------------------------------------------
";

	//mailer("TOSENKAKU", $m_from_mail, "", $m_title, $message);
	mailer("TOSENKAKU", $m_from_mail, "itaeyong@gmail.com", $m_title, $message);
	
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: ./index.php?send_ok=1");

}
?>