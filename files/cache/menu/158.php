<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[160] = array("en"=>"Home","ko"=>"Home","jp"=>"Home","zh-CN"=>"Home","zh-TW"=>"Home","fr"=>"Home","de"=>"Home","ru"=>"Home","es"=>"Home","tr"=>"Home","vi"=>"Home","mn"=>"Home",); $_menu_names[163] = array("en"=>"찾아오시는길","ko"=>"찾아오시는길","jp"=>"찾아오시는길","zh-CN"=>"찾아오시는길","zh-TW"=>"찾아오시는길","fr"=>"찾아오시는길","de"=>"찾아오시는길","ru"=>"찾아오시는길","es"=>"찾아오시는길","tr"=>"찾아오시는길","vi"=>"찾아오시는길","mn"=>"찾아오시는길",); $_menu_names[164] = array("en"=>"고객센터","ko"=>"고객센터","jp"=>"고객센터","zh-CN"=>"고객센터","zh-TW"=>"고객센터","fr"=>"고객센터","de"=>"고객센터","ru"=>"고객센터","es"=>"고객센터","tr"=>"고객센터","vi"=>"고객센터","mn"=>"고객센터",); ; $menu->list = array(160=>array("node_srl"=>"160","parent_srl"=>"0","menu_name_key"=>'Home',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[160][$lang_type]:""),"href"=>(true?"./":""),"url"=>(true?"./":""),"is_shortcut"=>"Y","open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("./")&&in_array(Context::get("mid"),array("./"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("./")&&in_array(Context::get("mid"),array("./")) ?$_menu_names[160][$lang_type]:$_menu_names[160][$lang_type]):""),),163=>array("node_srl"=>"163","parent_srl"=>"0","menu_name_key"=>'찾아오시는길',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[163][$lang_type]:""),"href"=>(true?"./":""),"url"=>(true?"./":""),"is_shortcut"=>"Y","open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("./")&&in_array(Context::get("mid"),array("./"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("./")&&in_array(Context::get("mid"),array("./")) ?$_menu_names[163][$lang_type]:$_menu_names[163][$lang_type]):""),),164=>array("node_srl"=>"164","parent_srl"=>"0","menu_name_key"=>'고객센터',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[164][$lang_type]:""),"href"=>(true?"./":""),"url"=>(true?"./":""),"is_shortcut"=>"Y","open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("./")&&in_array(Context::get("mid"),array("./"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("./")&&in_array(Context::get("mid"),array("./")) ?$_menu_names[164][$lang_type]:$_menu_names[164][$lang_type]):""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>