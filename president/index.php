<?php
include_once('../common.php');
$bo_table = "president";
include_once('../_head.php');
?>

<section class="company_01"> 
	<div class="div_1">
		<p class="p_1">재일본도쿄한국인연합회에 오신것을 환영합니다.</p>
		<h3 class="h3_1"><span class="bd_bt"><span style="color:#E81526;">The Tokyo</span> Federation of Korean Associations</span></h3>
	</div>
    <h3 class="section_title_01" style="margin-bottom:10px;">한인회는 재일 한국인의 권익옹호를 위해 노력하고 있습니다.</h3>
	
	<?php
	$p_list = array(
		array("img"=>"009.jpg", "kbn"=>"제12대회장", "name"=>"김연식"),
		array("img"=>"008.jpg", "kbn"=>"제11대회장", "name"=>"육종문"),
		array("img"=>"010.jpg", "kbn"=>"제11대회장", "name"=>"김운천"),
		array("img"=>"007.jpg", "kbn"=>"제10대 회장", "name"=>"김재욱"),
		array("img"=>"006.jpg", "kbn"=>"제8-9대 회장", "name"=>"구철"),
		array("img"=>"005.jpg", "kbn"=>"제7대 회장", "name"=>"이옥순"),
		array("img"=>"004.jpg", "kbn"=>"제6대 회장", "name"=>"백영선"),
		array("img"=>"003.jpg", "kbn"=>"제5대 회장", "name"=>"박재세"),
		array("img"=>"002.jpg", "kbn"=>"제3-4대 회장", "name"=>"조옥제"),
		array("img"=>"001.jpg", "kbn"=>"제1-2대 회장", "name"=>"김희석")
	);
	?>
	
	<div class="div_009">
		<div class="row">
			<?php
			for ($i=0; $i<count($p_list); $i++) {
			?>
			<div class="col-xs-6 col-md-3 mt50">
				<?php if ($p_list[$i]['img']) { ?>
				<div style="text-align:center;">
					<a href="./<?=$p_list[$i]['img'] ?>" title="space gray" data-featherlight="image"><img src="./<?=$p_list[$i]['img'] ?>" class="img-responsive thumbnail2"></a>
					<div style="margin-top:20px;color:#2F3776;font-size:0.9em;"><?=$p_list[$i]['kbn'] ?></div>
					<div style="font-size:1.2em;font-weight:bold;"><?=$p_list[$i]['name'] ?></div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php
include_once('../_tail.php');
?>