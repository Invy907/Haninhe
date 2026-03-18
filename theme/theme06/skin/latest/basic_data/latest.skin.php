<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="basic_data">     
<div class="row">
    <?php for ($i=0; $i<count($list); $i++) { ?>
    <p class="data">
       [<?php echo $list[$i]["datetime2"];?>]
    </p>
   <div class="subject">
       <ul>
           <li>· 
               <a href="<?php echo $list[$i]['href'];?>">
    <?php
            //echo $list[$i]['icon_reply']." ";
          
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

            if ($list[$i]['comment_cnt'])
               // echo $list[$i]['comment_cnt'];

           
             ?>
               </a>
           </li>
       </ul>
    </div>
    <?php } ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <div>게시물이 없습니다.</div>
    <?php }  ?>
</div>
</div>



  
