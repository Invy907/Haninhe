<?php
include_once('../common.php');
$bo_table = "contact";
include_once('../_head.php');
?>

<section class="company_01">
	<div class="div_1">
		<p class="p_1">재일본도쿄한국인연합회에 오신것을 환영합니다.</p>
		<h3 class="h3_1"><span class="bd_bt"><span style="color:#E81526;">The Tokyo</span> Federation of Korean Associations</span></h3>
	</div>
	<h3 class="section_title_01">한인회는 재일 한국인의 권익옹호를 위해 노력하고 있습니다.</h3>

	<div class="table_wrap">
		<?php
		$c_list = array(
					array("주일대한민국대사관","(03) 3452-7611","https://overseas.mofa.go.kr/jp-ko/index.do"),
					array("주일대한민국대사관영사관","(03) 3455-2601","https://overseas.mofa.go.kr/jp-ko/index.do"),
					array("주일대한민국대사관한국문화원","(03) 3357-5970","https://www.koreanculture.jp/korean/"),
					array("주오사카대한민국총영사관","(06) 4256-2345","https://overseas.mofa.go.kr/jp-osaka-ja/index.do"),
					array("주후쿠오카대한민국총영사관","(092) 771-0461","https://overseas.mofa.go.kr/jp-fukuoka-ja/index.do"),
					array("주요코하마대한민국총영사관","(045) 621-4531","https://overseas.mofa.go.kr/jp-yokohama-ja/index.do"),
					array("주나고야대한민국총영사관","(052) 586-9221","https://overseas.mofa.go.kr/jp-nagoya-ja/index.do")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>대사관 및 영사관 기관명</caption>
		<thead></thead>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
		
	<div class="table_wrap mt40">
		<?php
		$c_list = array(
array("주일한국기업연합회","(03) 6826-5170","https://www.koba.or.jp/"),
array("재일한국인귀금속협회","(03) 3834-2443"," "),
array("한인야마나시귀금속협회", "(055) 227-3038"," "),
array("World-OKTA Tokyo","(03) 6679-0787","https://www.okta.jp/"),
array("재일한국중소기업협회","(03) 5836-3535"," "),
array("재일한국농식품연합회","(03) 6240-8477","http://agrofood.jp/ko/"),
array("재일한국음식업협회","(03) 5348-3150"," "),
array("재일한국YMCA","(03) 3233-0611","http://www.ayc0208.org/kr/index.php"),
array("재일한국유학생연합회","(03) 3233-0611","http://ksjp.or.kr/")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>재일한국인단체 기관명</caption>
		<thead></thead>
		<tbody>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
		
	<div class="table_wrap mt40">
		<?php
		$c_list = array(
array("재일본관서한국인연합회","(06) 6210-5353","http://kansaikorean.org/"),
array("재일본큐슈한국인연합회","(092) 412-0660","http://haninhe.com/kyusyu/"),
array("재일본중부한국인연합회","(052) 325-4357","http://haninhe.com/chubu/"),
array("재일본카나가와현한국인연합회","(045) 334-7637","http://haninhe.com/kanagawa/")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>지방 한인회</caption>
		<thead></thead>
		<tbody>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</tbody>
		</tbody>
		</table>
	</div>
		
	<div class="table_wrap mt40">
		<?php
		$c_list = array(
array("재일본대한민국민단중앙본부","(03) 3454-4901","http://www.mindan.org"),
array("재일본대한민국민단동경지방본부","(03) 3454-4711","http://www.mindan-tokyo.org/bbs/top.php")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>재일대한민국 민단 기관명</caption>
		<thead></thead>
		<tbody>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
		
	<div class="table_wrap mt40">
		<?php
		$c_list = array(
array("동경한국학교","(03) 3357-6031","http://www.tokos.ed.jp/"),
array("나고야한국학교","(052) 452-0321"," "),
array("금강학원","(06) 4703-1780","http://www.kongogakuen.ed.jp/"),
array("백두학원 건국학교","(06) 6691-1231","http://www.keonguk.ac.jp"),
array("쿄토국제학원","(075) 525-3535","https://kyoto-kokusai.ed.jp/kr/")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>한국학교 기관명</caption>
		<thead></thead>
		<tbody>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
		
	<div class="table_wrap mt40">
		<?php
		$c_list = array(
array("한국수출보험공사 동경지사","(03) 3216-0601","http://www.keic.or.kr/"),
array("광주광역시 동경사무소","(03) 6807-2912"," "),
array("경상북도 동경사무소","(03) 3287-7707"," "),
array("전라북도 동경사무소","(03) 5366-0300","http://www.jeonbuk-tokyo.org/"),
array("경상남도 동경사무소","(03) 3353-3217"," ")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>공공기관 기관명</caption>
		<thead></thead>
		<tbody>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
		
	<div class="table_wrap mt40">
		<?php
		$c_list = array(
array("재일세계한인상공인연합회","(03) 3564-7112"," "),
array("재일한국상공회의소","(03) 3456-1190","http://www.kccj.org"),
array("동경한국상공회의소","(03) 3209-1961","http://www.tokansho.org/"),
array("동경한국청년상공회","(03) 5292-5891","http://www.tokyoseisho.com/")
			);
		?>
		<table class="table table-hover data-font-size table-bordered" data-font-size="16px">
		<caption>상공회의소 기관명</caption>
		<thead></thead>
		<tbody>
		<?php for ($i=0; $i<count($c_list); $i++) { ?>
		<tr>
			<th>
				<strong class="p_contact1"><?=$c_list[$i][0]?></strong>
				<div class="div_only_mobile">
					<div><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></div>
					<div><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></div>
				</div>
			</th>
			<td class="div_only_pc1" style="width:20%;"><a href="tel:<?=$c_list[$i][1]?>"><?=$c_list[$i][1]?></a></td>
			<td class="div_only_pc1"><a href="<?=$c_list[$i][2]?>" target="_blank"><?=$c_list[$i][2]?></a></td>
		</tr>
		<?php } ?>
		</table>
	</div>
</section>

<?php
include_once('../_tail.php');
?>