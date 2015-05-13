<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAchievementClassTitle");
$query->setAction("select");
$query->setPriority("");
if(isset($args->achievement_class_srl)) {
${'achievement_class_srl26_argument'} = new ConditionArgument('achievement_class_srl', $args->achievement_class_srl, 'equal');
${'achievement_class_srl26_argument'}->createConditionValue();
if(!${'achievement_class_srl26_argument'}->isValid()) return ${'achievement_class_srl26_argument'}->getErrorMessage();
} else
${'achievement_class_srl26_argument'} = NULL;if(${'achievement_class_srl26_argument'} !== null) ${'achievement_class_srl26_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`class_title`')
));
$query->setTables(array(
new Table('`xe_achieve_class`', '`achieve_class`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`achievement_class_srl`',$achievement_class_srl26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>