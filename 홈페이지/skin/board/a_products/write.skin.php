<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
$wr_6_a = explode("||",$write['wr_6']);
?>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>

    <?php if ($is_category) { ?>
    <div class="bo_w_select write_div">
        <label for="ca_name"  class="sound_only">분류<strong>필수</strong></label>
        <select name="ca_name" id="ca_name" required>
            <option value="">분류를 선택하세요</option>
            <?php echo $category_option ?>
        </select>
    </div>
    <?php } ?>
	
<div class="solutions_tbl_wrap">
	<div class="solutions_tbl_toggle">DEFAULT INFO</div>	
<table class="product_view_tbl">
<colgroup>
	<col width="240"></col>
	<col width="*"></col>
</colgroup>
<thead>
	<tr>
		<th colspan="2" class="tbl_title">DEFAULT INFO</th>
	</tr>
</thead>
<tr>
<th>제품명</th>
<td>
        <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
          
        </div>
</td>
</tr>
<tr>
<th>주요설명<br />(리스트 노출)</th>
<td>
<label for="wr_1" class="sound_only">주요설명</label>
<input type="text" name="wr_1" value="<?php echo $write['wr_1']; ?>" id="wr_1" class="frm_input full_input" placeholder="설명 1" style="width:300px;"><br />
<input type="text" name="wr_2" value="<?php echo $write['wr_2']; ?>" id="wr_2" class="frm_input full_input" placeholder="설명 2" style="width:300px;"><br />
<input type="text" name="wr_3" value="<?php echo $write['wr_3']; ?>" id="wr_3" class="frm_input full_input" placeholder="설명 3" style="width:300px;"><br />
<input type="text" name="wr_4" value="<?php echo $write['wr_4']; ?>" id="wr_4" class="frm_input full_input" placeholder="설명 4" style="width:300px;"><br />
<input type="text" name="wr_5" value="<?php echo $write['wr_5']; ?>" id="wr_5" class="frm_input full_input" placeholder="설명 5" style="width:300px;">
</td>
</tr>
</table>
</div>
<br /><br />
			<h4 class="common_title01 mb20">Specification</h4>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">VIDEO</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="240"></col>
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
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[0]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Effective pixels</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[1]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Total pixels</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[2]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Max. Resolution</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[3]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Lens Type</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[4]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>IRIS Control</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[5]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Angular Field of View</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[6]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Min. illumination</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[7]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>S/N Ratio</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[8]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Electronic Shutter Speed</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[9]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Day/Night</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[10]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>IR LEDs</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[11]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Video Out</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[12]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">FUNCTION</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="240">
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
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[13]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>WDR(Wide Dynamic Range)</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[14]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Backlight Compensation(BLC)</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[15]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>HSBLC</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[16]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>D-WDR</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[17]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Motion Detection</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[18]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Privacy Masking</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[19]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Freeze</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[20]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Day & Night</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[21]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>White Balance</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[22]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Digital Noise Reduction</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[23]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Mirror</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[24]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>D-ZOOM</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[25]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Sharpness</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[26]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>De-fog</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[27]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Lens Shading(LSC)</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[28]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>OSD Language</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[29]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">ENVIRONMENTAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="240"></col>
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
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[30]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Operating Temperature</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[31]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">ELECTRICAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="240"></col>
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
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[32]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Power Consumption</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[33]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">MECHANICAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="240"></col>
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
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[34]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>Weight</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[35]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="solutions_tbl_wrap">
				<div class="solutions_tbl_toggle">OPTIONAL</div>
				<table class="product_view_tbl">
					<colgroup>
						<col width="240"></col>
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
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[36]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
						<tr>
							<th>AUDIO</th>
							<td><input type="text" name="wr_6_a[]" value="<?php echo get_text($wr_6_a[37]); ?>" id="wr_6_a" class="frm_input full_input" /></td>
						</tr>
					</tbody>
				</table>
		</div>
		<br /><br />
			<h4 class="common_title01 mb20">DIMENSION/CABLE</h4>		
    <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>
    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
			
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
		<p style="margin-top:5px;">이미지크기 : 387px * 434px</p>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
        <?php } ?>
        
    </div>
    <?php } ?>

    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>


    <div class="btn_confirm write_div">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel btn">취소</a>
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
    </div>
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->