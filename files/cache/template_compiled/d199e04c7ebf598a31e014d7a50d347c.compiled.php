<?php if(!defined("__XE__"))exit;?><style>
	.quick-container{
		padding: 20px 10px;
	}
	.quick-container header{
		border-bottom: rgb(33, 150, 190) 3px solid;
		height: 25px;
	}
	.quick-container header .title{
		font-family: sans-serif;
		font-weight: bold;
		font-size: 15px;
		padding-left: 10px;
	}
</style>
<section class="quick-container">
	<header>
		<span class="title">QUICK MEMU</span>
	</header>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','quick-links.html') ?>
</section>