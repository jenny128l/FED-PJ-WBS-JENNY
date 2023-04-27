<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$wr_6 = implode("||",$_POST['wr_6_a']);
sql_query("update g5_write_{$bo_table} set wr_6 = '{$wr_6}' where wr_id = '{$wr_id}';");
?>