<?php
function generateErrorMessage($element, $message){
	$str='
	<script type="text/javascript">
		jQuery("'.$element.'").addClass("error_field").val("").attr("placeholder", "'.$message.'");
	</script>';
	return $str;
}
function checkForRequiredField($element){
	if(empty($element) || strlen(trim($element))==0){
		return false;
	}
	else{
		return true;
	}
}
function scrollToFirstErrorField($top=0, $time=1000){
	echo '
	<script>
		jQuery(document).ready(function($){
			if($(".error_field").length != 0){
				$("html, body").animate({ scrollTop: $(".error_field").first().offset().top-'.$top.'}, '.$time.');
			}
		});
	</script>
	';
}
function checkForEmailField($element){
	if(empty($element) || strlen(trim($element))==0 || filter_var($element, FILTER_VALIDATE_EMAIL) === false){
		return false;
	}
	else{
		return true;
	}
}
function genneratePlainTextError($msg){
	$str='
	<div class="alert alert-danger mt10" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Problem !</strong> '.$msg.'</div>
	';

	return $str;
}
function genneratePlainTextSuccess($msg){
	$str="
	<div class='alert alert-success mt10'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			<strong>Success!</strong> ".$msg."</div>";

	return $str;
}
function get_email_header($logo='',$color=''){
	if ($logo!='') {
		$logo = "<div style=' max-width: 500px;border-bottom: 20px solid #fff;border-top: 20px solid #fff;text-align:center;'>
		<img src='".$logo."' style='padding:10px 10px 10px 10px;text-align:center;'/>
	</div>";
}
if ($color=='') {
	$color = "transparent";
}else{
	$color=$color;
}
$email_header = "<!DOCTYPE html>
<html>
<head>
	<style type='text/css' media='all'>
		a {
			text-decoration: none;
			color: #666;
		}
	</style>
</head>
<body style='background-color: #ddd !important; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; color: #666; margin: 0 auto; padding: 0;'>
	<br>
	<table align='center'>
		<tr>
			<td style='font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; color: #666;background-color:#fff;background-color:#fff;background-color: #fff; line-height: 18px;border-bottom: 10px solid ".$color.";border-top: 10px solid ".$color."; '>
				".$logo."
				<div style='text-align: left; max-width: 500px;'>
					<div style='padding: 20px 20px 20px 20px;margin:20px;'>";
						return $email_header;
					}

					function get_email_footer(){
						$email_footer = "
					</div>

				</div>
			</td>
		</tr>
	</table>
</body>
</html>";
return $email_footer;
}

function empty_form($form_id){
	$script = "var inputs = jQuery('".$form_id." input , ".$form_id." textarea, ".$form_id." select')
		.not(':input[type=button], :input[type=submit], :input[type=reset],:input[readonly]');
		inputs.val('');
		inputs.attr('checked', false);";

		echo "<script>".$script."</script>";
		
}