<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl23_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl23_argument'}->checkFilter('number');
${'upload_target_srl23_argument'}->checkNotNull();
${'upload_target_srl23_argument'}->createConditionValue();
if(!${'upload_target_srl23_argument'}->isValid()) return ${'upload_target_srl23_argument'}->getErrorMessage();
if(${'upload_target_srl23_argument'} !== null) ${'upload_target_srl23_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid24_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid24_argument'}->createConditionValue();
if(!${'isvalid24_argument'}->isValid()) return ${'isvalid24_argument'}->getErrorMessage();
} else
${'isvalid24_argument'} = NULL;if(${'isvalid24_argument'} !== null) ${'isvalid24_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index25_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index25_argument'}->isValid()) return ${'sort_index25_argument'}->getErrorMessage();
} else
${'sort_index25_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl23_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid24_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index25_argument'}, "asc")
));
$query->setLimit();
return $query; ?>