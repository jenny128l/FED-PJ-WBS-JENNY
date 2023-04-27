<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
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
	<ul class="download_list">
		<li>If you have some questions on our products or want to place an order, <br>please fill the product inquiry form below. We will get back to you right away.</li>
	</ul>
	<div class="privacyBox_wrap">
		<h4>수집하는 개인정보의 항목</h4>
		<p class="mrb7">정보통신망법 규정에 따라 피에스아이노딕 수집하는 개인정보의 항목, 개인정보의 수집 및 이용목적, 개인정보의 보유 및 이용기간을 안내 드리오니 자세히 읽은 후 동의하여 주시기 바랍니다.</p><br/><br/>
		수집하는 개인정보
	</div>
	<div class="check_box tright"><input type="checkbox" id="check01" class="checkd" required="required" value="Y"><label for="check01" class="check_text">개인정보 이용에 동의 합니다.</label></div>
	<table class="tbl_inquiry" width="100%">
		<colgroup>
			<col width="22%"></col>
			<col width="*"></col>
		</colgroup>
		<tbody>
		<?php if(!$member['mb_id']) { ?>
			<tr>
				<th><label for="name">Name (이름)</label></th>
				<td><input type="text" id="name" class="wh100" name="wr_name"></td>
			</tr>
		<?php } ?>
			<tr>
				<th><label for="Company">Company (회사명)</label></th>
				<td><input type="text" id="Company" class="wh100" name="wr_subject"></td>
			</tr>
			<tr>
				<th><label for="Tel">Tel (전화)</label></th>
				<td><input type="text" id="Tel" class="wh100" name="wr_1"></td>
			</tr>
			<?php if(!$member['mb_id']) { ?>
			<tr>
				<th><label for="email">E-mail (이메일)</label></th>
				<td><input type="text" id="email" class="wh100" name="wr_email"></td>
			</tr>
			<?php } ?>
			<tr>
				<th><label for="memo">Your inquiry (내용)</label></th>
				<td><textarea id="memo" class="wh100 inquiry_textarea" name="wr_content"></textarea></td>
			</tr>
			<?php if ($is_use_captcha) { //자동등록방지  ?>
			<tr>
				<th>Spam protection code<br>(자동등록방지)</th>
				<td>
			        <?php echo $captcha_html ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="tright">
		<input type="submit" value="Send" id="btn_submit" accesskey="s" class="send_btn cyan mt20" style="border:0; border-radius:5px;">
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