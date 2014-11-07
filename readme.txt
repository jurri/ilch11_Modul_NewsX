News Extended 1.5.0 f�r IlchClan 1.1I+:
""""""""""""""""""""""""""""""""

Beschreibung:
-------------
Dieses Modul ist eine Zusammenstellung vieler einzelner Sachen, die es entweder schon als Modul gibt oder in �nlicher Form im ilch-Forum standen,
nat�rlich sind dabei auch neue Ideen oder Umsetzungen eingeflossen.
Features:	
	- News erst ab bestimmten Zeitpunkt anzeigen und zu bestimmten Zeitpunkt wieder ausblenden lassen  
	- Bei �nderungen an einer News wird Ver�nderungsdatum und ggf. "Ver�nderer" angezeigt und der ursrp�nglicher Ersteller wird nicht ver�ndert
	- News lassen sich mit BBCode (Standard oder BBCode2.0) oder HTML in Form des CK Editor verfassen
	- User haben die M�glichkeit Newsvorschl�ge einsenden (nur BBCode)
	- Newsarchiv (alte News ins Archiv schieben)
	- L�schabfrage bei Newskommentaren um versehentliches L�schen zu verhindern
	- Schutz vor Namensmissbrauch bei Kommentaren
	- News einen Freund senden
	- Druckoptimierte Version anzeigen lassen
	- Counter wie oft die News gelesen wurde
	- feine Rechteverwaltung f�r die News
	- News�bersicht f�r (einzelne) Kategorien m�glich -> ?news-KATEGORIE(-KATEGORIE2)

Changelog:
----------
- 1.5.0
	- CKEditor 4.4
- eine Vorschau wird erstellt.
- Bild sowie Text kann f�r eine Vorschau gew�hlt werden
- bei keiner Auswahl generiert es Text und Bild selbst.
- facebook-like-button eingef�gt.

- 1.4b
	�Topnewstemplatevariablen angepasst, damit man die wie eine Normale News anpassen kann
	�Option Newszeit f�r sp�ter erscheinende News auf Erscheinungszeit zu setzen
	�CKEditor auf Version 3.4.2 aktualisiert

- 1.4a
	�Kleiner Fehler mit dem Zeichensatz bei der Vorschau im Adminbereich behoben

- 1.4
	�Es k�nnen mehrere Kategorien bei der Anzeige eingeschr�nkt werden, also
		z.B. ?news-KAT1-KAT2-KAT3 usw.
	�FCK Editor durch neue Version CK Editor ersetzt (schneller, aber ohne Upload)

- 1.3a
    �Bugfix bei Multipage und ?news-KATEGORIE (include/contents/news/news.php)

- 1.3 -> install_news.php erneut aufrufen!
	�gr��ere Auswahlm�glichkeit, f�r wen einzelne News sichtbar sind (Topnews davon jetzt auch betroffen)
	�News�bersicht auch f�r einzelne Kategorieen m�glich -> ?news-KATEGORIE
	�aus newsextened wieder news gemacht, um Fehler bei der Installation zu vermeiden und weils k�rzer ist ;)
	�FCK 2.5.1 -> 2.6.4
	�kleinere Fehlerbehebungen bei Atom/RSS

- 1.2
	�Zusammenschluss mit Topolinos Newsmodulen

- 1.1
	�angepasst an ilchClan 1.1I und BBCode 2.0 f�r 1.1I
	�FCK 2.4.3 -> FCK 2.5.1 (Opera 9.5+, Safari, ... Unterst�tzung)

- 1.0b
	�"-Zeichen in Newstitlen m�glich
	�Fehler mit Kategorie #0# behoben
	�Beim editieren einer archivierten News bleibt diese nun im Archiv

- 1.0a
	�Bugfixes
	�FCK 2.4 -> 2.4.3


Entwickelt:
-----------
� von "Mairu" und "T0P0LIN0"
� auf Basis von IlchClan 1.1 I+
� nutzt den FCK Editor (getestet mit 2.6.3)
� Funktioniert auch mit BBCode 2.0 f�r 1.1I


WeiterEntwickelt:
-----------
� von "FeTTsack" 
	danke f�r die gro�artige vorarbeit :)

Installation:
-------------
� alle Dateien im Ordner upload, in ihrer Ordnerstrucktur hochladen

	| include/admin/news.php (*)
 	| include/admin/templates/news.htm (*)
	| include/boxes/lastnews.php
	| include/contents/news.php (*)
	| include/contents/news/news.php  
	| include/contents/news/add.php 
	| include/contents/news/archiv.php 
	| include/template/news/news.htm
	| include/template/news/top.htm 
	| include/template/news/add.htm 
	| include/template/news/archiv.htm 
	| include/images/icons/leer.gif 
	| include/images/icons/print_g.gif
	| include/images/icons/print_k.gif 
	| include/images/icons/news/comments.gif
	| include/images/icons/news/counter.gif 
	| include/images/icons/news/informant.gif
	| include/images/icons/news/more.gif 
	| include/images/icons/news/comments.gif 
	| include/images/icons/news/print.gif 
	| include/images/icons/news/send.gif 
	| include/images/news/ (**)
	| include/includes/fckeditor (**)  
	| include/includes/func/funkt.php 

(*) - NEU durch dieses Modul
(**) - Ordner mit vielen Dateien, der nicht �berschrieben werden muss, falls schon vorhanden

� deineseite.de/install_news.php aufrufen und der Anleitung folgen und nach der Ausf�hrung l�schen

� Nach der Installation die install_news.php sofort L�schen!!

� Um das News Archiv anzeigen zu lasen Navigation --> 
                                                Name = z.b News-Archiv
                                                Typ  = Menuepunkt intern --> >> news-archiv << Eingeben
� Um das News Einsenden anzeigen zu lasen Navigation --> 
                                                Name = z.b News-Einsenden
                                                Typ  = Menuepunkt intern --> >> news-add << Eingeben											
												
� News�bersicht f�r (einzelne) Kategorien m�glich -> ?news-KATEGORIE(-KATGEORIE2)

� Im extras Order liegen noch einige Dateien um andere Funktionen zu nutzen:
	� admin_news_fck.htm ist f�r den alten FCK Editor -> admin/templates/news.htm
	� contents_news.htm ist f�r einen andere Newsansicht -> templates/news/news.htm
	� selfbp_(f)ck.htm ist f�r die Editoren f�r Eigene Seite/Box -> admin/templates/selfbp.htm

� Im Forum auf meiner Seite hat finke eine Ver�nderungen ver�ffentlicht, mit der man News nebeneinander darstellen kann
  Im Sinne von:  News1  |  News2
                 News3  |  News4
  -> http://mairu.ilch.net/index.php?forum-showposts-519

Wichtige Bemerkungen:
---------------------
� Wenn du BBCode 2.0 noch nicht drauf hast und erst sp�ter nachr�stest,
  NICHT die include/admin/templates/news.htm �berschreiben
  
� Es gibt ein AuthorMod f�r dieses Modul von Polli (http://www.hsg-whv.de)

Bekannte Einschr�nkungen / Fehler:
----------------------------------
� Nutzt viel Javascript/AJAX geht also nur mit neuen Browsern

Haftungsausschluss:
-------------------
Ich �bernehme keine Haftung f�r Sch�den, die durch dieses Skript entstehen.
Benutzung ausschlie�lich AUF EIGENE GEFAHR.

Fehler bitte an Mairu - www.dynamicgamerz.de oder T0P0LIN0 - www.honklords.de oder www.ilch.de