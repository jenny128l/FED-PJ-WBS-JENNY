<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>
	<ul class="download_list">
		<li>Please download the lastest catalogue and user guide from the below link.</li>
		<li>Email us at sales@inodic.com if you need more detail information</li>
	</ul>
	<table class="download_tbl" width="100%">
		<colgroup>
			<col width="*"></col>
			<col width="20%"></col>
		</colgroup>
		<tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        ?>
	 		<tr>
				<td><?php echo $list[$i]['subject']; ?></td>
				<td class="tright">
				<?php
					$file = sql_fetch("select * from g5_board_file where bo_table = '{$bo_table}' and wr_id = '{$list[$i][wr_id]}';");
				?>
				<a href="download.php?bo_table=<?php echo $bo_table; ?>&wr_id=<?php echo $list[$i]['wr_id']; ?>&no=<?php echo $file['bf_no'];?>"><img src="<?php echo G5_URL; ?>/images/sub/download.jpg" alt="download" class="pc_block"><img src="<?php echo G5_URL; ?>/images/sub/down_btn.png" alt="" class="m_inline"></a>
				
				</td>
			</tr>
		<?php } ?>

		</tbody>
	</table>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<!-- 페이지 -->
<?php echo $write_pages;  ?>


<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
