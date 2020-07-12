<?php
// $Id: xptblcheck.php,v 2.02m 2003/10/23 14:30:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//

global $db_error,$db_warning,$my_debug ;
global $shori_start,$pre_shori_start,$pre_judg_start ;
global $pre_arrkey_arr;
global $xptblcheck_db ;

/* show all sql check "ON" or "OFF" */
$my_debug = "OFF";

/*** Please change according to your environment. ***/

global $xgropid_arr;
$xgropid_arr =array() ;
//$xgropid_arr[1] =1 ;
//$xgropid_arr[2] =2 ;
//$xgropid_arr[3] =3 ;
$xgropid_arr[1] =XOOPS_GROUP_ADMIN ;
$xgropid_arr[2] =XOOPS_GROUP_USERS ;
$xgropid_arr[3] =XOOPS_GROUP_ANONYMOUS ;

//------------------------//
global $checkname;
global $strhanteimsg;
global $strcomment;

$checkname_arr = array();
$strhanteimsg_arr = array();
$strcomment_arr = array();
//------------------------//
global $pre_judgquerycount;
global $pre_judgquery;
global $pre_judgcriteria;

$pre_judgquerycount_arr = array();
$pre_judgquery_arr = array();
$pre_judgcriteria_arr = array();
//------------------------//
global $pre_query;
global $pre_criteria;
global $pre_keyname;

$pre_query_arr = array();
$pre_criteria_arr = array();
$pre_keyname_arr = array();
//------------------------//
global $main_query;
global $main_criteria;
global $main_keyname;

$query_arr = array();
$criteria_arr = array();
$keyname_arr = array();
//------------------------//

$db_error = 0;
$db_warning = 0;
$db_notice = 0;

if ( isset($HTTP_POST_VARS['op']) ) {
	$op = trim($HTTP_POST_VARS['op']);
} elseif ( isset($HTTP_GET_VARS['op']) ) {
	$op = trim($HTTP_GET_VARS['op']);
}
if (!isset($op) ) {
	$op = 'checkview';
}
if (empty($op) ) {
	$op = 'checkview';
}

if ( isset($HTTP_POST_VARS['list']) ) {
	$list = trim($HTTP_POST_VARS['list']);
} elseif ( isset($HTTP_GET_VARS['list']) ) {
	$list = trim($HTTP_GET_VARS['list']);
}
if (!isset($list) ) {
	$list = 'unknown';
}
if (empty($list) ) {
	$list = 'unknown';
}
// paramfile no
if ( isset($HTTP_POST_VARS['pno']) ) {
	$pno = trim($HTTP_POST_VARS['pno']);
} elseif ( isset($HTTP_GET_VARS['pno']) ) {
	$pno = trim($HTTP_GET_VARS['pno']);
}
if (!isset($pno) ) {
	$pno = 0;
}
if (empty($pno) ) {
	$pno = 0;
}

if ( isset($HTTP_POST_VARS['infoview']) ) {
	$infoview = trim($HTTP_POST_VARS['infoview']);
} elseif ( isset($HTTP_GET_VARS['infoview']) ) {
	$infoview = trim($HTTP_GET_VARS['infoview']);
}
if (!isset($infoview) ) {
	$infoview = 'unknown';
}
if (empty($infoview) ) {
	$infoview = 'unknown';
}

