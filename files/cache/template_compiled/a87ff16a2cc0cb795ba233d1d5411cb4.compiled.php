<?php if(!defined("__XE__"))exit;?><style>
	.footer-wrap{
		width:1000px;
		margin: 30px auto;
		padding: 0px;
	}
	.footer-wrap .left{
		position: absolute;
		width:500px;
		display: inline-block;
	}
	.footer-wrap .right{
		position: relative;
		width: 500px;
		display: inline-block;
		left: 500px;
		text-align: right;
	}
	.footer-wrap .logo{
		
		/* gray */
		filter:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="grayscale"><feColorMatrix type="matrix" values="0.3333" 0.3333="" 0="" 10=""></feColorMatrix></filter></svg>#grayscale'); /* Firefox 3.5+, IE10 */
		filter:gray; /* IE6-9 */
		-webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */
		-webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */
		-webkit-backface-visibility: hidden; /* Fix for transition flickering */
		float: left;
		height: 34px;
		display: inline;
		margin-right: 20px;
	}
	.footer-wrap .info{
		font-size: 0.85em;
	}
	.footer-wrap .foot-links{
	}
	.footer-wrap .foot-links{
		list-style: none;
		padding: 0px;
		margin: 0px;
	}
	.footer-wrap .foot-links>li{
		display: inline-block;
	}
	.footer-wrap .foot-link{
		text-decoration: none;
		color: black;
		margin: 0px 10px;
	}
	.footer-wrap .foot-link:hover{
		color: rgb(33,150,190);
		font-weight: bold;
	}
</style>
<div class="footer-wrap">
	<div class="left">
		<img class="logo" src="<?php echo $__Context->layout_info->logo_image ?>">
		<div class="info">
			<?php echo $__Context->layout_info->footer_text1 ?>
			<br>
			<?php echo $__Context->layout_info->footer_text2 ?>
		</div>
	</div>
	<div class="right">
		<ul class="foot-links">
			<?php if($__Context->footer_menu->list&&count($__Context->footer_menu->list))foreach($__Context->footer_menu->list as $__Context->key1=>$__Context->val1){ ?><li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
				<a href="<?php echo $__Context->val1['href'] ?>" class="foot-link"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo trim($__Context->val1['text']) ?></a>
			</li><?php } ?>
		</ul>
	</div>
</div>