<?php if(!defined("__XE__"))exit;?><style>
	body{
		margin: 0px;
		font-family: 'Nanum Gothic', 나눔고딕, NanumGothic, 맑은고딕, malgun gothic,dotom,sans-serif;
	}
	
	.heakangc{
       
	}
	.heakangc>.layout{
		display: block;
		width: 100%;
		min-width: 1000px;
	}
	.heakangc>.absolute-block{
		position: absolute;
		top: 0px;
		/*box-shadow: 0px 0px 5px 0px rgb(35, 145, 182);*/
		box-shadow: 0px 0px 2px 0px #888888;
	}
	.heakangc>.white-space{
		height:10px;
		z-index: 1001;
		background-color: rgb(35, 145, 182);
	}
	.heakangc>.header{
		padding-top: 10px;
		height:60px;
		z-index: 1000;
		background-color: white;
	}
	.heakangc>.menus{
		padding-top: 70px;
		height:45px;
		z-index: 999;
		background-color: rgb(255, 255, 255);
	}
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
		border-bottom: rgb(203, 228, 237) 1px dotted;
	}
	.heakangc>.footer{
	}
	.heakangc .page-title{
		font-size: 40px;
		border-bottom: rgba(35, 145, 182, 0.5) 5px solid;
		padding-bottom: 10px;
		text-indent: 20px;
		margin: 0px;
		margin-bottom: 50px;
	}
</style>
<script>
</script>
<div class="heakangc">
	<aside class="layout absolute-block white-space">
		
	</aside>
	<header class="layout absolute-block header">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','header.html') ?>
	</header>
	<nav class="layout absolute-block menus">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','menus.html') ?>
	</nav>
	
	<?php if($__Context->layout_info->type === 'main'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','main.html');
} ?>
	<?php if($__Context->layout_info->type === 'content'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','content.html');
} ?>
	<footer class="layout footer">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','footer.html') ?>
	</footer>
	
</div>