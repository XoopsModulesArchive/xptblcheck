<?php
// $Id: admin.php,v 2.02f 2003/10/14 15:00:00 toshimitsu Exp $
//------------------------//
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
//------------------------//
define('_AM_XPTC_PAGETITLE', 'Table Logical Check(for Xoops2)');
define('_AM_XPTC_PAGECOMMENT', '<pre>
attention: It is dangerous to see only this result and to carry out deletion and correction. 
</pre>');

define('_AM_XPTC_CHECKPATTERNTITLE', 'CheckpPattern');
define('_AM_XPTC_CHECKTABLETITLE', 'check result view');
define('_AM_XPTC_TABLEVIEWTITLE', 'table list view');
define('_AM_XPTC_TABLEVIEWNAMEM', 'TableName');
define('_AM_XPTC_TABLEVIECOUNTM', 'Count');
//------------------------//
define('_AM_XPTC_THTAGNO', 'no');
define('_AM_XPTC_THTAGSQLMSG', 'mysql');
define('_AM_XPTC_THTAGJUDGMSG', 'judgment');
define('_AM_XPTC_THTAGCOMMSG', 'comment');
define('_AM_XPTC_THTAGCOMMAND', ' ');
//------------------------//
define('_AM_XPTC_ERRORMSG', 'ERROR');
define('_AM_XPTC_KEIKOKUMSG', 'WARNING');
define('_AM_XPTC_NOTICE', 'NOTICE');
define('_AM_XPTC_CHECKOKMSG', 'No error : Good');
define('_AM_XPTC_CHECKNGMSG', '<b>There was error :  Bad !!</b>');
define('_AM_XPTC_WARNINGOKMSG', 'No warning : Good');
define('_AM_XPTC_WARNINGNGMSG', '<b>There was warning  !!</b>');
define('_AM_XPTC_NOTICEOKMSG', 'No NOTICE : Good');
define('_AM_XPTC_NOTICENGMSG', '<b>There was NOTICE  !!</b>');
//------------------------//
$strdefcomment =array() ;
$strdefshorimsg =array() ;
$strdefbugcause =array() ;
$strdefbugcondition =array() ;
$strdefcomment[1] = "<b>NULL value is unjust item value at key value. </b>" ;
$strdefcomment[2] = "<b>NULL value is unjust item value at other items for a link. </b>" ;
$strdefcomment[3] = "<b>Value =0 is invalid as item value in Xoops. </b>" ;
$strdefcomment[4] = "<b>Value is required. NULL value and a blank are unjust item value. </b>" ;
$strdefcomment[5] = "<b>It is required as item value of a fixed group (1, 2, 3). </b>" ;
$strdefcomment[6] = "<b>It is required for xoops management as data of this value. </b>" ;
$strdefcomment[7] = "<b>The reading right of a system management is required of all groups. </b>" ;
$strdefcomment[8] = "<b>There is invalid group value which cannot be used. </b>" ;
$strdefcomment[9] = "<b>There is invalid module value which cannot be used. </b>" ;
$strdefcomment[10]= "<b>There is invalid block value which cannot be used. </b>" ;
$strdefcomment[11] = "<b>There is invalid user value which cannot be used. </b>" ;
$strdefcomment[12] = "<b>One affair does not have data value, either. </b>\n" ;
$strdefcomment[13] = "<b>There is a user who does not go into the group of what. </b>\n" ;
$strdefcomment[14] = "<b>There is invalid avatar value which cannot be used. </b>" ;
$strdefcomment[15] = "<b>There is invalid template value which cannot be used. </b>" ;
$strdefcomment[16] = "<b>There is invalid configcategory value which cannot be used. </b>" ;
$strdefcomment[17] = "<b>There is invalid config value which cannot be used. </b>" ;
$strdefcomment[18] = "<b>Module access authority is required of all groups when making a module into a top page. </b>" ;
$strdefcomment[19]= "<b>There is invalid banner value which cannot be used. </b>" ;
$strdefcomment[20] = "<b>There is invalid imagecategory value which cannot be used. </b>" ;
$strdefcomment[21] = "<b>The user value of a transmitting agency does not exist.</b>" ;
$strdefcomment[22] = "<b>Key Value is overlaps </b>" ;
$strdefcomment[23] = "<b>The value used as a key overlaps.</b>" ;
$strdefcomment[24] = "<b>Two or more blocks/module are using the same tpl_file value. </b>" ;
$strdefcomment[25] = "<b>this avatar of this user is deleted from avatar manager</b>" ;
//------------------------//
$strdefshorimsg[1] = "<b>It deletes or corrects to the right value. </b>" ;
$strdefshorimsg[2] = "<b>It adds with the right value or updating or re-install is required. </b>" ;
$strdefshorimsg[3] = "<b>carrying out re-cereals z by group management -- or it deletes </b>" ;
$strdefshorimsg[4] = "<b>carrying out re-cereals z by group management -- or it adds </b>" ;
$strdefshorimsg[5] = "<b>It corrects to the right value (in or the case deletion). </b>" ;
$strdefshorimsg[6] = "<b>It corrects to the right value </b>" ;
$strdefshorimsg[7] = "<b>It adds with the right value or module updating or module re-install is required. </b>" ;
$strdefshorimsg[8] = "<b>If this tpl_file is edited, two or more blocks will be influenced. </b>" ;
$strdefshorimsg[9] = "<b>It corrects to the right value : blank.gif </b>" ;
//------------------------// 
$strdefbugcause[1] = "<b>Cause: Unknow</b>" ;
$strdefbugcause[2] = "<b>Cause: module unistall operation -- a bug</b>" ;
$strdefbugcause[3] = "<b>Cause: All the rights of a right are turned off [ them ]. </b>" ;
$strdefbugcause[4] = "<b>Cause: required authority is not set up</b>" ;
$strdefbugcause[5] = "<b>Cause:  Xoops2.0.2 to Xoops2.0.5 bug (CVS)</b>" ;
//------------------------// 
$strdefbugcondition[1] = "<b>Condition: Unknown</b>" ;
$strdefbugcondition[2] = "<b>Condition: this block is not carried out on all management screen</b>" ;
$strdefbugcondition[3] = "<b>Condition: this block is not carried out on block management screen</b>" ;
$strdefbugcondition[4] = "<b>Condition: top's page cannot be carried out.</b>" ;
$strdefbugcondition[5] = "<b>Condition: lost block,this block is not carried out on all screen.</b>" ;
//------------------------// 
?>