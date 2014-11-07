News Extended 1.5.0 für IlchClan 1.1I+:
""""""""""""""""""""""""""""""""

Beschreibung:
-------------
Dieses Modul ist eine Zusammenstellung vieler einzelner Sachen, die es entweder schon als Modul gibt oder in änlicher Form im ilch-Forum standen,
natürlich sind dabei auch neue Ideen oder Umsetzungen eingeflossen.
Features:	
	- News erst ab bestimmten Zeitpunkt anzeigen und zu bestimmten Zeitpunkt wieder ausblenden lassen  
	- Bei Änderungen an einer News wird Veränderungsdatum und ggf. "Veränderer" angezeigt und der ursrpünglicher Ersteller wird nicht verändert
	- News lassen sich mit BBCode (Standard oder BBCode2.0) oder HTML in Form des CK Editor verfassen
	- User haben die Möglichkeit Newsvorschläge einsenden (nur BBCode)
	- Newsarchiv (alte News ins Archiv schieben)
	- Löschabfrage bei Newskommentaren um versehentliches Löschen zu verhindern
	- Schutz vor Namensmissbrauch bei Kommentaren
	- News einen Freund senden
	- Druckoptimierte Version anzeigen lassen
	- Counter wie oft die News gelesen wurde
	- feine Rechteverwaltung für die News
	- Newsübersicht für (einzelne) Kategorien möglich -> ?news-KATEGORIE(-KATEGORIE2)

Changelog:
----------
- 1.5.0
	- CKEditor 4.4
- eine Vorschau wird erstellt.
- Bild sowie Text kann für eine Vorschau gewählt werden
- bei keiner Auswahl generiert es Text und Bild selbst.
- facebook-like-button eingefügt.

- 1.4b
	°Topnewstemplatevariablen angepasst, damit man die wie eine Normale News anpassen kann
	°Option Newszeit für später erscheinende News auf Erscheinungszeit zu setzen
	°CKEditor auf Version 3.4.2 aktualisiert

- 1.4a
	°Kleiner Fehler mit dem Zeichensatz bei der Vorschau im Adminbereich behoben

- 1.4
	°Es können mehrere Kategorien bei der Anzeige eingeschränkt werden, also
		z.B. ?news-KAT1-KAT2-KAT3 usw.
	°FCK Editor durch neue Version CK Editor ersetzt (schneller, aber ohne Upload)

- 1.3a
    °Bugfix bei Multipage und ?news-KATEGORIE (include/contents/news/news.php)

- 1.3 -> install_news.php erneut aufrufen!
	°größere Auswahlmöglichkeit, für wen einzelne News sichtbar sind (Topnews davon jetzt auch betroffen)
	°Newsübersicht auch für einzelne Kategorieen möglich -> ?news-KATEGORIE
	°aus newsextened wieder news gemacht, um Fehler bei der Installation zu vermeiden und weils kürzer ist ;)
	°FCK 2.5.1 -> 2.6.4
	°kleinere Fehlerbehebungen bei Atom/RSS

- 1.2
	°Zusammenschluss mit Topolinos Newsmodulen

- 1.1
	°angepasst an ilchClan 1.1I und BBCode 2.0 für 1.1I
	°FCK 2.4.3 -> FCK 2.5.1 (Opera 9.5+, Safari, ... Unterstützung)

- 1.0b
	°"-Zeichen in Newstitlen möglich
	°Fehler mit Kategorie #0# behoben
	°Beim editieren einer archivierten News bleibt diese nun im Archiv

- 1.0a
	°Bugfixes
	°FCK 2.4 -> 2.4.3


Entwickelt:
-----------
° von "Mairu" und "T0P0LIN0"
° auf Basis von IlchClan 1.1 I+
° nutzt den FCK Editor (getestet mit 2.6.3)
° Funktioniert auch mit BBCode 2.0 für 1.1I


WeiterEntwickelt:
-----------
° von "FeTTsack" 
	danke für die großartige vorarbeit :)

Installation:
-------------
° alle Dateien im Ordner upload, in ihrer Ordnerstrucktur hochladen

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
(**) - Ordner mit vielen Dateien, der nicht überschrieben werden muss, falls schon vorhanden

° deineseite.de/install_news.php aufrufen und der Anleitung folgen und nach der Ausführung löschen

° Nach der Installation die install_news.php sofort Löschen!!

° Um das News Archiv anzeigen zu lasen Navigation --> 
                                                Name = z.b News-Archiv
                                                Typ  = Menuepunkt intern --> >> news-archiv << Eingeben
° Um das News Einsenden anzeigen zu lasen Navigation --> 
                                                Name = z.b News-Einsenden
                                                Typ  = Menuepunkt intern --> >> news-add << Eingeben											
												
° Newsübersicht für (einzelne) Kategorien möglich -> ?news-KATEGORIE(-KATGEORIE2)

° Im extras Order liegen noch einige Dateien um andere Funktionen zu nutzen:
	° admin_news_fck.htm ist für den alten FCK Editor -> admin/templates/news.htm
	° contents_news.htm ist für einen andere Newsansicht -> templates/news/news.htm
	° selfbp_(f)ck.htm ist für die Editoren für Eigene Seite/Box -> admin/templates/selfbp.htm

° Im Forum auf meiner Seite hat finke eine Veränderungen veröffentlicht, mit der man News nebeneinander darstellen kann
  Im Sinne von:  News1  |  News2
                 News3  |  News4
  -> http://mairu.ilch.net/index.php?forum-showposts-519

Wichtige Bemerkungen:
---------------------
° Wenn du BBCode 2.0 noch nicht drauf hast und erst später nachrüstest,
  NICHT die include/admin/templates/news.htm überschreiben
  
° Es gibt ein AuthorMod für dieses Modul von Polli (http://www.hsg-whv.de)

Bekannte Einschränkungen / Fehler:
----------------------------------
° Nutzt viel Javascript/AJAX geht also nur mit neuen Browsern

Haftungsausschluss:
-------------------
Ich übernehme keine Haftung für Schäden, die durch dieses Skript entstehen.
Benutzung ausschließlich AUF EIGENE GEFAHR.

Fehler bitte an Mairu - www.dynamicgamerz.de oder T0P0LIN0 - www.honklords.de oder www.ilch.de