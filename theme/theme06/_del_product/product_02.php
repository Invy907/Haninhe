<?php
$pageNum = "1";
$subNum = "1";
$depth1 = "product";
$depth2 = "봉강류";
$tabNum = "1";
include_once('../../../common.php');
include_once('../../../_head.php');
?>
<section class="product">
    <?php include_once('tab.php');?>
        <div class="etc_wrap">
            <div class="content">
                <div class="box">
                    <div class="titles_wrap">
                        <div class="hidden-xs hidden-sm"><h3>- 철근 콘크리트용 봉강 -</h3><p>KS D 3504</p></div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="hidden-md hidden-lg"><h3>- 철근 콘크리트용 봉강 -</h3><p>KS D 3504</p></div>
                               <div class="k-img"><img src="<?php echo G5_THEME_URL?>/img/sub/product_02_01.gif" class="img-responsive"></div>
                            </div>
                           <div class="col-md-6">
                               <div class="k-img"><img src="<?php echo G5_THEME_URL?>/img/sub/product_02_02.gif" class="img-responsive"></div>
                            </div>
                        </div>
                    </div>
    
                    <div class="titles_wrap btp">
                        <div class="row">
                           <div class="col-md-6">
                              <h3>- 철근 -</h3><p>Reinforcing Bars (이형봉강포장(이론중량)조건표(KS D 3504기준)</p>
                               <img src="<?php echo G5_THEME_URL?>/img/sub/product_02_03.gif" class="img-responsive">
                            </div>
                           <div class="col-md-6">
                               <dl class="dl-horizontal">
                                   <dt>· 환산중량</dt>
                                   <dd>단위중량 : KS D 3504기준<br>1본중량 : 단위붕량* 1본 길이 (소수2자리 맺음)<br>표장중량 : 본중량* 포장본수(kg/서 맺음)</dd>
                               </dl> 
                               <img src="<?php echo G5_THEME_URL?>/img/sub/product_02_04.gif" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="titles_wrap btp">
                        <div class="row">
                           <div class="col-md-6">
                               <img src="<?php echo G5_THEME_URL?>/img/sub/product_02_05.gif" class="img-responsive">
                            </div>
                           <div class="col-md-6">
                               
                               <img src="<?php echo G5_THEME_URL?>/img/sub/product_02_06.gif" class="img-responsive">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
  
    <?
include_once('../../../_tail.php');
?>