<?php if(!defined("__XE__"))exit;?><style>
	.corver-container{
		width: 1000px;;;
		margin: 0 auto;
	}
	.corver-container header{
		width: 100%;
	}
	.corver-container .quick-menu{
		width: 500px;
		float: left;
		height: 100%;
	}
	.corver-container .news{
		width: 490px;
		height: 100%;
		display: inline-block;
	}
	.external-links{
		width: 100%;
		height: 500px;
		background-color: black;
		display: block;
		color: white;
		line-height: 500px;
		text-align: center;
		font-size: 50px;
	}
</style>
<section class="corver-container">
	<header>
		<section class="quick-menu">
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','quick-menu.html') ?>
		</section>
		<section class="news">
			<img class="zbxe_widget_output" widget="achievement_preview" skin="default" selected_module_srl="173" />
		</section>
		<section class="news">
			<img class="zbxe_widget_output" widget="new_posts" skin="default" title="Notice" selected_module_srl="180" />
		</section>
		<section class="news">
			<img class="zbxe_widget_output" widget="new_posts" skin="default" title="채용정보" selected_module_srl="182" />
		</section>
		
	</header>
	<!--
	<section class="external-links">
		external-links
	</section>
	-->
</section>