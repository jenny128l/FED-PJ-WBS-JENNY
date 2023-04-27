<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
	<table cellspacing="0" class="tbl_view">
		<thead>
			<tr>
				<th class="tleft fwb pb0" style="border-bottom:0;"><?php echo $view['subject']; ?></th>
			</tr>
			<tr>
				<th class="tleft fwn tview_bot fs14"><?php echo $view['name']; ?><span class="barL pl10 ml10"><?php echo $view['datetime']; ?></span></th>
			</tr>
		</thead>
		<tbody>
			<?php if($cnt > 1) { ?>				 
			<tr>
				<td class="td_file" style="border-bottom:1px dotted #cacaca;">
					<div>
					<?php
					$cnt = 0;
					if ($view['file']['count']) {
						for ($i=0; $i<count($view['file']); $i++) {
							if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
								$cnt++;
						}
					}
					 ?>
						<span>FILE</span>
						<ul>
						<?php
						// 가변 파일
						for ($i=0; $i<count($view['file']); $i++) {
							if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
						?>							
							<li><a href="<?php echo $view['file'][$i]['href'];  ?>"><?php echo $view['file'][$i]['source'] ?></a></li>
						<?php }} ?>
						</ul>
					</div>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td class="tbl_mov_pd640">
					<div class="board_view_con">
        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>					
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<?php if ($prev_href || $next_href) { ?>
	<table cellspacing="0" class="tbl_view tbl_view_prnx">
		<colgroup><col width="109px"><col width="*"></colgroup>
		<tbody>
			<?php if ($prev_href) { ?>
			<tr>
				<th class="tbl_view_pr"><span>PRE</span></th>
				<td><div><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a></div></td>
			</tr>
			<?php } ?>
			<?php if ($next_href) { ?>
			<tr>
				<th class="tbl_view_nx"><span>NET</span></th>
				<td><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php } ?>
	<div class="tright">
		<a href='<?php echo $list_href ?>' class="list_btn mt20 m_wh100" title="">LIST</a>
	</div>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();

    //sns공유
    $(".btn_share").click(function(){
        $("#bo_v_sns").fadeIn();
   
    });

    $(document).mouseup(function (e) {
        var container = $("#bo_v_sns");
        if (!container.is(e.target) && container.has(e.target).length === 0){
        container.css("display","none");
        }	
    });
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->