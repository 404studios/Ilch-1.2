<?php
/* UPDATE F�R REVISION 208 */

// Bessere Rechteabstimmung f�r Navigation m�glich
db_query('ALTER TABLE `prefix_menu` '
    .'ADD `recht_type` TINYINT(1) NOT NULL DEFAULT 0 COMMENT "0 -> ab (>=) ; 1 -> genau dieses (=); 2 -> bis (<=); 3 Team" AFTER `recht`'
    .' ADD INDEX ( `path` )');
//Social Networks f�r News optional
$sql = <<<SQL
INSERT INTO `prefix_config` (`schl`, `typ`, `typextra`, `kat`, `frage`, `wert`, `pos`, `hide`, `helptext`) VALUES
('news_social', 'r2', NULL, 'News Optionen', 'Bei News Social Network Buttons anzeigen?', '0', '0', '0', 'Zeigt bei News dann Buttons von Social Networks wie Facebook an.'),
('sb_archive_limit', 'input', NULL, 'Shoutbox Optionen', 'Anzahl angezeigter Nachrichten pro Seite im Archiv', '30', '0', '0', NULL)
SQL;
db_query($sql);
//Shoutbox erweitert
db_query("ALTER TABLE `prefix_shoutbox` ADD `uid` INT( 10 ) NOT NULL DEFAULT '0' AFTER `id`, ADD `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

$rev='238';
$update_messages[$rev][] = 'Bessere Rechteabstimmung f�r Navigation m�glich';
$update_messages[$rev][] = 'Social Network in News nun optional';
$update_messages[$rev][] = 'Shoutbox etwas �berarbeitet';
$update_messages[$rev][] = 'ilch.js �berarbeitet, bzw Sachen eingef�gt';
$update_messages[$rev][] = 'jquery aktualisiert';