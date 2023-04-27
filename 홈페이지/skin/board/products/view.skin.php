<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$file = sql_fetch("select * from g5_board_file where bo_table = '{$bo_table}' and wr_id = '{$view[wr_id]}';");
$wr_6_a = explode("||",$view['wr_6']);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
		<div class="product_view">
		<div class="clear_g">
			<div class="product_view_layl">
				<div class="tbl_box">
					<div><img src="<?php echo G5_URL; ?>/data/file/<?php echo $bo_table; ?>/<?php echo $file['bf_file']; ?>" ><div class="tcenter"><img src="../images/sub/product_view_icon.jpg" alt="" class="mt10 m_inline specifications_img"></div></div>
				</div>
			</div>
			<div class="product_view_layr">
				<h3 class="product_view_title">HBX-QH2T201-TN<!--<span>4M BOX camera</span>--></h3>
				<div class="product_view_info">
					<h4 class="common_title01">FEATURES</h4>
					<ul class="product_view_list common_list01">
						<?php if($view['wr_1'] != "") { ?><li><?php echo $view['wr_1']; ?></li><?php } ?>
						<?php if($view['wr_2'] != "") { ?><li><?php echo $view['wr_2']; ?></li><?php } ?>
						<?php if($view['wr_3'] != "") { ?><li><?php echo $view['wr_3']; ?></li><?php } ?>
						<?php if($view['wr_4'] != "") { ?><li><?php echo $view['wr_4']; ?></li><?php } ?>
						<?php if($view['wr_5'] != "") { ?><li><?php echo $view['wr_5']; ?></li><?php } ?>
					</ul>
					<img src="../images/sub/product_view_icon.jpg" alt="" class="mt10 pc_block">
				</div>
			</div>
		</div>
		<ul class="tab_nav">
			<li>Specification</li>
			<li>Dimension</li>
		</ul>
		<div class="tab_cont tab_cont1">
			<h4 class="common_title01 mb20">Specification</h4>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">VIDEO</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="30%"></col>
						<col width="*"></col>
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="tbl_title">VIDEO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Image Sensor</th>
							<td><?php echo $wr_6_a[0]; ?></td>
						</tr>
						<tr>
							<th>Effective pixels</th>
							<td><?php echo $wr_6_a[1]; ?></td>
						</tr>
						<tr>
							<th>Total pixels</th>
							<td><?php echo $wr_6_a[2]; ?></td>
						</tr>
						<tr>
							<th>Max. Resolution</th>
							<td><?php echo $wr_6_a[3]; ?></td>
						</tr>
						<tr>
							<th>Lens Type</th>
							<td><?php echo $wr_6_a[4]; ?></td>
						</tr>
						<tr>
							<th>IRIS Control</th>
							<td><?php echo $wr_6_a[5]; ?></td>
						</tr>
						<tr>
							<th>Angular Field of View</th>
							<td><?php echo $wr_6_a[6]; ?></td>
						</tr>
						<tr>
							<th>Min. illumination</th>
							<td><?php echo $wr_6_a[7]; ?></td>
						</tr>
						<tr>
							<th>S/N Ratio</th>
							<td><?php echo $wr_6_a[8]; ?></td>
						</tr>
						<tr>
							<th>Electronic Shutter Speed</th>
							<td><?php echo $wr_6_a[9]; ?></td>
						</tr>
						<tr>
							<th>Day/Night</th>
							<td><?php echo $wr_6_a[10]; ?></td>
						</tr>
						<tr>
							<th>IR LEDs</th>
							<td><?php echo $wr_6_a[11]; ?></td>
						</tr>
						<tr>
							<th>Video Out</th>
							<td><?php echo $wr_6_a[12]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">FUNCTION</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="30%">
						<col width="*">
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="tbl_title">FUNCTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Sens-UP</th>
							<td><?php echo $wr_6_a[13]; ?></td>
						</tr>
						<tr>
							<th>WDR(Wide Dynamic Range)</th>
							<td><?php echo $wr_6_a[14]; ?></td>
						</tr>
						<tr>
							<th>Backlight Compensation(BLC)</th>
							<td><?php echo $wr_6_a[15]; ?></td>
						</tr>
						<tr>
							<th>HSBLC</th>
							<td><?php echo $wr_6_a[16]; ?></td>
						</tr>
						<tr>
							<th>D-WDR</th>
							<td><?php echo $wr_6_a[17]; ?></td>
						</tr>
						<tr>
							<th>Motion Detection</th>
							<td><?php echo $wr_6_a[18]; ?></td>
						</tr>
						<tr>
							<th>Privacy Masking</th>
							<td><?php echo $wr_6_a[19]; ?></td>
						</tr>
						<tr>
							<th>Freeze</th>
							<td><?php echo $wr_6_a[20]; ?></td>
						</tr>
						<tr>
							<th>Day & Night</th>
							<td><?php echo $wr_6_a[21]; ?></td>
						</tr>
						<tr>
							<th>White Balance</th>
							<td><?php echo $wr_6_a[22]; ?></td>
						</tr>
						<tr>
							<th>Digital Noise Reduction</th>
							<td><?php echo $wr_6_a[23]; ?></td>
						</tr>
						<tr>
							<th>Mirror</th>
							<td><?php echo $wr_6_a[24]; ?></td>
						</tr>
						<tr>
							<th>D-ZOOM</th>
							<td><?php echo $wr_6_a[25]; ?></td>
						</tr>
						<tr>
							<th>Sharpness</th>
							<td><?php echo $wr_6_a[26]; ?></td>
						</tr>
						<tr>
							<th>De-fog</th>
							<td><?php echo $wr_6_a[27]; ?></td>
						</tr>
						<tr>
							<th>Lens Shading(LSC)</th>
							<td><?php echo $wr_6_a[28]; ?></td>
						</tr>
						<tr>
							<th>OSD Language</th>
							<td><?php echo $wr_6_a[29]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">ENVIRONMENTAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="30%"></col>
						<col width="*"></col>
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="tbl_title">ENVIRONMENTAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Out-Door Ready</th>
							<td><?php echo $wr_6_a[30]; ?></td>
						</tr>
						<tr>
							<th>Operating Temperature</th>
							<td><?php echo $wr_6_a[31]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">ELECTRICAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="30%"></col>
						<col width="*"></col>
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="tbl_title">ELECTRICAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Power Source</th>
							<td><?php echo $wr_6_a[32]; ?></td>
						</tr>
						<tr>
							<th>Power Consumption</th>
							<td><?php echo $wr_6_a[33]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">MECHANICAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="30%"></col>
						<col width="*"></col>
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="tbl_title">MECHANICAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Dimensions</th>
							<td><?php echo $wr_6_a[34]; ?></td>
						</tr>
						<tr>
							<th>Weight</th>
							<td><?php echo $wr_6_a[35]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">OPTIONAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="30%"></col>
						<col width="*"></col>
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="tbl_title">OPTIONAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Power Source</th>
							<td><?php echo $wr_6_a[36]; ?></td>
						</tr>
						<tr>
							<th>AUDIO</th>
							<td><?php echo $wr_6_a[37]; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="tab_cont tab_cont2">
			<?php echo $view['wr_content']; ?>
		</div>
		<div class="tright">
			<a href='<?php echo $list_href; ?>&sca=<?php echo $sca; ?>' class="send_btn m_wh100 mt20" title="">LIST</a>
		</div>
	</div>
	<script>
		$('.tab_cont').eq(0).show();
		$('.tab_nav li').eq(0).addClass('on');
		$('.tab_nav li').click(function(){
			var idx = $(this).index() + 1;
			$('.tab_nav li').removeClass('on');
			$(this).addClass('on');
			$('.tab_cont').hide();
			$('.tab_cont'+idx).show();
		});
		$('.solutions_tbl_toggle').click(function(){
			$('.solutions_tbl_toggle').removeClass('on');
			$(this).parents('.solutions_tbl_wrap').siblings().children('.product_view_tbl').slideUp();
			$(this).siblings('.product_view_tbl').slideToggle('slow',function() {
				 $(this).siblings('.solutions_tbl_toggle').toggleClass('on', $(this).is(':visible'));
			});
		});
	</script>

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