<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

			<section class="slider">
				<div class="flexslider10 carousel">
					<ul class="slides">
						<?php
							for ($i=0; $i<count($list); $i++) { 
							$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 160, 70, false, true);
							if($thumb['src']) {
								$img_content = $thumb['src'];
							} else {
								$img_content = G5_URL.'/_img/no-image/'.rand(1,12).'.jpg';
							}
						?>
						<li>
							<div class="title-wrap" style="text-align:center;padding:5px 10px;background-color:#FFF;margin-bottom:10px;border:1px solid #EEE;">
								<a href="<?=$list[$i]['wr_1']?>" target="_blank">
									<img src="<?=$img_content ?>" target="_blank" style="max-width:160px;width:100%;">
								</a>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
			</section>
			<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider10').flexslider({
			    animation: "slide",
			    animationLoop: true,
		        slideshowSpeed: 5000,
		        animationSpeed: 2000,
			    itemWidth: 160,
			    itemMargin: 15,
			    minItems: 2,
			    maxItems: 6,
			    start: function(slider){
			      $('body').removeClass('loading');
			    }
			  });
			});
			</script>
			<style>
			.flexslider10 .flex-control-nav {
				margin-bottom:-34px;
			}
			.flex-direction-nav .flex-prev {
				display:none;
			}
			.flex-direction-nav .flex-next {
				display:none;
			}
			</style>
