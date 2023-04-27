<?php
set_time_limit(0);
include_once('./_common.php');
ob_end_flush();

// 관리자와 판매업체만
if(!$is_admin)exit;


$list = [];


//가이드라인
$guide = get_file('ds_guideline', $wr_id);
$image = $guide[0]['file'];
$image_info = getimagesize(G5_DATA_PATH."/file/ds_guideline/{$image}");
$list[] = ["url"=>G5_DATA_PATH."/file/ds_guideline/{$image}","width"=>$image_info[0],"height"=>$image_info[1]];

//템플릿
$sql = "select io_template from g5_shop_item_option where io_guide_line='{$wr_id}' and io_template<>0 ";
$res = sql_query($sql);

while($row = sql_fetch_array($res)){
    $template = get_file('template',$row['io_template']);
    $image = $template[0]['file'];
    $image_info = getimagesize(G5_DATA_PATH."/file/template/{$image}");
    $list[] = ["url"=>G5_DATA_PATH."/file/template/{$image}","width"=>$image_info[0],"height"=>$image_info[1]];
}


$tot_cnt = count($list);


$one_per = round(100/$tot_cnt,3);

include_once('../head.sub.php');
ob_implicit_flush(true);
ob_end_flush();
?>
    <style>
        .progress {
            margin-bottom: 0px;
            line-height: 22px;
        }
    </style>
    <p>Total : <?=$tot_cnt?></p>
    <div class="progress">


        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 0em; width: 0%;">
                0%
            </div>
        </div>

    </div>
    <div id="error_log"></div>
    <script>
        function  increase_per(width){
            $('.progress-bar').css('width', width + "%");
            $('.progress-bar').text(  width + "%");
            $('.progress-bar').attr( 'aria-valuenow', width  );
            //if(width==100)alert('완료')
        }
    </script>
<?

$per = 0;
$i=0;

foreach($list as $val){



    try{

        $imagick = new Imagick(realpath($val['url']));
        $imagick->thumbnailImage($width,$height);
        $imagick->writeImage($val['url']);
        $imagick->clear();



    }catch(Exception $e){
        $text = "{$e->getMessage()}";
        echo '<script>$("#error_log").append($("<p/>").text("'.$text.'"))</script>';
    }
//
//    echo "<script>console.log('{$io_no}')</script>";
    $per += $one_per;
    if($i==$tot_cnt-1)$per=100;
    $insert_per = round($per,2);
    echo "<script>increase_per('{$insert_per}');</script>";
    usleep( 100000);
    $i++;
}
sql_query("update g5_write_ds_guideline set wr_1='{$width}',wr_2='{$height}' where wr_id='{$wr_id}'");
?>


<?
include_once('../tail.sub.php');
?>