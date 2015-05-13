<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateAchievement");
$query->setAction("update");
$query->setPriority("");
if(isset($args->achievement_srl)) {
${'achievement_srl1_argument'} = new Argument('achievement_srl', $args->{'achievement_srl'});
if(!${'achievement_srl1_argument'}->isValid()) return ${'achievement_srl1_argument'}->getErrorMessage();
} else
${'achievement_srl1_argument'} = NULL;if(${'achievement_srl1_argument'} !== null) ${'achievement_srl1_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
} else
${'module_srl2_argument'} = NULL;if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->achievement_class_srl)) {
${'achievement_class_srl3_argument'} = new Argument('achievement_class_srl', $args->{'achievement_class_srl'});
if(!${'achievement_class_srl3_argument'}->isValid()) return ${'achievement_class_srl3_argument'}->getErrorMessage();
} else
${'achievement_class_srl3_argument'} = NULL;if(${'achievement_class_srl3_argument'} !== null) ${'achievement_class_srl3_argument'}->setColumnType('number');
if(isset($args->achievement_title)) {
${'achievement_title4_argument'} = new Argument('achievement_title', $args->{'achievement_title'});
if(!${'achievement_title4_argument'}->isValid()) return ${'achievement_title4_argument'}->getErrorMessage();
} else
${'achievement_title4_argument'} = NULL;if(${'achievement_title4_argument'} !== null) ${'achievement_title4_argument'}->setColumnType('varchar');
if(isset($args->achievement_owner)) {
${'achievement_owner5_argument'} = new Argument('achievement_owner', $args->{'achievement_owner'});
if(!${'achievement_owner5_argument'}->isValid()) return ${'achievement_owner5_argument'}->getErrorMessage();
} else
${'achievement_owner5_argument'} = NULL;if(${'achievement_owner5_argument'} !== null) ${'achievement_owner5_argument'}->setColumnType('varchar');
if(isset($args->achievement_woncheongsa)) {
${'achievement_woncheongsa6_argument'} = new Argument('achievement_woncheongsa', $args->{'achievement_woncheongsa'});
if(!${'achievement_woncheongsa6_argument'}->isValid()) return ${'achievement_woncheongsa6_argument'}->getErrorMessage();
} else
${'achievement_woncheongsa6_argument'} = NULL;if(${'achievement_woncheongsa6_argument'} !== null) ${'achievement_woncheongsa6_argument'}->setColumnType('varchar');
if(isset($args->achievement_position)) {
${'achievement_position7_argument'} = new Argument('achievement_position', $args->{'achievement_position'});
if(!${'achievement_position7_argument'}->isValid()) return ${'achievement_position7_argument'}->getErrorMessage();
} else
${'achievement_position7_argument'} = NULL;if(${'achievement_position7_argument'} !== null) ${'achievement_position7_argument'}->setColumnType('varchar');
if(isset($args->achievement_start_date)) {
${'achievement_start_date8_argument'} = new Argument('achievement_start_date', $args->{'achievement_start_date'});
if(!${'achievement_start_date8_argument'}->isValid()) return ${'achievement_start_date8_argument'}->getErrorMessage();
} else
${'achievement_start_date8_argument'} = NULL;if(${'achievement_start_date8_argument'} !== null) ${'achievement_start_date8_argument'}->setColumnType('date');
if(isset($args->achievement_end_date)) {
${'achievement_end_date9_argument'} = new Argument('achievement_end_date', $args->{'achievement_end_date'});
if(!${'achievement_end_date9_argument'}->isValid()) return ${'achievement_end_date9_argument'}->getErrorMessage();
} else
${'achievement_end_date9_argument'} = NULL;if(${'achievement_end_date9_argument'} !== null) ${'achievement_end_date9_argument'}->setColumnType('date');

${'achievement_srl10_argument'} = new ConditionArgument('achievement_srl', $args->achievement_srl, 'equal');
${'achievement_srl10_argument'}->checkFilter('number');
${'achievement_srl10_argument'}->checkNotNull();
${'achievement_srl10_argument'}->createConditionValue();
if(!${'achievement_srl10_argument'}->isValid()) return ${'achievement_srl10_argument'}->getErrorMessage();
if(${'achievement_srl10_argument'} !== null) ${'achievement_srl10_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`achievement_srl`', ${'achievement_srl1_argument'})
,new UpdateExpression('`module_srl`', ${'module_srl2_argument'})
,new UpdateExpression('`achievement_class_srl`', ${'achievement_class_srl3_argument'})
,new UpdateExpression('`achievement_title`', ${'achievement_title4_argument'})
,new UpdateExpression('`achievement_owner`', ${'achievement_owner5_argument'})
,new UpdateExpression('`achievement_woncheongsa`', ${'achievement_woncheongsa6_argument'})
,new UpdateExpression('`achievement_position`', ${'achievement_position7_argument'})
,new UpdateExpression('`achievement_start_date`', ${'achievement_start_date8_argument'})
,new UpdateExpression('`achievement_end_date`', ${'achievement_end_date9_argument'})
));
$query->setTables(array(
new Table('`xe_achievement`', '`achievement`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`achievement_srl`',$achievement_srl10_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>