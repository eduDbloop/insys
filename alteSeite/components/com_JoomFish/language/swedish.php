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
* Swedish translation ver. 1.7 2006-03-21 Christer Gerhardsson & Sune Hultman - www.svenskjoomla.se
*/

if( !defined( '_JF_LANG_INCLUDED') ) {	

define('_JOOMFISH_TITLE', 'Joom!Fish');															// @since 1.7
define('_JOOMFISH_HEADER','Multilingual Content Manager for Joomla! ');							// @since 1.7

// Control panel
define('_JOOMFISH_ADMIN_FRONTEND', 'Webbplats');
define('_JOOMFISH_ADMIN_LANGUAGES', 'Spr�k');
define('_JOOMFISH_ADMIN_HELP', 'Hj�lp &amp; How To\'s');											// @since 1.7
define('_JOOMFISH_ADMIN_CPANEL', 'Cpanel');	
define('_JOOMFISH_ADMIN_CHECK', 'Kontrollera komponent');												// @since 1.7
define('_JOOMFISH_ADMIN_CONFIGURATION', 'Konfiguration');										// @since 1.7
define('_JOOMFISH_ADMIN_CREDITS', 'Erk�nnanden');	
define( '_JOOMFISH_E_STATE', 'Status');													// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_STATE', 'Komponentstatus');									// @since 1.7
define('_JOOMFISH_ADMIN_TRANSLATION_STATE', '�vers�ttningsstatus');								// @since 1.7
define('_JOOMFISH_ADMIN_SYSTEM_BOT_STATE', 'Systemets botstatus');									// @since 1.7
define('_JOOMFISH_ADMIN_SEARCH_BOT_STATE', 'S�kbotstatus');									// @since 1.7
define('_JOOMFISH_ADMIN_MODULE_STATE', 'Modulbotstatus');										// @since 1.7
define('_JOOMFISH_CMN_PUBLISHED', '<span style="font-weight:bold; color:green">Publicerad</span>' );											// @since 1.7
define('_JOOMFISH_CMN_UNPUBLISHED', '<span style="font-weight:bold; color:red">Avpublicerad</span>' );										// @since 1.7
define('_JOOMFISH_ADMIN_MAMBELFISH_INSTALL', 'MambelFish installation');																	// @since 1.7
define('_JOOMFISH_ADMIN_INSTAL_UPGRADED', '<span style="font-weight:bold; color:green">�ldre installation uppgraderad</span>');					// @since 1.7
define('_JOOMFISH_ADMIN_INSTAL_NOT_UPGRADED', '<span style="font-weight:bold; color:red">�ldre installation ej uppgraderad</span>');			// @since 1.7
define('_JOOMFISH_INSTALL_UPGRADE', 'Uppgraderingsinstallation');																				// @since 1.7

define ('_JOOMFISH_ADMIN_LANGUAGE_TITLE','Joom!Fish: Spr�khanteraren');							// @since 1.7
define('_JOOMFISH_ADMIN_DEFAULT_LANGUAGE', 'Webbplatsens f�rvalda spr�k:');
define('_JOOMFISH_ADMIN_DEFAULT_LANGUAGE_HELP', 'Detta spr�k �r valt i webbplatsens <a href="javascript:submitbutton( \'site_config\' );"> konfiguration</a>.');

define('_JOOMFISH_ADMIN_SELECT_LANGUAGES', 'V�lj anv�nda spr�k p� din webbplats.');
define('_JOOMFISH_ADMIN_LANGUAGE', 'V�lj webbplatsspr�k:');
define('_JOOMFISH_ADMIN_LANGUAGE_HELP', 'Ange namn och aktivera spr�ken som du vill anv�nda p� din webbplats.<br>Namnen kommer �ven att visas p� webbplatsen.');

define('_JOOMFISH_ADMIN_TITLE_NAME', 'Namn');
define('_JOOMFISH_ADMIN_TITLE_AUTHOR', 'F�rfattare');
define('_JOOMFISH_ADMIN_TITLE_VERSION', 'Version');
define('_JOOMFISH_ADMIN_TITLE_DESCRIPTION', 'Beskrivning');
define('_JOOMFISH_ADMIN_TITLE_TITLE', 'Originaltitel');
define('_JOOMFISH_ADMIN_TITLE_LANGUAGE', 'Spr�k');
define('_JOOMFISH_ADMIN_TITLE_TRANSLATION', '�vers�ttning');
define('_JOOMFISH_ADMIN_TITLE_DATECHANGED', 'Senast �ndrad');
define('_JOOMFISH_ADMIN_TITLE_STATE', 'Status');
define('_JOOMFISH_ADMIN_TITLE_PUBLISHED', 'Publicerad');
define('_JOOMFISH_ADMIN_TITLE_CONTENTELEMENTS', 'Inneh�ll');
define('_JOOMFISH_ADMIN_TITLE_DISPLAY', 'Visa antal');

define('_JOOMFISH_ADMIN_TITLE_ACTIVE', 'aktiva');
define('_JOOMFISH_ADMIN_TITLE_ISO', 'ISO');
define('_JOOMFISH_ADMIN_TITLE_JOOMLA', 'Joomlas filnamn');
define('_JOOMFISH_ADMIN_TITLE_IMAGE', 'Bildens filnamn');												//new 1.1
define('_JOOMFISH_ADMIN_TITLE_ORDER', 'Sortering');													//new 1.1

define('_JOOMFISH_ADMIN_ELEMENT_CONFIG', 'Konfiguration');
define('_JOOMFISH_ADMIN_ELEMENT_REFERENCE', 'DB referens');
define('_JOOMFISH_ADMIN_ELEMENT_SAMPLES', 'Exempeldata');
define('_JOOMFISH_ADMIN_COMMONINFORMATION', 'Generell information');

define('_JOOMFISH_ADMIN_DATABASEINFORMATION', 'Information om databastabellen');
define('_JOOMFISH_ADMIN_DATABASETABLE', 'Databastabellen');
define('_JOOMFISH_ADMIN_DATABASETABLE_HELP', 'Referensen till tabellen i din databas (utan prefix!)');

define('_JOOMFISH_ADMIN_DATABASEFIELDS', 'Databasf�lt');
define('_JOOMFISH_ADMIN_DATABASEFIELDS_HELP', 'Definitionen av de relaterade f�lten i din databas.');
define('_JOOMFISH_ADMIN_DBFIELDNAME', 'Namn');
define('_JOOMFISH_ADMIN_DBFIELDTYPE', 'Typ');
define('_JOOMFISH_ADMIN_DBFIELDLABLE', 'Etikett');
define('_JOOMFISH_ADMIN_TRANSLATE', '�vers�tt');

define('_JOOMFISH_SET_DEFAULTTEXT', 'Ange f�rvald text');												// new 1.5
define('_JOOMFISH_SET_COMPLETE', 'Ange f�rdig');														// new 1.5
define('_JOOMFISH_SELECT_LANGUAGES', 'Alla spr�k');
define('_JOOMFISH_SELECT_NOTRANSLATION', 'Ingen �vers�ttning');
define('_JOOMFISH_NOTRANSLATIONYET', '(ingen �vers�ttning)');
define('_JOOMFISH_SELECT_ELEMENTS', 'V�lj');
define('_JOOMFISH_NOELEMENT_SELECTED', 'V�lj inneh�ll d�r du vill kontrollera �ver�ttningen.');

define('_JOOMFISH_ORIGINAL', 'Original');
define('_JOOMFISH_TRANSLATION', '�vers�ttning');
define('_JOOMFISH_ITEM_INFO', 'Publicera');
define('_JOOMFISH_STATE_NOTEXISTING', 'Ingen �vers�ttning finns');
define('_JOOMFISH_STATE_CHANGED', 'Originalet �r �ndrat');
define('_JOOMFISH_STATE_OK', '�vers�ttningsstatus OK');

define('_JOOMFISH_COPY', 'Kopiera');
define('_JOOMFISH_CLEAR', 'Rensa');
define('_JOOMFISH_TRANSLATION_UPTODATE', '�vers�ttningen �r <u>aktuell</u>');
define('_JOOMFISH_TRANSLATION_INCOMPLETE', '�vers�ttningen �r <u>ej fullst�ndig</u> eller s� har originalet <u>�ndrats</u>');
define('_JOOMFISH_TRANSLATION_NOT_EXISTING', '�vers�ttningen <u>existerar inte</u>');
define('_JOOMFISH_TRANSLATION_PUBLISHED', '�vers�ttningen �r <u>publicerad</u>');
define('_JOOMFISH_TRANSLATION_NOT_PUBLISHED', '�vers�ttningen �r <u>inte publicerad</u>');
define('_JOOMFISH_STATE_TOGGLE', '(Klicka p� ikonen f�r att v�xla status.)');

define('_JOOMFISH_DBERR_NO_LANGUAGE', 'Du m�ste v�lja ett spr�k');
define('_JOOMFISH_CONFIG_SAVED', 'Inst�llningar sparade.');																// New 1.1
define('_JOOMFISH_CONFIG_PROBLEMS', 'Kunde inte spara konfigurationen!');		// New 1.1
define('_JOOMFISH_LANG_PROBLEMS', 'Kunde inte spara spr�kinformationen!');		// New 1.1

define ('_JOOMFISH_ADMIN_CATEGORY','Filter, kategorier');													// New 1.7
define ('_JOOMFISH_ADMIN_CATEGORY_ALL','Alla kategorier');												// New 1.7
define ('_JOOMFISH_ADMIN_AUTHOR','Filter, f�rfattare');														// New 1.7
define ('_JOOMFISH_ADMIN_AUTHOR_ALL','Alla f�rfattare');													// New 1.7
define ('_JOOMFISH_ADMIN_KEYWORD','Filter, nyckelord');													// New 1.7
define ('_JOOMFISH_ADMIN_TRANSLATION_PUBLISHED','�vers�ttning publicerad');								// New 1.7
define ('_JOOMFISH_ADMIN_MENUTYPE','Menyfilter');														// New 1.7
define ('_JOOMFISH_ADMIN_MENUTYPE_ALL','Alla menyer');													// New 1.7

define ('_JOOMFISH_ADMIN_CLIPBOARD_COPIED','originalv�rdet har kopierats till urklippshanteraren.\nKlistra d�refter in i din editor som html');
define ('_JOOMFISH_ADMIN_CLIPBOARD_COPY','Tryck ctrl-C f�r att kopiera originalv�rdet till urklippshanteraren.\nKlistra d�refter in i din editor som html');
define ('_JOOMFISH_ADMIN_CLIPBOARD_NOSUPPORT','Din l�sare till�ter inte kopiering till urklippshanteraren.\nV�lj originalet f�r hand och kopiera och klistra in');     // New 1.7

define( '_JOOMFISH_NO_TRANSLATION_AVAILABLE', 'Det finns ingen �vers�ttning tillg�nglig, v�lj ett annat spr�k.');		// Changed 1.7

//tooltips
define ('_MBF_TT_TITLE_NAME','Namnet p� spr�ket som visas');
define ('_MBF_TT_TITLE_ISO','Spr�kets 2-bokstavs ISO-kod enligt RFC 3066.');
define ('_MBF_TT_IMAGES_DIR','F�r att anv�nda f�rvalda flaggor, l�mna tomt. F�r egna flaggor anv�nd relativ s�kv�g baserad p� Joomlas rotmapp.');
define ('_MBF_TT_TITLE_ORDER','Sortering p� webbplatsen.');
define ('_MBF_TT_TRANS_DEFAULT','Fyll bara i n�got h�r om du vill anv�nda en egen standardtext. <br />Om du l�mnar tomt kommer textstr�ngen <strong>_JOOMFISH_NO_TRANSLATION_AVAILABLE</strong> som �r definierad i spr�kfilen att anv�ndas.');
define ('_MBF_TT_SPACER','Avgr�nsare vid visning av spr�kval i text mod och i horisontell mod.<br /><strong>Tips</strong>: Om ingenting �r ifyllt, och horisontell mod v�ljs, kommer en avgr�nsare att definieras av Joomla som: | (med mellanslag f�re och efter).<br />Mellanslag f�re och efter kommer alltid att anv�ndas.');

// errors
define ('_MBF_ERROR','Fel:');
define ('_MBF_EDITED_BY_ANOTHER_ADMIN','Artikeln [ %s ] �ndras f�r n�rvarande av en annan administrat�r'); // %s=$actContentObject->title
define ('_MBF_CONFIG_WRITE_ERROR','Konfigurationsfilen �r inte skrivbar!');
define ('_JOOMFISH_ADMIN_MAMBOT_ERROR','Flerspr�ksplugin f�r abstraktionslager �r inte installerad eller publicerad � Joom!Fish kommer inte att fungera!');

// preferences
define ('_JOOMFISH_ADMIN_PREF_TITLE','Joom!Fish: Konfiguration');								// @since 1.7
define ('_JOOMFISH_ADMIN_ACCESS_PREFERENCES','�tkomstalternativ');										// @since 1.7
define ('_JOOMFISH_FRONTEND_PUBLISH','Publicera fr�n webbplatsen?');											// @since 1.7
define ('_JOOMFISH_ADMIN_PUBLISHERS','Publicist eller h�gre');											// @since 1.7
define ('_JOOMFISH_ADMIN_NOONE','Ingen');																// @since 1.7
define ('_JOOMFISH_ADMIN_FEPUBLISH_HELP','Vem skall kunna publicera �vers�ttningar direkt fr�n webbplatsen?');	// @since 1.7

define('_JOOMFISH_ADMIN_COMPONENT_CONFIGURATION', 'Komponentkonfiguration');							// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_CONFIGURATION_HELP', 'Spr�ket f�r administrat�rsinterfacet');		// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_LANGUAGE', 'Komponentens admin-spr�k');								// @since 1.7
define('_JOOMFISH_ADMIN_SHOWIF', 'Vad skall visas om ...');
define('_JOOMFISH_ADMIN_NOTRANSLATION', 'ingen �vers�ttning �r tillg�nglig?');
define('_JOOMFISH_ADMIN_NOTRANSLATION_HELP', 'Denna ers�ttning g�ller BARA f�r inneh�ll som �r markerat med reference.type=content!');
define('_JOOMFISH_ADMIN_ORIGINAL_CONTENT', 'Originalinneh�llet');
define('_JOOMFISH_ADMIN_ORIGINAL_WITH_INFO', 'Originalinneh�llet med information');

define('_JOOMFISH_ADMIN_PLACEHOLDER', 'F�rvald text');													// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_VIEW', 'Webbplatsens utseende');											// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_LIST', 'L�nklista (horisontell)');										// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_COMBO', 'ComboBox');													// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_IMAGE', 'Bildlista (horisontell)');									// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_HELP', 'Ange hur komponenten skall visas p� webbplatsen<br>N�r du v�ljer &quot;Bildlista&quot; m�ste bildens s�kv�g vara tom eller korrekt baserad p� Joomlas rotmapp.');							// @deprcated from 1.7

define ('_JOOMFISH_ADMIN_TITLE_UNPUBLISHED', 'Avpubliserad');
define ('_JOOMFISH_NAME_MISSING','Du m�ste skriva in ett namn');
define ('_JOOMFISH_ENTER_CORR_JOOMLA_NAME','Du m�ste skriva in ett tillh�rande Joomlanamn');
define ('_JOOMFISH_LANG_ALREADY_EXISTS','Det finns redan ett spr�k med detta Joomlanamn, f�rs�k igen');
define ('_JOOMFISH_ADMIN_FRONTEND_VLIST', 'Namnlista (vertikal)');
define ('_JOOMFISH_ADMIN_FRONTEND_VIMAGE', 'Bildlista (vertikal)');
define ('_JOOMFISH_SPACER','Platsh�llare vid visning som text');

// upgrade
define('_JOOMFISH_UPGRADE', 'Uppgradera');																	// @since 1.7
define('_JOOMFISH_ADMIN_UPGRADE_INFO', 'Uppgradering fr�n MambelFish till Joom!Fish kr�ver att alla existerande �vers�ttningar och spr�k <span style="font-weight:bold; color:red">RADERAS</span> i dina Joom!Fish tabeller!<br />Du m�ste bekr�fta detta!');										// @since 1.7
define('_JOOMFISH_UPGRADE_BACKUP_TABLES', 'Ta backup av Joom!Fish tabellerna?');									// @since 1.7
define('_JOOMFISH_UPGRADE_DELETE_TABLES', 'Bekr�fta BORTTAGNING av Joom!Fish tabellerna');						// @since 1.7
define('_JOOMFISH_UPGRADE_RENAME_TABLES', 'D�p om gamla tabeller efter uppgraderingen?');							// @since 1.7
define('_JOOMFISH_UPGRADE_ERROR_CONFIRM', '<span style="font-weight:bold; color:red">D� m�ste bekr�fta att tabellerna kan RADERAS!</span>');							// @since 1.7
define('_JOOMFISH_UPGRADE_ERROR_UPGRADE', 'Ett fel uppstod under uppgraderingen, se logg och detaljerad information');							// @since 1.7

define('_JOOMFISH_UPGRADE_SUCCESSFUL', '<span style="font-weight:bold; color:green">Uppgraderingen lyckades</span>');											// @since 1.7
define('_JOOMFISH_UPGRADE_FAILURE', '<span style="font-weight:bold; color:red">Uppgraderingen misslyckades</span>');													// @since 1.7

define('_JOOMFISH_MBFBOT', 'Mambelfish bot');															// @since 1.7
define('_JOOMFISH_MBFMODULE', 'Mambelfish modul');														// @since 1.7
define('_JOOMFISH_MBF_UNPUBLISHED', '<span style="font-weight:bold; color:green">avpublicera</span>' );											// @since 1.7
define('_JOOMFISH_MBF_NOTUNPUBLISHED', '<span style="font-weight:bold; color:red">kunde inte avpubliceras!</span>' );							// @since 1.7

define('_JOOMFISH_CONTENT_BACKUP', 'Joom!Fish backup av tabeller');											// @since 1.7
define('_JOOMFISH_BAK_CONTENT_SUCESSFUL', '<span style="font-weight:bold; color:green">till tabellen #__jf_content_bak</span>' );											// @since 1.7
define('_JOOMFISH_BAK_CONTENT_FAILURE', '<span style="font-weight:bold; color:red">MISSLYCKADES att skapa backuptabellen #__jf_content_bak</span>' );			// @since 1.7
define('_JOOMFISH_BAK_LANGUAGES_SUCESSFUL', '<span style="font-weight:bold; color:green">klar till tabellen #__jf_languages_bak</span>' );											// @since 1.7
define('_JOOMFISH_BAK_LANGUAGES_FAILURE', '<span style="font-weight:bold; color:red">MISSLYCKADES att skapa backuptabellen #__jf_languages_bak</span>' );			// @since 1.7

define('_JOOMFISH_CONTENT_TABLES', 'Joom!Fish tabeller f�r artiklar');											// @since 1.7
define('_JOOMFISH_LANGUAGE_TABLES', 'Joom!Fish spr�ktabeller');											// @since 1.7
define('_JOOMFISH_DEL_SUCESSFUL', '<span style="font-weight:bold; color:green">raderad</span>' );											// @since 1.7
define('_JOOMFISH_DEL_FAILURE', '<span style="font-weight:bold; color:red">MISSLYCKADES att radera Joom!Fish tabellen</span>' );					// @since 1.7
define('_JOOMFISH_COPY_SUCESSFUL', '<span style="font-weight:bold; color:green">kopierad</span>' );											// @since 1.7
define('_JOOMFISH_COPY_FAILURE', '<span style="font-weight:bold; color:red">MISSLYCKADES att radera Joom!Fish tabellen</span>' );					// @since 1.7

// credits
define('_JOOMFISH_CREDITS','Erk�nnanden och resten av universumet');								// @since 1.7

define( "_JF_LANG_INCLUDED", true );
}
?>
