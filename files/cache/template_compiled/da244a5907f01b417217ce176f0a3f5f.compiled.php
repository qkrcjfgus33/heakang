<?php if(!defined("__XE__"))exit;?><style>
	.side-menus{
		padding: 0px;
		margin: 0px;
	}
	.side-menus li{
		list-style: none;
	}
	.side-menus, .side-menus ul{
		padding: 0px;
	}
	.side-menus a{
		text-decoration: none;
		color: #666;
	}
	.side-menus>li{
	}
	.side-menus>li>a{
		display: block;
		width: 100%;
		font-size: 30px;
		font-weight: bold;
		/*box-shadow:10px 0px 20px 0px rgb(35, 145, 182) inset;*/
		border-left: rgb(35, 145, 182) 20px solid;
		padding: 30px 0px 20px 0px;
		text-indent: 20px;
	}
	.side-menus .sub-menus{
		padding-top: 10px;
	}
	.side-menus .sub-menus>li:first-child{
		
	}
	.side-menus .sub-menus>li{
		height: 60px;
		line-height: 60px;
		font-size: 17px;
		border-right: #ddd 1px solid;
		font-weight: bold;
		padding-left: 20px;
	}
	.side-menus .sub-menus>li.active{
		border-right: rgba(0,0,0,0) 1px solid;
		box-shadow: -2px 0px 2px 0px #666;
	}
	.side-menus .sub-menus>li>a{
		
	}
	.side-menus .sub-menus>li.active>a{
		
	}
	.side-menus .sub-menus>li>a>.icon{
  		vertical-align: middle;
  		color: rgb(203, 228, 237);
  		margin: 0 10px 0 0;
  		font-size: 30%;
	}
	.side-menus .sub-menus>.active>a{
  		color: rgb(35, 145, 182);
	}
	.side-menus .sub-menus>.active>a>.icon{
  		vertical-align: middle;
  		color: rgb(35, 145, 182);
  		margin: 0 10px 0 0;
  		font-size: 30%;
	}
</style>
<ul class="side-menus">
	<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><li>
		<a><?php echo $__Context->val1['text'] ?></a>
		<?php if($__Context->val1['list']){ ?><ul class="sub-menus">
			<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
				<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
					<span class="oi icon" data-glyph="caret-right"></span><?php echo $__Context->val2['text'] ?>
				</a>
			</li><?php } ?>
		</ul><?php } ?>
	</li><?php }} ?>
</ul>