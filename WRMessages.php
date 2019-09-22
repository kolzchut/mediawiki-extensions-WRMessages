<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}
/**
 * An extension to add Kol-Zchut-specific messsages and override some of the default ones.
 * Originally based on [[Extension:WikimediaMessages]]
 *
 * @file
 * @ingroup Extensions
 *
 * @copyright Copyright © 2012, Dror S. & Kol-Zchut Ltd (CIC)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgExtensionCredits['other'][] = [
	'path'           => __FILE__,
	'name'           => 'WRMessages',
	'author'         => 'Dror S. [FFS] ([http://www.kolzchut.org.il Kol-Zchut])',
	'version'        => '0.3.0',
	'url'            => 'https://github.com/kolzchut/mediawiki-extensions-WRMessages',
	'descriptionmsg' => 'wrmessages-desc',
];

// i18n
$wgMessagesDirs['WRMessages'] = [
	__DIR__ . '/i18n/new',
	__DIR__ . '/i18n/overrides'
];
$wgExtensionMessagesFiles['WRMessagesNamespaces'] = __DIR__ . '/WRMessages.namespaces.php';
$wgExtensionMessagesFiles['WRMessagesAliases'] = __DIR__ . '/WRMessages.alias.php';

// Autoloading
$wgAutoloadClasses['WRMessagesHooks'] = __DIR__ . '/WRMessages.hooks.php';

// Hooks
$wgHooks['LinkerMakeExternalLink'][] = 'WRMessagesHooks::onLinkerMakeExternalLink';
$wgHooks['CanonicalNamespaces'][] = 'WRMessagesHooks::onCanonicalNamespaces';
$wgHooks['MessageCache::get'][] = 'WRMessagesHooks::onMessageCacheGet';


/** Custom Namespaces */

// 2015 No longer in use (using NS_PROJECT instead, only redirects left)
define( 'NS_WR_COMPANY', 110 );
define( 'NS_WR_COMPANY_TALK', NS_WR_COMPANY + 1 );
// 2010-05-30 knowledge communities, no longer in use
define( 'NS_WR_COMMUNITY', 112 );
define( 'NS_WR_COMMUNITY_TALK', NS_WR_COMMUNITY + 1 );
// 2011-01-31 portals data (but not the portals themselves). Never used
define( 'NS_WR_PORTAL', 114 );
define( 'NS_WR_PORTAL_TALK', NS_WR_PORTAL + 1 );
// 2011-05-12 draft articles before publishing to NS_MAIN
define( 'NS_WR_DRAFTS', 116 );
define( 'NS_WR_DRAFTS_TALK', NS_WR_DRAFTS + 1 );
// 2011-09-26 on-hold articles,with warning about being inactive
define( 'NS_WR_LIMBO', 118 );
define( 'NS_WR_LIMBO_TALK', NS_WR_LIMBO + 1 );
// 2011-12-01 a huge sandbox
define( 'NS_WR_PRACTICE', 120 );
define( 'NS_WR_PRACTICE_TALK', NS_WR_PRACTICE + 1 );
// 2012-03-07 holding small data like "tax reduction point"
define( 'NS_WR_DATA', 122 );
define( 'NS_WR_DATA_TALK', NS_WR_DATA + 1 );
// 2019-08-05 Landing Pages
define( 'NS_WR_LANDING', 124 );
define( 'NS_WR_LANDING_TALK', NS_WR_LANDING + 1 );

/** Enable subpages on most namespaces [DS 2009-12-28] */
$wgNamespacesWithSubpages[NS_WR_COMPANY] = true;
$wgNamespacesWithSubpages[NS_WR_COMMUNITY] = true;
$wgNamespacesWithSubpages[NS_WR_PORTAL] = true;
$wgNamespacesWithSubpages[NS_WR_DRAFTS] = true;
$wgNamespacesWithSubpages[NS_WR_LIMBO] = true;
$wgNamespacesWithSubpages[NS_WR_PRACTICE] = true;
$wgNamespacesWithSubpages[NS_WR_DATA] = true;
$wgNamespacesWithSubpages[NS_MAIN] = true;
$wgNamespacesWithSubpages[NS_HELP] = true;
$wgNamespacesWithSubpages[NS_TEMPLATE] = true;
$wgNamespacesWithSubpages[NS_PROJECT] = true;

/** Edit protection for some sensitive namespaces */
$wgNamespaceProtection[NS_MAIN] = [ 'edit-main' ];
$wgNamespaceProtection[NS_WR_DATA] = [ 'edit-main' ];
$wgNamespaceProtection[NS_WR_DRAFTS] = [ 'edit-main' ];
$wgNamespaceProtection[NS_WR_LIMBO] = [ 'edit-main' ];
$wgNamespaceProtection[NS_HELP] = [ 'edit-main' ];
$wgNamespaceProtection[NS_WR_DATA] = [ 'edit-main' ];

/** Add namespaces to be searched by default */
$wgNamespacesToBeSearchedDefault[NS_WR_DRAFTS] = true;
$wgNamespacesToBeSearchedDefault[NS_WR_LANDING] = true;

// Only allow staff to edit NS_PROJECT
$wgNamespaceProtection[NS_PROJECT] = [ 'editproject' ];
// If allowed to edit the NS_PROJECT, allowed to edit the following as well:
$wgNamespaceProtection[NS_WR_COMPANY] = [ 'editproject' ];
$wgNamespaceProtection[NS_TEMPLATE] = [ 'editproject' ];

/** Extra security for non-public-oriented namespaces, [dependant on Extension:Lockdown!] */
	// $wgNamespacePermissionLockdown[NS_WR_DRAFTS]['*'] = array('editor', 'staff');
	// $wgNonincludableNamespaces[] = NS_WR_DRAFTS;
	// $wgNamespacePermissionLockdown[NS_WR_LIMBO]['*'] = array('editor', 'staff');
	$wgNonincludableNamespaces[] = NS_WR_LIMBO;
	$wgNamespacePermissionLockdown[NS_WR_PRACTICE]['*'] = [ 'editor', 'staff' ];
	$wgNonincludableNamespaces[] = NS_WR_PRACTICE;

/** Extra security for potentially private information [dependant on Extension:Lockdown!] */
	$wgSpecialPageLockdown['Listusers'] = [ 'staff' ];
	$wgSpecialPageLockdown['Activeusers'] = [ 'editor', 'staff' ];
	$wgSpecialPageLockdown['BlockList'] = [ 'editor', 'staff' ];
	$wgSpecialPageLockdown['Log'] = [ 'editor', 'staff' ];
	$wgSpecialPageLockdown['LinkSearch'] = [ 'editor', 'staff' ];
	$wgSpecialPageLockdown['Export'] = [ 'editor', 'staff' ];

/** The default, as set in CommonSettings.php, is noindex, nofollow. These are exceptions: */
$wgNamespaceRobotPolicies[NS_MAIN] = 'index,follow';
$wgNamespaceRobotPolicies[NS_PROJECT] = 'index,follow';
