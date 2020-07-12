<?php
// $Id: xptblparam1.php,,v 2.02m 2003/10/23 14:30:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups");

$checkname_arr[1] = "trash";
$query_arr[1] = "SELECT * FROM ".$tablename;
$criteria_arr[1] = "groupid IS NULL" ;
$strhanteimsg_arr[1] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[1] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("users");

$checkname_arr[2] = "trash";
$query_arr[2] = "SELECT * FROM ".$tablename;
$criteria_arr[2] = "uid IS NULL" ;
$strhanteimsg_arr[2] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[2] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups_users_link");

$checkname_arr[3] = "trash";
$query_arr[3] = "SELECT * FROM ".$tablename;
$criteria_arr[3] = "linkid IS NULL" ;
$strhanteimsg_arr[3] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[3] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups_users_link");

$checkname_arr[4] = "trash";
$query_arr[4] = "SELECT * FROM ".$tablename;
$criteria_arr[4] = "groupid IS NULL" ;
$strhanteimsg_arr[4] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[4] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups_users_link");

$checkname_arr[5] = "trash";
$query_arr[5] = "SELECT * FROM ".$tablename;
$criteria_arr[5] = "uid IS NULL" ;
$strhanteimsg_arr[5] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[5] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[6] = "trash";
$query_arr[6] = "SELECT * FROM ".$tablename;
$criteria_arr[6] = "gperm_id IS NULL" ;
$strhanteimsg_arr[6] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[6] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[7] = "trash";
$query_arr[7] = "SELECT * FROM ".$tablename;
$criteria_arr[7] = "gperm_groupid IS NULL" ;
$strhanteimsg_arr[7] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[7] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[8] = "trash";
$query_arr[8] = "SELECT * FROM ".$tablename;
$criteria_arr[8] = "gperm_itemid IS NULL" ;
$strhanteimsg_arr[8] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[8] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("modules");

$checkname_arr[9] = "trash";
$query_arr[9] = "SELECT * FROM ".$tablename;
$criteria_arr[9] = "mid IS NULL" ;
$strhanteimsg_arr[9] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[9] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("newblocks");

$checkname_arr[10] = "trash";
$query_arr[10] = "SELECT * FROM ".$tablename;
$criteria_arr[10] = "bid IS NULL" ;
$strhanteimsg_arr[10] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[10] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("newblocks");

$checkname_arr[11] = "trash";
$query_arr[11] = "SELECT * FROM ".$tablename;
$criteria_arr[11] = "mid IS NULL" ;
$strhanteimsg_arr[11] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[11] = $strdefcomment[1]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("block_module_link");

$checkname_arr[12] = "trash";
$query_arr[12] = "SELECT * FROM ".$tablename;
$criteria_arr[12] = "block_id IS NULL" ;
$strhanteimsg_arr[12] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[12] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("block_module_link");

$checkname_arr[13] = "trash";
$query_arr[13] = "SELECT * FROM ".$tablename;
$criteria_arr[13] = "module_id IS NULL" ;
$strhanteimsg_arr[13] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[13] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
//nul check  ------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("avatar");

$checkname_arr[34] = "trash";
$query_arr[34] = "SELECT * FROM ".$tablename;
$criteria_arr[34] = "avatar_id IS NULL" ;
$strhanteimsg_arr[34] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[34] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("avatar_user_link");

$checkname_arr[35] = "trash";
$query_arr[35] = "SELECT * FROM ".$tablename;
$criteria_arr[35] = "avatar_id IS NULL" ;
$strhanteimsg_arr[35] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[35] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("avatar_user_link");

$checkname_arr[36] = "trash";
$query_arr[36] = "SELECT * FROM ".$tablename;
$criteria_arr[36] = "user_id IS NULL" ;
$strhanteimsg_arr[36] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[36] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplfile");

$checkname_arr[40] = "trash";
$query_arr[40] = "SELECT * FROM ".$tablename;
$criteria_arr[40] = "tpl_id IS NULL" ;
$strhanteimsg_arr[40] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[40] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplfile");

$checkname_arr[41] = "trash";
$query_arr[41] = "SELECT * FROM ".$tablename;
$criteria_arr[41] = "tpl_refid IS NULL" ;
$strhanteimsg_arr[41] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[41] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplsource");

