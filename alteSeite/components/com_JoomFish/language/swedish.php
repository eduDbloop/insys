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
define('_JOOMFISH_ADMIN_LANGUAGES', 'Språk');
define('_JOOMFISH_ADMIN_HELP', 'Hjälp &amp; How To\'s');											// @since 1.7
define('_JOOMFISH_ADMIN_CPANEL', 'Cpanel');	
define('_JOOMFISH_ADMIN_CHECK', 'Kontrollera komponent');												// @since 1.7
define('_JOOMFISH_ADMIN_CONFIGURATION', 'Konfiguration');										// @since 1.7
define('_JOOMFISH_ADMIN_CREDITS', 'Erkännanden');	
define( '_JOOMFISH_E_STATE', 'Status');													// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_STATE', 'Komponentstatus');									// @since 1.7
define('_JOOMFISH_ADMIN_TRANSLATION_STATE', 'Översättningsstatus');								// @since 1.7
define('_JOOMFISH_ADMIN_SYSTEM_BOT_STATE', 'Systemets botstatus');									// @since 1.7
define('_JOOMFISH_ADMIN_SEARCH_BOT_STATE', 'Sökbotstatus');									// @since 1.7
define('_JOOMFISH_ADMIN_MODULE_STATE', 'Modulbotstatus');										// @since 1.7
define('_JOOMFISH_CMN_PUBLISHED', '<span style="font-weight:bold; color:green">Publicerad</span>' );											// @since 1.7
define('_JOOMFISH_CMN_UNPUBLISHED', '<span style="font-weight:bold; color:red">Avpublicerad</span>' );										// @since 1.7
define('_JOOMFISH_ADMIN_MAMBELFISH_INSTALL', 'MambelFish installation');																	// @since 1.7
define('_JOOMFISH_ADMIN_INSTAL_UPGRADED', '<span style="font-weight:bold; color:green">äldre installation uppgraderad</span>');					// @since 1.7
define('_JOOMFISH_ADMIN_INSTAL_NOT_UPGRADED', '<span style="font-weight:bold; color:red">äldre installation ej uppgraderad</span>');			// @since 1.7
define('_JOOMFISH_INSTALL_UPGRADE', 'Uppgraderingsinstallation');																				// @since 1.7

define ('_JOOMFISH_ADMIN_LANGUAGE_TITLE','Joom!Fish: Språkhanteraren');							// @since 1.7
define('_JOOMFISH_ADMIN_DEFAULT_LANGUAGE', 'Webbplatsens förvalda språk:');
define('_JOOMFISH_ADMIN_DEFAULT_LANGUAGE_HELP', 'Detta språk är valt i webbplatsens <a href="javascript:submitbutton( \'site_config\' );"> konfiguration</a>.');

define('_JOOMFISH_ADMIN_SELECT_LANGUAGES', 'Välj använda språk på din webbplats.');
define('_JOOMFISH_ADMIN_LANGUAGE', 'Välj webbplatsspråk:');
define('_JOOMFISH_ADMIN_LANGUAGE_HELP', 'Ange namn och aktivera språken som du vill använda på din webbplats.<br>Namnen kommer även att visas på webbplatsen.');

define('_JOOMFISH_ADMIN_TITLE_NAME', 'Namn');
define('_JOOMFISH_ADMIN_TITLE_AUTHOR', 'Författare');
define('_JOOMFISH_ADMIN_TITLE_VERSION', 'Version');
define('_JOOMFISH_ADMIN_TITLE_DESCRIPTION', 'Beskrivning');
define('_JOOMFISH_ADMIN_TITLE_TITLE', 'Originaltitel');
define('_JOOMFISH_ADMIN_TITLE_LANGUAGE', 'Språk');
define('_JOOMFISH_ADMIN_TITLE_TRANSLATION', 'Översättning');
define('_JOOMFISH_ADMIN_TITLE_DATECHANGED', 'Senast ändrad');
define('_JOOMFISH_ADMIN_TITLE_STATE', 'Status');
define('_JOOMFISH_ADMIN_TITLE_PUBLISHED', 'Publicerad');
define('_JOOMFISH_ADMIN_TITLE_CONTENTELEMENTS', 'Innehåll');
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

