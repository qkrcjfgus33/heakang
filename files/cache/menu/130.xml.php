<?php define('__XE__', true); require_once('C:/APM_Setup/htdocs/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="132" parent_srl="0" menu_name_key='해강건설소개' text="<?php if(true) { $_names = array("en"=>'해강건설소개',"ko"=>'해강건설소개',"jp"=>'해강건설소개',"zh-CN"=>'해강건설소개',"zh-TW"=>'해강건설소개',"fr"=>'해강건설소개',"de"=>'해강건설소개',"ru"=>'해강건설소개',"es"=>'해강건설소개',"tr"=>'해강건설소개',"vi"=>'해강건설소개',"mn"=>'해강건설소개',); print $_names[$lang_type]; }?>" url="<?php print(true?"folder_lOJe99":"")?>" href="<?php print(true?getSiteUrl('', '','mid','folder_lOJe99'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="134" parent_srl="132" menu_name_key='CEO 인사말' text="<?php if(true) { $_names = array("en"=>'CEO 인사말',"ko"=>'CEO 인사말',"jp"=>'CEO 인사말',"zh-CN"=>'CEO 인사말',"zh-TW"=>'CEO 인사말',"fr"=>'CEO 인사말',"de"=>'CEO 인사말',"ru"=>'CEO 인사말',"es"=>'CEO 인사말',"tr"=>'CEO 인사말',"vi"=>'CEO 인사말',"mn"=>'CEO 인사말',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_Xolq44":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_Xolq44'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="149" parent_srl="132" menu_name_key='경영방침' text="<?php if(true) { $_names = array("en"=>'CEO 인사말',"ko"=>'CEO 인사말',"jp"=>'CEO 인사말',"zh-CN"=>'CEO 인사말',"zh-TW"=>'CEO 인사말',"fr"=>'CEO 인사말',"de"=>'CEO 인사말',"ru"=>'CEO 인사말',"es"=>'CEO 인사말',"tr"=>'CEO 인사말',"vi"=>'CEO 인사말',"mn"=>'CEO 인사말',"en"=>'경영방침',"ko"=>'경영방침',"jp"=>'경영방침',"zh-CN"=>'경영방침',"zh-TW"=>'경영방침',"fr"=>'경영방침',"de"=>'경영방침',"ru"=>'경영방침',"es"=>'경영방침',"tr"=>'경영방침',"vi"=>'경영방침',"mn"=>'경영방침',); print $_names[$lang_type]; }?>" url="<?php print(true?"page_cBHO87":"")?>" href="<?php print(true?getSiteUrl('', '','mid','page_cBHO87'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="194" parent_srl="132" menu_name_key='주요연혁' text="<?php if(true) { $_names = array("en"=>'CEO 인사말',"ko"=>'CEO 인사말',"jp"=>'CEO 인사말',"zh-CN"=>'CEO 인사말',"zh-TW"=>'CEO 인사말',"fr"=>'CEO 인사말',"de"=>'CEO 인사말',"ru"=>'CEO 인사말',"es"=>'CEO 인사말',"tr"=>'CEO 인사말',"vi"=>'CEO 인사말',"mn"=>'CEO 인사말',"en"=>'경영방침',"ko"=>'경영방침',"jp"=>'경영방침',"zh-CN"=>'경영방침',"zh-TW"=>'경영방침',"fr"=>'경영방침',"de"=>'경영방침',"ru"=>'경영방침',"es"=>'경영방침',"tr"=>'경영방침',"vi"=>'경영방침',"mn"=>'경영방침',"en"=>'주요연혁',"ko"=>'주요연혁',"jp"=>'주요연혁',"zh-CN"=>'주요연혁',"zh-TW"=>'주요연혁',"fr"=>'주요연혁',"de"=>'주요연혁',"ru"=>'주요연혁',"es"=>'주요연혁',"tr"=>'주요연혁',"vi"=>'주요연혁',"mn"=>'주요연혁',); print $_names[$lang_type]; }?>" url="<?php print(true?"history_page":"")?>" href="<?php print(true?getSiteUrl('', '','mid','history_page'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="196" parent_srl="132" menu_name_key='조직도' text="<?php if(true) { $_names = array("en"=>'CEO 인사말',"ko"=>'CEO 인사말',"jp"=>'CEO 인사말',"zh-CN"=>'CEO 인사말',"zh-TW"=>'CEO 인사말',"fr"=>'CEO 인사말',"de"=>'CEO 인사말',"ru"=>'CEO 인사말',"es"=>'CEO 인사말',"tr"=>'CEO 인사말',"vi"=>'CEO 인사말',"mn"=>'CEO 인사말',"en"=>'경영방침',"ko"=>'경영방침',"jp"=>'경영방침',"zh-CN"=>'경영방침',"zh-TW"=>'경영방침',"fr"=>'경영방침',"de"=>'경영방침',"ru"=>'경영방침',"es"=>'경영방침',"tr"=>'경영방침',"vi"=>'경영방침',"mn"=>'경영방침',"en"=>'주요연혁',"ko"=>'주요연혁',"jp"=>'주요연혁',"zh-CN"=>'주요연혁',"zh-TW"=>'주요연혁',"fr"=>'주요연혁',"de"=>'주요연혁',"ru"=>'주요연혁',"es"=>'주요연혁',"tr"=>'주요연혁',"vi"=>'주요연혁',"mn"=>'주요연혁',"en"=>'조직도',"ko"=>'조직도',"jp"=>'조직도',"zh-CN"=>'조직도',"zh-TW"=>'조직도',"fr"=>'조직도',"de"=>'조직도',"ru"=>'조직도',"es"=>'조직도',"tr"=>'조직도',"vi"=>'조직도',"mn"=>'조직도',); print $_names[$lang_type]; }?>" url="<?php print(true?"page_lWuQ85":"")?>" href="<?php print(true?getSiteUrl('', '','mid','page_lWuQ85'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="198" parent_srl="132" menu_name_key='찾아오시는 길' text="<?php if(true) { $_names = array("en"=>'CEO 인사말',"ko"=>'CEO 인사말',"jp"=>'CEO 인사말',"zh-CN"=>'CEO 인사말',"zh-TW"=>'CEO 인사말',"fr"=>'CEO 인사말',"de"=>'CEO 인사말',"ru"=>'CEO 인사말',"es"=>'CEO 인사말',"tr"=>'CEO 인사말',"vi"=>'CEO 인사말',"mn"=>'CEO 인사말',"en"=>'경영방침',"ko"=>'경영방침',"jp"=>'경영방침',"zh-CN"=>'경영방침',"zh-TW"=>'경영방침',"fr"=>'경영방침',"de"=>'경영방침',"ru"=>'경영방침',"es"=>'경영방침',"tr"=>'경영방침',"vi"=>'경영방침',"mn"=>'경영방침',"en"=>'주요연혁',"ko"=>'주요연혁',"jp"=>'주요연혁',"zh-CN"=>'주요연혁',"zh-TW"=>'주요연혁',"fr"=>'주요연혁',"de"=>'주요연혁',"ru"=>'주요연혁',"es"=>'주요연혁',"tr"=>'주요연혁',"vi"=>'주요연혁',"mn"=>'주요연혁',"en"=>'조직도',"ko"=>'조직도',"jp"=>'조직도',"zh-CN"=>'조직도',"zh-TW"=>'조직도',"fr"=>'조직도',"de"=>'조직도',"ru"=>'조직도',"es"=>'조직도',"tr"=>'조직도',"vi"=>'조직도',"mn"=>'조직도',"en"=>'찾아오시는 길',"ko"=>'찾아오시는 길',"jp"=>'찾아오시는 길',"zh-CN"=>'찾아오시는 길',"zh-TW"=>'찾아오시는 길',"fr"=>'찾아오시는 길',"de"=>'찾아오시는 길',"ru"=>'찾아오시는 길',"es"=>'찾아오시는 길',"tr"=>'찾아오시는 길',"vi"=>'찾아오시는 길',"mn"=>'찾아오시는 길',); print $_names[$lang_type]; }?>" url="<?php print(true?"page_cyyg96":"")?>" href="<?php print(true?getSiteUrl('', '','mid','page_cyyg96'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="151" parent_srl="0" menu_name_key='사업분야' text="<?php if(true) { $_names = array("en"=>'해강건설소개',"ko"=>'해강건설소개',"jp"=>'해강건설소개',"zh-CN"=>'해강건설소개',"zh-TW"=>'해강건설소개',"fr"=>'해강건설소개',"de"=>'해강건설소개',"ru"=>'해강건설소개',"es"=>'해강건설소개',"tr"=>'해강건설소개',"vi"=>'해강건설소개',"mn"=>'해강건설소개',"en"=>'사업분야',"ko"=>'사업분야',"jp"=>'사업분야',"zh-CN"=>'사업분야',"zh-TW"=>'사업분야',"fr"=>'사업분야',"de"=>'사업분야',"ru"=>'사업분야',"es"=>'사업분야',"tr"=>'사업분야',"vi"=>'사업분야',"mn"=>'사업분야',); print $_names[$lang_type]; }?>" url="<?php print(true?"folder_IPfl05":"")?>" href="<?php print(true?getSiteUrl('', '','mid','folder_IPfl05'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="200" parent_srl="151" menu_name_key='사업영역' text="<?php if(true) { $_names = array("en"=>'사업영역',"ko"=>'사업영역',"jp"=>'사업영역',"zh-CN"=>'사업영역',"zh-TW"=>'사업영역',"fr"=>'사업영역',"de"=>'사업영역',"ru"=>'사업영역',"es"=>'사업영역',"tr"=>'사업영역',"vi"=>'사업영역',"mn"=>'사업영역',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_nVOq20":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_nVOq20'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="202" parent_srl="151" menu_name_key='등록증' text="<?php if(true) { $_names = array("en"=>'사업영역',"ko"=>'사업영역',"jp"=>'사업영역',"zh-CN"=>'사업영역',"zh-TW"=>'사업영역',"fr"=>'사업영역',"de"=>'사업영역',"ru"=>'사업영역',"es"=>'사업영역',"tr"=>'사업영역',"vi"=>'사업영역',"mn"=>'사업영역',"en"=>'등록증',"ko"=>'등록증',"jp"=>'등록증',"zh-CN"=>'등록증',"zh-TW"=>'등록증',"fr"=>'등록증',"de"=>'등록증',"ru"=>'등록증',"es"=>'등록증',"tr"=>'등록증',"vi"=>'등록증',"mn"=>'등록증',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_bEeS47":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_bEeS47'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="204" parent_srl="151" menu_name_key='확인서' text="<?php if(true) { $_names = array("en"=>'사업영역',"ko"=>'사업영역',"jp"=>'사업영역',"zh-CN"=>'사업영역',"zh-TW"=>'사업영역',"fr"=>'사업영역',"de"=>'사업영역',"ru"=>'사업영역',"es"=>'사업영역',"tr"=>'사업영역',"vi"=>'사업영역',"mn"=>'사업영역',"en"=>'등록증',"ko"=>'등록증',"jp"=>'등록증',"zh-CN"=>'등록증',"zh-TW"=>'등록증',"fr"=>'등록증',"de"=>'등록증',"ru"=>'등록증',"es"=>'등록증',"tr"=>'등록증',"vi"=>'등록증',"mn"=>'등록증',"en"=>'확인서',"ko"=>'확인서',"jp"=>'확인서',"zh-CN"=>'확인서',"zh-TW"=>'확인서',"fr"=>'확인서',"de"=>'확인서',"ru"=>'확인서',"es"=>'확인서',"tr"=>'확인서',"vi"=>'확인서',"mn"=>'확인서',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_BNAh62":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_BNAh62'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="206" parent_srl="151" menu_name_key='표창장' text="<?php if(true) { $_names = array("en"=>'사업영역',"ko"=>'사업영역',"jp"=>'사업영역',"zh-CN"=>'사업영역',"zh-TW"=>'사업영역',"fr"=>'사업영역',"de"=>'사업영역',"ru"=>'사업영역',"es"=>'사업영역',"tr"=>'사업영역',"vi"=>'사업영역',"mn"=>'사업영역',"en"=>'등록증',"ko"=>'등록증',"jp"=>'등록증',"zh-CN"=>'등록증',"zh-TW"=>'등록증',"fr"=>'등록증',"de"=>'등록증',"ru"=>'등록증',"es"=>'등록증',"tr"=>'등록증',"vi"=>'등록증',"mn"=>'등록증',"en"=>'확인서',"ko"=>'확인서',"jp"=>'확인서',"zh-CN"=>'확인서',"zh-TW"=>'확인서',"fr"=>'확인서',"de"=>'확인서',"ru"=>'확인서',"es"=>'확인서',"tr"=>'확인서',"vi"=>'확인서',"mn"=>'확인서',"en"=>'표창장',"ko"=>'표창장',"jp"=>'표창장',"zh-CN"=>'표창장',"zh-TW"=>'표창장',"fr"=>'표창장',"de"=>'표창장',"ru"=>'표창장',"es"=>'표창장',"tr"=>'표창장',"vi"=>'표창장',"mn"=>'표창장',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_OYPu72":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_OYPu72'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="208" parent_srl="151" menu_name_key='인증서' text="<?php if(true) { $_names = array("en"=>'사업영역',"ko"=>'사업영역',"jp"=>'사업영역',"zh-CN"=>'사업영역',"zh-TW"=>'사업영역',"fr"=>'사업영역',"de"=>'사업영역',"ru"=>'사업영역',"es"=>'사업영역',"tr"=>'사업영역',"vi"=>'사업영역',"mn"=>'사업영역',"en"=>'등록증',"ko"=>'등록증',"jp"=>'등록증',"zh-CN"=>'등록증',"zh-TW"=>'등록증',"fr"=>'등록증',"de"=>'등록증',"ru"=>'등록증',"es"=>'등록증',"tr"=>'등록증',"vi"=>'등록증',"mn"=>'등록증',"en"=>'확인서',"ko"=>'확인서',"jp"=>'확인서',"zh-CN"=>'확인서',"zh-TW"=>'확인서',"fr"=>'확인서',"de"=>'확인서',"ru"=>'확인서',"es"=>'확인서',"tr"=>'확인서',"vi"=>'확인서',"mn"=>'확인서',"en"=>'표창장',"ko"=>'표창장',"jp"=>'표창장',"zh-CN"=>'표창장',"zh-TW"=>'표창장',"fr"=>'표창장',"de"=>'표창장',"ru"=>'표창장',"es"=>'표창장',"tr"=>'표창장',"vi"=>'표창장',"mn"=>'표창장',"en"=>'인증서',"ko"=>'인증서',"jp"=>'인증서',"zh-CN"=>'인증서',"zh-TW"=>'인증서',"fr"=>'인증서',"de"=>'인증서',"ru"=>'인증서',"es"=>'인증서',"tr"=>'인증서',"vi"=>'인증서',"mn"=>'인증서',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_vCsc89":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_vCsc89'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="153" parent_srl="0" menu_name_key='공사실적' text="<?php if(true) { $_names = array("en"=>'해강건설소개',"ko"=>'해강건설소개',"jp"=>'해강건설소개',"zh-CN"=>'해강건설소개',"zh-TW"=>'해강건설소개',"fr"=>'해강건설소개',"de"=>'해강건설소개',"ru"=>'해강건설소개',"es"=>'해강건설소개',"tr"=>'해강건설소개',"vi"=>'해강건설소개',"mn"=>'해강건설소개',"en"=>'사업분야',"ko"=>'사업분야',"jp"=>'사업분야',"zh-CN"=>'사업분야',"zh-TW"=>'사업분야',"fr"=>'사업분야',"de"=>'사업분야',"ru"=>'사업분야',"es"=>'사업분야',"tr"=>'사업분야',"vi"=>'사업분야',"mn"=>'사업분야',"en"=>'공사실적',"ko"=>'공사실적',"jp"=>'공사실적',"zh-CN"=>'공사실적',"zh-TW"=>'공사실적',"fr"=>'공사실적',"de"=>'공사실적',"ru"=>'공사실적',"es"=>'공사실적',"tr"=>'공사실적',"vi"=>'공사실적',"mn"=>'공사실적',); print $_names[$lang_type]; }?>" url="<?php print(true?"folder_UXBQ34":"")?>" href="<?php print(true?getSiteUrl('', '','mid','folder_UXBQ34'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="175" parent_srl="153" menu_name_key='주요공사실적' text="<?php if(true) { $_names = array("en"=>'주요공사실적',"ko"=>'주요공사실적',"jp"=>'주요공사실적',"zh-CN"=>'주요공사실적',"zh-TW"=>'주요공사실적',"fr"=>'주요공사실적',"de"=>'주요공사실적',"ru"=>'주요공사실적',"es"=>'주요공사실적',"tr"=>'주요공사실적',"vi"=>'주요공사실적',"mn"=>'주요공사실적',); print $_names[$lang_type]; }?>" url="<?php print(true?"achievement_page":"")?>" href="<?php print(true?getSiteUrl('', '','mid','achievement_page'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="155" parent_srl="0" menu_name_key='고객지원' text="<?php if(true) { $_names = array("en"=>'해강건설소개',"ko"=>'해강건설소개',"jp"=>'해강건설소개',"zh-CN"=>'해강건설소개',"zh-TW"=>'해강건설소개',"fr"=>'해강건설소개',"de"=>'해강건설소개',"ru"=>'해강건설소개',"es"=>'해강건설소개',"tr"=>'해강건설소개',"vi"=>'해강건설소개',"mn"=>'해강건설소개',"en"=>'사업분야',"ko"=>'사업분야',"jp"=>'사업분야',"zh-CN"=>'사업분야',"zh-TW"=>'사업분야',"fr"=>'사업분야',"de"=>'사업분야',"ru"=>'사업분야',"es"=>'사업분야',"tr"=>'사업분야',"vi"=>'사업분야',"mn"=>'사업분야',"en"=>'공사실적',"ko"=>'공사실적',"jp"=>'공사실적',"zh-CN"=>'공사실적',"zh-TW"=>'공사실적',"fr"=>'공사실적',"de"=>'공사실적',"ru"=>'공사실적',"es"=>'공사실적',"tr"=>'공사실적',"vi"=>'공사실적',"mn"=>'공사실적',"en"=>'고객지원',"ko"=>'고객지원',"jp"=>'고객지원',"zh-CN"=>'고객지원',"zh-TW"=>'고객지원',"fr"=>'고객지원',"de"=>'고객지원',"ru"=>'고객지원',"es"=>'고객지원',"tr"=>'고객지원',"vi"=>'고객지원',"mn"=>'고객지원',); print $_names[$lang_type]; }?>" url="<?php print(true?"folder_vdje43":"")?>" href="<?php print(true?getSiteUrl('', '','mid','folder_vdje43'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="187" parent_srl="155" menu_name_key='개인정보취급방침' text="<?php if(true) { $_names = array("en"=>'개인정보취급방침',"ko"=>'개인정보취급방침',"jp"=>'개인정보취급방침',"zh-CN"=>'개인정보취급방침',"zh-TW"=>'개인정보취급방침',"fr"=>'개인정보취급방침',"de"=>'개인정보취급방침',"ru"=>'개인정보취급방침',"es"=>'개인정보취급방침',"tr"=>'개인정보취급방침',"vi"=>'개인정보취급방침',"mn"=>'개인정보취급방침',); print $_names[$lang_type]; }?>" url="<?php print(true?"page_Fqff05":"")?>" href="<?php print(true?getSiteUrl('', '','mid','page_Fqff05'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="271" parent_srl="155" menu_name_key='이메일무단수집거부' text="<?php if(true) { $_names = array("en"=>'개인정보취급방침',"ko"=>'개인정보취급방침',"jp"=>'개인정보취급방침',"zh-CN"=>'개인정보취급방침',"zh-TW"=>'개인정보취급방침',"fr"=>'개인정보취급방침',"de"=>'개인정보취급방침',"ru"=>'개인정보취급방침',"es"=>'개인정보취급방침',"tr"=>'개인정보취급방침',"vi"=>'개인정보취급방침',"mn"=>'개인정보취급방침',"en"=>'이메일무단수집거부',"ko"=>'이메일무단수집거부',"jp"=>'이메일무단수집거부',"zh-CN"=>'이메일무단수집거부',"zh-TW"=>'이메일무단수집거부',"fr"=>'이메일무단수집거부',"de"=>'이메일무단수집거부',"ru"=>'이메일무단수집거부',"es"=>'이메일무단수집거부',"tr"=>'이메일무단수집거부',"vi"=>'이메일무단수집거부',"mn"=>'이메일무단수집거부',); print $_names[$lang_type]; }?>" url="<?php print(true?"page_QTtu66":"")?>" href="<?php print(true?getSiteUrl('', '','mid','page_QTtu66'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="210" parent_srl="155" menu_name_key='문의하기' text="<?php if(true) { $_names = array("en"=>'개인정보취급방침',"ko"=>'개인정보취급방침',"jp"=>'개인정보취급방침',"zh-CN"=>'개인정보취급방침',"zh-TW"=>'개인정보취급방침',"fr"=>'개인정보취급방침',"de"=>'개인정보취급방침',"ru"=>'개인정보취급방침',"es"=>'개인정보취급방침',"tr"=>'개인정보취급방침',"vi"=>'개인정보취급방침',"mn"=>'개인정보취급방침',"en"=>'이메일무단수집거부',"ko"=>'이메일무단수집거부',"jp"=>'이메일무단수집거부',"zh-CN"=>'이메일무단수집거부',"zh-TW"=>'이메일무단수집거부',"fr"=>'이메일무단수집거부',"de"=>'이메일무단수집거부',"ru"=>'이메일무단수집거부',"es"=>'이메일무단수집거부',"tr"=>'이메일무단수집거부',"vi"=>'이메일무단수집거부',"mn"=>'이메일무단수집거부',"en"=>'문의하기',"ko"=>'문의하기',"jp"=>'문의하기',"zh-CN"=>'문의하기',"zh-TW"=>'문의하기',"fr"=>'문의하기',"de"=>'문의하기',"ru"=>'문의하기',"es"=>'문의하기',"tr"=>'문의하기',"vi"=>'문의하기',"mn"=>'문의하기',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_wPYb31":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_wPYb31'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="157" parent_srl="0" menu_name_key='해강소식' text="<?php if(true) { $_names = array("en"=>'해강건설소개',"ko"=>'해강건설소개',"jp"=>'해강건설소개',"zh-CN"=>'해강건설소개',"zh-TW"=>'해강건설소개',"fr"=>'해강건설소개',"de"=>'해강건설소개',"ru"=>'해강건설소개',"es"=>'해강건설소개',"tr"=>'해강건설소개',"vi"=>'해강건설소개',"mn"=>'해강건설소개',"en"=>'사업분야',"ko"=>'사업분야',"jp"=>'사업분야',"zh-CN"=>'사업분야',"zh-TW"=>'사업분야',"fr"=>'사업분야',"de"=>'사업분야',"ru"=>'사업분야',"es"=>'사업분야',"tr"=>'사업분야',"vi"=>'사업분야',"mn"=>'사업분야',"en"=>'공사실적',"ko"=>'공사실적',"jp"=>'공사실적',"zh-CN"=>'공사실적',"zh-TW"=>'공사실적',"fr"=>'공사실적',"de"=>'공사실적',"ru"=>'공사실적',"es"=>'공사실적',"tr"=>'공사실적',"vi"=>'공사실적',"mn"=>'공사실적',"en"=>'고객지원',"ko"=>'고객지원',"jp"=>'고객지원',"zh-CN"=>'고객지원',"zh-TW"=>'고객지원',"fr"=>'고객지원',"de"=>'고객지원',"ru"=>'고객지원',"es"=>'고객지원',"tr"=>'고객지원',"vi"=>'고객지원',"mn"=>'고객지원',"en"=>'해강소식',"ko"=>'해강소식',"jp"=>'해강소식',"zh-CN"=>'해강소식',"zh-TW"=>'해강소식',"fr"=>'해강소식',"de"=>'해강소식',"ru"=>'해강소식',"es"=>'해강소식',"tr"=>'해강소식',"vi"=>'해강소식',"mn"=>'해강소식',); print $_names[$lang_type]; }?>" url="<?php print(true?"folder_KYlr59":"")?>" href="<?php print(true?getSiteUrl('', '','mid','folder_KYlr59'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="181" parent_srl="157" menu_name_key='공지사항' text="<?php if(true) { $_names = array("en"=>'공지사항',"ko"=>'공지사항',"jp"=>'공지사항',"zh-CN"=>'공지사항',"zh-TW"=>'공지사항',"fr"=>'공지사항',"de"=>'공지사항',"ru"=>'공지사항',"es"=>'공지사항',"tr"=>'공지사항',"vi"=>'공지사항',"mn"=>'공지사항',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_oLWg36":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_oLWg36'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="183" parent_srl="157" menu_name_key='인재채용' text="<?php if(true) { $_names = array("en"=>'공지사항',"ko"=>'공지사항',"jp"=>'공지사항',"zh-CN"=>'공지사항',"zh-TW"=>'공지사항',"fr"=>'공지사항',"de"=>'공지사항',"ru"=>'공지사항',"es"=>'공지사항',"tr"=>'공지사항',"vi"=>'공지사항',"mn"=>'공지사항',"en"=>'인재채용',"ko"=>'인재채용',"jp"=>'인재채용',"zh-CN"=>'인재채용',"zh-TW"=>'인재채용',"fr"=>'인재채용',"de"=>'인재채용',"ru"=>'인재채용',"es"=>'인재채용',"tr"=>'인재채용',"vi"=>'인재채용',"mn"=>'인재채용',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_aZoC54":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_aZoC54'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="185" parent_srl="157" menu_name_key='보도자료' text="<?php if(true) { $_names = array("en"=>'공지사항',"ko"=>'공지사항',"jp"=>'공지사항',"zh-CN"=>'공지사항',"zh-TW"=>'공지사항',"fr"=>'공지사항',"de"=>'공지사항',"ru"=>'공지사항',"es"=>'공지사항',"tr"=>'공지사항',"vi"=>'공지사항',"mn"=>'공지사항',"en"=>'인재채용',"ko"=>'인재채용',"jp"=>'인재채용',"zh-CN"=>'인재채용',"zh-TW"=>'인재채용',"fr"=>'인재채용',"de"=>'인재채용',"ru"=>'인재채용',"es"=>'인재채용',"tr"=>'인재채용',"vi"=>'인재채용',"mn"=>'인재채용',"en"=>'보도자료',"ko"=>'보도자료',"jp"=>'보도자료',"zh-CN"=>'보도자료',"zh-TW"=>'보도자료',"fr"=>'보도자료',"de"=>'보도자료',"ru"=>'보도자료',"es"=>'보도자료',"tr"=>'보도자료',"vi"=>'보도자료',"mn"=>'보도자료',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_CDLG62":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_CDLG62'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="212" parent_srl="0" menu_name_key='관리' text="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))) { $_names = array("en"=>'해강건설소개',"ko"=>'해강건설소개',"jp"=>'해강건설소개',"zh-CN"=>'해강건설소개',"zh-TW"=>'해강건설소개',"fr"=>'해강건설소개',"de"=>'해강건설소개',"ru"=>'해강건설소개',"es"=>'해강건설소개',"tr"=>'해강건설소개',"vi"=>'해강건설소개',"mn"=>'해강건설소개',"en"=>'사업분야',"ko"=>'사업분야',"jp"=>'사업분야',"zh-CN"=>'사업분야',"zh-TW"=>'사업분야',"fr"=>'사업분야',"de"=>'사업분야',"ru"=>'사업분야',"es"=>'사업분야',"tr"=>'사업분야',"vi"=>'사업분야',"mn"=>'사업분야',"en"=>'공사실적',"ko"=>'공사실적',"jp"=>'공사실적',"zh-CN"=>'공사실적',"zh-TW"=>'공사실적',"fr"=>'공사실적',"de"=>'공사실적',"ru"=>'공사실적',"es"=>'공사실적',"tr"=>'공사실적',"vi"=>'공사실적',"mn"=>'공사실적',"en"=>'고객지원',"ko"=>'고객지원',"jp"=>'고객지원',"zh-CN"=>'고객지원',"zh-TW"=>'고객지원',"fr"=>'고객지원',"de"=>'고객지원',"ru"=>'고객지원',"es"=>'고객지원',"tr"=>'고객지원',"vi"=>'고객지원',"mn"=>'고객지원',"en"=>'해강소식',"ko"=>'해강소식',"jp"=>'해강소식',"zh-CN"=>'해강소식',"zh-TW"=>'해강소식',"fr"=>'해강소식',"de"=>'해강소식',"ru"=>'해강소식',"es"=>'해강소식',"tr"=>'해강소식',"vi"=>'해강소식',"mn"=>'해강소식',"en"=>'관리',"ko"=>'관리',"jp"=>'관리',"zh-CN"=>'관리',"zh-TW"=>'관리',"fr"=>'관리',"de"=>'관리',"ru"=>'관리',"es"=>'관리',"tr"=>'관리',"vi"=>'관리',"mn"=>'관리',); print $_names[$lang_type]; }?>" url="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))?"folder_nAGz61":"")?>" href="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))?getSiteUrl('', '','mid','folder_nAGz61'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="214" parent_srl="212" menu_name_key='설명문서' text="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))) { $_names = array("en"=>'설명문서',"ko"=>'설명문서',"jp"=>'설명문서',"zh-CN"=>'설명문서',"zh-TW"=>'설명문서',"fr"=>'설명문서',"de"=>'설명문서',"ru"=>'설명문서',"es"=>'설명문서',"tr"=>'설명문서',"vi"=>'설명문서',"mn"=>'설명문서',); print $_names[$lang_type]; }?>" url="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))?"page_vYqD06":"")?>" href="<?php print(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))?getSiteUrl('', '','mid','page_vYqD06'):"")?>" is_shortcut="N" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(-3))))||($is_logged&&0))) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="215" parent_srl="212" menu_name_key='메인슬라이더 관리' text="<?php if(true) { $_names = array("en"=>'설명문서',"ko"=>'설명문서',"jp"=>'설명문서',"zh-CN"=>'설명문서',"zh-TW"=>'설명문서',"fr"=>'설명문서',"de"=>'설명문서',"ru"=>'설명문서',"es"=>'설명문서',"tr"=>'설명문서',"vi"=>'설명문서',"mn"=>'설명문서',"en"=>'메인슬라이더 관리',"ko"=>'메인슬라이더 관리',"jp"=>'메인슬라이더 관리',"zh-CN"=>'메인슬라이더 관리',"zh-TW"=>'메인슬라이더 관리',"fr"=>'메인슬라이더 관리',"de"=>'메인슬라이더 관리',"ru"=>'메인슬라이더 관리',"es"=>'메인슬라이더 관리',"tr"=>'메인슬라이더 관리',"vi"=>'메인슬라이더 관리',"mn"=>'메인슬라이더 관리',); print $_names[$lang_type]; }?>" url="<?php print(true?"slider_board":"")?>" href="<?php print(true?getSiteUrl('', '','mid','slider_board'):"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="216" parent_srl="212" menu_name_key='메뉴수정' text="<?php if(true) { $_names = array("en"=>'설명문서',"ko"=>'설명문서',"jp"=>'설명문서',"zh-CN"=>'설명문서',"zh-TW"=>'설명문서',"fr"=>'설명문서',"de"=>'설명문서',"ru"=>'설명문서',"es"=>'설명문서',"tr"=>'설명문서',"vi"=>'설명문서',"mn"=>'설명문서',"en"=>'메인슬라이더 관리',"ko"=>'메인슬라이더 관리',"jp"=>'메인슬라이더 관리',"zh-CN"=>'메인슬라이더 관리',"zh-TW"=>'메인슬라이더 관리',"fr"=>'메인슬라이더 관리',"de"=>'메인슬라이더 관리',"ru"=>'메인슬라이더 관리',"es"=>'메인슬라이더 관리',"tr"=>'메인슬라이더 관리',"vi"=>'메인슬라이더 관리',"mn"=>'메인슬라이더 관리',"en"=>'메뉴수정',"ko"=>'메뉴수정',"jp"=>'메뉴수정',"zh-CN"=>'메뉴수정',"zh-TW"=>'메뉴수정',"fr"=>'메뉴수정',"de"=>'메뉴수정',"ru"=>'메뉴수정',"es"=>'메뉴수정',"tr"=>'메뉴수정',"vi"=>'메뉴수정',"mn"=>'메뉴수정',); print $_names[$lang_type]; }?>" url="<?php print(true?"./?mid=page_vYqD06&amp;act=dispMenuAdminSiteMap&amp;customTitle=메뉴수정":"")?>" href="<?php print(true?"./?mid=page_vYqD06&amp;act=dispMenuAdminSiteMap&amp;customTitle=메뉴수정":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="217" parent_srl="212" menu_name_key='디자인설정' text="<?php if(true) { $_names = array("en"=>'설명문서',"ko"=>'설명문서',"jp"=>'설명문서',"zh-CN"=>'설명문서',"zh-TW"=>'설명문서',"fr"=>'설명문서',"de"=>'설명문서',"ru"=>'설명문서',"es"=>'설명문서',"tr"=>'설명문서',"vi"=>'설명문서',"mn"=>'설명문서',"en"=>'메인슬라이더 관리',"ko"=>'메인슬라이더 관리',"jp"=>'메인슬라이더 관리',"zh-CN"=>'메인슬라이더 관리',"zh-TW"=>'메인슬라이더 관리',"fr"=>'메인슬라이더 관리',"de"=>'메인슬라이더 관리',"ru"=>'메인슬라이더 관리',"es"=>'메인슬라이더 관리',"tr"=>'메인슬라이더 관리',"vi"=>'메인슬라이더 관리',"mn"=>'메인슬라이더 관리',"en"=>'메뉴수정',"ko"=>'메뉴수정',"jp"=>'메뉴수정',"zh-CN"=>'메뉴수정',"zh-TW"=>'메뉴수정',"fr"=>'메뉴수정',"de"=>'메뉴수정',"ru"=>'메뉴수정',"es"=>'메뉴수정',"tr"=>'메뉴수정',"vi"=>'메뉴수정',"mn"=>'메뉴수정',"en"=>'디자인설정',"ko"=>'디자인설정',"jp"=>'디자인설정',"zh-CN"=>'디자인설정',"zh-TW"=>'디자인설정',"fr"=>'디자인설정',"de"=>'디자인설정',"ru"=>'디자인설정',"es"=>'디자인설정',"tr"=>'디자인설정',"vi"=>'디자인설정',"mn"=>'디자인설정',); print $_names[$lang_type]; }?>" url="<?php print(true?"./?mid=page_vYqD06&amp;act=dispMenuAdminSiteDesign&amp;customTitle=디자인설정":"")?>" href="<?php print(true?"./?mid=page_vYqD06&amp;act=dispMenuAdminSiteDesign&amp;customTitle=디자인설정":"")?>" is_shortcut="Y" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node></root>