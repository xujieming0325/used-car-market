<?php

if (!defined('APP_IN')) exit('Access Denied');
$arr_admin_type = array('administrator'=>'超级管理员','admin'=>'管理员');
$data = $db->row_select_one('admin',"adminid=".$_SESSION['ADMIN_UID']);
$data['admintype'] = $arr_admin_type[$data['admin_type']];
$data['last_login_time'] = date('Y-m-d H:i:s',$data['last_login_time']);
$tpl ->assign('admin',$data);
$sysinfo = array();
$sysinfo['system'] = PHP_OS;
$sysinfo['software'] = $_SERVER['SERVER_SOFTWARE'];
$sysinfo['mysql'] = mysql_get_server_info();
$tpl ->assign('sysinfo',$sysinfo);
$tpl ->display('admin/index.html');
?>