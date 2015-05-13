<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/achievement_preview/skins/default/achievement_preview.js--><?php $__tmp=array('widgets/achievement_preview/skins/default/achievement_preview.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
    .achivement-preview-container{
        padding: 20px 10px;
        width: 480px;
        height: 190px;
        white-space: nowrap;
    }
    .achivement-preview-container header{
        border-bottom: rgb(33, 150, 190) 3px solid;
        height: 25px;
    }
    .achivement-preview-container header .title{
        font-family: sans-serif;
        font-weight: bold;
        font-size: 15px;
        padding-left: 10px;
    }
    .achivement-preview-container header .more{
        text-decoration: none;
        float: right;
        background-color: rgb(33,150,190);
        margin: 0px;
        padding: 0px;
        width: 80px;
        height: 100%;
        line-height: 25px;
        text-align: center;
        font-weight: bold;
        color: white;
    }
    .achivement-preview-container header .more:hover{
        font-size: 95%;
        -webkit-transition: all .1s; /* Safari 3.1 to 6.0 */
        transition: all .1s;
    }
</style>
<style>
    .achivement-preview-container .achivement-list{
        color: black;
        padding: 10px 0px;
        margin: 5px 0px;
        height: 150px;
        white-space: nowrap;
        display: inline-block;
        position: relative;
        z-index: 1;
    }
    .achivement-preview-container .achivement-list .post{
        height: 25px;
        line-height: 25px;
        list-style-position: inside;
        cursor: pointer;
    }
    .achivement-preview-container .achivement-list a{
        text-decoration: none;
        color: black;
        -webkit-transition: color .5s;
        transition: shadow .5s;
    }
    .achivement-preview-container .achivement-list .post{
        line-height: 25px;
        list-style-position: inside;
        cursor: pointer;
        display: inline-block;
        width: 140px;
        box-shadow: 0px 0px 2px 0px #666;
        height: 140px;
        margin: 10px;
        border-radius: 2px;
        -webkit-transition: box-shadow .5s;
        transition: box-shadow .5s;
    }
    .achivement-preview-container .achivement-list .post>img{
        border: 0;
        width: 110px;
        height: 80px;
        margin: 10px auto 10px auto;
        display: block;
    }
    .achivement-preview-container .achivement-list .title{
        text-align: center;
        font-weight: bolder;
        font-size: 11px;
        padding-top: 5px;
    }
    .achivement-preview-effect-container{
        position: absolute;
        width: 480px;
        height: 170px;
        margin-top: 20px;
        white-space: nowrap;
    }
    .achivement-preview-effect-container .achivement-preview-effect-left{
        box-shadow: 0px 0px 10px 15px rgb(255, 255, 255);
        height: 150px;
        width: 10px;
        margin-left: -10px;
        display: inline-block;
        background-color: rgb(255, 255, 255);
        position: relative;
        z-index: 2;
    }
    .achivement-preview-effect-container .achivement-preview-effect-right{
        box-shadow: 0px 0px 10px 15px rgb(255, 255, 255);
        height: 150px;
        width: 10px;
        display: inline-block;
        margin-left: 480px;
        background-color: rgb(255, 255, 255);
        position: relative;
        z-index: 2;
    }
    .achivement-preview-container .achivement-list a:hover{
        color: rgb(35, 145, 182);
    }
    .achivement-preview-container .achivement-list a:hover .post{
        box-shadow: 0px 0px 4px 2px #666;
    }
</style>
<section class="achivement-preview-container">
    <header>
        <span class="title"><?php echo $__Context->oAchivementTitle ?></span>
        <a href="<?php echo getURL('','mid',$__Context->oAchivementMid) ?>" class="more">more +</a>
    </header>
    <section class="achivement-preview-effect-container">
        <div class="achivement-preview-effect-left"></div>
        <div class="achivement-preview-effect-right"></div>
    </section>
    <ul class="achivement-list slide-position-left-left">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/achievement_preview/skins/default','_achievement_preview_list.html') ?>
    </ul>
    <ul class="achivement-list slide-position-left">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/achievement_preview/skins/default','_achievement_preview_list.html') ?>
    </ul>
    <ul class="achivement-list slide-position-center">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/achievement_preview/skins/default','_achievement_preview_list.html') ?>
    </ul>
    <ul class="achivement-list slide-position-right">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/achievement_preview/skins/default','_achievement_preview_list.html') ?>
    </ul>
    <ul class="achivement-list slide-position-right-right">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/achievement_preview/skins/default','_achievement_preview_list.html') ?>
    </ul>
</section>