<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

				<?php if (count($list) > 0) { ?>
				<div class="row ma-n12 ma-lg-n30">
					
					<?php 
					for ($i=0; $i<count($list); $i++) { 
						$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 251, 251, false, true);
						if($thumb['src']) {
							$img_content = $thumb['src'];
						} else {
							$img_content = G5_URL.'/_img/no-image/'.rand(1,12).'.jpg';
						}
					?>
					<div class="pa-12 pa-lg-30 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
						<a href="<?=$list[$i]['href']?>" title="<?=$list[$i]['wr_subject']?>">
							<img src="<?=$img_content ?>" alt="<?=$list[$i]['wr_subject']?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;" title="<?=$list[$i]['wr_subject']?>">
						</a>
						<div class="div_11">
							<div class="div_12">
								<div class="div_13"><span class="span_11"><?=$list[$i]['ca_name']?></span></div>
								<br style="clear:both;">
							</div>
							<div class="div_14">
								<div class="div_15">
									<a href="#" style="color:#003F77;"><?=$list[$i]['wr_subject']?></a>
								</div>
								<div class="div_16">
									<a href="#" style="color:#333;"><?=$list[$i]['wr_subject']?></a>
								</div>
							</div>
							<div class="div_17"><button class="button1" style="width:100%;"><i class="fa fa-wpforms" aria-hidden="true"></i> 詳細内容</button></div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } else { ?>
				<div style="padding:120px 0px;text-align:center;background-color:#EDE9E6;border-radius:5px;">
					<i class="fa fa-info-circle" aria-hidden="true"></i> 製品情報がありません。
				</div>
				<?php } ?>
				<br><br><br><br><br>
	<?php if ($options=="DIVE-IN") { ?>

					<div class="row ma-n12 ma-lg-n30">
						<?php
						// add_eng, add-info-list-title
						$item_list = array(
							array("DIVE-IN","/_img/sample/item01/01_다이브인 저분자 히알루론산 세럼 50ml.jpg", "ダイブイン低分子ヒアルロン酸セラム", "DIVE IN Low Molecular Hyaluronic Acid Serum","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","肌のくすぐり解消,高水分補充","内保湿の改善,皮膚刺激テスト,敏感皮膚刺激テスト","22000","16500"),
							array("DIVE-IN","/_img/sample/item01/02_다이브인 저분자 히알루론산 토너 300ml.jpg", "ダイブイン低分子ヒアルロン酸トナー", "DIVE IN Low Molecular Hyaluronic Acid Toner","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","肌を整える,水分鎮静","肌の改善,皮膚刺激テスト,敏感皮膚刺激テスト","21000","14700"),
							array("DIVE-IN","/_img/sample/item01/03_다이브인 저분자 히알루론산 스킨부스터 200ml.jpg", "ダイブイン低分子ヒアルロン酸スキンブースター", "DIVE IN Low Molecular Hyaluronic Acid Skin Booster","5D複合低分子ヒアルロン酸,パンテノール,セラミド","保湿ブースト,油水分バランス","内保湿の改善,皮膚刺激テスト","18000","13500"),
							array("DIVE-IN","/_img/sample/item01/04_다이브인 저분자 히알루론산 크림 80ml.jpg", "ダイブイン低分子ヒアルロン酸クリーム", "DIVE IN Low Molecular Hyaluronic Acid Cream","5D複合低分子ヒアルロン酸,アラントイン,オリゴペプチド-1","肌のくすぐり解消,水分強化","内保湿の改善,皮膚刺激テスト","21000","14700"),
							array("DIVE-IN","/_img/sample/item01/05_다이브인 저분자 히알루론산 수딩 크림 100ml.jpg", "ダイブイン低分子ヒアルロン酸スージングクリーム", "DIVE IN Low Molecular Hyaluronic Acid Soothing Cream","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","水分鎮静,速い吸収力","内保湿の改善,皮膚刺激テスト","24000","16800"),
							array("DIVE-IN","/_img/sample/item01/06_다이브인 저분자 히알루론산 클렌징 워터 400ml.jpg", "ダイブイン低分子ヒアルロン酸クレンジングウォーター", "DIVE IN Low Molecular Hyaluronic Acid Cleansing Water","8重複合低分子ヒアルロン酸,パンテノール,アラントイン","簡単洗浄,水分バランス","紫外線遮断剤洗浄力,毛穴洗浄力,皮膚刺激テスト","20000","14000"),
							array("DIVE-IN","/_img/sample/item01/07_다이브인 저분자 히알루론산 마스크팩 27ml 1매.jpg", "ダイブイン低分子ヒアルロン酸マスクパック", "DIVE IN Low Molecular Hyaluronic Mask","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","肌のくすぐり解消,高水分密着ケア","内保湿の改善,皮膚刺激テスト","3000","2100"),
							array("DIVE-IN","/_img/sample/item01/08_다이브인 무기자차 마일드 선크림 60ml.jpg", "ダイブインマイルドサンクリーム", "DIVE IN Mild Sun Cream SPF 50+ PA++++","10重複合低分子ヒアルロン酸,パンテノール,ジンクオキシド","湿気保護フィルム","ノンナノ粒子テスト,皮膚刺激テスト,敏感皮膚刺激テスト","23000","14900"),
							array("DIVE-IN","/_img/sample/item01/09_다이브인 저분자 히알루론산 클렌징 폼 150ml.jpg", "ダイブイン低分子ヒアルロン酸クレンジングフォーム", "DIVE IN Low Molecular Hyaluronic Acid Cleansing Foam","8重複合低分子ヒアルロン酸,パンテノール,アラントイン","低刺激洗浄,弱酸性フォーム,水分バランス","皮膚刺激テスト","15000","10500"),
							array("DIVE-IN","/_img/sample/item01/10_다이브인 저분자 히알루론산 멀티패드 80매.jpg", "ダイブイン低分子ヒアルロン酸マルチパッド", "DIVE IN Low Molecular Hyaluronic Multi Pad","5D複合低分子ヒアルロン酸,パンテノール,アラントイン","クーリング鎮静,水分補給","即時皮膚温度低下,皮膚刺激テスト,敏感皮膚刺激テスト","23000","16100")
						);
						?>
						<?php for ($i=0; $i<count($item_list); $i++) { ?>
						<div class="pa-12 pa-lg-30 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
							<a href="<?=G5_URL?><?=$item_list[$i][1]?>" title="<?=$item_list[$i][2]?>" data-featherlight="image">
								<img src="<?=G5_URL?><?=$item_list[$i][1]?>" alt="<?=$item_list[$i][2]?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;" title="<?=$item_list[$i][2]?>">
							</a>
							<div class="div_11">
								<div class="div_12">
									<div class="div_13"><span class="span_11"><?=$item_list[$i][0]?></span></div>
									<br style="clear:both;">
								</div>
								<div class="div_14">
									<div class="div_15">
										<a href="#" style="color:#003F77;"><?=$item_list[$i][3]?></a>
									</div>
									<div class="div_16">
										<a href="#" style="color:#333;"><?=$item_list[$i][2]?></a>
									</div>
								</div>
								<div class="div_17"><button class="button1" style="width:100%;"><i class="fa fa-wpforms" aria-hidden="true"></i> 詳細内容</button></div>
							</div>
						</div>
						<?php } ?>
					</div>
				
	<?php } else if ($options=="BALANCEFUL") {?>
		
					<div class="row ma-n12 ma-lg-n30">
						<?php
						// add_eng, add-info-list-title
						$item_list = array(
							array("BALANCEFUL","/_img/sample/item02/01_밸런스풀 시카 마스크 25ml 1매.jpg", "バランスフルCICAマスク25ml", "BALANCEFUL CICA MASK","","","","3000","2100"),
							array("BALANCEFUL","/_img/sample/item02/02_밸런스풀 시카 진정 크림 80ml.jpg", "バランスフルCICA鎭靜クリーム80ml", "BALANCEFUL CICA CREAM","5D複合CICA,ハイドロライズドハイアルロニックアシード,パンテノール","鎮静ケア,水分補給","敏感皮膚刺激テスト,化学的刺激によって損傷した皮膚鎮静テスト","24000","18000"),
							array("BALANCEFUL","/_img/sample/item02/03_밸런스풀 시카 진정 세럼 50ml.jpg", "バランスフルCICA鎭靜セラム50ml", "BALANCEFUL CICA SERUM","5D複合CICA,ハイドロライズドハイアルロニックアシード,パンテノール","鎮静ケア,水分補給","敏感皮膚刺激テスト,化学的刺激によって損傷した皮膚鎮静テスト","23000","17200"),
							array("BALANCEFUL","/_img/sample/item02/04_밸런스풀 시카 토너 패드 60매.jpg", "バランスフルCICAトナー パッド60枚", "BALANCEFUL CICA TONER PAD","5D CICAコンプレックス,LHA&PHA,パンテノール","皮脂ケア,鎮静ケア","敏感皮膚刺激テスト","23000","17200"),
							array("BALANCEFUL","/_img/sample/item02/05_밸런스풀 시카 로션 210ml.jpg", "バランスフルCICAローション210ml", "BALANCEFUL CICA LOTION","5D CICAコンプレックス,パンテノール","油水分バランスケア,鎮静ケア","敏感皮膚刺激テスト", "24000","18000" ),
							array("BALANCEFUL","/_img/sample/item02/06_밸런스풀 시카 클렌징 젤 200ml.jpg", "バランスフルCICAクレンジングジェル200ml", "BALANCEFUL CICA CLEANSING GEL","5D CICAコンプレックス,パンテノールLHA","皮脂ケア,鎮静ケア","即時皮脂洗浄力テスト,即時毛穴清浄度テスト,敏感皮膚刺激テスト","20000","15000")
						);
						?>
						<?php for ($i=0; $i<count($item_list); $i++) { ?>
						<div class="pa-12 pa-lg-30 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
							<a href="<?=G5_URL?><?=$item_list[$i][1]?>" title="<?=$item_list[$i][2]?>" data-featherlight="image">
								<img src="<?=G5_URL?><?=$item_list[$i][1]?>" alt="<?=$item_list[$i][2]?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;" title="<?=$item_list[$i][2]?>">
							</a>
							<div class="div_11">
								<div class="div_12">
									<div class="div_13"><span class="span_11"><?=$item_list[$i][0]?></span></div>
									<br style="clear:both;">
								</div>
								<div class="div_14">
									<div class="div_15">
										<a href="#" style="color:#003F77;"><?=$item_list[$i][3]?></a>
									</div>
									<div class="div_16">
										<a href="#" style="color:#333;"><?=$item_list[$i][2]?></a>
									</div>
								</div>
								<div class="div_17"><button class="button1" style="width:100%;"><i class="fa fa-wpforms" aria-hidden="true"></i> 詳細内容</button></div>
							</div>
						</div>
						<?php } ?>
					</div>
	<?php } else if ($options=="SOLID-IN") {?>
					<div class="row ma-n12 ma-lg-n30">
						<?php
						// add_eng, add-info-list-title
						$item_list = array(
							array("SOLID IN","/_img/sample/item03/01_솔리드인 セラミド 립 에센스 11ml.jpg", "ソリッドインセラミドリップエッセンス11ml", "SOLID IN CERAMIDE LIP ESSENCE","5D複合セラミド,オーガニックホホバオイル","保湿膜形成,唇角質ケア","唇粗さの改善,唇弾力性の改善","7000","5500"),
							array("SOLID IN","/_img/sample/item03/02_솔리드인 セラミド 올데이 에센스 100ml.jpg", "ソリッドインセラミドオールデイエッセンス100ml", "SOLID IN CERAMIDE ALL DAY ESSENCE","5D複合セラミド,パンテノール","内保湿,保湿膜ケア","三重保湿改善,皮膚刺激テスト","26000","18200"),
							array("SOLID IN","/_img/sample/item03/03_솔리드인 セラミド 크림 70ml.jpg", "ソリッドインセラミドクリーム70ml", "SOLID IN CERAMIDE CREAM","5D複合セラミド,パンテノール","高保湿ケア,皮膚膜の強化","100時間保湿持続力,皮膚水分膜の改善,皮膚刺激テスト","28000","19600")
						);
						?>
						<?php for ($i=0; $i<count($item_list); $i++) { ?>
						<div class="pa-12 pa-lg-30 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-6" style="margin-bottom:20px;">
							<a href="<?=G5_URL?><?=$item_list[$i][1]?>" title="<?=$item_list[$i][2]?>" data-featherlight="image">
								<img src="<?=G5_URL?><?=$item_list[$i][1]?>" alt="<?=$item_list[$i][2]?>" class="img-responsive thumbnail2" style="border:1px solid #EEE;width:100%;" title="<?=$item_list[$i][2]?>">
							</a>
							<div class="div_11">
								<div class="div_12">
									<div class="div_13"><span class="span_11"><?=$item_list[$i][0]?></span></div>
									<br style="clear:both;">
								</div>
								<div class="div_14">
									<div class="div_15">
										<a href="#" style="color:#003F77;"><?=$item_list[$i][3]?></a>
									</div>
									<div class="div_16">
										<a href="#" style="color:#333;"><?=$item_list[$i][2]?></a>
									</div>
								</div>
								<div class="div_17"><button class="button1" style="width:100%;"><i class="fa fa-wpforms" aria-hidden="true"></i> 詳細内容</button></div>
							</div>
						</div>
						<?php } ?>
					</div>
	<?php } ?>
