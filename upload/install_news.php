<?php
#   Copyright by: Manuel Staechele
#   Support: www.ilch.de
#   Modded by Mairu

$name = 'News Extended';
$version = '1.4b';
$readme = <<<README
News Extended 1.4b für IlchClan 1.1I+:
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

Installation:
-------------
° alle Dateien im Ordner upload, in ihrer Ordnerstrucktur hochladen

	| include/admin/news.php (*)
 	| include/admin/templates/news.htm (*)
	| include/boxes/lastnews.php
	| include/contents/newsextended.php
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
	| include/includes/fckeditor (**)  

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
README;
$name2 = htmlentities(preg_replace('%([^/s])%', '$1 ', $name . ' ' . $version));
$name = htmlentities($name);
$rows = substr_count($readme, "\n");
if ($rows > 45) $rows = 45;
?>
<html>
<head><title>... ::: [ I n s t a l l a t i o n &nbsp; f &uuml; r &nbsp; <?php echo $name2;?> &nbsp; f &uuml; r &nbsp; i l c h  &nbsp; 1 . 1 M] ::: ...</title>
<link rel="stylesheet" href="include/designs/ilchClan/style.css" type="text/css">
</head>
<body>

<form method="post">
		<table width="70%" class="border" border="0" cellspacing="0" cellpadding="25" align="center">
      <tr><th class="Chead" align="center">... ::: [ I n s t a l l a t i o n &nbsp; f &uuml; r &nbsp; <u><?php echo $name2;?> &nbsp; f &uuml; r &nbsp; i l c h  &nbsp; 1 . 1 M</u>] ::: ...</th></tr>
      <tr>
        <td class="Cmite">