//*************** html start ************************//
//echo "<html>\n";
//echo "<head>\n";
//echo "<meta http-equiv='content-type' content='text/html; charset=euc-jp' />";
//echo "<meta http-equiv='content-language' content='ja' />";
//echo "<title>"._AM_XPTC_PAGETITLE."</title></head>";
//echo "<body>";
//*************** switch start ************************//
switch ($op) {
case "checkview":
//    echo "<h2>"._AM_XPTC_PAGETITLE."</h2>\n";
    echo _AM_XPTC_PAGECOMMENT;
	echo "<div align='left'>";

//*************** Connect start and include ************************//
include_once XOOPS_ROOT_PATH.'/modules/'. $xoopsModule->dirname().'/class/database/xptblcheck_db_class.php';

$xptblcheck_db = new xptblcheck_db_result();

//$xprefix = $xptblcheck_db->xptbl_prefix("");
//$xprefix = $xoopsDB->prefix("");
include_once XOOPS_ROOT_PATH.'/modules/'. $xoopsModule->dirname().'/include/functions.php';

//*************** xptblparam select ************************//
    display_tablehead();
/*** Please xptblparam Path :default same holder this php ***/ 
$strmsg1 = "" ;
$xptblparamPath = XOOPS_ROOT_PATH.'/modules/'.$xoopsModule->dirname().'/admin/' ;

if (! ($pno == 0)) {
    if (! include_once($xptblparamPath.'xptblparam'.$pno.'.php')) {
        //include_once('xptblparam.php');
        $strmsg1 .= _AM_XPTC_CHECKPATTERNTITLE." xptblparam".$pno." = Not Found : " ;
	}else {
		$strmsg1 .= _AM_XPTC_CHECKPATTERNTITLE." This is = xptblparam".$pno." : " ;	
	}
}else {
        include_once($xptblparamPath.'xptblparam.php');
        $strmsg1 .= _AM_XPTC_CHECKPATTERNTITLE." => default : " ;
}
    $strmsg1 .= "(&nbsp;&nbsp;" ;
    $strmsg1 .= "<a href='".$my_location."?pno=0'>default</a>" ;
    $strmsg1 .= ",&nbsp;&nbsp;" ;
    $strmsg1 .= "<a href='".$my_location."?pno=1'>xptblparam1</a>" ;
    $strmsg1 .= ",&nbsp;&nbsp;" ;
    $strmsg1 .= "<a href='".$my_location."?pno=2'>xptblparam2</a>" ;
    $strmsg1 .= ",&nbsp;&nbsp;" ;
    $strmsg1 .= "<a href='".$my_location."?pno=3'>xptblparam3</a>" ;
    $strmsg1 .= "&nbsp;&nbsp;)" ;
//    $strmsg1 .= "&nbsp;" ;
    	display_simplerow($strmsg1);
	display_tablefoot();

//check loop start ------------
	display_tablehead(1,1,_AM_XPTC_CHECKTABLETITLE);
//check loop
//    $i = 0;
/////    while ($i <= count($query_arr)) {
//    while ($i < 100 ) {
//		$i++;
	foreach (array_keys($query_arr) as $i) {
/*----------init  shori flag ------ */
    	unset($pre_arrkey_arr);

   		if (isset($query_arr[$i])) {
	    		$shori_start = true ;
		} else {
				$shori_start = false ;
				continue ;
   		}
   		if (isset($pre_keyname_arr[$i]) && isset($pre_query_arr[$i])) {
	    		$pre_shori_start = true ;
		} else {
				$pre_shori_start = false ;
   		}
        if ((isset($pre_judgquerycount_arr[$i])) && (isset($pre_judgquery_arr[$i]))){
			$pre_judg_start = true ;
        } else {
			$pre_judg_start = false ;
        } 
/*---------- paramater ------ */
		$pre_judgquerycount = isset($pre_judgquerycount_arr[$i]) ? $pre_judgquerycount_arr[$i] :null;
		$pre_judgquery = isset($pre_judgquery_arr[$i]) ? $pre_judgquery_arr[$i] :null;
		$pre_judgcriteria = isset($pre_judgcriteria_arr[$i]) ? $pre_judgcriteria_arr[$i] :null;

		$pre_query = isset($pre_query_arr[$i]) ? $pre_query_arr[$i] :null;
		$pre_criteria = isset($pre_criteria_arr[$i]) ? $pre_criteria_arr[$i] :null;
		$pre_keyname = isset($pre_keyname_arr[$i]) ? $pre_keyname_arr[$i] :null;

		$main_query = isset($query_arr[$i]) ? $query_arr[$i] :null;
		$main_criteria = isset($criteria_arr[$i]) ? $criteria_arr[$i] :null;
		$main_keyname = isset($keyname_arr[$i]) ? $keyname_arr[$i] :null;

		$checkname = isset($checkname_arr[$i]) ? $checkname_arr[$i] :null;
		$strhanteimsg = isset($strhanteimsg_arr[$i]) ? $strhanteimsg_arr[$i] :null;
		$strcomment = isset($strcomment_arr[$i]) ? $strcomment_arr[$i] :null;


/* ---------- chec main ------ */

	xcheck_mainsub($i,"checkview");

/* ----------while end mark ------ */
//    $xptblcheck_db->xptbl_freeRecordSet();
	}
//------------------------//
    if ($db_error ==0) { 
		$strmsg0 = _AM_XPTC_CHECKOKMSG;
		display_simplerow($strmsg0);
    } else {
		$strmsg0 = _AM_XPTC_CHECKNGMSG;
		display_simplerow($strmsg0);
    }

    if ($db_warning ==0) { 
		$strmsg0 = _AM_XPTC_WARNINGOKMSG;
		display_simplerow($strmsg0);
    } else {
		$strmsg0 = _AM_XPTC_WARNINGNGMSG;
		display_simplerow($strmsg0);
    }

    if ($db_notice ==0) { 
		$strmsg0 = _AM_XPTC_NOTICEOKMSG;
		display_simplerow($strmsg0);
    } else {
		$strmsg0 = _AM_XPTC_NOTICENGMSG;
		display_simplerow($strmsg0);
    }
	display_tablefoot();

//*************** check end ************************//
display_tablehead(1,NULL,_AM_XPTC_TABLEVIEWTITLE);
    $strmsg1 = "" ;
if ($pno < 2) {
	$tablename =  $xptblcheck_db->xptbl_prefix("groups");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("users");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("groups_users_link");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("group_permission");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("modules");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("newblocks");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("block_module_link");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("tplfile");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("tplsource");
	$strmsg1 .= "(".$tablename."),&nbsp;\n";
//	$strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("tplset");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("config");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("configcategory");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("configoption");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("avatar");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("avatar_user_link");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("xoopsnotifications");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("image");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("imagebody");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("imagecategory");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("imgset");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("online");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("priv_msgs");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("smiles");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("session");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("xoopscomments");
	$strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
    $strmsg1 .= "<br>" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("bannerclient");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("banner");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
	$tablename =  $xptblcheck_db->xptbl_prefix("bannerfinish");
    $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
} else {
    $tlistresult = $xptblcheck_db->xptbl_list_tables();
    $xptblcheck_db->xptbl_setResult($tlistresult);
    $tablescount=$xptblcheck_db->xptbl_getRowsNum($tlistresult);
    $i = 0;
    while ($i < $tablescount) {
        $tablename = $xptblcheck_db->xptbl_tablename($tlistresult, $i);
        $strmsg1 .= "<a href='".$my_location."?list=".$tablename."&amp;pno=".$pno."'>".$tablename."</a>,&nbsp;\n" ;
        $i++;
    }
    $xptblcheck_db->xptbl_freeRecordSet($tlistresult);
}
    	display_simplerow($strmsg1);
    if (!($list=="unknown")) {
    	$query ="SELECT * FROM ".$list ;
    	$result = xptblcheck_query_result("list",$query);
        if (isset($result)){  
    		display_simplerow(_AM_XPTC_TABLEVIEWNAMEM.":".$list."&nbsp;&nbsp;&nbsp;"._AM_XPTC_TABLEVIECOUNTM.":".$xptblcheck_db->xptbl_getRowsNum()); 
    		display_myquery_fields();
		    $xptblcheck_db->xptbl_freeRecordSet();
    	}
    }
    //*************** Connection Close  ************************//
    	display_tablefoot();
//    $xptblcheck_db->xptbl_close() ;
    //*************** infomation view ************************//
	display_tablehead(1,NULL,"php infomation view");
    $strmsg1 = "" ;
    $strmsg1 .= "<a href='".$my_location."?infoview=1"."&amp;list=".$list."&amp;pno=".$pno."'>"."phpinfo"."()"."</a>,&nbsp;\n" ;
    $strmsg1 .= "<a href='".$my_location."?infoview=2"."&amp;list=".$list."&amp;pno=".$pno."'>"."$"."xoopsConfig"."</a>,&nbsp;\n" ;
    $strmsg1 .= "<a href='".$my_location."?infoview=3"."&amp;list=".$list."&amp;pno=".$pno."'>"."$"."HTTP_SESSION_VARS"."</a>,&nbsp;\n" ;
    $strmsg1 .= "<a href='".$my_location."?infoview=4"."&amp;list=".$list."&amp;pno=".$pno."'>"."$"."HTTP_COOKIE_VARS"."</a>,&nbsp;\n" ;
	display_simplerow($strmsg1);
	display_tablefoot();	

        //*************** phpinfo *******************//
    	switch ($infoview) {
        case 1:
//        	echo "<div align='left'>"; 
        	echo "(php logo is not displayed at this phpinfo:this is no problem)";
        	phpinfo();
//        	echo "</div>";
        	break;
        case 2:
        	global $xoopsConfig;
        	display_showalarraysub("$"."xoopsConfig",$xoopsConfig);
        	break;
        case 3:
        	display_showalarraysub("$"."HTTP_SESSION_VARS",$HTTP_SESSION_VARS);
        	break;
        case 4:
        	display_showalarraysub("$"."HTTP_COOKIE_VARS",$HTTP_COOKIE_VARS);
			display_tablehead(1,NULL,"document¡¡cookie view");
        	echo "<tr><td>";
        	echo "<script type='text/javascript'>\n";
        	echo "<!--\n";
        	echo "this.document.write(this.document.cookie)\n";
        	echo "-->\n";
        	echo "</script>\n";
        	echo "</td></tr>";
			display_tablefoot();
        	break;
        default:
            break;
        }
//*************** op switch end **********************//
    //*************** Checking Finishedt ************************//
    echo "<h2>Checking Finished!!</h2>";
}
//*************** html end ************************//
//echo "</body>";
//echo "</html>";
?>