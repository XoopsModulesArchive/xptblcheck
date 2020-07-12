<?php
// $Id: xptblparam.php,,v 2.02m 2003/10/23 14:30:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
//------------------------//
//value 0  check  ------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups");

$checkname_arr[14] = "trash";
$query_arr[14] = "SELECT * FROM ".$tablename;
$criteria_arr[14] = "groupid = 0" ;
$strhanteimsg_arr[14] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[14] = $strdefcomment[3]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups_users_link");

$checkname_arr[15] = "trash";
$query_arr[15] = "SELECT * FROM ".$tablename;
$criteria_arr[15] = "groupid = 0" ;
$strhanteimsg_arr[15] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[15] = $strdefcomment[3]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[16] = "trash";
$query_arr[16] = "SELECT * FROM ".$tablename;
$criteria_arr[16] = "gperm_groupid = 0" ;
$strhanteimsg_arr[16] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[16] = $strdefcomment[3]."<br>".$strdefshorimsg[3]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[17] = "trash";
$query_arr[17] = "SELECT * FROM ".$tablename;
$criteria_arr[17] = "gperm_itemid = 0" ;
$strhanteimsg_arr[17] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[17] = $strdefcomment[3]."<br>".$strdefshorimsg[3]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[18] = "trash";
$query_arr[18] = "SELECT * FROM ".$tablename;
$criteria_arr[18] = "gperm_modid = 0" ;
$strhanteimsg_arr[18] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[18] = $strdefcomment[3]."<br>".$strdefshorimsg[3]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("modules");

$checkname_arr[19] = "trash";
$query_arr[19] = "SELECT * FROM ".$tablename;
$criteria_arr[19] = "mid = 0" ;
$strhanteimsg_arr[19] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[19] = $strdefcomment[3]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
//check  ------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[20] = "trash";
$query_arr[20] = "SELECT * FROM ".$tablename;
$criteria_arr[20] = "(gperm_name IS NULL)" ;
$criteria_arr[20] .= " OR (trim(gperm_name) = '')" ;
$criteria_arr[20] .= " OR (gperm_name = ' ')" ;
$strhanteimsg_arr[20] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[20] = $strdefcomment[4]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups");

$checkname_arr[21] = "123group";
$query_arr[21] = "SELECT * FROM ".$tablename;
$criteria_arr[21] = "groupid = " ; //groupid = 1,2,3
$strhanteimsg_arr[21] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[21] = $strdefcomment[5]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[22] = "missing";
$query_arr[22] = "SELECT * FROM ".$tablename;
$criteria_arr[22] = "gperm_name = 'system_admin'" ;
$criteria_arr[22] .= " AND gperm_groupid = 1" ;
$criteria_arr[22] .= " AND gperm_itemid = 1" ;
$strhanteimsg_arr[22] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[22] = $strdefcomment[4]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[23] = "missing";
$query_arr[23] = "SELECT * FROM ".$tablename;
$criteria_arr[23] = "gperm_name = 'module_admin'" ;
$criteria_arr[23] .= " AND gperm_groupid = 1" ;
$criteria_arr[23] .= " AND gperm_itemid = 1" ;
$strhanteimsg_arr[23] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[23] = $strdefcomment[4]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");

$checkname_arr[24] = "missing";
$query_arr[24] = "SELECT * FROM ".$tablename;
$criteria_arr[24] = "gperm_name = 'block_read'" ;
$criteria_arr[24] .= " AND gperm_groupid = 1" ;
$criteria_arr[24] .= " AND gperm_itemid = 1" ;
$strhanteimsg_arr[24] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[24] = $strdefcomment[6]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
// join check  ------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups_users_link");
	$tablename2 = $xptblcheck_db->xptbl_prefix("groups");

	$query = "SELECT gu.* FROM ".$tablename." gu LEFT JOIN ".$tablename2." g ON gu.groupid=g.groupid ";
	$criteria = " g.groupid IS NULL" ;

$checkname_arr[26] = "trash";
$query_arr[26] = $query;
$criteria_arr[26] = $criteria ;
$strhanteimsg_arr[26] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[26] = $strdefcomment[8]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("users");
	$tablename2 = $xptblcheck_db->xptbl_prefix("groups_users_link");

	$query = "SELECT u.* FROM ".$tablename." u LEFT JOIN ".$tablename2." gu ON u.uid=gu.uid ";
	$criteria = "(gu.uid IS NULL) ";

