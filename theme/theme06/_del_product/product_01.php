<?php
$pageNum = "1";
$subNum = "0";
$depth1 = "product";
$depth2 = "형강류";
$tabNum = "0";
include_once('../../../common.php');
include_once('../../../_head.php');
?>


    <section class="product">
         <?php include_once('tab.php');?>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="cate_wrap">
                <div class="row">
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat01" aria-controls="tat01" role="tab" data-toggle="tab">H형강</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat02" aria-controls="tat02" role="tab" data-toggle="tab">I형강</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat03" aria-controls="tat03" role="tab" data-toggle="tab">경량H형강</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat04" aria-controls="tat04" role="tab" data-toggle="tab">C.T형상</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat05" aria-controls="tat05" role="tab" data-toggle="tab">등변 ㄱ형강</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat06" aria-controls="tat06" role="tab" data-toggle="tab">데크플레이트</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat07" aria-controls="tat07" role="tab" data-toggle="tab">ㄷ형강<span class="hidden-xs">, 강널말뚝</span></a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat08" aria-controls="tat08" role="tab" data-toggle="tab">레일</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat09" aria-controls="tat09" role="tab" data-toggle="tab">평철</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-4 cate"><a href="#tat10" aria-controls="tat10" role="tab" data-toggle="tab">C형강</a></div>
                    <div class="col-md-15 col-sm-4 col-xs-8 cate"><a href="#tat11" aria-controls="tat11" role="tab" data-toggle="tab">부등변ㄱ형강,부등변부등후ㄱ형강</a></div>
                </div>
                </div>
                <!-- 탭 시작-->
                <div id="scroll-product" class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tat01">
                        <div class="content">
                            <div class="title">
                                <h1>H형강</h1> <span>wide flange beams</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_02.gif" class="img-responsive"></div>
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_01.gif"  class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tat02">
                    <div class="content">
                            <div class="title">
                                <h1>I형강</h1> <span>I-beanms KS D 3503, 3515/3502</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_03.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat03">
                    <div class="content">
                            <div class="title">
                                <h1>경량H형강</h1> <span>welded light h-beams KS D3558</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_04.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat04">
                    <div class="content">
                            <div class="title">
                                <h1>C.T 형강</h1> <span>stuctural tees(cut tees) KS D 3503, 3515/3502</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_05.gif" class="img-responsive"></div>
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_06.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat05">
                    <div class="content">
                            <div class="title">
                                <h1>등변ㄱ형강</h1> <span>equal angles KS D 3503, 3515/3502</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_07.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat06">
                    <div class="content">
                            <div class="title">
                                <h1>데크플레이트</h1> <span>(강재갑판) steel decks KS D 3602</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_08.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat07">
                    <div class="content">
                            <div class="title">
                                <h1>ㄷ형강, 강널말뚝</h1> <span>channels KS D 3503, 3515/3502 - sheet piles KS F 4604</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_k_09.gif" class="img-responsive"></div>
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_k_10.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat08">
                    <div class="content">
                            <div class="title">
                                <h1>레일</h1> <span>rails 경량레일 KS R 9101, 보통레일 KS R 9106</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_09.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat09">
                    <div class="content">
                            <div class="title">
                                <h1>평철</h1> <span>steel flat bars</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_10.gif" class="img-responsive"></div>
                                    <div class="col-md-6"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_11.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat10">
                    <div class="content">
                            <div class="title">
                                <h1>C형강</h1> <span>c-channels KS D 3530</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-12"><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_12.gif" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                    <div role="tabpanel" class="tab-pane fade" id="tat11">
                    <div class="content">
                            <div class="title">
                                <h1>부등변ㄱ형강,부등변부등후ㄱ형강</h1> <span>c-channels KS D 3530</span>
                                <div class="line"></div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-6"><span>· 부등변 ㄱ형강 (unequal angles KSD 3503, 3515/3502)</span><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_13.gif" class="img-responsive mt15"></div>
                                    <div class="col-md-6"><span>· 부등변부등후ㄱ형강 (inverted anles KS D 3503, 3515/3502</span><img src="<?php echo G5_THEME_URL?>/img/sub/product_01_14.gif" class="img-responsive mt15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- tab-pane end -->
                </div>
                <!-- 탭 마감 -->
            </div>
        </div>
    </section>

<script type="text/javascript">
    $("a[href^='#']").click(function(event) {
    event.preventDefault();
    var target = $(this.hash);
    $('html, body').animate({scrollTop: target.offset().top}, 500);
});
</script>
  
    <?
include_once('../../../_tail.php');
?>