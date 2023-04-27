<?php
$sub_menu = '800500';
include_once('./_common.php');

$list = [];


//가이드라인
$guide = get_file('ds_guideline', $wr_id);
$image = $guide[0]['file'];
$image_info = getimagesize(G5_DATA_PATH."/file/ds_guideline/{$image}");
$list[] = ["url"=>G5_DATA_URL."/file/ds_guideline/{$image}","width"=>$image_info[0],"height"=>$image_info[1]];

//템플릿
$sql = "select io_template from g5_shop_item_option where io_guide_line='{$wr_id}' and io_template<>0 ";
$res = sql_query($sql);

while($row = sql_fetch_array($res)){
    $template = get_file('template',$row['io_template']);
    $image = $template[0]['file'];
    $image_info = getimagesize(G5_DATA_PATH."/file/template/{$image}");
    $list[] = ["url"=>G5_DATA_URL."/file/template/{$image}","width"=>$image_info[0],"height"=>$image_info[1]];
}



?>




<?foreach($list as $val){?>
    <div class="col-sm-3" style="text-align: center">
        <p>width:<?=$val['width']?>/height:<?=$val['height']?></p>
        <img class="img-responsive" src="<?=$val['url']?>" />
    </div>
<?}?>