<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAchievementContent");
$query->setAction("select");
$query->setPriority("");
if(isset($args->achievement_srl)) {
${'achievement_srl21_argument'} = new ConditionArgument('achievement_srl', $args->achievement_srl, 'equal');
${'achievement_srl21_argument'}->createConditionValue();
if(!${'achievement_srl21_argument'}->isValid()) return ${'achievement_srl21_argument'}->getErrorMessage();
} else
${'achievement_srl21_argument'} = NULL;if(${'achievement_srl21_argument'} !== null) ${'achievement_srl21_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_achievement`', '`achievement`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`achievement_srl`',$achievement_srl21_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>