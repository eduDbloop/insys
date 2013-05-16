// JavaScript Document
 <!--

function MM_reloadPage(init) {

  // TEIL I -laden der Seite:
  // Wenn übergebener Parameter wahr ist unter zuhilfenahme des navigator-Objekts...
  if (init == true) with (navigator) {

    // ... das parsende Programm auf Namen und Version prüfen...
    // ... wenn Programmname "Netscape" und zugleich Programmversion "4" ist...
    if ( (appName == "Netscape") && (parseInt(appVersion) == 4) ) {

      // ... die innere Fensterbreite und -höhe in Variablen festhalten...
      document.MM_pgW = innerWidth;
      document.MM_pgH = innerHeight;

      // ... und sich selbst ohne Parameter (TEIL II) ausführen wenn Fenstergröße geändert wird
      onresize = MM_reloadPage;
    }
  }
  
  // TEIL II -nach Größenänderung:
  // Wenn übergebener Parameter falsch ist...
  else {

    // ... und die innere Fensterbreite und -höhe nicht mit den entsprechenden...
    // ... Werten aus den Variablen übereinstimmen...
    if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH) {

      // ... die Seite neu laden
      location.reload();
    }
  }
}

// Aufruf der obigen Funktion (TEIL I) wenn Seite geparsed wird
MM_reloadPage(true);

 //-->
 