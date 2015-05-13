<?php if(!defined("__XE__"))exit;?><style>
	.heakangc>.slider{
		padding-top: 115px;
		height:400px;
		z-index: 998;
	}
	.heakangc>.frame-block{
		height: 515px;
		display: block;
		width: 100%;
	}
	.heakangc>.main{
		border-top: rgb(35, 145, 182) 5px solid;
	}
</style>
<aside class="layout absolute-block slider">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','slider.html') ?>
</aside>
<aside class="frame-block"></aside>
<main class="layout main">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','cover.html') ?>
</main>