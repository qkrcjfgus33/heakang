<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
	jQuery(function($){
		$('#loading').hide();
		$('#writ_form #submit').on('click', function(){
			$('#writ_form #submit').attr('disabled', true);
			$('#loading').show();
			var params = {};
			$('#writ_form input[name]').add('#writ_form select[name]').each(function(){
				params[$(this).attr('name')] = $(this).val();
			});
			console.log(params);
			$.exec_json('achievement.procAchievementContentWrite', params, complete);
		});
		function complete(data){
			$('#writ_form #submit').attr('disabled', false);
			$('#loading').hide();
			if(data.message == 'success'){
				alert('등록되었습니다.');
				var url = current_url.setQuery('act','dispAchievementContentList').setQuery('achievement_srl','');
				    location.href = url;
			}else{
				alert('등록실패.');
				$('#writ_form #submit').attr('disabled', false);
				$('#loading').hide();
			}
		}
		$('#writ_form input[type=date]')
			.datetimepicker({
				lang:'ko',
				timepicker:false,
				format:'Y-m-d'
			});
	});
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/achievement/skins/default','_header.html') ?>
<h2>주요공사 실적 입력</h2>
<form action="./" method="post" id="writ_form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="act" value="procAchievementContentWrite">
<input type="hidden" name="module" value="achievement">
<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
<input type="hidden" name="regdate" value="<?php echo date("Ymd") ?>" />
<input type="hidden" name="achievement_srl" />
<table border="0" class="achievementTable">
	<tr>
		<th><?php echo $__Context->lang->achievement_title ?></th>
		<td class="left"><input type="text" name="achievement_title" size="40" /></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achieve_class_title ?></th>
		<td class="left">
			<?php  $__Context->achieve_class_srl = $__Context->achievement_info->achievement_class_srl ?>
			<select name="achievement_class_srl">
			  <option value="1">철근콘크리트공사업</option>
			  <option value="2">비계구조물해체공사업</option>
			  <option value="3">토공사업</option>
			  <option value="4">어장정화 정비업</option>
			  <option value="5">선박관리업</option>
			  <option value="6">건설기계대여업</option>
			  <option value="7">건설폐기물 수집운반업</option>
			  <option value="8">선박해체·제거업</option>
			  <option value="9">상하수도설비공사</option>
			</select>
		</td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_date ?></th>
		<td class="left">
			<input type="date" name="achievement_start_date" size="40" />-
			<input type="date" name="achievement_end_date" size="40" />
		</td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_position ?></th>
		<td class="left"><input type="text" name="achievement_position" size="20" /></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_owner ?></th>
		<td class="left"><input type="text" name="achievement_owner" size="20" /></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_woncheongsa ?></th>
		<td class="left"><input type="text" name="achievement_woncheongsa" size="20" /></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_photos ?></th>
		<td class="left">
			<?php echo $__Context->editor ?>
	</tr>
</table>
<div class="btn">
	<span class="button"><input type="button" value="<?php echo $__Context->lang->cmd_back ?>" onclick="history.back(); return false;" /></span> 
	<span class="button red strong">
		<input id="submit" type="button" value="<?php echo $__Context->lang->cmd_input ?>"/>
	</span> 
</div>
<span id="loading">DB에 등록 중 입니다.
	<img src="/modules/achievement/skins/default/loading.gif" style="
    width: 30px;
    vertical-align: middle;
">
</span>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/achievement/skins/default','_footer.html') ?>