define('_JOOMFISH_ADMIN_DATABASEFIELDS', 'Databasfält');
define('_JOOMFISH_ADMIN_DATABASEFIELDS_HELP', 'Definitionen av de relaterade fälten i din databas.');
define('_JOOMFISH_ADMIN_DBFIELDNAME', 'Namn');
define('_JOOMFISH_ADMIN_DBFIELDTYPE', 'Typ');
define('_JOOMFISH_ADMIN_DBFIELDLABLE', 'Etikett');
define('_JOOMFISH_ADMIN_TRANSLATE', 'Översätt');

define('_JOOMFISH_SET_DEFAULTTEXT', 'Ange förvald text');												// new 1.5
define('_JOOMFISH_SET_COMPLETE', 'Ange färdig');														// new 1.5
define('_JOOMFISH_SELECT_LANGUAGES', 'Alla språk');
define('_JOOMFISH_SELECT_NOTRANSLATION', 'Ingen översättning');
define('_JOOMFISH_NOTRANSLATIONYET', '(ingen översättning)');
define('_JOOMFISH_SELECT_ELEMENTS', 'Välj');
define('_JOOMFISH_NOELEMENT_SELECTED', 'Välj innehåll där du vill kontrollera överättningen.');

define('_JOOMFISH_ORIGINAL', 'Original');
define('_JOOMFISH_TRANSLATION', 'Översättning');
define('_JOOMFISH_ITEM_INFO', 'Publicera');
define('_JOOMFISH_STATE_NOTEXISTING', 'Ingen översättning finns');
define('_JOOMFISH_STATE_CHANGED', 'Originalet är ändrat');
define('_JOOMFISH_STATE_OK', 'Översättningsstatus OK');

define('_JOOMFISH_COPY', 'Kopiera');
define('_JOOMFISH_CLEAR', 'Rensa');
define('_JOOMFISH_TRANSLATION_UPTODATE', 'Översättningen är <u>aktuell</u>');
define('_JOOMFISH_TRANSLATION_INCOMPLETE', 'Översättningen är <u>ej fullständig</u> eller så har originalet <u>ändrats</u>');
define('_JOOMFISH_TRANSLATION_NOT_EXISTING', 'Översättningen <u>existerar inte</u>');
define('_JOOMFISH_TRANSLATION_PUBLISHED', 'Översättningen är <u>publicerad</u>');
define('_JOOMFISH_TRANSLATION_NOT_PUBLISHED', 'Översättningen är <u>inte publicerad</u>');
define('_JOOMFISH_STATE_TOGGLE', '(Klicka på ikonen för att växla status.)');

define('_JOOMFISH_DBERR_NO_LANGUAGE', 'Du måste välja ett språk');
define('_JOOMFISH_CONFIG_SAVED', 'Inställningar sparade.');																// New 1.1
define('_JOOMFISH_CONFIG_PROBLEMS', 'Kunde inte spara konfigurationen!');		// New 1.1
define('_JOOMFISH_LANG_PROBLEMS', 'Kunde inte spara språkinformationen!');		// New 1.1

define ('_JOOMFISH_ADMIN_CATEGORY','Filter, kategorier');													// New 1.7
define ('_JOOMFISH_ADMIN_CATEGORY_ALL','Alla kategorier');												// New 1.7
define ('_JOOMFISH_ADMIN_AUTHOR','Filter, författare');														// New 1.7
define ('_JOOMFISH_ADMIN_AUTHOR_ALL','Alla författare');													// New 1.7
define ('_JOOMFISH_ADMIN_KEYWORD','Filter, nyckelord');													// New 1.7
define ('_JOOMFISH_ADMIN_TRANSLATION_PUBLISHED','Översättning publicerad');								// New 1.7
define ('_JOOMFISH_ADMIN_MENUTYPE','Menyfilter');														// New 1.7
define ('_JOOMFISH_ADMIN_MENUTYPE_ALL','Alla menyer');													// New 1.7

