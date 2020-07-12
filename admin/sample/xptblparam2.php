<?php
//------------------------//
	$tablename = $xptblcheck_db->xptbl_prefix("bb_posts");
	$tablename2 = $xptblcheck_db->xptbl_prefix("users");

	$query = "SELECT bbp.* FROM ".$tablename." bbp LEFT JOIN ".$tablename2." u ON bbp.uid=u.uid ";
	$criteria = "u.uid IS NULL";

$checkname_arr[1] = "trash";
$query_arr[1] = $query;
$criteria_arr[1] = $criteria ;
$strhanteimsg_arr[1] = _AM_XPTC_KEIKOKUMSG ;
$strcomment_arr[1] = $strdefcomment[21]."<br>".$strdefshorimsg[5]."\n" ;
//------------------------//
?>