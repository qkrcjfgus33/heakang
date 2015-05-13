<?php
    if(!defined("__XE__")) exit();
    if($called_position == 'before_display_content') {
		Context::addCSSFile("./addons/xe-iconic/open-iconic/font/css/open-iconic.css", false);
    }
?>