$checkname_arr[42] = "trash";
$query_arr[42] = "SELECT * FROM ".$tablename;
$criteria_arr[42] = "tpl_id IS NULL" ;
$strhanteimsg_arr[42] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[42] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("config");

$checkname_arr[47] = "trash";
$query_arr[47] = "SELECT * FROM ".$tablename;
$criteria_arr[47] = "conf_id IS NULL" ;
$strhanteimsg_arr[47] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[47] = $strdefcomment[1]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("config");

$checkname_arr[48] = "trash";
$query_arr[48] = "SELECT * FROM ".$tablename;
$criteria_arr[48] = "conf_catid IS NULL" ;
$strhanteimsg_arr[48] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[48] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("config");

$checkname_arr[49] = "trash";
$query_arr[49] = "SELECT * FROM ".$tablename;
$criteria_arr[49] = "conf_modid IS NULL" ;
$strhanteimsg_arr[49] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[49] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("configcategory");

$checkname_arr[50] = "trash";
$query_arr[50] = "SELECT * FROM ".$tablename;
$criteria_arr[50] = "confcat_id IS NULL" ;
$strhanteimsg_arr[50] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[50] = $strdefcomment[1]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("configoption");

$checkname_arr[53] = "trash";
$query_arr[53] = "SELECT * FROM ".$tablename;
$criteria_arr[53] = "confop_id IS NULL" ;
$strhanteimsg_arr[53] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[53] = $strdefcomment[1]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("configoption");

$checkname_arr[54] = "trash";
$query_arr[54] = "SELECT * FROM ".$tablename;
$criteria_arr[54] = "conf_id IS NULL" ;
$strhanteimsg_arr[54] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[54] = $strdefcomment[2]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("banner");

$checkname_arr[56] = "trash";
$query_arr[56] = "SELECT * FROM ".$tablename;
$criteria_arr[56] = "bid IS NULL" ;
$strhanteimsg_arr[56] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[56] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("banner");

$checkname_arr[57] = "trash";
$query_arr[57] = "SELECT * FROM ".$tablename;
$criteria_arr[57] = "cid IS NULL" ;
$strhanteimsg_arr[57] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[57] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("bannerclient");

$checkname_arr[58] = "trash";
$query_arr[58] = "SELECT * FROM ".$tablename;
$criteria_arr[58] = "cid IS NULL" ;
$strhanteimsg_arr[58] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[58] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("bannerfinish");

$checkname_arr[59] = "trash";
$query_arr[59] = "SELECT * FROM ".$tablename;
$criteria_arr[59] = "bid IS NULL" ;
$strhanteimsg_arr[59] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[59] = $strdefcomment[1]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("bannerfinish");

$checkname_arr[60] = "trash";
$query_arr[60] = "SELECT * FROM ".$tablename;
$criteria_arr[60] = "cid IS NULL" ;
$strhanteimsg_arr[60] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[60] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopscomments");

$checkname_arr[61] = "trash";
$query_arr[61] = "SELECT * FROM ".$tablename;
$criteria_arr[61] = "com_id IS NULL" ;
$strhanteimsg_arr[61] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[61] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopscomments");

$checkname_arr[62] = "trash";
$query_arr[62] = "SELECT * FROM ".$tablename;
$criteria_arr[62] = "com_itemid IS NULL" ;
$strhanteimsg_arr[62] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[62] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopscomments");

$checkname_arr[63] = "trash";
$query_arr[63] = "SELECT * FROM ".$tablename;
$criteria_arr[63] = "com_uid IS NULL" ;
$strhanteimsg_arr[63] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[63] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopsnotifications");

$checkname_arr[64] = "trash";
$query_arr[64] = "SELECT * FROM ".$tablename;
$criteria_arr[64] = "not_id IS NULL" ;
$strhanteimsg_arr[64] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[64] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopsnotifications");

$checkname_arr[65] = "trash";
$query_arr[65] = "SELECT * FROM ".$tablename;
$criteria_arr[65] = "not_itemid IS NULL" ;
$strhanteimsg_arr[65] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[65] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopsnotifications");

