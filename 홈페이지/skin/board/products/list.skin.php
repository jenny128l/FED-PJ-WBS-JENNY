<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;
?>
	<ul class="product_lists">
				<?php
				for ($i=0; $i<count($list); $i++) {
				$file = sql_fetch("select * from g5_board_file where bo_table = '{$bo_table}' and wr_id = '{$list[$i][wr_id]}';");
							
				?>			
		<li>
			<a href="<?php echo $list[$i]['href']; ?>">
				<div class="product_layl">
					<div class="product_tbl">
						<span><img src="<?php echo G5_URL; ?>/data/file/<?php echo $bo_table; ?>/<?php echo $file['bf_file']; ?>" ></span>

					</div>
				</div>
				<div class="product_layr">
					<h3><?php echo $list[$i]['wr_subject']; ?></h3>
					<ul class="product-layr_list common_list01 li">
						<?php if($list[$i]['wr_1'] != "") { ?><li><?php echo $list[$i]['wr_1']; ?></li><?php } ?>
						<?php if($list[$i]['wr_2'] != "") { ?><li><?php echo $list[$i]['wr_2']; ?></li><?php } ?>
						<?php if($list[$i]['wr_3'] != "") { ?><li><?php echo $list[$i]['wr_3']; ?></li><?php } ?>
						<?php if($list[$i]['wr_4'] != "") { ?><li><?php echo $list[$i]['wr_4']; ?></li><?php } ?>
						<?php if($list[$i]['wr_5'] != "") { ?><li><?php echo $list[$i]['wr_5']; ?></li><?php } ?>
					</ul>
				</div>
			</a>
		</li>
				<?php } ?>
</ul>

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
