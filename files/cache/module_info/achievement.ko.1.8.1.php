<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispAchievementContentList';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispAchievementAdminList';
$info->grant = new stdClass;
$info->grant->list = new stdClass;
$info->grant->list->title='목록';
$info->grant->list->default='guest';
$info->grant->view = new stdClass;
$info->grant->view->title='열람';
$info->grant->view->default='guest';
$info->grant->write = new stdClass;
$info->grant->write->title='입력';
$info->grant->write->default='guest';
$info->grant->delete = new stdClass;
$info->grant->delete->title='삭제';
$info->grant->delete->default='guest';
$info->permission = new stdClass;
$info->permission->dispAchievementAdminList = 'manager';
$info->permission->dispAchievementAdminInfoAchievement = 'manager';
$info->permission->dispAchievementAdminInsertAchievement = 'manager';
$info->permission->dispAchievementAdminDeleteAchievement = 'manager';
$info->permission->dispAchievementAdminGrantInfo = 'manager';
$info->permission->dispAchievementAdminSkinInfo = 'manager';
$info->permission->procAchievementAdminInsertAchievement = 'manager';
$info->permission->procAchievementAdminDeleteAchievement = 'manager';
$info->action = new stdClass;
$info->action->dispAchievementContentList = new stdClass;
$info->action->dispAchievementContentList->type='view';
$info->action->dispAchievementContentList->grant='guest';
$info->action->dispAchievementContentList->standalone='true';
$info->action->dispAchievementContentList->ruleset='';
$info->action->dispAchievementContentList->method='';
$info->action->dispAchievementContentView = new stdClass;
$info->action->dispAchievementContentView->type='view';
$info->action->dispAchievementContentView->grant='guest';
$info->action->dispAchievementContentView->standalone='true';
$info->action->dispAchievementContentView->ruleset='';
$info->action->dispAchievementContentView->method='';
$info->action->dispAchievementContentWrite = new stdClass;
$info->action->dispAchievementContentWrite->type='view';
$info->action->dispAchievementContentWrite->grant='guest';
$info->action->dispAchievementContentWrite->standalone='true';
$info->action->dispAchievementContentWrite->ruleset='';
$info->action->dispAchievementContentWrite->method='';
$info->action->dispAchievementContentDelete = new stdClass;
$info->action->dispAchievementContentDelete->type='view';
$info->action->dispAchievementContentDelete->grant='guest';
$info->action->dispAchievementContentDelete->standalone='true';
$info->action->dispAchievementContentDelete->ruleset='';
$info->action->dispAchievementContentDelete->method='';
$info->action->dispAchievementMessage = new stdClass;
$info->action->dispAchievementMessage->type='view';
$info->action->dispAchievementMessage->grant='guest';
$info->action->dispAchievementMessage->standalone='true';
$info->action->dispAchievementMessage->ruleset='';
$info->action->dispAchievementMessage->method='';
$info->action->procAchievementContentWrite = new stdClass;
$info->action->procAchievementContentWrite->type='controller';
$info->action->procAchievementContentWrite->grant='guest';
$info->action->procAchievementContentWrite->standalone='true';
$info->action->procAchievementContentWrite->ruleset='';
$info->action->procAchievementContentWrite->method='';
$info->action->procAchievementContentDelete = new stdClass;
$info->action->procAchievementContentDelete->type='controller';
$info->action->procAchievementContentDelete->grant='guest';
$info->action->procAchievementContentDelete->standalone='true';
$info->action->procAchievementContentDelete->ruleset='';
$info->action->procAchievementContentDelete->method='';
$info->action->dispAchievementAdminList = new stdClass;
$info->action->dispAchievementAdminList->type='view';
$info->action->dispAchievementAdminList->grant='guest';
$info->action->dispAchievementAdminList->standalone='true';
$info->action->dispAchievementAdminList->ruleset='';
$info->action->dispAchievementAdminList->method='';
$info->action->dispAchievementAdminInfoAchievement = new stdClass;
$info->action->dispAchievementAdminInfoAchievement->type='view';
$info->action->dispAchievementAdminInfoAchievement->grant='guest';
$info->action->dispAchievementAdminInfoAchievement->standalone='true';
$info->action->dispAchievementAdminInfoAchievement->ruleset='';
$info->action->dispAchievementAdminInfoAchievement->method='';
$info->action->dispAchievementAdminInsertAchievement = new stdClass;
$info->action->dispAchievementAdminInsertAchievement->type='view';
$info->action->dispAchievementAdminInsertAchievement->grant='guest';
$info->action->dispAchievementAdminInsertAchievement->standalone='true';
$info->action->dispAchievementAdminInsertAchievement->ruleset='';
$info->action->dispAchievementAdminInsertAchievement->method='';
$info->action->dispAchievementAdminDeleteAchievement = new stdClass;
$info->action->dispAchievementAdminDeleteAchievement->type='view';
$info->action->dispAchievementAdminDeleteAchievement->grant='guest';
$info->action->dispAchievementAdminDeleteAchievement->standalone='true';
$info->action->dispAchievementAdminDeleteAchievement->ruleset='';
$info->action->dispAchievementAdminDeleteAchievement->method='';
$info->action->dispAchievementAdminGrantInfo = new stdClass;
$info->action->dispAchievementAdminGrantInfo->type='view';
$info->action->dispAchievementAdminGrantInfo->grant='guest';
$info->action->dispAchievementAdminGrantInfo->standalone='true';
$info->action->dispAchievementAdminGrantInfo->ruleset='';
$info->action->dispAchievementAdminGrantInfo->method='';
$info->action->dispAchievementAdminSkinInfo = new stdClass;
$info->action->dispAchievementAdminSkinInfo->type='view';
$info->action->dispAchievementAdminSkinInfo->grant='guest';
$info->action->dispAchievementAdminSkinInfo->standalone='true';
$info->action->dispAchievementAdminSkinInfo->ruleset='';
$info->action->dispAchievementAdminSkinInfo->method='';
$info->action->procAchievementAdminInsertAchievement = new stdClass;
$info->action->procAchievementAdminInsertAchievement->type='controller';
$info->action->procAchievementAdminInsertAchievement->grant='guest';
$info->action->procAchievementAdminInsertAchievement->standalone='true';
$info->action->procAchievementAdminInsertAchievement->ruleset='';
$info->action->procAchievementAdminInsertAchievement->method='';
$info->action->procAchievementAdminDeleteAchievement = new stdClass;
$info->action->procAchievementAdminDeleteAchievement->type='controller';
$info->action->procAchievementAdminDeleteAchievement->grant='guest';
$info->action->procAchievementAdminDeleteAchievement->standalone='true';
$info->action->procAchievementAdminDeleteAchievement->ruleset='';
$info->action->procAchievementAdminDeleteAchievement->method='';
return $info;