$checkname_arr[66] = "trash";
$query_arr[66] = "SELECT * FROM ".$tablename;
$criteria_arr[66] = "not_uid IS NULL" ;
$strhanteimsg_arr[66] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[66] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("image");

$checkname_arr[67] = "trash";
$query_arr[67] = "SELECT * FROM ".$tablename;
$criteria_arr[67] = "image_id IS NULL" ;
$strhanteimsg_arr[67] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[67] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("image");

$checkname_arr[68] = "trash";
$query_arr[68] = "SELECT * FROM ".$tablename;
$criteria_arr[68] = "imgcat_id IS NULL" ;
$strhanteimsg_arr[68] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[68] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("image");

$checkname_arr[69] = "trash";
$query_arr[69] = "SELECT * FROM ".$tablename;
$criteria_arr[69] = "image_display IS NULL" ;
$strhanteimsg_arr[69] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[69] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("imagebody");

$checkname_arr[70] = "trash";
$query_arr[70] = "SELECT * FROM ".$tablename;
$criteria_arr[70] = "image_id IS NULL" ;
$strhanteimsg_arr[70] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[70] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("imagecategory");

$checkname_arr[71] = "trash";
$query_arr[71] = "SELECT * FROM ".$tablename;
$criteria_arr[71] = "imgcat_id IS NULL" ;
$strhanteimsg_arr[71] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[71] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("imagecategory");

$checkname_arr[72] = "trash";
$query_arr[72] = "SELECT * FROM ".$tablename;
$criteria_arr[72] = "imgcat_display IS NULL" ;
$strhanteimsg_arr[72] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[72] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("imgset");

$checkname_arr[73] = "trash";
$query_arr[73] = "SELECT * FROM ".$tablename;
$criteria_arr[73] = "imgset_id IS NULL" ;
$strhanteimsg_arr[73] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[73] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("imgset");

$checkname_arr[74] = "trash";
$query_arr[74] = "SELECT * FROM ".$tablename;
$criteria_arr[74] = "imgset_refid IS NULL" ;
$strhanteimsg_arr[74] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[74] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
//online key where??
	$tablename = $xptblcheck_db->xptbl_prefix("online");

$checkname_arr[75] = "trash";
$query_arr[75] = "SELECT * FROM ".$tablename;
$criteria_arr[75] = "online_uid IS NULL" ;
$strhanteimsg_arr[75] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[75] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("priv_msgs");

$checkname_arr[76] = "trash";
$query_arr[76] = "SELECT * FROM ".$tablename;
$criteria_arr[76] = "msg_id IS NULL" ;
$strhanteimsg_arr[76] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[76] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("priv_msgs");

$checkname_arr[77] = "trash";
$query_arr[77] = "SELECT * FROM ".$tablename;
$criteria_arr[77] = "to_userid IS NULL" ;
$strhanteimsg_arr[77] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[77] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("priv_msgs");

$checkname_arr[78] = "trash";
$query_arr[78] = "SELECT * FROM ".$tablename;
$criteria_arr[78] = "from_userid IS NULL" ;
$strhanteimsg_arr[78] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[78] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("smiles");

$checkname_arr[79] = "trash";
$query_arr[79] = "SELECT * FROM ".$tablename;
$criteria_arr[79] = "id IS NULL" ;
$strhanteimsg_arr[79] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[79] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("session");

$checkname_arr[80] = "trash";
$query_arr[80] = "SELECT * FROM ".$tablename;
$criteria_arr[80] = "sess_id IS NULL" ;
$strhanteimsg_arr[80] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[80] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("ranks");

$checkname_arr[82] = "trash";
$query_arr[82] = "SELECT * FROM ".$tablename;
$criteria_arr[82] = "rank_id IS NULL" ;
$strhanteimsg_arr[82] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[82] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
//------------------------//
// 87 xoopscomments --> xptblparam1.php
//------------------------//
/* this how 
	$tablename = $xptblcheck_db->xptbl_prefix("xoopscomments");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT com.* FROM ".$tablename." com LEFT JOIN ".$tablename2." u ON com.com_uid=u.uid ";
	$criteria = "u.uid IS NULL";

$checkname_arr[87] = "trash";
$query_arr[87] = $query;
$criteria_arr[87] = $criteria ;
$strhanteimsg_arr[87] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[87] = $strdefcomment[11]."<br>".$strdefshorimsg[5]."\n" ;

*/
//------------------------//
//------------------------//
// 88 xoopscomments --> xptblparam1.php
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopscomments");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT com.* FROM ".$tablename." com LEFT JOIN ".$tablename2." m ON com.com_modid=m.mid ";
	$criteria = "m.mid IS NULL";

