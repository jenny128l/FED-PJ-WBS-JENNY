<?php
include_once('./board_menu.php');

include_once('./_common.php');

$count = count($_POST['chk_wr_id']);

if(!$count) {
    alert("you do select for '".$_POST['act_button']."'");
}

if($_POST['btn_submit'] == '선택삭제') {
	include './delete_all.php';
} else if($_POST['btn_submit'] == '선택복사') {
    $sw = 'copy';
    include './move.php';
} else if($_POST['btn_submit'] == '선택이동') {
    $sw = 'move';
    include './move.php';
} else {
    alert('올바른 방법으로 이용해 주세요.');
}
?>