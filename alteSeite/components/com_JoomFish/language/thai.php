<?php
/**
 * Joom!Fish - Multi Lingual extention and translation manager for Joomla!
 * Copyright (C) 2003-2006 Think Network GmbH, Munich
 * 
 * All rights reserved.  The Joom!Fish project is a set of extentions for 
 * the content management system Joomla!. It enables Joomla! 
 * to manage multi lingual sites especially in all dynamic information 
 * which are stored in the database.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU Lesser General Public License" (LGPL) is available at
 * http: *www.gnu.org/copyleft/lgpl.html
 * 
 * -----------------------------------------------------------------------------
 * $Id: ReadMe,v 1.2 2005/03/15 11:07:01 akede Exp $
 *
*/

/**
* @package joomfish.language
* @copyright 2003-2006 Think Network GmbH
* @license http://www.gnu.org/copyleft/gpl.html GNU Public License
* @version 1.0, 2003-10-16 $Revision: 1.4 $
* @author Alex Kempkens <JoomFish@ThinkNetwork.com>
 * Thai Translation by : Akarawuth Tamrareang 
 * http://www.joomlacorner.com   mail : akarawuth@marvelic.co.th
*/

if( !defined( '_JF_LANG_INCLUDED') ) {	

define('_JOOMFISH_TITLE', 'จูมฟิช');															// @since 1.7
define('_JOOMFISH_HEADER','การจัดการเนื้อหาหลายภาษาสำหรับโปรแกรมจูมล่า! ');							// @since 1.7

// Control panel
define('_JOOMFISH_ADMIN_FRONTEND', 'หน้าเว็บ');
define('_JOOMFISH_ADMIN_LANGUAGES', 'ภาษา');
define('_JOOMFISH_ADMIN_HELP', 'ช่วยเหลือ &amp; ทำอย่างไร\'s');											// @since 1.7
define('_JOOMFISH_ADMIN_CPANEL', 'CPanel');														// @since 1.7
define('_JOOMFISH_ADMIN_CHECK', 'ตรวจสอบคอมโพเน้นท์');												// @since 1.7
define('_JOOMFISH_ADMIN_CONFIGURATION', 'ตั้งค่าคอนฟิค');										// @since 1.7
define('_JOOMFISH_ADMIN_CREDITS', 'เครดิต');													// @since 1.7
define( '_JOOMFISH_E_STATE', 'สถานะ');															// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_STATE', 'สถานะคอมโพเน้นท์');									// @since 1.7
define('_JOOMFISH_ADMIN_TRANSLATION_STATE', 'สถานะการแปล');								// @since 1.7
define('_JOOMFISH_ADMIN_SYSTEM_BOT_STATE', 'สถานะบอท');									// @since 1.7
define('_JOOMFISH_ADMIN_SEARCH_BOT_STATE', 'ค้นหาสถานะบอท');									// @since 1.7
define('_JOOMFISH_ADMIN_MODULE_STATE', 'สถานะโมดูล');											// @since 1.7
define('_JOOMFISH_CMN_PUBLISHED', '<span style="font-weight:bold; color:green">เผยแพร่</span>' );											// @since 1.7
define('_JOOMFISH_CMN_UNPUBLISHED', '<span style="font-weight:bold; color:red">ไม่เผยแพร่</span>' );										// @since 1.7
define('_JOOMFISH_ADMIN_MAMBELFISH_INSTALL', 'การติดตั้งแมมเิ้บิ้ลฟิช');																	// @since 1.7
define('_JOOMFISH_ADMIN_INSTAL_UPGRADED', '<span style="font-weight:bold; color:green">ติดตั้งอัพเกรตเวอร์ชั่นเก่า</span>');					// @since 1.7
define('_JOOMFISH_ADMIN_INSTAL_NOT_UPGRADED', '<span style="font-weight:bold; color:red">ติดตั้งทับของเก่าโดยไม่อัพเกรด</span>');			// @since 1.7
define('_JOOMFISH_INSTALL_UPGRADE', 'ติดตั้งอัพเกรด');																				// @since 1.7

define('_JOOMFISH_ADMIN_LANGUAGE_TITLE','การจัดการภาษาจูมฟิช');							// @since 1.7
define('_JOOMFISH_ADMIN_DEFAULT_LANGUAGE', 'ภาษาปกติหน้าเว็บ:');
define('_JOOMFISH_ADMIN_DEFAULT_LANGUAGE_HELP', 'ภาษานี้มีอยู่แล้ว <a href="javascript:submitbutton( \'site_config\' );">site configuration</a>.');

define('_JOOMFISH_ADMIN_SELECT_LANGUAGES', 'เลือกภาษาที่ต้องการใช้ด้านหน้าเว็บ.');
define('_JOOMFISH_ADMIN_LANGUAGE', 'เลือกภาษาด้านหน้าเว็บ:');
define('_JOOMFISH_ADMIN_LANGUAGE_HELP', 'กรุณาระบุและเริ่มการใช้งานภาษาด้านหน้าเว็บของคุณ.<br>ชื่อที่ระบุจะถูกนำมาใช้ในการแสดงผล.');

define('_JOOMFISH_ADMIN_TITLE_NAME', 'ชื่อ');
define('_JOOMFISH_ADMIN_TITLE_AUTHOR', 'ผู้แต่ง');
define('_JOOMFISH_ADMIN_TITLE_VERSION', 'รุ่น');
define('_JOOMFISH_ADMIN_TITLE_DESCRIPTION', 'รายละเอียด');
define('_JOOMFISH_ADMIN_TITLE_TITLE', 'รายการเดิม');
define('_JOOMFISH_ADMIN_TITLE_LANGUAGE', 'ภาษา');
define('_JOOMFISH_ADMIN_TITLE_TRANSLATION', 'การแปล');
define('_JOOMFISH_ADMIN_TITLE_DATECHANGED', 'แก้ไขล่าสุด');
define('_JOOMFISH_ADMIN_TITLE_STATE', 'สถานะ');
define('_JOOMFISH_ADMIN_TITLE_PUBLISHED', 'เผยแพร่');
define('_JOOMFISH_ADMIN_TITLE_CONTENTELEMENTS', 'ส่วนประกอบเนื้อหา');
define('_JOOMFISH_ADMIN_TITLE_DISPLAY', 'แสดง #');

define('_JOOMFISH_ADMIN_TITLE_ACTIVE', 'ใช้งาน');
define('_JOOMFISH_ADMIN_TITLE_ISO', 'ISO');
define('_JOOMFISH_ADMIN_TITLE_JOOMLA', 'ชื่อไฟล์จูมล่า');
define('_JOOMFISH_ADMIN_TITLE_IMAGE', 'ชื่อรูป');											//new 1.1
define('_JOOMFISH_ADMIN_TITLE_ORDER', 'จัดลำดับ');													//new 1.1

define('_JOOMFISH_ADMIN_ELEMENT_CONFIG', 'คอนฟิค');
define('_JOOMFISH_ADMIN_ELEMENT_REFERENCE', 'อ้่างอิงฐานข้อมูล');
define('_JOOMFISH_ADMIN_ELEMENT_SAMPLES', 'ข้อมูลตัวอย่าง');
define('_JOOMFISH_ADMIN_COMMONINFORMATION', 'ข้อมูลทั่วไป');

define('_JOOMFISH_ADMIN_DATABASEINFORMATION', 'ข้อมูลเกี่ยวกับตารางฐานข้อมูล');
define('_JOOMFISH_ADMIN_DATABASETABLE', 'ตารางฐานข้อมูล');
define('_JOOMFISH_ADMIN_DATABASETABLE_HELP', 'อ้างอิงตารางในฐานข้อมูล (ไม่ใช้คำนำหน้า!)');

define('_JOOMFISH_ADMIN_DATABASEFIELDS', 'ฟิลด์ฐานข้อมูล');
define('_JOOMFISH_ADMIN_DATABASEFIELDS_HELP', 'คำอธิบายของฟิลด์ที่เกี่ยวข้องในฐานข้อมูล.');
define('_JOOMFISH_ADMIN_DBFIELDNAME', 'ชื่อ');
define('_JOOMFISH_ADMIN_DBFIELDTYPE', 'ชนิด');
define('_JOOMFISH_ADMIN_DBFIELDLABLE', 'เลเบิ้ล');
define('_JOOMFISH_ADMIN_TRANSLATE', 'แปล');

define('_JOOMFISH_SET_DEFAULTTEXT', 'ตั้งค่าข้อความปกติ');												// new 1.5
define('_JOOMFISH_SET_COMPLETE', 'ตั้งค่าสมบูรณ์');														// new 1.5
define('_JOOMFISH_SELECT_LANGUAGES', 'ทุกภาษา');
define('_JOOMFISH_SELECT_NOTRANSLATION', 'ไม่มีการแปล');
define('_JOOMFISH_NOTRANSLATIONYET', '(ไม่มีการแปล)');
define('_JOOMFISH_SELECT_ELEMENTS', 'โปรดเลือก');
define('_JOOMFISH_NOELEMENT_SELECTED', 'โปรดเลือกส่วนประกอบเนื้อหาที่คุณต้องการตรวจสอบการแปล.');

define('_JOOMFISH_ORIGINAL', 'ค่าเิ่ริ่มต้น');
define('_JOOMFISH_TRANSLATION', 'การแปล');
define('_JOOMFISH_ITEM_INFO', 'การเผยแพร่');
define('_JOOMFISH_STATE_NOTEXISTING', 'ไม่มีการแปล');
define('_JOOMFISH_STATE_CHANGED', 'การเปลี่ยนแปลงค่าเริ่มต้น');
define('_JOOMFISH_STATE_OK', 'สถานะการแปล OK');

define('_JOOMFISH_COPY', 'คัดลอก');
define('_JOOMFISH_CLEAR', 'ล้าง');
define('_JOOMFISH_TRANSLATION_UPTODATE', 'การแปลภาษา <u>up to date</u>');
define('_JOOMFISH_TRANSLATION_INCOMPLETE', 'การแปลภาษา <u>ไม่สมบูรณ์</u>หรือค่าเริ่มต้น <u>ถูกเปลี่ยนแปลง</u>');
define('_JOOMFISH_TRANSLATION_NOT_EXISTING', 'การแปลภาษา <u>ไม่</u> เกิดขึ้น');
define('_JOOMFISH_TRANSLATION_PUBLISHED', 'การแปลภาษา<u>ถูกเผยแพร่</u>');
define('_JOOMFISH_TRANSLATION_NOT_PUBLISHED', 'การแปลภาษา<u>ไม่</u> ถูกเผยแพร่');
define('_JOOMFISH_STATE_TOGGLE', '(คลิกไอคอนเพื่อเปลี่ยนสถานะ.)');

define('_JOOMFISH_DBERR_NO_LANGUAGE', 'คุณต้องทำการเลือกภาษา');
define('_JOOMFISH_CONFIG_SAVED', 'ตั้งค่าการบันทึก.');																// New 1.1
define('_JOOMFISH_CONFIG_PROBLEMS', 'เกิดปัญหาขณะทำการบันทึกค่าคอนฟิค!');		// New 1.1
define('_JOOMFISH_LANG_PROBLEMS', 'เกิดปัญหาขณะทำการจัดเก็บข้อมูลภาษา!');		// New 1.1

define ('_JOOMFISH_ADMIN_CATEGORY','ค้นหาประเภท');													// New 1.7
define ('_JOOMFISH_ADMIN_CATEGORY_ALL','ประเภททั้งหมด');												// New 1.7
define ('_JOOMFISH_ADMIN_AUTHOR','ค้นหาผู้เขียน');														// New 1.7
define ('_JOOMFISH_ADMIN_AUTHOR_ALL','ผู้เขียนทั้งหมด');													// New 1.7
define ('_JOOMFISH_ADMIN_KEYWORD','ค้นหาคำ');													// New 1.7
define ('_JOOMFISH_ADMIN_TRANSLATION_PUBLISHED','เผยแพร่การแปลภาษา');								// New 1.7
define ('_JOOMFISH_ADMIN_MENUTYPE','ค้นหาเมนู');														// New 1.7
define ('_JOOMFISH_ADMIN_MENUTYPE_ALL','เมนูทั้งหมด');													// New 1.7

define ('_JOOMFISH_ADMIN_CLIPBOARD_COPIED','ค่าดั้งเดิมได้ถูกคัดลอกไปยังคลิปบอร์ดแล้ว.\nถึงขั้นนี้ให้วางลงบน editor ของคุณในโหมด html');
define ('_JOOMFISH_ADMIN_CLIPBOARD_COPY','กด ctl-C หรือ command-C เพื่อคัดลอกค่าดั้งเดิมไปยังคลิปบอร์ด.\nจากนั้นวางลงบน editor ในโหมด html');
define ('_JOOMFISH_ADMIN_CLIPBOARD_NOSUPPORT','เบราเซอร์ของคุณไม่สนับสนุนการคัดลอกไปยังคลิปบอร์ด.\nเลือกค่าดั้งเดิมโดยทำการคัดลอกและวาง');     // New 1.7

//tooltips
define ('_JOOMFISH_TT_TITLE_NAME','แสดงชื่อของภาษา');
define ('_JOOMFISH_TT_TITLE_ISO','รหัสภาษา ISO อย่างเป็นทางการ, การกำหนดเว็บเบราเซอร์ที่ใช้แสดงผลได้ีดีที่สุด.</strong>');
define ('_JOOMFISH_TT_IMAGES_DIR','ถ้าจะใช้ค่าเริ่มต้นให้เว้นว่างไว้. สำหรับค่าแต่ละส่วนให้ใช้ path ที่เกี่ยวข้องบนพื้นฐานไดเรกทอรี่ของรูปภาพจูมล่าของคุณ.');
define ('_JOOMFISH_TT_TITLE_ORDER','การจัดลำดับด้านหน้าเว็บ.');
define ('_JOOMFISH_TT_TRANS_DEFAULT','ใช้สำหรับอักษรตายตัวแต่ละส่วนที่ขึ้นอยู่กับข้อมูลที่เว้นว่างไว้และใช้ <strong>_JOOMFISH_NO_TRANSLATION_AVAILABLE</strong> ระบุจำนวนคงที่ในไฟล์ภาษาของจูมล่าฟิช.');
define ('_JOOMFISH_TT_SPACER','ระยะห่างระหว่างตัวอักษรในแนวนอน.<br /><strong>Hint</strong>: ถ้าไม่ได้เติมลงไปแต่มีการเลือกในแนวนอนนั้น ปกติระยะห่างจะกำหนดโดยจูมล่า เช่น  | (ระยะห่างก่อนและหลัง).<br />ระยะห่างก่อนและหลังจะถูกใช้ตลอดไป.');

// errors
define ('_JOOMFISH_ERROR','เกิดข้อผิดพลาด:');
define ('_JOOMFISH_EDITED_BY_ANOTHER_ADMIN','รายการเนื้อหา [ %s ] ปกติจะถูกแก้ไขโดยผู้ดูแลระบบท่านอื่น'); // %s=$actContentObject->title
define ('_JOOMFISH_CONFIG_WRITE_ERROR','ไฟล์คอนฟิคไม่สามารถเขียนทับได้!');
define ('_JOOMFISH_ADMIN_MAMBOT_ERROR','แมมบอทที่จัดการภาษาไม่ได้ถูกติดตั้งหรือนำมาใช้ ทำให้จูมฟิชไม่สามารถทำงานในขั้นตอนนี้ได้!');

// preferences
define ('_JOOMFISH_ADMIN_PREF_TITLE','การใช้งานคอมโพเน้นทใน์จูมฟิช');								// @since 1.7
define ('_JOOMFISH_ADMIN_ACCESS_PREFERENCES','สิทธิในการเข้าถึงข้อมูล');										// @since 1.7
define ('_JOOMFISH_FRONTEND_PUBLISH','เผยแพร่ผ่านหน้าเว็บ?');											// @since 1.7
define ('_JOOMFISH_ADMIN_PUBLISHERS','ผู้นำขึ้นเผยแพร่และผู้มีสิทธิเหนือกว่า');											// @since 1.7
define ('_JOOMFISH_ADMIN_NOONE','ไม่มีผู้ใด');																// @since 1.7
define ('_JOOMFISH_ADMIN_FEPUBLISH_HELP','ใครที่สามารถนำการแปลภาษาเผยแพร่ผ่านหน้าเว็บ?');	// @since 1.7

define('_JOOMFISH_ADMIN_COMPONENT_CONFIGURATION', 'การคอนฟิคคอมโพเน้นท์');							// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_CONFIGURATION_HELP', 'ภาษาของหน้าผู้ดูแลระบบ');		// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_LANGUAGE', 'คอมโพเน้นท์ภาษาในส่วนของผู้ดูแลระบบ');								// @since 1.7
define('_JOOMFISH_ADMIN_SHOWIF', 'ต้องการแสดงถ้า ...');
define('_JOOMFISH_ADMIN_NOTRANSLATION', 'ไม่มีภาษาที่ใช้ในการแปล?');
define('_JOOMFISH_ADMIN_NOTRANSLATION_HELP', 'การแทนที่คำจะถูกนำไปใช้เฉพาะในส่วนของเนื้อหาที่ถูกระบุเอาไว้เท่านั้น.type=content!');
define('_JOOMFISH_ADMIN_ORIGINAL_CONTENT', 'เนื้อหาดั้งเดิม');
define('_JOOMFISH_ADMIN_ORIGINAL_WITH_INFO', 'เนื้อหาดั้งเดิมพร้อมข้อมูล');

define('_JOOMFISH_ADMIN_PLACEHOLDER', 'ตัวอักษรที่ถูกกำหนดให้เป็นค่าเริ่มต้น');													// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_VIEW', 'หน้าเว็บที่ปรากฏ');											// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_LIST', 'รายการลิงค์ (แนวนอน)');										// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_COMBO', 'คอมโบ้บอกซ์');													// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_IMAGE', 'รายการรูปภาพ (แนวนอน)');									// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_HELP', 'กรุณาอธิบายการแสดงคอมโพเน้นท์ในด้านหน้าเว็บ<br>เมื่อคุณเลือกและระบุ;รายการรูปภาพและระบุ;, ไม่มีรูปภาพที่ทำการเลือกหรือรูปที่ทำการเลือกนั้นกระทบต่อไดเรกทอรี่พื้นฐานของจูมล่า.');							// @deprcated from 1.7

define ('_JOOMFISH_ADMIN_TITLE_UNPUBLISHED', 'ไม่เผยแพร่');
define ('_JOOMFISH_NAME_MISSING','คุณต้องกรอกชื่อ');
define ('_JOOMFISH_ENTER_CORR_JOOMLA_NAME','คุณต้องกรอกชื่อผู้ติดต่อ');
define ('_JOOMFISH_LANG_ALREADY_EXISTS','ได้มีการกำหนดภาษาพร้อมชื่อเรียบร้อยแล้ว กรุณาลองใหม่อีกครั้ง');
define ('_JOOMFISH_ADMIN_FRONTEND_VLIST', 'รายการชื่อ (แนวตั้ง)');
define ('_JOOMFISH_ADMIN_FRONTEND_VIMAGE', 'รายการรูปภาพ (แนวตั้ง)');
define ('_JOOMFISH_SPACER','ระยะห่างตัวอักษร');

// upgrade
define('_JOOMFISH_UPGRADE', 'อัพเกรด');																	// @since 1.7
define('_JOOMFISH_ADMIN_UPGRADE_INFO', 'การอัพเกรดแมมเบิ้ลฟิชเป็นจูมฟิชต้องทำการ <span style="font-weight:bold; color:red">ลบ</span> การแปลภาษาและภาษาที่มีอยู่ทั้งหมดภายในตารางจูมฟิชของคุณ!<br />คุณต้องทำการยืนยัน!');										// @since 1.7
define('_JOOMFISH_UPGRADE_BACKUP_TABLES', 'ต้องการสำรองข้อมูลตารางจูมฟิชหรือไม่?');									// @since 1.7
define('_JOOMFISH_UPGRADE_DELETE_TABLES', 'ทำการยืนยันเพื่อลบตารางจูมฟิช');						// @since 1.7
define('_JOOMFISH_UPGRADE_RENAME_TABLES', 'ต้องการเปลี่ยนชื่อตารางเดิมหลังจากการอัพเกรดหรือไม่?');							// @since 1.7
define('_JOOMFISH_UPGRADE_ERROR_CONFIRM', '<span style="font-weight:bold; color:red">คุณต้องทำการยืนยันว่่าตารางที่มีอยู่ปัจจุบัู่นสามารถลบได้!</span>');							// @since 1.7
define('_JOOMFISH_UPGRADE_ERROR_UPGRADE', 'ข้อผิดพลาดได้เกิดขึ้นระหว่างการอัพเกรด กรุณาไปดูที่บันทึกและรายละเอียดข้อมูล');							// @since 1.7

define('_JOOMFISH_UPGRADE_SUCCESSFUL', '<span style="font-weight:bold; color:green">การอัพเกรดเสร็จสมบูรณ์</span>');											// @since 1.7
define('_JOOMFISH_UPGRADE_FAILURE', '<span style="font-weight:bold; color:red">การอัพเกรดล้มเหลว</span>');													// @since 1.7

define('_JOOMFISH_MBFBOT', 'แมมเบิ้ลฟิชบอท');															// @since 1.7
define('_JOOMFISH_MBFMODULE', 'โมดูลแมมเบิ้ลฟิช');														// @since 1.7
define('_JOOMFISH_MBF_UNPUBLISHED', '<span style="font-weight:bold; color:green">ไม่เผยแพร่d</span>' );											// @since 1.7
define('_JOOMFISH_MBF_NOTUNPUBLISHED', '<span style="font-weight:bold; color:red">ไม่ระงับการเผยแพร่ได้!</span>' );							// @since 1.7

define('_JOOMFISH_CONTENT_BACKUP', 'การสำรองข้อมูลตารางจูมฟิช');											// @since 1.7
define('_JOOMFISH_BAK_CONTENT_SUCESSFUL', '<span style="font-weight:bold; color:green">การสำรองข้อมูลตารางเสร็จสมบูรณ์แล้ว #__jf_content_bak</span>' );											// @since 1.7
define('_JOOMFISH_BAK_CONTENT_FAILURE', '<span style="font-weight:bold; color:red">ความล้มเหลวเกิดขึ้นขณะทำการสำรองข้อมูลตาราง #__jf_content_bak</span>' );			// @since 1.7
define('_JOOMFISH_BAK_LANGUAGES_SUCESSFUL', '<span style="font-weight:bold; color:green">การสำรองข้อมูลตารางเสร็จสมบูรณ์แล้ว #__jf_languages_bak</span>' );											// @since 1.7
define('_JOOMFISH_BAK_LANGUAGES_FAILURE', '<span style="font-weight:bold; color:red">ความล้มเหลวเกิดขึ้นขณะทำการสำรองข้อมูลตาราง #__jf_languages_bak</span>' );			// @since 1.7

define('_JOOMFISH_CONTENT_TABLES', 'ตารางเนื้อหาจูมฟิช');											// @since 1.7
define('_JOOMFISH_LANGUAGE_TABLES', 'ตารางภาษาจูมฟิช');											// @since 1.7
define('_JOOMFISH_DEL_SUCESSFUL', '<span style="font-weight:bold; color:green">การลบเสร็จสมบูรณ์แล้ว</span>' );											// @since 1.7
define('_JOOMFISH_DEL_FAILURE', '<span style="font-weight:bold; color:red">ความล้มเหลวเกิดขึ้นขณะทำการลบตารางจูมฟิชที่มีอยู่ปัจจุบัน</span>' );					// @since 1.7
define('_JOOMFISH_COPY_SUCESSFUL', '<span style="font-weight:bold; color:green">การคัดลอกเสร็จสมบูรณ์แล้ว</span>' );											// @since 1.7
define('_JOOMFISH_COPY_FAILURE', '<span style="font-weight:bold; color:red">ความล้มเหลวเกิดขึ้นขณะทำการลบตารางจูมฟิชที่มีอยู่ปัจจุบัน</span>' );					// @since 1.7

// credits
define('_JOOMFISH_CREDITS','Credits and the rest of the universe');								// @since 1.7

define( "_JF_LANG_INCLUDED", true );
}
?>
