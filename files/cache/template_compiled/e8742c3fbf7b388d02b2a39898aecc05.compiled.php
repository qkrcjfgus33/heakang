<?php if(!defined("__XE__"))exit;?><style>
	.heakangc>.frame-block{
		height: 115px;
		display: block;
		width: 100%;
	}
	.heakangc>.content-container{
		position: relative;
		width: 1000px;
		margin: 30px auto 0 auto;
	}
	.content-container .side-menu-container{
		position: relative;
		width: 200px;
		display: inline-block;
	}
	.content-container .content-wrap{
		position: relative;
		width: 700px;
		display: inline-block;
  		vertical-align: top;
  		margin-left:90px;
	}
	.content-container .content{
		margin: 50px 0px;
	}
	.only-content{
		width:1000px;
		margin: 20px auto;
		display: block;
	}
</style>
<aside class="frame-block"></aside>
<div class="menu-title-container">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','menu-title') ?>
</div>
<?php if($__Context->onlyContent){ ?>
<div class="only-content">
<?php echo $__Context->content ?>
</div>
<?php }else{ ?>
<div class="content-container">
	<div class="side-menu-container">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','side-menus') ?>
	</div>
	<section class="content-wrap">
		<section class="content-position">
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/heakangc','content-position') ?>
		</section>
		<section class="content">
			<?php echo $__Context->content ?>
		</section>
	</section>
</div>
<?php } ?>