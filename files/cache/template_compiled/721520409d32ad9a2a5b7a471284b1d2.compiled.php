<?php if(!defined("__XE__"))exit;?><style>
	.header-wrap{
		width: 980px;
		height: 100%;
		margin: 0 auto;
		padding: 0 10px;
	}
	.header-wrap .left{
		float: left;
	}
	.header-wrap .right{
		float: right;
	}
</style>
<div class="header-wrap">
	<div class="left">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','logo.html') ?>
	</div>
	<div class="right">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','head-links.html') ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','search.html') ?>
	</div>
</div>