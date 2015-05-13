<?php if(!defined("__XE__"))exit;?><style>
	.logo{
		line-height: 60px;
		cursor: pointer;
	}
	.logo .img{
		width: 60px;
		vertical-align: middle;
		margin-right: 5px;
	}
	.logo .title{
		height: 100%;
		font-size: 20px;
		font-weight: bold;
		letter-spacing:3px;
	}
	.logo:hover .title{
		color: rgb(35, 145, 182);
	}
</style>
<script>
	jQuery(function($){
		$('.logo').on('click', function(){
			location.href = '/';
		})
	});
</script>
<div class="logo">
	<img class="img" src="<?php echo $__Context->layout_info->logo_image ?>">
	<span class="title" id="logo_title"><?php echo $__Context->layout_info->logo_title ?></span>
</div>