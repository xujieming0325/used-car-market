<?php

require_once $smarty->_get_plugin_filepath('shared','make_timestamp');
function smarty_modifier_date_format($string,$format = '%b %e, %Y',$default_date = '')
{
if ($string != '') {
$timestamp = smarty_make_timestamp($string);
}elseif ($default_date != '') {
$timestamp = smarty_make_timestamp($default_date);
}else {
return;
}
if (DIRECTORY_SEPARATOR == '\\') {
$_win_from = array('%D','%h','%n','%r','%R','%t','%T');
$_win_to   = array('%m/%d/%y','%b',"\n",'%I:%M:%S %p','%H:%M',"\t",'%H:%M:%S');
if (strpos($format,'%e') !== false) {
$_win_from[] = '%e';
$_win_to[]   = sprintf('%\' 2d',date('j',$timestamp));
}
if (strpos($format,'%l') !== false) {
$_win_from[] = '%l';
$_win_to[]   = sprintf('%\' 2d',date('h',$timestamp));
}
$format = str_replace($_win_from,$_win_to,$format);
}
return strftime($format,$timestamp);
}

?>