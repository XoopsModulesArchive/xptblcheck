<?php
// $Id: functions.php,v 2.02f 2003/10/14 15:30:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
//***************** function **********************//
/* ---------- search found sub ------ */
function xcheck_mainsub($shorino,$op="checkview") {

global $xptblcheck_db;
global $shori_start,$pre_shori_start,$pre_judg_start ;
//------------------------//
global $pre_arrkey_arr;

//------------------------//
global $xgropid_arr;
//------------------------//
global $checkname;
global $strhanteimsg;
global $strcomment;
//------------------------//
global $pre_judgquerycount;
global $pre_judgquery;
global $pre_judgcriteria;
//------------------------//
global $pre_query;
global $pre_criteria;
global $pre_keyname;
//------------------------//
global $main_query;
global $main_criteria;
global $main_keyname;
//------------------------//

$i = $shorino ;
unset($del_arrkey_arr);
$del_arrkey_arr=array() ;

/* ---------- pre judgement flag ------ */
	if ($shori_start == true) {	
   		if ($pre_judg_start == true) {	
			$shori_start = xcheck_pre_judgquerycount($i,$pre_judgquerycount,$pre_judgquery,$pre_judgcriteria);
   		}	
	}	
/* ---------- pre_shori ------ */
	if ($shori_start == true) {	
   		if ($pre_shori_start == true) {	
			$pre_arrkey_arr = xcheck_pre_querykeylist($i,$pre_keyname,$pre_query,$pre_criteria);
       		if (count($pre_arrkey_arr) == 0) {
				$shori_start = false ;
			}
		}
	}
/* ---------- main  ------ */
	if ($shori_start == true) {
   		if (($pre_shori_start == true) && (isset($main_keyname)) && (!$main_keyname==null))  {
			foreach ($pre_arrkey_arr as $checkkey) {
                if ((isset($main_criteria)) && (!$main_criteria==null)){
	                if (is_numeric($checkkey)){
                	  $criteria = $main_keyname." = ".$checkkey." AND ".$main_criteria;
	                } else {
                	  $criteria = $main_keyname." = ".$xptblcheck_db->xptbl_quoteString($checkkey)." AND ".$main_criteria;
	                }
                } else {
	                if (is_numeric($checkkey)){
	                	$criteria = $main_keyname." = ".$checkkey;
	                } else {
	                	$criteria = $main_keyname." = ".$xptblcheck_db->xptbl_quoteString($checkkey);
	                }
                }

				$query = $main_query;
            	$strmsg1 = $criteria ;
            	$strmsg2 = $strhanteimsg ;
            	$strmsg3 = $strcomment ;
            	
                    switch ($checkname) {
                    case "trash":
           				xcheck_unablerow($i,$strmsg1,$strmsg2,$strmsg3,$query, $criteria);
    					break;
                    case "overlaps":
           				xcheck_overlaps($i,$strmsg1,$strmsg2,$strmsg3,$query, $criteria);
    					break;
                    case "missing":
           				xcheck_missingdata($shorino,$strmsg1,$strmsg2,$strmsg3,$query, $criteria);
    					break;
                    case "123group":
    					foreach ($xgropid_arr as $n) {
                        	$criteria123 = $criteria.$n ;
                        	$strmsg1 = $criteria123 ;
               				xcheck_missingdata($i,$strmsg1,$strmsg2,$strmsg3,$query, $criteria123);
       					}
    					break;
                    default:
    					break;
        			}
			}
		} else {
			$query = $main_query;
        	$criteria = $main_criteria ;
            	$strmsg1 = $criteria ;
            	$strmsg2 = $strhanteimsg ;
            	$strmsg3 = $strcomment ;

                    switch ($checkname) {
                    case "trash":
        				xcheck_unablerow($i,$strmsg1,$strmsg2,$strmsg3,$query, $criteria);
    					break;
                    case "overlaps":
        				xcheck_overlaps($i,$strmsg1,$strmsg2,$strmsg3,$query, $criteria);
    					break;
                    case "missing":
        				xcheck_missingdata($shorino,$strmsg1,$strmsg2,$strmsg3,$query, $criteria);
    					break;
                    case "123group":
						foreach ($xgropid_arr as $n) {
                        	$criteria123 = $criteria.$n ;
                        	$strmsg1 = $criteria123 ;
                				xcheck_missingdata($i,$strmsg1,$strmsg2,$strmsg3,$query, $criteria123);

						}
    					break;
                    default:
    					break;
        			}
		}
	}
}
/* ---------- pre judgement flag ------ */
function xcheck_pre_judgquerycount($shorino,$judgquerycount=NULL,$query=NULL,$criteria=NULL) {

global $xptblcheck_db ;

        $num_rows = 0 ;
        $ret = true ;
        if (!isset($judgquerycount)){
			return $ret;
        } 
        if (!isset($query)){
			return $ret;
        } 
            if (isset($criteria)) {  
            	$query = $query." WHERE ".$criteria ;
            }
            $result = xptblcheck_query_result($shorino,$query);
            if ($result) {
            	$num_rows = $xptblcheck_db->xptbl_getRowsNum();
			}
    	 	if (($judgquerycount == 0) && ($num_rows == 0)) {
    			$ret =  false;
        	} else {
           		if ($num_rows < $judgquerycount) {
           				$ret =  false;
        		}
    	 	}
	return $ret;
}
/* ---------- pre_keyquerylist ------ */
function xcheck_pre_querykeylist($shorino,$keyname=NULL,$query=NULL,$criteria=NULL) {

global $xptblcheck_db ;

$arrkey_arr=array() ;
        if (!isset($keyname)){
			return $arrkey_arr;
        } 
        if (!isset($query)){
			return $arrkey_arr;
        } 
            if (isset($criteria)) {  
            	$query = $query." WHERE ".$criteria ;
            }
            $result = xptblcheck_query_result($shorino,$query);
            if (! $result) {
				return $arrkey_arr;
			}
    while ($myrow = $xptblcheck_db->xptbl_fetchArray()) {
		if ( !in_array($myrow[$keyname], $arrkey_arr) ) {
			array_push($arrkey_arr, $myrow[$keyname]);
		}
     }
    $xptblcheck_db->xptbl_freeRecordSet();
	return $arrkey_arr;
}
//-----------value unkown  --------//
function xcheck_unablerow($shorino,$strmsg1,$strmsg2,$strmsg3,$query, $criteria) {

global $xptblcheck_db;
global $db_error,$db_warning,$db_notice ;

	$shorihantei = true;
    if (isset($criteria)){  
    	$query = $query." WHERE ".$criteria ;
    }
    $result = xptblcheck_query_result($shorino,$query);
    if (isset($result)){  
    	$num_rows = $xptblcheck_db->xptbl_getRowsNum();
	    if ($num_rows > 0){  
			display_simplerow($query);
   			display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_error;
			}
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_warning;
			}
			if ($strmsg2 == _AM_XPTC_NOTICE) {
				++$db_notice;
			}

			$shorihantei = false;
			display_myquery_fields();
	    }
    $xptblcheck_db->xptbl_freeRecordSet();
	}
	return $shorihantei;
}
//-----------value overlaps  --------//
function xcheck_overlaps($shorino,$strmsg1,$strmsg2,$strmsg3,$query, $criteria) {

global $xptblcheck_db;
global $db_error,$db_warning,$db_notice ;

	$shorihantei = true;
    if (isset($criteria)){  
    	$query = $query." WHERE ".$criteria ;
    }
    $result = xptblcheck_query_result($shorino,$query);
    if (isset($result)){  
    	$num_rows = $xptblcheck_db->xptbl_getRowsNum();
	    if ($num_rows > 1){  
			display_simplerow($query);
   			display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_error;
			}
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_warning;
			}
			if ($strmsg2 == _AM_XPTC_NOTICE) {
				++$db_notice;
			}

			$shorihantei = false;
			display_myquery_fields();
	    }
    $xptblcheck_db->xptbl_freeRecordSet();
	}
	return $shorihantei;
}
//-----------value missing  --------//
function xcheck_missingdata($shorino,$strmsg1,$strmsg2,$strmsg3,$query, $criteria){

global $xptblcheck_db;
global $db_error,$db_warning,$db_notice ;

	$shorihantei = true ;
	
    if (isset($criteria)){  
    	$query = $query." WHERE ".$criteria ;
    }
    $result = xptblcheck_query_result($shorino,$query);
    if (isset($result)){  
    	$num_rows = $xptblcheck_db->xptbl_getRowsNum();
	    if ($num_rows == 0){  
				display_simplerow($query);
				display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_error;
			}
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_warning;
			}
			if ($strmsg2 == _AM_XPTC_NOTICE) {
				++$db_notice;
			}
    $xptblcheck_db->xptbl_freeRecordSet();
				$shorihantei = false;
        }
    } else {
				display_simplerow($query);
				display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_error;
			}
			if ($strmsg2 == _AM_XPTC_ERRORMSG) {
				++$db_warning;
			}
			if ($strmsg2 == _AM_XPTC_NOTICE) {
				++$db_notice;
			}
	}
	return $shorihantei;
}
//----------- pre_judgcount  --------//
function xcheck_pre_judgcount($shorino,$pre_queryjudgcount,$query, $criteria){

global $xptblcheck_db;
//global $db_error,$db_warning ;

	$shorihantei = false ;
	
    if (isset($criteria)){  
    	$query = $query." WHERE ".$criteria ;
    }
	$result = xptblcheck_query_result($shorino,$query) ;
    if (isset($result)){  
    	$num_rows = $xptblcheck_db->xptbl_getRowsNum();
	    if ($num_rows >= $pre_queryjudgcount){  
				$shorihantei = true;
        }
    $xptblcheck_db->xptbl_freeRecordSet();
	}
	return $shorihantei;
}
/* --------get result ---- */
function xptblcheck_query_result($shorino,$query,$criteria=null) {

global $xptblcheck_db;
global $db_error,$db_warning ;

    if (isset($criteria)){  
    	$query = $query." WHERE ".$criteria ;
    }

    $result = $xptblcheck_db->xptbl_query($query); 
	if (xptblcheck_disply_query_status($shorino,$query)) {
	    if (! $result){  
				$strmsg1 = $query ;
				$strmsg2 = _AM_XPTC_KEIKOKUMSG ;
				$strmsg3 = "<b>not result </b><br>\n" ;
				display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
				$shorihantei = false;
				++$db_warning;
	    } else {
			return $result;   	
		}
	}
}
/* -------- display error status ---- */
function xptblcheck_disply_query_status($shorino,$query) {
global $xptblcheck_db;
//global $db_error,$db_warning ;

global $my_debug ;

	$shorihantei = true;
 	$interrno = $xptblcheck_db->xptbl_errno() ;
 	$strerrmsg = $xptblcheck_db->xptbl_error() ;
	if (!( $interrno == 0)) {
				$strmsg1 = $query ;
				$strmsg2 = "NG" ;
				$strmsg3 = "<b>db_errno =".$interrno."</b><br>\n" ;
				$strmsg3 .= "<b>db_error  =".$strerrmsg."</b>\n" ;
				display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
				++$db_error;
				$shorihantei = false;
	} else {
         if ($my_debug == "ON") { 
				$strmsg1 = $query ;
				$strmsg2 = "OK" ;
				$strmsg3 = "<b>&nbsp;</b><br>\n" ;
				$strmsg3 .= "<b>&nbsp;</b>\n" ;
				display_simpleecho($shorino,$strmsg1,$strmsg2,$strmsg3) ;
         }
	}
	return $shorihantei;
}
/* ------------ table head layout --------- */
function display_tablehead($border1=NULL,$tableth1=NULL,$strmsg1=NULL) {
   if (isset($border1)) {
		echo "<table border=".$border1.">\n";
   } else { 
		echo "<table border=0>\n";
   }

   if (isset($strmsg1)) {
	   echo "<caption>".$strmsg1."</caption>\n";
   }
   if (isset($tableth1)) {
	   echo "<thead><tr>";
	   echo "<th>"._AM_XPTC_THTAGNO."</th>";
	   echo "<th>"._AM_XPTC_THTAGJUDGMSG."</th>";
	   echo "<th width=40%>"._AM_XPTC_THTAGCOMMSG."</th>";
	   echo "<th>&nbsp;</th>";
	   echo "<th>"._AM_XPTC_THTAGSQLMSG."</th>";
	   echo "</tr></thead>\n";
   }
   echo "<tbody>";
}
/* ------------ globalarraysub layout --------- */
function display_showalarraysub($strmsg1,$array1) {
	display_tablehead(1,NULL,$strmsg1);
    if (is_array($array1)){
    	foreach ($array1 as $k => $v) {
    		if (is_array($v)){
				echo "<tr><td>\n";
    			display_showalarraysub($k,$v);
				echo "</td></tr>\n";
    		} else {
    			display_simplerow("['".$k."'] => ".$v);
	    	}
    	}
    } else {  	
    	display_simplerow($strmsg1." == ".$array1);
    }
   	display_tablefoot();
}
/* ------------ table simple one column layout --------- */
function display_simplerow($strmsg1) {
	echo "<tr>\n";
	    if (isset($strmsg1)) {
   			echo "<td colspan=5>".$strmsg1."</td>";
	    } else {
			echo "<td>&nbsp;</td>\n";
	    }
	echo "</tr>\n";
}
/* ------------ table one data column layout --------- */
function display_simpleecho($shorino,$strmsg1=NULL,$strmsg2=NULL,$strmsg3=NULL,$strmsg4=NULL) {
	echo "<tr>\n";
	    if (isset($shorino)) {
			echo "<td>".$shorino."</td>";
	    } else {
			echo "<td>&nbsp;</td>\n";
	    }
	    if (isset($strmsg2)) {
   			echo "<td>".$strmsg2."</td>";
	    } else {
			echo "<td>&nbsp;</td>\n";
	    }
	    if (isset($strmsg3)) {
   			echo "<td>".$strmsg3."</td>";
	    } else {
			echo "<td>&nbsp;</td>\n";
	    }
	    if (isset($strmsg4)) {
   			echo "<td>".$strmsg4."</td>";
	    } else {
			echo "<td>&nbsp;</td>\n";
	    }
	    if (isset($strmsg1)) {
   			echo "<td>".$strmsg1."</td>";
	    } else {
			echo "<td>&nbsp;</td>\n";
	    }
	echo "</tr>\n";
}
/* ------------ table foot layout --------- */
function display_tablefoot() {
   echo "</tbody></table>\n";
}
/*----------table data list display --- */
function display_myquery_fields() {
global $xptblcheck_db;
//global $db_error,$db_warning ;

# get column metadata
	echo "<tr><td colspan=5>\n";
	echo "<table border=1>\n";
	echo "<thead>\n";
	echo "<tbody>";
	echo "<tr>\n";
	$filedsnum = $xptblcheck_db->xptbl_getfieldsnum($xptblcheck_db->xptbl_getResult()) ;
	$i = 0;
	while ($i < $filedsnum) {
	   $field_name = $xptblcheck_db->xptbl_field_name($xptblcheck_db->xptbl_getResult(),$i);
    	if (isset($field_name)) {
       			echo "<th nowrap>".$field_name."</th>\n";
   	    } else {
    			echo "<th>&nbsp;</th>\n";
    	}
	    $i++;
	}
	echo "</tr>\n";
	echo "</thead>\n";
	echo "<tbody>";

    while ($row = $xptblcheck_db->xptbl_fetchRow($xptblcheck_db->xptbl_getResult())) {
	echo "<tr>\n";
		$i = 0;
    	while ($i < $filedsnum) {
    	    if (isset($row[$i])) {
    		    if (trim($row[$i]) == "") {
    				echo "<td>&nbsp;</td>\n";
    		    } else {
       				echo "<td>".$row[$i]."</td>\n";
    		    }

    	    } else {
    			echo "<td>&nbsp;</td>\n";
    	    }
    	    $i++;
    	}
	echo "</tr>\n";
    }
	echo "</tbody></table>\n";
	echo "</td></tr>\n";
}
?>