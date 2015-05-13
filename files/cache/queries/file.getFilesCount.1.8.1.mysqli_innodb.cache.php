<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFilesCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->upload_target_srl)) {
${'upload_target_srl26_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl26_argument'}->checkFilter('number');
${'upload_target_srl26_argument'}->createConditionValue();
if(!${'upload_target_srl26_argument'}->isValid()) return ${'upload_target_srl26_argument'}->getErrorMessage();
} else
${'upload_target_srl26_argument'} = NULL;if(${'upload_target_srl26_argument'} !== null) ${'upload_target_srl26_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate27_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate27_argument'}->createConditionValue();
if(!${'regDate27_argument'}->isValid()) return ${'regDate27_argument'}->getErrorMessage();
} else
${'regDate27_argument'} = NULL;if(${'regDate27_argument'} !== null) ${'regDate27_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl26_argument,"equal")
,new ConditionWithArgument('`regdate`',$regDate27_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>