define ('_JOOMFISH_ADMIN_CLIPBOARD_COPIED','originalvärdet har kopierats till urklippshanteraren.\nKlistra därefter in i din editor som html');
define ('_JOOMFISH_ADMIN_CLIPBOARD_COPY','Tryck ctrl-C för att kopiera originalvärdet till urklippshanteraren.\nKlistra därefter in i din editor som html');
define ('_JOOMFISH_ADMIN_CLIPBOARD_NOSUPPORT','Din läsare tillåter inte kopiering till urklippshanteraren.\nVälj originalet för hand och kopiera och klistra in');     // New 1.7

define( '_JOOMFISH_NO_TRANSLATION_AVAILABLE', 'Det finns ingen översättning tillgänglig, välj ett annat språk.');		// Changed 1.7

//tooltips
define ('_MBF_TT_TITLE_NAME','Namnet på språket som visas');
define ('_MBF_TT_TITLE_ISO','Språkets 2-bokstavs ISO-kod enligt RFC 3066.');
define ('_MBF_TT_IMAGES_DIR','För att använda förvalda flaggor, lämna tomt. För egna flaggor använd relativ sökväg baserad på Joomlas rotmapp.');
define ('_MBF_TT_TITLE_ORDER','Sortering på webbplatsen.');
define ('_MBF_TT_TRANS_DEFAULT','Fyll bara i något här om du vill använda en egen standardtext. <br />Om du lämnar tomt kommer textsträngen <strong>_JOOMFISH_NO_TRANSLATION_AVAILABLE</strong> som är definierad i språkfilen att användas.');
define ('_MBF_TT_SPACER','Avgränsare vid visning av språkval i text mod och i horisontell mod.<br /><strong>Tips</strong>: Om ingenting är ifyllt, och horisontell mod väljs, kommer en avgränsare att definieras av Joomla som: | (med mellanslag före och efter).<br />Mellanslag före och efter kommer alltid att användas.');

// errors
define ('_MBF_ERROR','Fel:');
define ('_MBF_EDITED_BY_ANOTHER_ADMIN','Artikeln [ %s ] ändras för närvarande av en annan administratör'); // %s=$actContentObject->title
define ('_MBF_CONFIG_WRITE_ERROR','Konfigurationsfilen är inte skrivbar!');
define ('_JOOMFISH_ADMIN_MAMBOT_ERROR','Flerspråksplugin för abstraktionslager är inte installerad eller publicerad – Joom!Fish kommer inte att fungera!');

// preferences
define ('_JOOMFISH_ADMIN_PREF_TITLE','Joom!Fish: Konfiguration');								// @since 1.7
define ('_JOOMFISH_ADMIN_ACCESS_PREFERENCES','Åtkomstalternativ');										// @since 1.7
define ('_JOOMFISH_FRONTEND_PUBLISH','Publicera från webbplatsen?');											// @since 1.7
define ('_JOOMFISH_ADMIN_PUBLISHERS','Publicist eller högre');											// @since 1.7
define ('_JOOMFISH_ADMIN_NOONE','Ingen');																// @since 1.7
define ('_JOOMFISH_ADMIN_FEPUBLISH_HELP','Vem skall kunna publicera översättningar direkt från webbplatsen?');	// @since 1.7

define('_JOOMFISH_ADMIN_COMPONENT_CONFIGURATION', 'Komponentkonfiguration');							// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_CONFIGURATION_HELP', 'Språket för administratörsinterfacet');		// @since 1.7
define('_JOOMFISH_ADMIN_COMPONENT_LANGUAGE', 'Komponentens admin-språk');								// @since 1.7
define('_JOOMFISH_ADMIN_SHOWIF', 'Vad skall visas om ...');
define('_JOOMFISH_ADMIN_NOTRANSLATION', 'ingen översättning är tillgänglig?');
define('_JOOMFISH_ADMIN_NOTRANSLATION_HELP', 'Denna ersättning gäller BARA för innehåll som är markerat med reference.type=content!');
define('_JOOMFISH_ADMIN_ORIGINAL_CONTENT', 'Originalinnehållet');
define('_JOOMFISH_ADMIN_ORIGINAL_WITH_INFO', 'Originalinnehållet med information');

