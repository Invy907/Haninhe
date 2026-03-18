<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가;

function get_datetime_format($src) {
	return substr($src, 0, 10);
}
function price_p($org, $disc) {
	return ceil(($org-$disc) / $org * 100);
}
function conver_conma_br($src) {
	return str_replace(",", "<br>", $src);
}

function null2blank($src) {
	if ($src=="0000-00-00 00:00:00") {
		return "";
	} else {
		return $src;
	}
}
function get_sex_text($src) {
	if ($src=="F") {
		return "여성";
	} else if ($src=="M") {
		return "남성";
	}
	return "";
}
function get_birth_format($src) {
	if (strlen($src)==8) {
		return substr($src, 0, 4)."-".substr($src, 4, 2)."-".substr($src, 6, 2);
	} else {
		return $src;
	}
}
function get_show_span_class($src) {
	if ($src=="비표시") {
		return "span_003";
	} else {
		return "span_002";
	}
}