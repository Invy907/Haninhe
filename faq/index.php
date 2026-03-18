<?php
include_once('../common.php');
$bo_table = "faq";
include_once('../_head.php');
?>

<link rel="stylesheet" href="<?=G5_URL?>/theme/theme06/skin/board/bootstrap_faq/style.css?ver=171222">
<link rel="stylesheet" href="<?=G5_URL?>/theme/theme06/skin/board/bootstrap_faq/modify.css?ver=171222">
<link rel="stylesheet" href="<?=G5_URL?>/theme/theme06/skin/board/bootstrap_faq/responsive.css?ver=171222">

<script type="text/javascript">
$(document).ready(function(){
	
//Set default open/close settings
$('.acc_container').hide(); //Hide/close all containers
<!-- 첫번째 글인식 $('.acc_trigger:first').addClass('active').next().show();--> //Add "active" class to first trigger, then show/open the immediate next container


//On Click
$('.acc_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
	}
	return false; //Prevent the browser jump to the link anchor
});

});
</script>
<section class="company_01">
	
	<div style="text-align:center;">
		<p style="font-size:1.0em;color:#B29C42;letter-spacing: 10px;">よくある質問</p>
		<h3 style="font-size:2.5em;color:#333333;font-weight:bold;margin-top:0px;"><span class="bd_bt">Frequently Asked  </span> Questions</h3>
		<p style="padding-top:40px;">
			トリデンに関する製品や本サイトについてよくある質問です。<br>
			お問い合わせ内容の回答が見つからない場合はお問い合わせまたはお電話でご連絡お願いします。
		</p>
	</div>
		
		<br>
		<div id="bo_list">

			<?php
			$faq_list1 = array(
		"토리든의 제품은 어디에서 구매가 가능하나요?|
				현재 Q10에 입점해 있으며 Q10사이트 토리든 공식 판매 채널에서 구입하실 수 있습니다.",
		"전화로도 제품 구입이 가능한다고|
				현재 Q10을 통해 제품을 구입하실 수 있으신데요
				전화로도 주문이 가능합니다. 다만 무통장 입금 결제로만 주문이 가능하며,
				토리든 고객센터로 연락주시면 친절하게 도와 드리겠습니다.",
		"제 피부 타입에 어떤 제품이 맞을까요?|
				같은 건성/지성/트러블 피부 타입을 가졌더라도 개개인의 피부 컨디션에 따라 다를 수 있습니다.
				문의하기 또는 고객센터로 연락주시면 친절한 상담 도와드리겠습니다.");
			?>
			<p class="subj h2_1"><span><strong>제품구입에 관해서</strong></span></p>
			<div class="togle-wrap">
				<?php
				for ($i=0;$i<count($faq_list1);$i++) {
					$tmp_list = explode('|', $faq_list1[$i]);
					$f_info = $tmp_list[0];
					$a_info = $tmp_list[1];
				?>
				<dl>
					<dt class="acc_trigger" >
						<p class="icon"><i class="fa fa-caret-down" aria-hidden="true"></i></p>
		                  	<span class="num hidden-xs"><?=($i+1)?></span><span class="badge hidden-xs"></span><?=$f_info?>
		        		</dt>
					<dd class="acc_container" style="display: none;padding-left:70px;font-size:0.9em;line-height:1.7em;" id="content_2">
						<div class="block"><?=$a_info?><br><br></div>
					</dd>
				</dl>
				<?php
				}
				?>
			</div>
					
		</div>

		<br>
		<div id="bo_list">

			<?php
			$faq_list1 = array(
		"남 여 구분 없이 모든 제품이 사용가능 한가요?|
				토리든의 모든 제품은 남녀 구분 없이 편하게 사용하실 수 있습니다.<br>
				토리든은 최상의 원료와 최적의 배합을 통해 현대 시대의 미세먼지, 황사 등 대기오염으로부터 다양한 피부<br>
				고민에 도움을 드리는 좋은 제품을 제시하는 것을 최우선으로 생각하는 브랜드입니다.",
		"제조일은 어디에 표기 되어 있나요?|
				튜브 제품 : 튜브 실링부위 앞, 뒤로 제조번호와 사용기한이 표기되어 있습니다.<br>
				용기 제품 : 제품 용기 바닥에 제조번호와 사용기한이 표기되어 있습니다.",
		"제품 보관 및 사용후 관리가 궁금합니다.|
				( 제품 보관 )
				- 제품을 보관하실 때는 상온에 보관해주세요.<br>
				- 제품이 뜨거운 열, 추위 또는 급격한 온도 변화를 겪지 않도록 하고, 직사광선이 닿지 않게 해주세요.<br>
				- 낮은 온도에 보관시 내용물이 얼 수 있으니 일반 냉장고 보단 화장품 냉장고에 보관하시는 것을 추천해 드립니다.<br>
				- 제품은 통풍이 잘되고 건조한 장소에 보관해 주세요.<br>
				- 욕실은 오도나 습도가 자주 급격하게 변하는 장소이기 때문에 보관하기에는 부적합한 곳입니다.<br>
				<br>
				( 사용시, 사용 후 관리 ) <br>
				- 제품 사용 중의 관리는 깨끗한 손으로 제품을 사용하시고, 사용하신 후에는 제품 공기가 통하여 산화되지 않게 뚜껑을 잘 닫아주십시오.<br>
				- 보관중인 제품 뿐 아니라 매일 사용 중인 제품들이라도 사용하지 않을 때에는 반드시 뚜껑을 닫아 주셔야 합니다.<br>
				",
		"제품 유효기간은 얼마동안 인가요?|
				토리든 제품 사용 기한<br>
				- 개봉 전 : 제조일로부터 2년<br>
				- 개봉 후 : 개봉 후 1년<br>
				<br>
				보관방법은 공기, 자외선, 열 등으로 인해 산화될 수 있기 때문에 서늘하고 그늘진 곳에 보관하여<br>
				내용물이 변질되지 않도록 주의하며 가능하면 빠른 시일 안에 신선하게 사용하시는 것을 권장합니다.",
		"스킨/세럼/로션/크림 중 한가지만 발라도 되나요?|
				피부 컨디션에 따라 건조하지 않으면<br>
				스킨/세럼/로션/크림 중 한 가지만 발라도 좋습니다.<br>
				<br>
				건조함을 느끼신다면 한 제품만 사용하시는 것보다 단계별로 사용해 주시면<br>
				제품별로 그 특성에 맞는 피부 개선 유효 성분이 함유되어<br>
				피부 고민에 도움을 줄 수 있습니다.");
			?>
			<p class="subj h2_1"><span><strong>제품에 관해서</strong></span></p>
			<div class="togle-wrap">
				<?php
				for ($i=0;$i<count($faq_list1);$i++) {
					$tmp_list = explode('|', $faq_list1[$i]);
					$f_info = $tmp_list[0];
					$a_info = $tmp_list[1];
				?>
				<dl>
					<dt class="acc_trigger" >
						<p class="icon"><i class="fa fa-caret-down" aria-hidden="true"></i></p>
		                  	<span class="num hidden-xs"><?=($i+1)?></span><span class="badge hidden-xs"></span><?=$f_info?>
		        		</dt>
					<dd class="acc_container" style="display: none;padding-left:70px;font-size:0.9em;line-height:1.7em;" id="content_2">
						<div class="block"><?=$a_info?><br><br></div>
					</dd>
				</dl>
				<?php
				}
				?>
			</div>
		</div>
		
		<br>
		<div id="bo_list">

			<?php
			$faq_list1 = array(
		"토리든 고객센터의 상담시간은 어떻게 되나요?|
				토리든 고객센터 1600-3584이며 아래와 같이 고객센터 운영하고 있으니<br>
				이용에 참고 바랍니다.<br>
				<br>
				- 운영 시간 : 평일 오전 10시 - 오후 5시<br>
				(점심시간 11시50분-13시20분)<br>
				- 토요일/일요일/공휴일 : 휴무",
		"이벤트, 사은품 증정행사는 어떻게 진행되나요?|
				제품 구매시 진행되는 이벤트, 사은품, 기획전, 세트상품 등<br>
				브랜드 행사는 수시로 변경됩니다.<br>
				<br>
				사은품 증정 행사시 사은품이 조기 품절될 경우, <br>
				다른 상품으로 대체되어 발송될 수 있으며,<br>
				사은품 대체 발송으로 인한 반품은 단순 변심으로 진행되어<br>
				배송료는 고객님 부담인 점 참고 부탁드립니다.");
			?>
			<p class="subj h2_1"><span><strong>기타 문의</strong></span></p>
			<div class="togle-wrap">
				<?php
				for ($i=0;$i<count($faq_list1);$i++) {
					$tmp_list = explode('|', $faq_list1[$i]);
					$f_info = $tmp_list[0];
					$a_info = $tmp_list[1];
				?>
				<dl>
					<dt class="acc_trigger" >
						<p class="icon"><i class="fa fa-caret-down" aria-hidden="true"></i></p>
		                  	<span class="num hidden-xs"><?=($i+1)?></span><span class="badge hidden-xs"></span><?=$f_info?>
		        		</dt>
					<dd class="acc_container" style="display: none;padding-left:70px;font-size:0.9em;line-height:1.7em;" id="content_2">
						<div class="block"><?=$a_info?><br><br></div>
					</dd>
				</dl>
				<?php
				}
				?>
			</div>
		</div>
		
</section>
			
<?php
include_once('../_tail.php');
?>