define('_JOOMFISH_ADMIN_PLACEHOLDER', 'Förvald text');													// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_VIEW', 'Webbplatsens utseende');											// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_LIST', 'Länklista (horisontell)');										// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_COMBO', 'ComboBox');													// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_IMAGE', 'Bildlista (horisontell)');									// @deprcated from 1.7
define('_JOOMFISH_ADMIN_FRONTEND_HELP', 'Ange hur komponenten skall visas på webbplatsen<br>När du väljer &quot;Bildlista&quot; måste bildens sökväg vara tom eller korrekt baserad på Joomlas rotmapp.');							// @deprcated from 1.7

define ('_JOOMFISH_ADMIN_TITLE_UNPUBLISHED', 'Avpubliserad');
define ('_JOOMFISH_NAME_MISSING','Du måste skriva in ett namn');
define ('_JOOMFISH_ENTER_CORR_JOOMLA_NAME','Du måste skriva in ett tillhörande Joomlanamn');
define ('_JOOMFISH_LANG_ALREADY_EXISTS','Det finns redan ett språk med detta Joomlanamn, försök igen');
define ('_JOOMFISH_ADMIN_FRONTEND_VLIST', 'Namnlista (vertikal)');
define ('_JOOMFISH_ADMIN_FRONTEND_VIMAGE', 'Bildlista (vertikal)');
define ('_JOOMFISH_SPACER','Platshållare vid visning som text');

// upgrade
define('_JOOMFISH_UPGRADE', 'Uppgradera');																	// @since 1.7
define('_JOOMFISH_ADMIN_UPGRADE_INFO', 'Uppgradering från MambelFish till Joom!Fish kräver att alla existerande översättningar och språk <span style="font-weight:bold; color:red">RADERAS</span> i dina Joom!Fish tabeller!<br />Du måste bekräfta detta!');										// @since 1.7
define('_JOOMFISH_UPGRADE_BACKUP_TABLES', 'Ta backup av Joom!Fish tabellerna?');									// @since 1.7
define('_JOOMFISH_UPGRADE_DELETE_TABLES', 'Bekräfta BORTTAGNING av Joom!Fish tabellerna');						// @since 1.7
define('_JOOMFISH_UPGRADE_RENAME_TABLES', 'Döp om gamla tabeller efter uppgraderingen?');							// @since 1.7
define('_JOOMFISH_UPGRADE_ERROR_CONFIRM', '<span style="font-weight:bold; color:red">Då måste bekräfta att tabellerna kan RADERAS!</span>');							// @since 1.7
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

define('_JOOMFISH_CONTENT_TABLES', 'Joom!Fish tabeller för artiklar');											// @since 1.7
define('_JOOMFISH_LANGUAGE_TABLES', 'Joom!Fish språktabeller');											// @since 1.7
define('_JOOMFISH_DEL_SUCESSFUL', '<span style="font-weight:bold; color:green">raderad</span>' );											// @since 1.7
define('_JOOMFISH_DEL_FAILURE', '<span style="font-weight:bold; color:red">MISSLYCKADES att radera Joom!Fish tabellen</span>' );					// @since 1.7
define('_JOOMFISH_COPY_SUCESSFUL', '<span style="font-weight:bold; color:green">kopierad</span>' );											// @since 1.7
define('_JOOMFISH_COPY_FAILURE', '<span style="font-weight:bold; color:red">MISSLYCKADES att radera Joom!Fish tabellen</span>' );					// @since 1.7

// credits
define('_JOOMFISH_CREDITS','Erkännanden och resten av universumet');								// @since 1.7

define( "_JF_LANG_INCLUDED", true );
}
?>
