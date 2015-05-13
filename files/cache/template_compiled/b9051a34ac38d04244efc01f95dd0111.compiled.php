<?php if(!defined("__XE__"))exit;?><style>
	.menu-title-container{
		width: 100%;
		background: url('<?php echo $__Context->layout_info -> path ?>petten/footer_lodyas.png') repeat;	
		box-shadow: 0px 0px 1px 0px #888888;
	}
	.menu-title-container .menu-title{
		display: block;
		width: 1000px;
		height: 110px;
		margin: 0 auto;
		line-height: 110px;
		color: white;
		font-size: 45px;
		font-weight: bold;
		text-indent: 50px;
	}
</style>
<?php if($__Context->customTitle){ ?>
<section class="menu-title-container">
	<span class="menu-title">
		<?php echo $__Context->customTitle ?>
	</span>
</section>
<?php }else{ ?>
<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><section class="menu-title-container">
	<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['selected']){ ?><span class="menu-title">
		<?php echo $__Context->val2['text'] ?>
	</span><?php }} ?>
</section><?php }} ?>
<?php } ?>