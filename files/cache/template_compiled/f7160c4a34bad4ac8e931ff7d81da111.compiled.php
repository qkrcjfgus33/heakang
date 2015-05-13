<?php if(!defined("__XE__"))exit;?><style>
	.head-links{
		display: inline;
		line-height: 60px;
	}
	.head-links>li{
		display: inline;
		border-width: 0px;
		border-color: rgb(35, 145, 182);
		border-style: dotted;
		padding: 0px 5px;
		font-size: 11px;
	}
	.head-links>li:first-child{
		border-left-width: 0px;
	}
	.head-links>li:last-child{
		border-right-width: 0px;
	}
	.head-links .head-link{
		text-decoration: none;
		color: black;
	}
	.head-links .head-link:hover{
		color: rgb(35, 145, 182);
		font-weight: bold;
	}
	
</style>
<ul class="head-links">
	<?php if($__Context->head_menu->list&&count($__Context->head_menu->list))foreach($__Context->head_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
		<a href="<?php echo $__Context->val1['href'] ?>" class="head-link"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo trim($__Context->val1['text']) ?></a>
	</li><?php } ?>
	<img class="zbxe_widget_output" widget="login_info" skin="heakangc" />
</ul>