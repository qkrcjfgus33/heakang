<?php if(!defined("__XE__"))exit;?><style>
	.menus-container{
		font-weight: bold;
	}
	.menus-container ul{
		list-style: none;
		padding: 0px;
	}
	.menus-container a{
		display: block;
		width: 100%;
		height: 100%;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		color: rgb(39, 37, 37);
  		font-size: 19px;
  		font-weight: bold;
		background-color: rgb(255,255,255);
		text-decoration: none;
	}
	.menus-container li{
		display: inline-block;
		width: 180px;
	}
	.menus-container .menus{
		margin: 0 auto;
		display: block;
	}
	.menus-container .menus>li{
		text-align: center;
		height: 45px;
		line-height: 45px;
		
		vertical-align: top;
		-webkit-transition: margin-top .5s;
		transition: margin-top .5s;
	}
	.menus-container .menus>li:hover{
		/*background-color: rgb(230, 242, 246);*/
	}
	.menus-container .menus>li>a{
		font-size: 17px;
	}
	.menus-container .sub-menus>li>a>.menu-name{
		height: 100%;
		display: inline-block;
		padding-right: 5px;
	}
	.menus-container .sub-menus>li>a:hover>.menu-name{
		background-color: rgb(33, 150, 190);
	}
	.menus-container .menus>li.hover>a{
	}
	.menus-container .sub-menus{
		display: none;
  		border-top: rgb(203, 228, 237) 15px solid;
  		border-bottom: rgb(203, 228, 237) 1px solid;
	}
	.menus-container .sub-menus>li{
		display: block;
		text-align: left;
		height: 40px;
		line-height: 40px;
		width: 178px;
		z-index: 9999999999999999999;
		position: relative;
		border-left: rgb(203, 228, 237) 1px solid;
		border-right: rgb(203, 228, 237) 1px solid;
	}
	.menus-container .sub-menus>li>a{
		/*border-bottom: rgb(33, 150, 190) 1px solid;*/
		font-size: 14px;
		-webkit-transition: margin .5s;
		transition: margin .5s;
	}
	.menus-container .sub-menus>li>a:hover{
		color: white;
		background-color: rgb(33, 150, 190);
		-webkit-transition: margin 1s;
		transition: margin 1s;
		overflow: visible;
		white-space: nowrap;
		/*margin-left: 5px;*/
		box-shadow: 0px 0px 3px #888888;
	}
	.menus-container .sub-menus>li>a>.icon{
  		vertical-align: middle;
  		color: rgb(203, 228, 237);
  		margin: 0 0 0 10px;
  		font-size: 30%;
	}
</style>
<script>
	jQuery(function(){
		var $ = jQuery;
		init();
		function init(){
			//menus init
			var $menus = $('.menus-container .menus');
			var menu_width = $('.menus-container .menus>li').outerWidth();
			var menu_len = $('.menus-container .menus>li').length;
			var menus_width = menu_width * menu_len;
			
			$menus.css({
				'min-width': menus_width,
				'width': menus_width
			});
			//sub_menus init
			var $sub_menus = $('.menus-container .sub-menus');
			var menu_height = $menus.outerHeight();
			var real_height_data = 'real-height-data';
			$sub_menus.css('display', 'block');
			var $this, this_height;
			$sub_menus.each(function(){
				$this = $(this);
				this_height = $this.outerHeight();
				$this.css('margin-top', (menu_height + this_height) * -1);
				$this.parent().attr(real_height_data, this_height+'px');
			});
			var $menu = $('.menus-container .menus>li');
/*
			$menu.each(function(){
var $menu = $(this);
					var height = $menu.attr(real_height_data);
					$menu.css('margin-top', height).addClass('hover');
			})*/
			$menu.hover(
				function(){
					var $menu = $(this);
					var height = $menu.attr(real_height_data);
					$menu.css('margin-top', height).addClass('hover');
				},function(){
					var $menu = $(this);
					$menu.css('margin-top', '').removeClass('hover');
				});
		}
	});
</script>
<nav class="menus-container">
	<ul class="menus">
		<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['text']){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
			<a><?php echo $__Context->val1['text'] ?></a>
			<?php if($__Context->val1['list']){ ?><ul class="sub-menus">
				<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
					
					<a href="<?php echo $__Context->val2['href'] ?>" class ="hover"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
						<span class="oi icon" data-glyph="chevron-right"></span>
						<span class="menu-name"><?php echo $__Context->val2['text'] ?></span>
					</a>
				</li><?php } ?>
			</ul><?php } ?>
		</li><?php }} ?>
	</ul>
</nav>