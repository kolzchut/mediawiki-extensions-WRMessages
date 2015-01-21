<?php
/**
 * Internationalisation file for extension Wikimedia Messages
 *
 * @file
 * @ingroup Extensions
 */

/* New, more compact date format for WikiRights. */
$dateFormats['he'] = array(
	'wrspecial time' => 'H:i',
	'wrspecial date' => 'xnd.xnm.xnY',
	'wrspecial both' => 'xnd.xnm.xnY, H:i',
);
$defaultDateFormat['he'] = 'wrspecial';
$datePreferences['he'] = array(
	'default',
	'wrspecial',
	'dmy',
	'hebrew',
	'ISO 8601',
);