$checkname_arr[88] = "trash";
$query_arr[88] = $query;
$criteria_arr[88] = $criteria ;
$strhanteimsg_arr[88] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[88] = $strdefcomment[9]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
// 89 priv_msgs --> xptblparam1.php
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("priv_msgs");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT privm.* FROM ".$tablename." privm LEFT JOIN ".$tablename2." u ON privm.to_userid=u.uid ";
	$criteria = "u.uid IS NULL";

$checkname_arr[89] = "trash";
$query_arr[89] = $query;
$criteria_arr[89] = $criteria ;
$strhanteimsg_arr[89] = _AM_XPTC_NOTICE ;
$strcomment_arr[89] = $strdefcomment[22]."\n" ;

//------------------------//
// 90 priv_msgs --> xptblparam1.php
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("priv_msgs");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT privm.* FROM ".$tablename." privm LEFT JOIN ".$tablename2." u ON privm.from_userid=u.uid ";
	$criteria = "u.uid IS NULL";

$checkname_arr[90] = "trash";
$query_arr[90] = $query;
$criteria_arr[90] = $criteria ;
$strhanteimsg_arr[90] = _AM_XPTC_NOTICE ;
$strcomment_arr[90] = $strdefcomment[21]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplfile");

$query = "SELECT * FROM ".$tablename;
$pre_query_arr[96] = $query;
$pre_keyname_arr[96] = "tpl_file" ;

$keyname_arr[96] = "tpl_file" ;

$checkname_arr[96] = "overlaps";
$query_arr[96] = "SELECT * FROM ".$tablename;
$criteria_arr[96] = "tpl_tplset = 'default'" ;
$strhanteimsg_arr[96] = _AM_XPTC_NOTICE ;
$strcomment_arr[96] = $strdefcomment[24]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("users");
	$tablename2 = $xptblcheck_db->xptbl_prefix("avatar");

	$query = "SELECT u.* FROM ".$tablename." u LEFT JOIN ".$tablename2." a ON u.user_avatar=a.avatar_file ";
	$criteria = "(NOT(u.user_avatar = 'blank.gif')) AND (a.avatar_file IS NULL)";

$checkname_arr[97] = "trash";
$query_arr[97] = $query;
$criteria_arr[97] = $criteria ;
$strhanteimsg_arr[97] = _AM_XPTC_NOTICE ;
$strcomment_arr[97] = $strdefcomment[25]."\n" ;
//------------------------//
//--xoops2bug this users theme not found  top page 2003-10-15  
	$tablename = $xptblcheck_db->xptbl_prefix("config");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

$tempvalue =array();
$tempvalue[] ='';
global $xoopsConfig;
	$query = "SELECT c.* FROM ".$tablename." c ";
	$criteria = "(c.conf_title = '_MD_AM_THEMEOK')";
	$criteria .= " AND ('".$xoopsConfig['theme_set_allowed'][0]."' = '')";

$pre_judgquery_arr[98] = $query;
$pre_judgcriteria_arr[98] = $criteria;
$pre_judgquerycount_arr[98] = 1 ;

	$query = "SELECT u.* FROM ".$tablename2." u ";
	$criteria = "((u.theme IS NULL) or (trim(u.theme) = ''))" ;

$checkname_arr[98] = "trash";
$query_arr[98] = $query;
$criteria_arr[98] = $criteria ;

$strhanteimsg_arr[98] = _AM_XPTC_NOTICE ;
$strcomment_arr[98] = $strdefcomment[15].$strdefbugcondition[4]."\n" ;
$strcomment_arr[98] .= "<br>".$strdefbugcause[5]."\n" ;
//------------------------//
?>