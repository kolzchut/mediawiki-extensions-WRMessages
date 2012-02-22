<?php
if (!defined('MEDIAWIKI')) die();
/**
 * An extension that adds Kol-Zchut specific messsages. Originally based on [[Extension:WikimediaMessages]]
 *
 * @file
 * @ingroup Extensions
 *
 * @copyright Copyright © 2012, Dror Snir (Kol-Zchut Ltd.)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'WRMessages',
	'author'         => 'Dror Snir ([http://www.kolzchut.org.il Kol-Zchut])',
	'version'        => '0.0.1',
	'url'            => 'http://www.kolzchut.org.il/he/Project:Extensions/WRMessages',
	'descriptionmsg' => 'wrmessages-desc',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['WRMessages'] = $dir .'WRMessages.i18n.php';
