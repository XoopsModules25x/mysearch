<?php
//  ------------------------------------------------------------------------ //
//                       mysearch - MODULE FOR XOOPS 2                        //
//                  Copyright (c) 2005-2006 Instant Zero                     //
//                     <http://xoops.instant-zero.com/>                      //
// ------------------------------------------------------------------------- //
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

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

$dirname = basename(dirname(dirname(__FILE__)));
$module_handler = xoops_gethandler('module');
$module = $module_handler->getByDirname($dirname);
$pathIcon32 = $module->getInfo('icons32');

xoops_loadLanguage('admin', $dirname);

$i = 0;

// Index
$adminmenu[$i]['title'] = _MI_MYSEARCH_ADMIN0;
$adminmenu[$i]['link'] = "admin/index.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/home.png';
$i++;
$adminmenu[$i]['title'] 	= _MI_MYSEARCH_ADMMENU1;
$adminmenu[$i]['link'] 	= "admin/main.php?op=stats";
$adminmenu[$i]["icon"] = $pathIcon32.'/stats.png';
$i++;
$adminmenu[$i]['title'] 	= _MI_MYSEARCH_ADMMENU2;
$adminmenu[$i]['link'] 	= "admin/main.php?op=purge";
$adminmenu[$i]["icon"] = $pathIcon32.'/prune.png';
$i++;
$adminmenu[$i]['title'] 	= _MI_MYSEARCH_ADMMENU3;
$adminmenu[$i]['link'] 	= "admin/main.php?op=export";
$adminmenu[$i]["icon"] = $pathIcon32.'/export.png';
$i++;
$adminmenu[$i]['title'] 	= _MI_MYSEARCH_ADMMENU4;
$adminmenu[$i]['link'] 	= "admin/main.php?op=blacklist";
$adminmenu[$i]["icon"] = $pathIcon32.'/manage.png';
$i++;
$adminmenu[$i]['title'] = _MI_MYSEARCH_ADMMENU5;
$adminmenu[$i]['link'] =  "admin/about.php";
$adminmenu[$i]["icon"] = $pathIcon32.'/about.png';