<?php
if ( empty ($_POST['step']) ) {
?>
<div align="center">
<h2>Readme</h2>
<textarea cols="120" rows="<?php echo $rows; ?>"><?php echo htmlentities($readme); ?></textarea><br /><br />

<em>Falls schon eine &auml;ltere Version von News Extended installiert ist, ist es egal was ausgew&ouml;hlt wird.</em><br />
Waren die News bisher mit BBCode (Standard) oder HTML (FCK Modul)?
 &nbsp;
<input id="rad_bb" type="radio" name="html" value="0" checked="checked" /> <label for="rad_bb">BBCode</label>
 &nbsp;
<input id="rad_html" type="radio" name="html" value="1" /> <label for="rad_html">HTML</label>
<br /><br />
Dieses Script soll die n&ouml;tigen Datanbank&auml;ndernungen f&uuml;r das <strong><?php echo $name; ?></strong> - Modul machen<br />
<br />
<input type="hidden" name="step" value="2" />
<input type="submit" value="Installieren" />
</div>
<?php
} elseif ($_POST['step'] == 2) {

    define ( 'main' , TRUE );
    require_once('include/includes/config.php');
    require_once('include/includes/func/db/mysql.php');
    db_connect();

    $old = array();
    $sql_statements = array();

    $q = db_query("SHOW FULL COLUMNS FROM `prefix_news`");
    while($r = db_fetch_object($q)){
        $old[] = $r->Field;
    }

    $update_news = array();
    if (!in_array('editor_id',$old)) {
        $update_news[] = 'ADD `editor_id` INT NULL AFTER `news_time`';
    }
    if (!in_array('edit_time',$old)) {
        $update_news[] = 'ADD `edit_time` DATETIME NULL AFTER `editor_id`';
    }
    if (!in_array('html',$old)) {
        $update_news[] = 'ADD `html` TINYINT ( 1 )NOT NULL';
    }
    if (!in_array('show',$old)) {
        $update_news[] = 'ADD `show` INT ( 12 ) NOT NULL';
    }
    if (!in_array('archiv',$old)) {
        $update_news[] = 'ADD `archiv` TINYINT ( 1 ) NOT NULL DEFAULT \'0\'';
    }
    if (!in_array('endtime',$old)) {
        $update_news[] = 'ADD `endtime` INT ( 12 ) NULL';
    }
    if (!in_array('klicks',$old)) {
        $update_news[] = 'ADD `klicks`  MEDIUMINT ( 9 )  NOT NULL DEFAULT \'0\'';
    }
	if (!in_array('news_preview',$old)) {
        $update_news[] = 'ADD `news_preview`  text  NULL';
    }
	if (!in_array('img_preview',$old)) {
        $update_news[] = 'ADD `img_preview`  varchar(400)  NULL';
    }
	

	//Version 1.3
	if (!in_array('news_groups', $old)) {
		$update_news []   = "ADD `news_groups` INT NOT NULL DEFAULT '0' AFTER `news_recht`";
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 1023 WHERE `news_recht` = 0';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 1022 WHERE `news_recht` = -1';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 1020 WHERE `news_recht` = -2';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 1016 WHERE `news_recht` = -3';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 1008 WHERE `news_recht` = -4';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 992 WHERE `news_recht` = -5';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 960 WHERE `news_recht` = -6';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 896 WHERE `news_recht` = -7';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 768 WHERE `news_recht` = -8';
		$sql_statements[] = 'UPDATE `prefix_news` SET `news_recht` = 512 WHERE `news_recht` = -9';
	}
	
	$sql_statements[] = "INSERT INTO `prefix_config` (`schl`, `typ`, `kat`, `frage`, `wert`, `pos`) VALUES ('fb_active', 'r2', 'Like Button Optionen', 'Modul aktivieren?', '1', 0);";
	$sql_statements[] = "INSERT INTO `prefix_config` (`schl`, `typ`, `kat`, `frage`, `wert`, `pos`) VALUES ('fb_send', 'r2', 'Like Button Optionen', 'Senden Button anzeigen?', '1', 0);";
	$sql_statements[] = "INSERT INTO `prefix_config` (`schl`, `typ`, `kat`, `frage`, `wert`, `pos`) VALUES ('fb_width', 'input', 'Like Button Optionen', 'Breite des Modules (in Pixeln)', '450', 0);";
	$sql_statements[] = "INSERT INTO `prefix_config` (`schl`, `typ`, `kat`, `frage`, `wert`, `pos`) VALUES ('fb_faces', 'r2', 'Like Button Optionen', 'Profilbilder anzeigen?', '1', 0);";

    if (!empty($update_news)) {
        $sql_statements[] = 'ALTER TABLE `prefix_news` '.implode(', ', $update_news).';';
        $sql_statements[] = 'UPDATE `prefix_news` SET `show` = 1;';
    }

    if (db_count_query("SELECT COUNT(*) FROM `prefix_allg` WHERE k = 'news'") == 0) {
        $sql_statements[] = 'INSERT INTO `prefix_allg` ( `k` , `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `t1` ) VALUES ( "news", "0", "1", "1", "Allgemein", "", "", "" )';
    }

    if (in_array('news_html', $old)) {
        $sql_statements[] = 'UPDATE `prefix_news` SET `html` = IF(news_html=\'true\',1,0);';
        $sql_statements[] = 'ALTER TABLE `prefix_news` DROP `news_html`';
    } elseif ($_POST['html'] == 1 and !in_array('html', $old)) {
        $sql_statements[] = 'UPDATE `prefix_news` SET `html` = 1;';
    }

    foreach ( $sql_statements as $sql_statement ) {
        if ( trim($sql_statement) != '' ) {
            echo '<pre>'.$sql_statement.'</pre>';
            $e = db_query($sql_statement);
            if (!$e) {
                echo '<font color="#FF0000"><b>Es ist ein Fehler aufgetreten</b></font>, bitte alles auf dieser Seite kopieren und auf ilch.de oder dynamicgamerz.de im Forum fragen...:<div style="border: 1px dashed grey; padding: 5px; background-color: #EEEEEE">'. mysql_error().'<hr>'.$sql_statement.'</div><br /><b>Es sei denn,</b> es ist ein Fehler mit <i>duplicate entry</i> aufgetreten, das liegt einfach nur daran, dass du die Updatedatei mehrmals ausgeführt hast.<br />';
            }
            echo '<hr>';
        }
    }
    echo '<br /><br />Wenn keine Fehler aufgetreten sind, sollte die Installation ohne Probleme verlaufen sein und du solltest die install_news.php nun vom Webspace l&ouml;schen.';

}
?>
</td></tr></table>
</form>
</body>
</html>