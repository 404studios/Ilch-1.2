<?php
/**
 * @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
 * @copyright (C) 2000-2012 ilch.de
 * @version $Id
*/

db_query("ALTER TABLE `prefix_user`  MODIFY COLUMN `pass` varchar(118) NOT NULL DEFAULT '';
	ALTER TABLE ``prefix_usercheck`  MODIFY COLUMN `pass` varchar(118) NOT NULL DEFAULT ''");

$rev='242';
$update_messages[$rev][] = 'Spalte f�r die Passw�rter verg��ert, so dass crypt bis SHA512 benutzt werden kann';

