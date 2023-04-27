<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;
?>
		<div class="board_btn_basic sch_select clear_g">
			<div class="tbl_search">
			<form name="fsearch" method="get">
			<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			<input type="hidden" name="sca" value="<?php echo $sca ?>">
			<input type="hidden" name="sop" value="and">
			<label for="sfl" class="sound_only">검색대상</label>
			<select name="sfl" id="sfl">
				<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>SUBJECT</option>
				<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>CONTENT</option>
				<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>SUBJECT+CONTENT</option>
			</select>
			<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
			<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" id="stx" class="sch_input" size="25" maxlength="20" placeholder="">
			<button type="submit" value="검색" class="search_btn">SEARCH</button>
			</form>				
			</div>
			<span class="tbl_num">Articles <em><?php echo number_format($total_count) ?></em></span>
		</div>
		<table cellspacing="0" class="tbl_list tbl_mobile tbl_common01 mt10">
			<colgroup><col width="80"><col width="*"><col width="100"><col width="90"><col width="90"></colgroup>
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Subject</th>
					<th scope="col">Author</th>
					<th scope="col">Date</th>
					<th scope="col">Views</th>
				</tr>
			</thead>
			<tbody>
				<?php
				for ($i=0; $i<count($list); $i++) {
				?>			
				<tr>
					<td><?php echo $list[$i]['num']; ?></td>
					<td class="tleft"><a href="<?php echo $list[$i]['href']; ?>"><?php echo $list[$i]['subject']; ?></a></td>
					<td><?php echo $list[$i]['name']; ?></td>
					<td class="tdata"><?php echo $list[$i]['datetime']; ?></td>
					<td><?php echo number_format($list[$i]['wr_hit']); ?></td>
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
