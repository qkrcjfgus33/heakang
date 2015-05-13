<?php if(!defined("__XE__"))exit;?><!--#JSPLUGIN:jquery.fileupload--><?php Context::loadJavascriptPlugin('jquery.fileupload'); ?>
<!--#JSPLUGIN:jquery.finderSelect--><?php Context::loadJavascriptPlugin('jquery.finderSelect'); ?>
<!--#JSPLUGIN:handlebars--><?php Context::loadJavascriptPlugin('handlebars'); ?>
<?php if($__Context->allow_fileupload){ ?><div id="xefu-container-<?php echo $__Context->editor_sequence ?>" class="xefu-container xe-clearfix" data-editor-sequence="<?php echo $__Context->editor_sequence ?>">
	
	<div class="xefu-dropzone">
		<p class="xefu-dropzone-message">여기에 파일을 끌어 놓거나 파일 첨부를 클릭하세요</p>
		<div>
			<span class="xefu-btn fileinput-button xefu-act-selectfile">
				<span><?php echo $__Context->lang->edit->upload_file ?></span>
				<input id="xe-fileupload" type="file" class="fileupload-processing " value="<?php echo $__Context->lang->edit->upload_file ?>" name="Filedata" data-auto-upload="true" data-editor-sequence="<?php echo $__Context->editor_sequence ?>" multiple />
			</span>
		</div>
		<p>파일 크기 제한 : <span class="allowed_filesize">0MB</span> <span>(허용 확장자 : <span class="allowed_filetypes">*.*</span>)</span></p>
		<p class="xefu-progress-status" style="display: none;">파일 업로드 중... (<span class="xefu-progress-percent">0%</span>)</p>
		<div class="xefu-progressbar" style="display: none;"><div></div></div>
	</div>
	
	<div class="xefu-controll xe-clearfix">
		<div style="float: left;">
			<span class="file_count">0</span>개 첨부 됨 (<span class="attached_size"></span> / <span class="allowed_attach_size"></span>)
		</div>
		<div style="float: right">
			<input type="button" class="xefu-btn xefu-act-link-selected" style=" vertical-align: middle; vertical-align: middle;" value="본문삽입">
			<input type="button" class="xefu-btn xefu-act-delete-selected" style=" vertical-align: middle; vertical-align: middle;" value="선택삭제">
		</div>
	</div>
	<div class="xefu-list">
		<div class="xefu-list-images">
			<ul>
			</ul>
		</div>
		<div class="xefu-list-files">
			<ul>
			</ul>
		</div>
	</div>
</div><?php } ?>
<script>
	jQuery(function($){
		// uploader
		<?php if($__Context->allow_fileupload){ ?>
		var setting = {
			maxFileSize: <?php echo $__Context->file_config->allowed_filesize ?>,
			limitMultiFileUploadSize: <?php echo $__Context->file_config->allowed_filesize ?>
		};
		var uploader = $('#xefu-container-<?php echo $__Context->editor_sequence ?>').xeUploader(setting);
		window.xe.msg_exceeds_limit_size = '<?php echo $__Context->lang->msg_exceeds_limit_size ?>';
		window.xe.msg_checked_file_is_deleted = '<?php echo $__Context->lang->msg_checked_file_is_deleted ?>';
		window.xe.msg_file_cart_is_null = '<?php echo $__Context->lang->msg_file_cart_is_null ?>';
		window.xe.msg_checked_file_is_deleted = '<?php echo $__Context->lang->msg_checked_file_is_deleted ?>';
		window.xe.msg_not_allowed_filetype = '<?php echo $__Context->lang->msg_not_allowed_filetype ?>';
		window.xe.msg_file_upload_error = '<?php echo $__Context->lang->msg_file_upload_error ?>';
		<?php } ?>
	});
</script>
