<?php if(!defined("__XE__"))exit;
if($__Context->oAchivementItemList&&count($__Context->oAchivementItemList))foreach($__Context->oAchivementItemList as $__Context->val){ ?>
<?php  $__Context->photo_src = $__Context->val->achieve_photo_list[0]->uploaded_filename ?>
    <a href="<?php echo getURL('','mid', $__Context->oAchivementMid, 'act','dispAchievementContentView','achievement_srl',$__Context->val->achievement_srl,'module_srl', $__Context->oAchivementSrl) ?>">
    <li class="post">
        <img src="<?php echo $__Context->photo_src ?>"/>
        <div class="title"><?php echo $__Context->val->achievement_title ?></div>
    </li>
    </a>
<?php } ?>