$checkname_arr[27] = "trash";
$query_arr[27] = $query;
$criteria_arr[27] = $criteria ;
$strhanteimsg_arr[27] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[27] = $strdefcomment[13]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("newblocks");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT b.* FROM ".$tablename." b LEFT JOIN ".$tablename2." m ON b.mid=m.mid ";
	$criteria = "NOT(b.mid = 0) "; // custum html block
	$criteria .= " AND (m.mid IS NULL) ";

$checkname_arr[28] = "trash";
$query_arr[28] = $query;
$criteria_arr[28] = $criteria ;
$strhanteimsg_arr[28] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[28] = $strdefcomment[9]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("block_module_link");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT bm.* FROM ".$tablename." bm LEFT JOIN ".$tablename2." m ON bm.module_id=m.mid ";
	$criteria = "NOT(bm.module_id = 0 OR bm.module_id = -1) ";
	$criteria .= " AND (m.mid IS NULL) ";

$checkname_arr[29] = "trash";
$query_arr[29] = $query;
$criteria_arr[29] = $criteria ;
$strhanteimsg_arr[29] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[29] = $strdefcomment[9]."<br>".$strdefshorimsg[6]."\n" ;
$strcomment_arr[29] .= "<br>".$strdefbugcause[1]."<br>".$strdefbugcondition[1]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");
	$tablename2 = $xptblcheck_db->xptbl_prefix("groups");

	$query = "SELECT l.* FROM ".$tablename." l LEFT JOIN ".$tablename2." g ON l.gperm_groupid=g.groupid ";
	$criteria = " g.groupid IS NULL" ;

$checkname_arr[30] = "trash";
$query_arr[30] = $query;
$criteria_arr[30] = $criteria ;
$strhanteimsg_arr[30] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[30] = $strdefcomment[8]."<br>".$strdefshorimsg[1]."\n" ;

$delquery_arr[30] = "DELETE FROM ".$tablename;
$delkeyname_arr[30] = "gperm_id" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT l.* FROM ".$tablename." l LEFT JOIN ".$tablename2." m ON l.gperm_itemid=m.mid ";
	$criteria = " (m.mid IS NULL)" ;
	$criteria .= " AND (l.gperm_name = 'module_read' OR l.gperm_name = 'module_admin') ";

