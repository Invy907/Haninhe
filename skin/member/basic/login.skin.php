<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/modify.css">', 0);
?>

<!-- 로그인 시작 { -->
<div id="mb_login" class="mbskin" style="height:100%;">
    <div class="mbskin_box" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
        <h1><?php echo $g5['title'] ?></h1>
        <div class="mb_log_cate">
    		<div style="padding:30px 0px;"><a href="<?=G5_URL?>"><img src="/_img/logo.jpg" style="width:300px;"></a></div>
        </div>
        <div class="mb_log_cate">
            <h2 style="padding-top:0px;font-size:1.3em;"><span class="sound_only">회원</span>로그인</h2>
            <a href="<?php echo G5_URL ?>/bbs/register.php" class="join">회원등록</a>
        </div>
        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="<?php echo $login_url ?>">
        
        <fieldset id="login_fs">
            <!--<legend>회원로그인</legend>
            <label for="login_id" class="sound_only">ID<strong class="sound_only"> 필수</strong></label>-->
            <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="200" placeholder="ID">
            <label for="login_pw" class="sound_only">패스워드<strong class="sound_only"> 필수</strong></label>
            <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="패스워드">
            <button type="submit" class="btn_submit" style="font-weight:normal;">로그인</button>
            
            <div id="login_info">
                <div class="login_if_auto chk_box" style="font-weight:normal;">
                    <input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
                    <label for="login_auto_login" style="font-weight:normal;"><span></span> 자동로그인</label>  
                </div>
                <div class="login_if_lpl">
                    <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">ID/PW찾기</a>  
                </div>
            </div>
        </fieldset> 
        </form>
        <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
    </div>
</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        //if (this.checked) {
        //    this.checked = confirm("自動로그인を使用すると次回からID/PWの入力が不要です。\n\n自動로그인を使用しますか？");
        //}
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->
