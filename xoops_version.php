<?php
// $Id: xoops_version.php,v 2.02f 2003/10/14 15:30:00 toshimitsu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// xoops_version.php for xoops2
// by toshimitsu (http://www5f.biglobe.ne.jp/~domifara/)
$modversion['name'] = _MI_XPTC_NAME;
$modversion['version'] = '2.02m';
$modversion['description'] = _MI_XPTC_DESC;
$modversion['credits'] = "";
$modversion['author'] = "toshimitsu";
$modversion['help'] = "" ;
$modversion['license'] = "GPL";
$modversion['official'] = 0;
$modversion['image'] = "xptbl_slogo.png";
$modversion['dirname'] = "xptblcheck";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";

// Menu
$modversion['hasMain'] = 0;
// blocks
$modversion['blocks'][1]['file'] = "xptblcheck_blocks.php";
$modversion['blocks'][1]['name'] = _MI_XPTC_BNAME1;
$modversion['blocks'][1]['title'] = _MI_XPTC_BTITLE1;
$modversion['blocks'][1]['description'] = _MI_XPTC_BDECRIPTION1;
$modversion['blocks'][1]['show_func'] = "b_xptblcheck_DebugShow1";
// blocks
$modversion['blocks'][2]['file'] = "xptblcheck_blocks.php";
$modversion['blocks'][2]['name'] = _MI_XPTC_BNAME2;
$modversion['blocks'][2]['title'] = _MI_XPTC_BTITLE2;
$modversion['blocks'][2]['description'] = _MI_XPTC_BDECRIPTION2;
$modversion['blocks'][2]['show_func'] = "b_xptblcheck_DebugShow2";
// blocks
$modversion['blocks'][3]['file'] = "xptblcheck_blocks.php";
$modversion['blocks'][3]['name'] = _MI_XPTC_BNAME3;
$modversion['blocks'][3]['title'] = _MI_XPTC_BTITLE3;
$modversion['blocks'][3]['description'] = _MI_XPTC_BDECRIPTION3;
$modversion['blocks'][3]['show_func'] = "b_xptblcheck_DebugShow3";
?>