$checkname_arr[31] = "trash";
$query_arr[31] = $query;
$criteria_arr[31] = $criteria ;
$strhanteimsg_arr[31] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[31] = $strdefcomment[9]."<br>".$strdefshorimsg[3]."\n" ;
$strcomment_arr[31] .= "<br>".$strdefbugcause[2]."<br>".$strdefbugcondition[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");
	$tablename2 = $xptblcheck_db->xptbl_prefix("newblocks");

	$query = "SELECT l.* FROM ".$tablename." l LEFT JOIN ".$tablename2." b ON l.gperm_itemid=b.bid ";
	$criteria = " (b.bid IS NULL)" ;
	$criteria .= " AND (l.gperm_name = 'block_read') ";

$checkname_arr[32] = "trash";
$query_arr[32] = $query;
$criteria_arr[32] = $criteria ;
$strhanteimsg_arr[32] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[32] = $strdefcomment[10]."<br>".$strdefshorimsg[3]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("newblocks");
	$tablename2 = $xptblcheck_db->xptbl_prefix("block_module_link");

	$query = "SELECT b.* FROM ".$tablename." b LEFT JOIN ".$tablename2." bm ON b.bid=bm.block_id ";
	$criteria = "bm.block_id IS NULL";

$checkname_arr[33] = "trash";
$query_arr[33] = $query;
$criteria_arr[33] = $criteria ;
$strhanteimsg_arr[33] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[33] = $strdefcomment[4]."<br>".$strdefshorimsg[7]."\n" ;
$strcomment_arr[33] .= "<br>".$strdefbugcause[2]."<br>".$strdefbugcondition[5]."\n" ;
//------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("avatar_user_link");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT au.* FROM ".$tablename." au LEFT JOIN ".$tablename2." u ON au.user_id=u.uid ";
	$criteria = "(u.uid IS NULL)";

$checkname_arr[37] = "trash";
$query_arr[37] = $query;
$criteria_arr[37] = $criteria ;
$strhanteimsg_arr[37] = _AM_XPTC_NOTICE ;
$strcomment_arr[37] = $strdefcomment[11]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("avatar_user_link");
	$tablename2 = $xptblcheck_db->xptbl_prefix("avatar");

	$query = "SELECT au.* FROM ".$tablename." au LEFT JOIN ".$tablename2." a ON au.avatar_id=a.avatar_id ";
	$criteria = "(a.avatar_id IS NULL)";

$checkname_arr[38] = "trash";
$query_arr[38] = $query;
$criteria_arr[38] = $criteria ;
$strhanteimsg_arr[38] = _AM_XPTC_NOTICE ;
$strcomment_arr[38] = $strdefcomment[14]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("groups_users_link");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT gu.* FROM ".$tablename." gu LEFT JOIN ".$tablename2." u ON gu.uid=u.uid ";
	$criteria = "(u.uid IS NULL)" ;

$checkname_arr[39] = "trash";
$query_arr[39] = $query;
$criteria_arr[39] = $criteria ;
$strhanteimsg_arr[39] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[39] = $strdefcomment[11]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplsource");

$checkname_arr[42] = "trash";
$query_arr[42] = "SELECT * FROM ".$tablename;
$criteria_arr[42] = "tpl_id IS NULL" ;
$strhanteimsg_arr[42] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[42] = $strdefcomment[2]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplfile");
	$tablename2 = $xptblcheck_db->xptbl_prefix("tplsource");

	$query = "SELECT tpf.* FROM ".$tablename." tpf LEFT JOIN ".$tablename2." tps ON tpf.tpl_id=tps.tpl_id ";
	$criteria = "(tps.tpl_id IS NULL)" ;

$checkname_arr[43] = "trash";
$query_arr[43] = $query;
$criteria_arr[43] = $criteria ;
$strhanteimsg_arr[43] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[43] = $strdefcomment[12]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplsource");
	$tablename2 = $xptblcheck_db->xptbl_prefix("tplfile");

	$query = "SELECT tpf.* FROM ".$tablename." tpf LEFT JOIN ".$tablename2." tps ON tpf.tpl_id=tps.tpl_id ";
	$criteria = "(tps.tpl_id IS NULL)" ;

$checkname_arr[44] = "trash";
$query_arr[44] = $query;
$criteria_arr[44] = $criteria ;
$strhanteimsg_arr[44] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[44] = $strdefcomment[15]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplfile");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT tpf.* FROM ".$tablename." tpf LEFT JOIN ".$tablename2." m ON tpf.tpl_refid=m.mid ";
	$criteria = "(tpl_type = 'module')" ;
	$criteria .= " AND (m.mid IS NULL)" ;

$checkname_arr[45] = "trash";
$query_arr[45] = $query;
$criteria_arr[45] = $criteria ;
$strhanteimsg_arr[45] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[45] = $strdefcomment[9]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("tplfile");
	$tablename2 = $xptblcheck_db->xptbl_prefix("newblocks");

	$query = "SELECT tpf.* FROM ".$tablename." tpf LEFT JOIN ".$tablename2." b ON tpf.tpl_refid=b.bid ";
	$criteria = "(tpl_type = 'block')" ;
	$criteria .= " AND (b.bid IS NULL)" ;

$checkname_arr[46] = "trash";
$query_arr[46] = $query;
$criteria_arr[46] = $criteria ;
$strhanteimsg_arr[46] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[46] = $strdefcomment[10]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("config");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT c.* FROM ".$tablename." c LEFT JOIN ".$tablename2." m ON c.conf_modid=m.mid ";
	$criteria = "NOT(c.conf_modid = 0)" ;
	$criteria .= " AND (m.mid IS NULL)" ;

$checkname_arr[51] = "trash";
$query_arr[51] = $query;
$criteria_arr[51] = $criteria ;
$strhanteimsg_arr[51] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[51] = $strdefcomment[9]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("config");
	$tablename2 = $xptblcheck_db->xptbl_prefix("configcategory");

	$query = "SELECT c.* FROM ".$tablename." c LEFT JOIN ".$tablename2." cc ON c.conf_catid=cc.confcat_id ";
	$criteria = "NOT(c.conf_catid = 0)" ;
	$criteria .= " AND (cc.confcat_id IS NULL)" ;

$checkname_arr[52] = "trash";
$query_arr[52] = $query;
$criteria_arr[52] = $criteria ;
$strhanteimsg_arr[52] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[52] = $strdefcomment[16]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------// 
	$tablename = $xptblcheck_db->xptbl_prefix("configoption");
	$tablename2 = $xptblcheck_db->xptbl_prefix("config");

	$query = "SELECT cp.* FROM ".$tablename." cp LEFT JOIN ".$tablename2." c ON cp.conf_id=c.conf_id ";
	$criteria = "(c.conf_catid IS NULL)" ;

$checkname_arr[55] = "trash";
$query_arr[55] = $query;
$criteria_arr[55] = $criteria ;
$strhanteimsg_arr[55] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[55] = $strdefcomment[17]."<br>".$strdefshorimsg[5]."\n" ;

//------------------------//
//--Guest top page -found only when all off  
	$tablename1 = $xptblcheck_db->xptbl_prefix("config");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");
	$tablename3= $xptblcheck_db->xptbl_prefix("group_permission");
	$tablename4 = $xptblcheck_db->xptbl_prefix("groups");

	$query = "SELECT c.* FROM ".$tablename1." c LEFT JOIN ".$tablename2." m ON c.conf_value=m.dirname ";
	$criteria = "(c.conf_title='_MD_AM_STARTPAGE')";
	$criteria .= " AND (m.mid IS NOT NULL)";

$pre_judgquery_arr[81] = $query;
$pre_judgcriteria_arr[81] = $criteria;
$pre_judgquerycount_arr[81] = 1 ;

	$query = "SELECT * FROM ".$tablename4;
$pre_query_arr[81] = $query;
$pre_keyname_arr[81] = "groupid" ;

	$query = "SELECT m.* FROM ".$tablename2." m LEFT JOIN ".$tablename1." c ON m.dirname=c.conf_value ";
	$query .= " LEFT JOIN ".$tablename3." l ON m.mid=l.gperm_itemid ";
	$query .= " LEFT JOIN ".$tablename4." g ON l.gperm_groupid=g.groupid ";
	$criteria = "(c.conf_title='_MD_AM_STARTPAGE')";
	$criteria .= " AND (l.gperm_name = 'module_read')" ;

$checkname_arr[81] = "missing";
$query_arr[81] = $query;
$criteria_arr[81] = $criteria ;
$keyname_arr[81] = "groupid" ;

$strhanteimsg_arr[81] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[81] = $strdefcomment[18]."<br>".$strdefshorimsg[4]."\n" ;
$strcomment_arr[81] .= "<br>".$strdefbugcause[4]."<br>".$strdefbugcondition[4]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("ranks");

$checkname_arr[82] = "trash";
$query_arr[82] = "SELECT * FROM ".$tablename;
$criteria_arr[82] = "rank_id IS NULL" ;
$strhanteimsg_arr[82] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[82] = $strdefcomment[1]."<br>".$strdefshorimsg[1]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("newblocks");
	$tablename2 = $xptblcheck_db->xptbl_prefix("group_permission");

	$query = "SELECT * FROM ".$tablename;
$pre_query_arr[83] = $query;
$pre_keyname_arr[83] = "bid" ;

$keyname_arr[83] = "gperm_itemid" ;

	$query = "SELECT * FROM ".$tablename2;
	$criteria = "(gperm_name = 'block_read') ";

$checkname_arr[83] = "missing";
$query_arr[83] = $query;
$criteria_arr[83] = $criteria ;
$strhanteimsg_arr[83] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[83] = $strdefcomment[12]."<br>".$strdefshorimsg[4]."\n" ;
$strcomment_arr[83] .= "<br>".$strdefbugcondition[3]."\n" ;
//------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("bannerclient");
	$tablename2 = $xptblcheck_db->xptbl_prefix("banner");

	$query = "SELECT bacl.* FROM ".$tablename." bacl LEFT JOIN ".$tablename2." ba ON bacl.cid=ba.cid ";
	$criteria = "ba.cid IS NULL";

$checkname_arr[84] = "trash";
$query_arr[84] = $query;
$criteria_arr[84] = $criteria ;
$strhanteimsg_arr[84] = _AM_XPTC_NOTICE ;
$strcomment_arr[84] = $strdefcomment[19]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("bannerfinish");
	$tablename2 = $xptblcheck_db->xptbl_prefix("banner");

	$query = "SELECT bafin.* FROM ".$tablename." bafin LEFT JOIN ".$tablename2." ba ON bafin.cid=ba.cid ";
	$criteria = "ba.cid IS NULL";

$checkname_arr[85] = "trash";
$query_arr[85] = $query;
$criteria_arr[85] = $criteria ;
$strhanteimsg_arr[85] = _AM_XPTC_NOTICE ;
$strcomment_arr[85] = $strdefcomment[19]."\n" ;

//------------------------//
//	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");
//
//$checkname_arr[25] = "123group";
//$query_arr[25] = "SELECT * FROM ".$tablename;
//$criteria_arr[25] = "gperm_name = 'module_read'" ;
//$criteria_arr[25] .= " AND gperm_itemid = 1" ;
//$criteria_arr[25] .= " AND gperm_groupid =" ; 
//$strhanteimsg_arr[25] = _AM_XPTC_ERRORMSG ;
//$strcomment_arr[25] = $strdefcomment[7]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("group_permission");
	$tablename2 = $xptblcheck_db->xptbl_prefix("groups");

	$query = "SELECT * FROM ".$tablename2;
$pre_query_arr[86] = $query;
$pre_keyname_arr[86] = "groupid" ;

$keyname_arr[86] = "gperm_groupid" ;

$checkname_arr[86] = "missing";
$query_arr[86] = "SELECT * FROM ".$tablename;
$criteria_arr[86] = "gperm_name = 'module_read'" ;
$criteria_arr[86] .= " AND gperm_itemid = 1" ;
$strhanteimsg_arr[86] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[86] = $strdefcomment[7]."<br>".$strdefshorimsg[2]."\n" ;
//------------------------//
//------------------------//
// 87 xoopscomments --> xptblparam1.php
//------------------------//
//------------------------//
// 88 xoopscomments --> xptblparam1.php
//------------------------//
//------------------------//
// 89 priv_msgs --> xptblparam1.php
//------------------------//
//------------------------//
// 90 priv_msgs --> xptblparam1.php
//------------------------//
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("image");
	$tablename2 = $xptblcheck_db->xptbl_prefix("imagecategory");

	$query = "SELECT im.* FROM ".$tablename." im LEFT JOIN ".$tablename2." ica ON im.imgcat_id=ica.imgcat_id ";
	$criteria = "ica.imgcat_id IS NULL";

$checkname_arr[91] = "trash";
$query_arr[91] = $query;
$criteria_arr[91] = $criteria ;
$strhanteimsg_arr[91] = _AM_XPTC_NOTICE ;
$strcomment_arr[91] = $strdefcomment[20]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopsnotifications");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT privm.* FROM ".$tablename." privm LEFT JOIN ".$tablename2." u ON privm.not_uid=u.uid ";
	$criteria = "u.uid IS NULL";

$checkname_arr[92] = "trash";
$query_arr[92] = $query;
$criteria_arr[92] = $criteria ;
$strhanteimsg_arr[92] = _AM_XPTC_NOTICE ;
$strcomment_arr[92] = $strdefcomment[11]."\n" ;

//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("xoopsnotifications");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");

	$query = "SELECT privm.* FROM ".$tablename." privm LEFT JOIN ".$tablename2." m ON privm.not_modid=m.mid ";
	$criteria = "m.mid IS NULL";

$checkname_arr[93] = "trash";
$query_arr[93] = $query;
$criteria_arr[93] = $criteria ;
$strhanteimsg_arr[93] = _AM_XPTC_NOTICE ;
$strcomment_arr[93] = $strdefcomment[9]."\n" ;
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("tplsource");
	$tablename2 = $xptblcheck_db->xptbl_prefix("tplfile");

$query = "SELECT * FROM ".$tablename2;
$pre_query_arr[95] = $query;
$pre_keyname_arr[95] = "tpl_id" ;

$keyname_arr[95] = "tpl_id" ;

$checkname_arr[95] = "overlaps";
$query_arr[95] = "SELECT * FROM ".$tablename;
$strhanteimsg_arr[95] = _AM_XPTC_ERRORMSG ;
$strcomment_arr[95] = $strdefcomment[23]."<br>".$strdefshorimsg[1]."\n" ;
//------------------------//
?>