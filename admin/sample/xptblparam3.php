<?php
//***************************************//
//------------------------//
// 2003-07-23 toshimitsu for first version//
//------------------------//
//--v0.01 v0.02 v1.03 2003-7-25 update change -------//
//------------------------//
//--this is sample
// Guest top page -found only when all off  
//--  array no = 1 -> 100   
//------------------------//
/*
	$tablename1 = $xptblcheck_db->xptbl_prefix("config");
	$tablename2 = $xptblcheck_db->xptbl_prefix("modules");
	$tablename3= $xptblcheck_db->xptbl_prefix("group_permission");
	$tablename4 = $xptblcheck_db->xptbl_prefix("groups");
//  --- query for top page module show judgement --//  
 	$query = "SELECT c.* FROM ".$tablename1." c LEFT JOIN ".$tablename2." m ON c.conf_value=m.dirname ";
	$criteria = "(c.conf_title='_MD_AM_STARTPAGE')";
	$criteria .= " AND (m.mid IS NOT NULL)";

$pre_judgquery_arr[1] = $query;
$pre_judgcriteria_arr[1] = $criteria;
	// count for judgement when not ok ,skip
    // $pre_judgquerycount_arr :1=(ok =value 0 orver) ,or 0=(ok= 0 only)
$pre_judgquerycount_arr[1] = 1 ;

//  --- pre get, query for all groupid --//  
	$query = "SELECT * FROM ".$tablename4;
$pre_keyquery_arr[1] = $query;
$pre_keyname_arr[1] = "groupid" ;

///  --- main check  for all groupid --//  
	$query = "SELECT m.* FROM ".$tablename2." m LEFT JOIN ".$tablename1." c ON m.dirname=c.conf_value ";
	$query .= " LEFT JOIN ".$tablename3." l ON m.mid=l.gperm_itemid ";
	$query .= " LEFT JOIN ".$tablename4." g ON l.gperm_groupid=g.groupid ";
	$criteria = "(c.conf_title='_MD_AM_STARTPAGE')";
	$criteria .= " AND (l.gperm_name = 'module_read')" ;

	// $checkname_arr : missing is for massage when not record  
	// $checkname_arr : trash is for massage unkown record found
$checkname_arr[1] = "missing";
$query_arr[1] = $query;
$criteria_arr[1] = $criteria ;
$keyname_arr[1] = "groupid" ;

$strhanteimsg_arr[1] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[1] = $strdefcomment[18]."<br>".$strdefshorimsg[4]."\n" ;
$strcomment_arr[1] .= "<br>".$strdefbugcause[4]."<br>".$strdefbugcondition[4]."\n" ;
*/
//------------------------//
//------------------------//
?>