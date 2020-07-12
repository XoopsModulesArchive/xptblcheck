<?php
//------------------------//
// 2003-07-23 toshimitsu for first version//
//--v0.01 v0.02 v1.03 2003-7-25,25 update change -------//
//--v1.21 v1.31 2003-7-27 update change -------//
//--v1.31  2003-7-28 update change -------//
//--v1.41  2003-7-29 update change -------//
//--v2.00  2003-8-01 update change -------//
//------------------------//
if (include ('../../../include/cp_header.php')) {
	include_once( '../../../mainfile.php' ) ;

    //$my_location =$HTTP_SERVER_VARS['PHP_SELF'] ;
    $my_location = XOOPS_URL . '/modules/' . $xoopsModule->dirname() . '/admin/index.php';

	xoops_cp_header();
    include ('xptblcheck.php');
	xoops_cp_footer();

} else {
	redirect_header(XOOPS_URL."/index.php",0,"_NOPERM") ;
}
?>