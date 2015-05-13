<?php if(!defined("__XE__"))exit;?><script>
	jQuery(function($){
		console.log('test')
		$('tr[href]').on('click', function(){
			location.href = $(this).attr('href');
		})
	})
</script>
<!-- 목록 -->
<table border="0" class="achievementTable">
	<thead>
		<tr>
			<th><?php echo $__Context->lang->no ?></th>
			<th><?php echo $__Context->lang->achieve_class_title ?></th>
			<th><?php echo $__Context->lang->achievement_title ?></th>
			<th><?php echo $__Context->lang->achievement_date ?></th>
		</tr>
	</thead>
	<tbody>
	<?php if($__Context->achievement_list&&count($__Context->achievement_list))foreach($__Context->achievement_list as $__Context->no => $__Context->achievement_info){ ?>
		<tr href="<?php echo getUrl('achievement_srl', $__Context->achievement_info->achievement_srl,'act','dispAchievementContentView') ?>">
			<td><?php echo $__Context->no ?></td>
			<td><?php echo $__Context->achievement_info->achieve_class_title ?></td>
			<td><?php echo $__Context->achievement_info->achievement_title ?></td>
			<td><?php echo $__Context->achievement_info->achievement_start_date ?> - <?php echo $__Context->achievement_info->achievement_end_date ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<!-- 버튼 -->
<?php if($__Context->grant->write){ ?><div class="btn">
	<a href="<?php echo getUrl('','mid',$__Context->mid) ?>" class="button green" title="<?php echo $__Context->lang->cmd_list ?>"><span><?php echo $__Context->lang->cmd_list ?></span></a>
	<a href="<?php echo getUrl('act','dispAchievementContentWrite', 'achievement_new', 'true') ?>" class="button red" title="<?php echo $__Context->lang->cmd_input ?>"><span><?php echo $__Context->lang->cmd_input ?></span></a>
</div><?php } ?>
<!-- 페이지 네비게이션 -->
<div class="pagination a1">
    <a href="<?php echo getUrl('page','','module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>