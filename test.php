<?php
define('IN_ECS',1);
require('includes/init.php');
$act = $_REQUEST['act'];
if($act == 'test')
{
	//取出所有用户
	$sql = "SELECT * FROM {$ecs->table('users')}";
	$users = $db->getAll($sql);
		var_dump($users);
}