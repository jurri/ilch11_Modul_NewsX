<?php
#   Copyright by FeTTsack
#   Support gcc

defined ('main') or die ( 'no direct access' );

$news_groups = 0;
foreach ($_SESSION['authgrp'] as $id => $bool){
	$news_groups = $news_groups | pow(2, $id);
}


$tn_id = intval(@db_result($news_opts = db_query("SELECT v1, v2 FROM prefix_allg WHERE k = 'news' LIMIT 1"),0,0));
$abf = "SELECT n.news_id,
			   n.news_title,
			   n.klicks,
			   n.news_time,
			   u.name
        FROM prefix_news n,
        	 prefix_user u
		WHERE (((" . pow(2, abs($_SESSION['authright'])) . " | news_recht) = news_recht) 
		OR	(news_groups != 0 AND ((news_groups ^ $news_groups) != (news_groups | $news_groups)))) 
		AND `show` > 0 
		AND `show` <= UNIX_TIMESTAMP() 
		AND news_id != '.$tn_id.' 
		AND archiv != 1 
		AND (endtime IS NULL OR endtime > UNIX_TIMESTAMP())
		AND n.user_id = u.id
        ORDER BY news_time DESC
		LIMIT 0,25";
$erg = db_query($abf);
echo '<div style="height:150px; width:95%; overflow:auto; scrollbar-arrow-color:green;"><table width="100%" style="padding-top:10px; padding-bottom:0px;" cellspacing="0" cellpadding="0">';
while($row = db_fetch_assoc($erg)){
	echo '<tr><td align="left"><table border="0" cellspacing="0" cellpadding="2" width="306" height="24" background="include/designs/gfa_zone/bilder/lastbg.png"><tr height="24px">';
	echo '<td valign="top" width="2%"><font color="green"><b> &raquo; </b></font></td>';
	echo '<td width="10%" height="14px" align="left" title="Klicks"><font color="#888888">(<font color="green">'.$row['klicks'].'</font>)</font></td>';
	echo '<td width="78%" height="14px" align="left" title="'.$row['news_time'].' von '.$row['name'].'"><a href="index.php?news-'.$row['news_id'].'"><p class="firstgreen" style="height:0px; margin-top:-2px;">'.((strlen($row['news_title'])<32) ? $row['news_title'] : substr($row['news_title'],0,30).'...').'</p></a></td>';
	echo '</tr></table></td></tr>';
}
echo '</table></div>';


?>