<?php if(!defined("__XE__"))exit;?><style>
	.quick-links-container{
		color: black;
		padding: 0px;
		margin: 20px auto 0px auto;
		/*display: inline-block;*/
		display: block;
		width: 417px;
	}
	.quick-links-container a{
		color:black;
		text-decoration: none;
	}
	.quick-links-container .quick-link{
		list-style-type: none;
		display: inline-block;
		width: 60px;
		height: 120px;
		margin: 10px;
		vertical-align: top;
		cursor: pointer;
	}
	.quick-links-container .title{
		text-decoration: none;
		color: black;
		font-size: 12px;
		height: 20px;
		width: 100%;
		text-align: center;
		display: inline-block;
		margin-top: 10px;
		font-family: sans-serif;
		font-weight: bold;
	}
	.quick-links-container .icon{
		display: block;
		height: 40px;
		width: 40px;
		border: rgb(203, 228, 237) 10px solid;
		border-radius: 60px;
		margin: 0 auto;
	}
	.quick-links-container .icon::before{
		font-size: 30px;
		line-height: 40px;
		height: 40px;
		width: 40px;
		margin: 0 auto;
		display: block;
	}
	.quick-links-container .quick-link:hover{
		width: 64px;
		margin-left: 8px;
		margin-right: 8px;
	}
	.quick-links-container .quick-link:hover .icon{
		color: white;
		background-color: rgb(35, 145, 182);
		border-color: rgb(35, 145, 182);
	}
	.quick-links-container .quick-link:hover .title{
		color: rgb(35, 145, 182);
		font-size: 105%
	}
</style>
<script>
	jQuery(function(){
		var $ = jQuery;
		var $container = $('.quick-links-container');
		$container.width($container.width()).css('display', 'block');
	})
</script>
</ul>
<ul class="quick-links-container">
	<li class="quick-link">
		<a href="/page_cBHO87">
		<span class="oi icon" data-glyph="check"></span>
		<span class="title" href="/page_FfQp92">경영 방침</span></a>
	</li>
	<li class="quick-link">
		<a href="/board_nVOq20">
		<span class="oi icon" data-glyph="thumb-up"></span>
		<span class="title" href="/board_HiVa17">사업 영역</span></a>
	</li>
	<li class="quick-link">
		<a href="/history_page">
		<span class="oi icon" data-glyph="flag"></span>
		<span class="title" href="/heakan_history">주요연혁
		</span></a>
	</li>
	<li class="quick-link">
		<a href="/board_Xolq44">
		<span class="oi icon" data-glyph="envelope-open"></span>
		<span class="title" href="/board_qEkG77">CEO인사말</span></a>
	</li>
	<li class="quick-link">
		<a href="/board_oLWg36">
		<span class="oi icon" data-glyph="bullhorn"></span>
		<span class="title" href="/board_kELn76">공지사항</span></a>
	</li>
</ul>