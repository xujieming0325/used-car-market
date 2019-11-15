<?php

function html_index() {
global $db,$tpl ,$settings,$db_config;
$tpl ->assign('menustate',1);
$array_subbrand = select_subbrand($brandid = 0);
$array_brand_with_index = arr_brand_with_index();
$array_model = arr_model();
$array_year = arr_year();
$array_color = arr_color();
$array_gas = arr_gas();
$array_transmission = arr_transmission();
$select_brand = select_make('',$array_brand_with_index,'请选择品牌');
$select_subbrand = select_make('',$array_subbrand,'请选择子品牌');
$select_model = select_make('',$array_model,'');
$select_year = select_make('',$array_year,'年份');
$select_color = select_make('',$array_color,'请选择颜色');
$select_month = select_make('',array('01'=>'01月','02'=>'02月','03'=>'03月','04'=>'04月','05'=>'05月','06'=>'06月','07'=>'07月','08'=>'08月','09'=>'09月','10'=>'10月','11'=>'11月','12'=>'12月'),'月份','');
$select_gas = select_make('',$array_gas,'请选择排量');
$select_transmission = select_make('',$array_transmission,'请选择变速箱');
$select_country = select_make('',array('国产'=>'国产','进口'=>'进口'),'请选择');
$tpl ->assign('select_model',$select_model);
$tpl ->assign('select_year',$select_year);
$tpl ->assign('select_color',$select_color);
$tpl ->assign('select_month',$select_month);
$tpl ->assign('select_gas',$select_gas);
$tpl ->assign('select_transmission',$select_transmission);
$tpl ->assign('select_country',$select_country);
$brand_search = arr_brand_with_search();
$select_brand_search = select_make('',$brand_search,'请选择品牌');
$tpl->assign( 'selectbrandsearch',$select_brand_search );
$arr_p = array('1'=>'3万以下','2'=>'3-5万','3'=>'5-8万','4'=>'8-12万','5'=>'12-18万','6'=>'18-24万','7'=>'24-35万','8'=>'35-50万','9'=>'50-100万','10'=>'100万以上');
$tpl ->assign('arr_price',$arr_p);
$arr_a = array('1'=>'1年以内','2'=>'2年以内','3'=>'3年以内','4'=>'4年以内','5'=>'5年以内','6'=>'6年以内','7'=>'6年以上');
$tpl ->assign('arr_age',$arr_a);
$arr_g = array('1'=>'1.0L','2'=>'2.0L','3'=>'3.0L','4'=>'4.0L','5'=>'5.0L及以上');
$tpl ->assign('arr_gas',$arr_g);
$arr_b = arr_brand_recom();
$tpl ->assign('arr_brand',$arr_b);
$tpl ->assign('noticelist',get_comnews(8,4));
$tpl ->assign('filmlist',get_filmstrip(1));
$carlist = array();
$carlist['todaycar'] = get_todaycar();
$carlist['sjcar'] = get_carlist($data['cid'],"isrecom=1 and issell=0 and isshow=1 and uid in( select id from ".$db_config['TB_PREFIX'] ."member where isdealer=2 and ischeck=1)",'8','listtime desc');
$carlist['grcar'] = get_carlist($data['cid'],"isrecom=1 and issell=0 and p_mainpic!='' and isshow=1 and (uid in( select id from ".$db_config['TB_PREFIX'] ."member where isdealer=1) or uid=0)",'8','listtime desc');
$tpl ->assign('car_list',$carlist);
$tpl->assign( 'comdealer',get_comshop() );
$tpl->assign( 'hotdealer',get_hotshop() );
$newslist = array();
$newslist['1'] = get_comnews(1,8);
$newslist['2'] = get_comnews(2,8);
$newslist['3'] = get_comnews(3,8);
$newslist['4'] = get_comnews(4,8);
$tpl ->assign('newslist',$newslist);
$notice = get_comnews(5,4);
$tpl ->assign('noticelist',$notice);
$tpl ->assign('link_list',get_flink());
$tpl ->assign('hotkeywordlist',get_bottomkeywords());
$indexhtml = $tpl ->fetch('default/'.$settings['templates'].'/index.html');
$fp = fopen("index.html","w");
fwrite($fp,$indexhtml);
fclose($fp);
return true;
}
function html_news($id) {
global $db,$tpl,$settings;
$data = $db ->row_select_one('news',"n_id=".intval($id));
$data['addtime'] = date('Y-m-d H:i:s',$data['n_addtime']);
$category = $db ->row_select_one('news_category','catid='.$data['catid']);
$data['catname'] = $category['catname'];
$data['keywords']= $category['keywords'];
$data['description']= $category['description'];
$data['n_info'] = htmlspecialchars_decode($data['n_info']);
$tpl ->assign('news',$data);
$aboutnews['pre'] = $db ->row_select('news',"catid=".$data['catid'] ." and n_id<".$data['n_id'],'n_id,n_title,n_addtime','3','n_id desc');
$aboutnews['next'] = $db ->row_select('news',"catid=".$data['catid'] ." and n_id>".$data['n_id'],'n_id,n_title,n_addtime','3','n_id asc');
foreach($aboutnews as $key =>$value) {
foreach($value as $k =>$v) {
$aboutnews[$key][$k]['n_title'] = _substr($v['n_title'],0,70);
$aboutnews[$key][$k]['n_url'] = WEB_PATH."/news/".date('Ym',$v['n_addtime']) ."/".$v['n_id'].".html";
}
}
$tpl ->assign('aboutnewslist',$aboutnews);
$newshtml = $tpl ->fetch('default/'.$settings['templates'].'/news.html');
$newsdir = HTML_DIR."news/".date('Ym',$data['n_addtime'])."/";
if(!is_dir($newsdir)) createFolder($newsdir);
$fp = fopen($newsdir.$data['n_id'] .".html","w");
fwrite($fp,$newshtml);
fclose($fp);
return true;
}
function html_cars($id) {
global $db,$tpl;
$settings = settings();
$data = $db ->row_select_one('cars',"p_id=".intval($id));
$data['listtime'] = date('Y-m-d',$data['listtime']);
$data['p_page'] = !empty($data['p_page']) ?$data['p_page'] : $data['p_id'] .".html";
$data['p_details'] = htmlspecialchars_decode($data['p_details']);
if(!empty($data['p_model'])){
$category = $db ->row_select_one('model','s_id='.$data['p_model']);
$data['modelname'] = $category['s_name'];
}
if(!empty($value['p_mainpic'])){
$pic = explode(".",$value['p_mainpic']);
$list[$k] = $pic[0]."_small".".".$pic[1];
}
$carpiclist = array();
if (!empty($data['p_pics'])) {
$piclist = explode('|',$data['p_pics']);
foreach($piclist as $k =>$v){
$pic = explode(".",$v);
$carpiclist[$k]['pic'] = $v;
$carpiclist[$k]['smallpic'] = $pic[0]."_small".".".$pic[1];
}
$tpl ->assign('pic_list',$carpiclist);
}else {
$tpl ->assign('pic_list',"");
}
if($settings['version']==3){
if($data['cid']!=0){
$rs_city = $db->row_select_one('area','id='.$data['cid'],'name');
$data['city']=$rs_city['name'];
}
}
$paralist = $db ->row_select('selfdefine',"isshow=1",' id,type_name,type_value,c_name');
foreach($paralist as $key =>$value){
$para_value = $db ->row_select_one('selfdefine_value',"p_id=".$data['p_id'].' and c_id='.$value['id']);
if($value['type_name']=='checkbox'){
$checkvalue=str_replace("|",'',$para_value['c_value']);
$paralist[$key]['c_value'] = $checkvalue;
}
else{
$paralist[$key]['c_value'] = $para_value['c_value'];
}
}
$tpl->assign('paralist',$paralist);
$samecarlist = get_carlist($data['cid'],"issell=0 and isshow=1 and p_brand=".$data['p_brand']." and p_id!=".$id,'5','listtime desc');
$tpl ->assign('samecar',$samecarlist);
if (!empty($data['p_price'])) {
$where = "issell=0 and isshow=1 and p_id!=".$id;
if($data['p_price']>5){
$startprice = $data['p_price']-5;
}
else{
$startprice = $data['p_price'];
}
$endprice = $data['p_price']+5;
$where .= " and p_price>=".$startprice." and p_price<=".$endprice;
$samepricecarlist = get_carlist($data['cid'],$where,'5','listtime desc');
$tpl ->assign('samepricecars',$samepricecarlist);
}
$data['p_price'] = intval($data['p_price']) == 0 ?"面谈": "￥".$data['p_price']."万";
$tpl ->assign('cars',$data);
if($settings['version']==2 or $settings['version']==3){
if(!empty($data['uid'])){
$user = $db ->row_select_one('member','id='.$data['uid']);
$tpl ->assign('shop',$user);
$carcount[0] = $db ->row_count('cars','uid='.$data['uid']);
$carcount[1] = $db ->row_count('cars','uid='.$data['uid'].' and issell=1');
$carcount[2] = $carcount[0] -$carcount[1];
$tpl ->assign('carcount',$carcount);
}
}
$cardir = HTML_DIR."buycars/".date('Y/m/d',$data['p_addtime'])."/";
if (!is_dir($cardir)) createFolder($cardir);
$carshtml = $tpl ->fetch('default/'.$settings['templates'].'/cars.html');
$fp = fopen($cardir.$data['p_page'],"w");
fwrite($fp,$carshtml);
fclose($fp);
return true;
}
function html_rentcars($id) {
global $db,$tpl ,$settings;
$data = $db ->row_select_one('rentcars',"p_id=".intval($id));
$data['listtime'] = date('Y-m-d',$data['listtime']);
$data['p_page'] = !empty($data['p_page']) ?$data['p_page'] : $data['p_id'] .".html";
$data['p_details'] = htmlspecialchars_decode($data['p_details']);
if(!empty($data['p_model'])){
$category = $db ->row_select_one('rentmodel','s_id='.$data['p_model']);
$data['modelname'] = $category['s_name'];
}
$carpiclist = array();
if (!empty($data['p_pics'])) {
$piclist = explode('|',$data['p_pics']);
foreach($piclist as $k =>$v){
$pic = explode(".",$v);
$carpiclist[$k]['pic'] = $v;
$carpiclist[$k]['smallpic'] = $pic[0]."_small".".".$pic[1];
}
$tpl ->assign('pic_list',$carpiclist);
}else {
$tpl ->assign('pic_list',"");
}
if(!empty($data['cid'])){
$area = $db ->row_select_one('area','id = '.$data['cid']);
$data['area'] = $area['name'];
}
$tpl ->assign('cars',$data);
if(!empty($data['uid'])){
$user = $db ->row_select_one('member','id='.$data['uid']);
}
$tpl ->assign('shop',$user);
$cardir = HTML_DIR."rentcars/".date('Y/m/d',$data['p_addtime'])."/";
if (!is_dir($cardir)) createFolder($cardir);
$carshtml = $tpl ->fetch('default/'.$settings['templates'].'/rentcars.html');
$fp = fopen($cardir.$data['p_page'],"w");
fwrite($fp,$carshtml);
fclose($fp);
return true;
}
function html_qiugoucars($id) {
global $db,$tpl ,$settings;
$data = $db ->row_select_one('buycars',"p_id=".intval($id));
$data['addtime'] = date('Y-m-d',$data['p_addtime']);
$data['p_page'] = !empty($data['p_page']) ?$data['p_page'] : $data['p_id'] .".html";
$data['p_details'] = htmlspecialchars_decode($data['p_details']);
if(!empty($data['p_model'])){
$category = $db ->row_select_one('model','s_id='.$data['p_model']);
$data['modelname'] = $category['s_name'];
}
$arr_age_b = array('1'=>'1年以内','2'=>'2年以内','3'=>'3-5年','4'=>'5-8年','5'=>'8年以上');
$data['age'] = $arr_age_b[$data['p_age']];
if(!empty($value['p_mainpic'])){
$pic = explode(".",$value['p_mainpic']);
$list[$k] = $pic[0]."_small".".".$pic[1];
}
if (!empty($data['p_pics'])) {
$piclist = explode('|',$data['p_pics']);
$spiclist = array();
foreach($piclist as $k =>$v){
$pic = explode(".",$v);
$spiclist[$k] = $pic[0]."_small".".".$pic[1];
}
$tpl ->assign('pic_list',$piclist);
$tpl ->assign('spic_list',$spiclist);
}else {
$tpl ->assign('pic_list',"");
$tpl ->assign('spic_list',"");
}
if(!empty($data['cid'])){
$area = $db ->row_select_one('area','id = '.$data['cid']);
$data['area'] = $area['name'];
}
$tpl ->assign('cars',$data);
if(!empty($data['uid'])){
$user = $db ->row_select_one('member','id='.$data['uid']);
$tpl ->assign('shop',$user);
}
$cardir = HTML_DIR."qiugou/".date('Y/m/d',$data['p_addtime'])."/";
if (!is_dir($cardir)) createFolder($cardir);
$carshtml = $tpl ->fetch('default/'.$settings['templates'].'/qiugou.html');
$fp = fopen($cardir.$data['p_page'],"w");
fwrite($fp,$carshtml);
fclose($fp);
return true;
}
function html_page($id) {
global $db,$tpl,$settings;
$data = $db ->row_select_one('page',"p_id=".intval($id));
$list = $db ->row_select('page','s_id='.$data['s_id'],'*',0);
$tpl ->assign('pagelist',$list);
$sort = $db ->row_select_one('page_sorts','s_id='.$data['s_id']);
$data['sortname'] = $sort['s_name'];
$data['sorturl'] = $sort['s_dir'] ."/".$list[0]['p_page'];
if ($data['s_id'] == 1) {
$tpl ->assign('menustate',11);
}elseif ($data['s_id'] == 2) {
$tpl ->assign('menustate',10);
}elseif ($data['s_id'] == 3) {
$tpl ->assign('menustate',2);
}elseif ($data['s_id'] == 4) {
$tpl ->assign('menustate',13);
}
$data['p_page'] = !empty($data['p_page']) ?$data['p_page'] : $data['p_id'] .".html";
$data['p_info'] = htmlspecialchars_decode($data['p_info']);
$tpl ->assign('page',$data);
$tpl ->assign('pageid',$id);
if (!is_dir(HTML_DIR.$sort['s_dir'])) createFolder( HTML_DIR.$sort['s_dir']);
$pagehtml = $tpl ->fetch('default/'.$settings['templates'].'/'.$data['p_tql']);
$fp = fopen(HTML_DIR.$sort['s_dir'] ."/".$data['p_page'],"w");
fwrite($fp,$pagehtml);
fclose($fp);
return true;
}

?>