// JavaScript Document
 <!--

function MM_reloadPage(init) {

  // TEIL I -laden der Seite:
  // Wenn �bergebener Parameter wahr ist unter zuhilfenahme des navigator-Objekts...
  if (init == true) with (navigator) {

    // ... das parsende Programm auf Namen und Version pr�fen...
    // ... wenn Programmname "Netscape" und zugleich Programmversion "4" ist...
    if ( (appName == "Netscape") && (parseInt(appVersion) == 4) ) {

      // ... die innere Fensterbreite und -h�he in Variablen festhalten...
      document.MM_pgW = innerWidth;
      document.MM_pgH = innerHeight;

      // ... und sich selbst ohne Parameter (TEIL II) ausf�hren wenn Fenstergr��e ge�ndert wird
      onresize = MM_reloadPage;
    }
  }
  
  // TEIL II -nach Gr��en�nderung:
  // Wenn �bergebener Parameter falsch ist...
  else {

    // ... und die innere Fensterbreite und -h�he nicht mit den entsprechenden...
    // ... Werten aus den Variablen �bereinstimmen...
    if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH) {

      // ... die Seite neu laden
      location.reload();
    }
  }
}

// Aufruf der obigen Funktion (TEIL I) wenn Seite geparsed wird
MM_reloadPage(true);

 //-->
 