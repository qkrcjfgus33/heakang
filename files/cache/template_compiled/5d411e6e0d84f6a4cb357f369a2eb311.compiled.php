<?php if(!defined("__XE__"))exit;?><style>
	.content-position-container{
		margin-bottom: 10px;
		margin-right: 10px;
	}
	.content-position-container .content-position{
		text-align: right;
		width: 100%;
		display: block;
	}
	.content-position-container a, .content-position-container>.content-position{
		text-decoration: none;
		color: #666;
	}
</style>
<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><section class="content-position-container">
	<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['selected']){ ?><span class="content-position">
		<a href="./">
			<span class="oi icon" data-glyph="home"></span>
		</a> > 
			<?php echo $__Context->val1['text'] ?> 
			> 
		<a href="<?php echo $__Context->val2['href'] ?>">
			<?php echo $__Context->val2['text'] ?>
		</a>
	</span><?php }} ?>
</section><?php }} ?>