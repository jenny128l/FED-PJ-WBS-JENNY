<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>


<div class="set02_layc">
	<h3 class="main_common_title01"><?php echo $bo_subject ?></h3>
	<ul class="main_common_lists main_common_lists01">
	    <?php for ($i=0; $i<count($list); $i++) {  ?>
		<li><?php 
					$file = sql_fetch("select * from g5_board_file where bo_table = '{$bo_table}' and wr_id = '{$list[$i][wr_id]}';");
            echo "<a href=\"/bbs/download.php?bo_table=".$bo_table."&wr_id=".$list[$i]['wr_id']."&no=".$file['bf_no']."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];



            echo "</a>";

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">+ ".$list[$i]['comment_cnt']."</span>";

            ?></li>
		<?php } ?>
		<?php if (count($list) == 0) { //게시물이 없을 때  ?>
		<li class="empty_li">No Data</li>
		<?php }  ?>		
	</ul>
	<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="more"><img src="./images/main/more02.png" alt="더보기"></a>
</div>