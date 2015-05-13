<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/login_info/skins/heakangc/heakangc.login.css--><?php $__tmp=array('widgets/login_info/skins/heakangc/heakangc.login.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('widgets/login_info/skins/heakangc','logout.xml');$__xmlFilter->compile(); ?>
<!--#Meta:widgets/login_info/skins/heakangc/heakangc.login.js--><?php $__tmp=array('widgets/login_info/skins/heakangc/heakangc.login.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="account">
	<ul class="info">
		<li><span class="user"><?php echo $__Context->logged_info->nick_name ?></a></li>
		<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>" class="logout"><?php echo $__Context->lang->cmd_logout ?></a></li>
	</ul>
</div>
