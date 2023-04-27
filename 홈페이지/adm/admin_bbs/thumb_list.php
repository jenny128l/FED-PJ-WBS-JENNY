<?php
ini_set('display_errors','1');
$sub_menu = '800500';
include_once('./_common.php');

auth_check($auth[$sub_menu], 'r');
$g5['title'] = '가이드라인사이즈변경';
include_once('../admin.head.php');
echo "<div style='width:80%; margin:0 auto;'>";



$sql    = "select distinct wr_id,wr_subject from g5_write_ds_guideline order by wr_num asc";
$result = sql_query($sql);






?>
<style>
    .modal_loading {
        position:   absolute;
        z-index:    1000;
        top:        0;
        left:       0;
        height:     100%;
        width:      100%;
        background: rgba( 255, 255, 255, .8 )
        url('/FhHRx.gif')
        50% 50%
        no-repeat;
        opacity: 0.80;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity = 80);
        filter: alpha(opacity = 80)
    }
    .select_item>div{
        min-height: 200px;

    }
    p.please_select{
        text-align: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
    }
    p.empty_select{
        margin-left:auto;
        margin-right:auto;
        text-align: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
    }
    p.col_subj{
        text-align: center;
        margin:10px 0 10px;
        font-weight: bolder;
    }
    .select_list{
        display:none;
    }
    button.thumb_edit{
        margin-right:20px;
    }
    .thumb_content>div {
        text-align: center;
    }
</style>
<div class="row" style="min-height: 500px">
    <div id="t_left" class="col-sm-3" style="padding-right:50px;">
        <div class="page-header">
            <h3>가이드라인목록</h3>
        </div>
        <div class="row select_item">
            <div class="list-group">
            <? for ($i=0; $row=sql_fetch_array($result);$i++) {?>
                <a href="#" data-id="<?=$row['wr_id']?>" class="list-group-item"><?=$row['wr_subject']?></a>
            <?}?>
            </div>
        </div>
    </div>
    <div id="t_right" class="col-sm-9">
        <div class="page-header">
            <h3>가이드<small> Thumbnail List</small></h3>
        </div>

        <div class="row thumb_list">

            <form id="calc" class="form-inline" style="">



                <div class="form-group">
                    <label for="exampleInputName2"> Width(mm) : </label>
                    <input id="calc_width" name="calc_width" type="text" class="form-control input-sm" placeholder="mm">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Height(mm) : </label>
                    <input id="calc_height" name="calc_height" type="text" class="form-control input-sm" placeholder="mm">
                </div>

            </form>

            <br/>
            <form id="frm" class="form-inline" style="">

                <div class="form-group">
                    <label for="exampleInputName2">ID : </label>
                    <input id="frm_id" name="id" type="text" class="form-control input-sm" placeholder="wr_id">
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Width : </label>
                    <input id="frm_width" name="width" type="text" class="form-control input-sm" placeholder="px">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Height : </label>
                    <input id="frm_height" name="height" type="text" class="form-control input-sm" placeholder="px">
                </div>
                <button type="submit" class="btn btn-default btn-sm">전체사이즈변경</button>
            </form>
            <br/>
            <iframe id="create_iframe" style="display:none;width:100%;border:0;height:55px"></iframe>

            <p class="thumb_notice" style="text-align:center;margin-top:50px;color:#ff934f;font-size:30px">가이드라인을 선택하세요.</p>
            <div id="thumb_content" class="row" style="padding-top:50px"></div>
        </div>

    </div>

</div>
<script>
    $(document).ready(function(){

        var $t_left  = $("#t_left");
        var $t_right = $("#t_right");
        var $thumb_content = $("#thumb_content");

        $("a.list-group-item").live("click",function(){
            $(this).closest("div.list-group").find("a").removeClass('active')
            $(this).addClass('active')
        })

        function loading(bool){
            if(bool){
                $t_left.append("<div class='modal_loading'/>");
                $t_right.append("<div class='modal_loading'/>");
            }else{

                $t_left.find(".modal_loading").remove();
                $t_right.find(".modal_loading").remove();

            }

        }

        $(document).on({
            ajaxStart: function() {  loading(true);   },
            ajaxStop: function() { loading(false);  }
        });

        $("#t_left a").live("click",function(){
            var wr_id = $(this).attr("data-id");

            $.ajax({type:"POST", dataType:'html',
                url:'thumb_get.php',
                data:{'wr_id':wr_id},
                success: function(data){
                    $(".thumb_notice").hide();
                    $("#frm_id").val(wr_id)
                    $thumb_content.html(data)
                }
            })

        })

        $("#calc_width").live("keyup",function(){
            $("#frm_width").val(Math.round($(this).val()*3.7795276));
        })

        $("#calc_height").live("keyup",function(){
            $("#frm_height").val(Math.round($(this).val()*3.7795276));
        })

        $("#frm").submit(function(e){
            e.preventDefault();

            if($("#frm_id").val()==''){
                alert('가이드라인 선택 오류')
                return false;
            }
            if($("#frm_width").val()==''){
                alert('넓이 오류')
                return false;
            }
            if($("#frm_height").val()==''){
                alert('높이 오류')
                return false;
            }


            $("#create_iframe").slideToggle();

            if($("#create_iframe").css('display')!='none'){
                $("#create_iframe").attr("src",'thumb_set.php?wr_id='+$("#frm_id").val()+'&width='+$("#frm_width").val()+'&height='+$("#frm_height").val())
            }else{
                $("#create_iframe").attr("src","")
            }
        })

    })
</script>

<?php
echo "</div>";
include_once ('../admin.tail.php');
?>