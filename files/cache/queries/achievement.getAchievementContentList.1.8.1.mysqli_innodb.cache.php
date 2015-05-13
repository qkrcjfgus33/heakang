<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAchievementContentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl21_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl21_argument'}->createConditionValue();
if(!${'module_srl21_argument'}->isValid()) return ${'module_srl21_argument'}->getErrorMessage();
} else
${'module_srl21_argument'} = NULL;if(${'module_srl21_argument'} !== null) ${'module_srl21_argument'}->setColumnType('number');

${'page23_argument'} = new Argument('page', $args->{'page'});
${'page23_argument'}->ensureDefaultValue('1');
if(!${'page23_argument'}->isValid()) return ${'page23_argument'}->getErrorMessage();

${'page_count24_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count24_argument'}->ensureDefaultValue('10');
if(!${'page_count24_argument'}->isValid()) return ${'page_count24_argument'}->getErrorMessage();

${'list_count25_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count25_argument'}->ensureDefaultValue('20');
if(!${'list_count25_argument'}->isValid()) return ${'list_count25_argument'}->getErrorMessage();

${'sort_index22_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index22_argument'}->ensureDefaultValue('achievement_srl');
if(!${'sort_index22_argument'}->isValid()) return ${'sort_index22_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`achievement_srl`')
,new SelectExpression('`achievement_class_srl`')
,new SelectExpression('`achievement_title`')
,new SelectExpression('`achievement_start_date`')
,new SelectExpression('`achievement_end_date`')
));
$query->setTables(array(
new Table('`xe_achievement`', '`achievement`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl21_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index22_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count25_argument'}, ${'page23_argument'}, ${'page_count24_argument'}));
return $query; ?>