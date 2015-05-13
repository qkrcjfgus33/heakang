<?php if(!defined("__XE__"))exit;?><style>
	.search{
		position: relative;
		display: inline-block;
		width: 150px;
		margin-left: 10px;
		padding: 0px;
		vertical-align: baseline;
	}
	.search .search-input{
		display: inline-block;
		width: 120px;
		height: 25px;
		padding: 0px;
		padding-left: 5px;
		border: rgba(0, 0, 0, 0) 0px solid;
	}
	.search .search-btn{
		display: inline-block;
		position: absolute;
		top: 0px;
		left: 125px;
		width: 30px;
		height: 25px;
		line-height: 25px;
		text-align: center;
		padding: 0px;
		margin: 0px;
	}
	.search .search-btn:hover{
		color: rgb(35, 145, 182);
		cursor: pointer;
	}
	.search .search-btn, .search .search-input{
		border-bottom: rgb(35, 145, 182) 2px solid;
	}
</style>
<form class="search" action="<?php echo getUrl() ?>" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="customTitle" value="검색결과" />
	<input type="hidden" name="onlyContent" value="true" />
	<input type="hidden" name="act" value="IS" />
	<input class="search-input" type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" placeholder="<?php echo $__Context->lang->cmd_search ?>" />
	<span class="oi search-btn" data-glyph="magnifying-glass"></span>
	<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" hidden/>
</form>
