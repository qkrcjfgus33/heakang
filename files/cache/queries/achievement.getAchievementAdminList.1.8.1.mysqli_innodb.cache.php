<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getachievementAdminList");
$query->setAction("select");
$query->setPriority("");

${'page43_argument'} = new Argument('page', $args->{'page'});
${'page43_argument'}->ensureDefaultValue('1');
if(!${'page43_argument'}->isValid()) return ${'page43_argument'}->getErrorMessage();

${'page_count44_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count44_argument'}->ensureDefaultValue('10');
if(!${'page_count44_argument'}->isValid()) return ${'page_count44_argument'}->getErrorMessage();

${'list_count45_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count45_argument'}->ensureDefaultValue('20');
if(!${'list_count45_argument'}->isValid()) return ${'list_count45_argument'}->getErrorMessage();

${'sort_index42_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index42_argument'}->ensureDefaultValue('module_srl');
if(!${'sort_index42_argument'}->isValid()) return ${'sort_index42_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`module`',"'achievement'","equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index42_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count45_argument'}, ${'page43_argument'}, ${'page_count44_argument'}));
return $query; ?>