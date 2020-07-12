<?php
// $Id: functions.php,v 2.02g 2003/10/15 15:50:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
//----------- for $HTTP_SESSION_VARS debug show block -------------//
function b_xptblcheck_DebugShow1()
{
global $HTTP_SESSION_VARS;

	$block['content'] = '' ;
	$block['content'] .= b_xptblcheck_showarraysub("$"."HTTP_SESSION_VARS",$HTTP_SESSION_VARS);

	return $block ;
}

//----------- for $xoopsModule debug show block -------------//
function b_xptblcheck_DebugShow2()
{
global $xoopsModule;
	
	$block['content'] = '' ;
	$temp_arr = array();
if (isset($xoopsModule)) {
	$temp_arr['mid'] = $xoopsModule->getVar('mid');
	$temp_arr['name'] = $xoopsModule->getVar('name');
	$temp_arr['version'] = $xoopsModule->getVar('version');
	//$temp_arr['last_update'] = $xoopsModule->getVar('last_update');
	$temp_arr['last_update'] = date( 'r' , $xoopsModule->getVar('last_update') );
	
	$temp_arr['weight'] = $xoopsModule->getVar('weight');
	$temp_arr['isactive'] = $xoopsModule->getVar('isactive');
	$temp_arr['dirname'] = $xoopsModule->getVar('dirname');
	$temp_arr['hasmain'] = $xoopsModule->getVar('hasmain');
	$temp_arr['hasadmin'] = $xoopsModule->getVar('hasadmin');
	$temp_arr['hassearch'] = $xoopsModule->getVar('hassearch');
	$temp_arr['hasconfig'] = $xoopsModule->getVar('hasconfig');
	$temp_arr['hascomments'] = $xoopsModule->getVar('hascomments');
	$temp_arr['hasnotification'] = $xoopsModule->getVar('hasnotification');
}	
	$block['content'] = '' ;
	$block['content'] .= b_xptblcheck_showarraysub("$"."xoopsModule",$temp_arr);

	return $block ;
}

//----------- for $xoopsConfig debug show block -------------//
function b_xptblcheck_DebugShow3()
{
global $xoopsConfig;

	$block['content'] = '' ;
	$block['content'] .= b_xptblcheck_showarraysub("$"."xoopsConfig",$xoopsConfig);

	return $block ;
}
/* ------------ globalarraysub layout --------- */
function b_xptblcheck_showarraysub($strmsg1,$array1) {
	$ret = "" ;
	$ret .= "<div>" ;
	$ret .= b_xptblcheck_tablehead(1,$strmsg1);
    if (is_array($array1)){
    	foreach ($array1 as $k => $v) {
    		if (is_array($v)){
				$ret .= "<tr><td>\n";
    			$ret .= b_xptblcheck_showarraysub($k,$v);
				$ret .= "</td></tr>\n";
    		} else {
    			$ret .= b_xptblcheck_simplerow("['".$k."'] => ".$v);
	    	}
    	}
    } else {  	
    	$ret .= b_xptblcheck_simplerow($strmsg1." == ".$array1);
    }
   	$ret .= b_xptblcheck_tablefoot();
	$ret .= "</div>" ;
	return $ret ;
}
/* ------------ table head layout --------- */
function b_xptblcheck_tablehead($border1=NULL,$strmsg1=NULL) {
	$ret = "" ;
	if (isset($border1)) {
		$ret .= "<table border=".$border1.">\n";
	} else { 
		$ret .= "<table border=0>\n";
	}
	if (isset($strmsg1)) {
		$ret .= "<caption>".$strmsg1."</caption>\n";
	}
	$ret .= "<tbody>";
	return $ret ;
}
/* ------------ table simple one column layout --------- */
function b_xptblcheck_simplerow($strmsg1) {
	$ret = "" ;
	$ret .= "<tr>\n";
		if (isset($strmsg1)) {
			$ret .= "<td colspan=5>".$strmsg1."</td>";
		} else {
			$ret .= "<td>&nbsp;</td>\n";
		}
	$ret .= "</tr>\n";
	return $ret ;
}/* ------------ table foot layout --------- */
function b_xptblcheck_tablefoot() {
	$ret = "" ;
	$ret .= "</tbody></table>\n";
	return $ret ;
}
?>