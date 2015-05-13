<?php if(!defined("__XE__"))exit;?><style>
	.achievement-photos{
	}
	.achievement-photos .achievement-photo-container{
		display: inline-block;
	}
	.achievement-photos .achievement-photo{
		width: 250px;
		margin: 0 auto;
		display: block;
		padding: 10px;
		padding-bottom: 40px;
		box-shadow: -2px 0px 5px 0px #666;
		margin-left: 50px;
		margin-bottom: 50px;
		background: url('./layouts/heakangc/petten/crossword.png') repeat;
	}
	.achievement_content .achievementTable.list {
		width: 500px; 
		margin: 0 auto 50px auto;
	}
</style>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/achievement/skins/default','_header.html') ?>
<h1 class="page-title odd"><?php echo $__Context->achievement_info->achievement_title ?></h1>
<?php  $__Context->achieve_photo_list = $__Context->achievement_info->achieve_photo_list ?>
<section class="achievement-photos">
<?php if($__Context->achieve_photo_list&&count($__Context->achieve_photo_list))foreach($__Context->achieve_photo_list as $__Context->val){ ?>
<div class="achievement-photo-container">
	<a href="<?php echo $__Context->val->uploaded_filename ?>" target="_blank">
	<img class="achievement-photo" src="<?php echo $__Context->val->uploaded_filename ?>"/>
	</a>
</div>
<?php } ?>
</section>
<table border="0" class="achievementTable list">
	<tr>
		<th><?php echo $__Context->lang->achievement_title ?></th>
		<td><?php echo $__Context->achievement_info->achievement_title ?></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achieve_class_title ?></th>
		<td><?php echo $__Context->achievement_info->achieve_class_title ?></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_date ?></th>
		<td><?php echo $__Context->achievement_info->achievement_start_date ?> - <?php echo $__Context->achievement_info->achievement_end_date ?></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_position ?></th>
		<td><?php echo $__Context->achievement_info->achievement_position ?></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_owner ?></th>
		<td><?php echo $__Context->achievement_info->achievement_owner ?></td>
	</tr>
	<tr>
		<th><?php echo $__Context->lang->achievement_woncheongsa ?></th>
		<td><?php echo $__Context->achievement_info->achievement_woncheongsa ?></td>
	</tr>
</table>
<!-- 버튼 -->
<?php if($__Context->grant->write){ ?><div class="btn">
	<!--
	<?php if($__Context->grant->write){ ?><a href="<?php echo getUrl('act','dispAchievementContentWrite','achievement_srl',$__Context->achievement_info->achievement_srl, 'achievement_new', 'false') ?>" class="button red" title="<?php echo $__Context->lang->cmd_modify ?>"><span><?php echo $__Context->lang->cmd_modify ?></span></a><?php } ?>
-->
<!--수정 버튼 문제있어서 삭제-->
	<?php if($__Context->grant->delete){ ?><a href="<?php echo getUrl('act','dispAchievementContentDelete','achievement_srl', $__Context->achievement_info->achievement_srl,'achievement_title',$__Context->achievement_info->achievement_title) ?>" class="button black" title="<?php echo $__Context->lang->cmd_delete ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a><?php } ?>
</div><?php } ?>
<h2>LIST</h2>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/achievement/skins/default','list.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/achievement/skins/default','_footer.html') ?>