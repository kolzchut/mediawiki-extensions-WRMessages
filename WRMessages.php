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
	'version'        => '0.1',
	'url'            => 'http://www.kolzchut.org.il/he/Project:Extensions/WRMessages',
	'descriptionmsg' => 'wrmessages-desc',
);

$dir = dirname(__FILE__) . '/';

// i18n
$wgExtensionMessagesFiles['WRMessages'] = $dir .'WRMessages.i18n.php';
$wgExtensionMessagesFiles['WRMessagesNamespaces'] = $dir .'WRMessages.namespaces.php';

// Autoloading
$wgAutoloadClasses['WRMessagesHooks'] = $dir . '/WRMessages.hooks.php';


// Hooks
$wgHooks['CanonicalNamespaces'][] = 'WRMessagesHooks::onCanonicalNamespaces';

// Namespaces
define('NS_WR_COMPANY', 110);		#DS: 16/5/2010 additional namespace to host the company's site
define('NS_WR_COMPANY_TALK', 111);
define('NS_WR_COMMUNITY', 112); 		#DS: 30/5/2010 additional namespace host knowledge communities
define('NS_WR_COMMUNITY_TALK', 113); 
define('NS_WR_PORTAL', 114);		#DS: 31/1/2011 additional namespace to host portals data (but not the portals themselves at this point). 30/5/2011 not currently used
define('NS_WR_PORTAL_TALK', 115);
define('NS_WR_DRAFTS', 116);		#DS: 12/5/2011 additional namespace to host draft articles
define('NS_WR_DRAFTS_TALK', 117);
define('NS_WR_LIMBO', 118);		#DS: 26/9/2011 additional namespace to host on-hold articles
define('NS_WR_LIMBO_TALK', 119);
define('NS_WR_PRACTICE', 120);		#DS: 1/12/2011 additional namespace: a huge sandbox
define('NS_WR_PRACTICE_TALK', 121);
define('NS_WR_DATA', 122);			#DS: 7/3/2012 additional namespace: for holding small data like "tax reduction point"
define('NS_WR_DATA_TALK', 123);


	
#DS: 28/12/2009 Enable subpages on most namespaces
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


# Enable edit protection for some sensitive namespaces
$wgNamespaceProtection[NS_PROJECT] = array( 'editproject' ); 		# Only allow staff to edit project ("WikiRights") namespace
$wgNamespaceProtection[NS_WR_COMPANY] = array( 'editproject' );	# If allowed to edit the projet NS, allowed to edit this too
$wgNamespaceProtection[NS_TEMPLATE] = array( 'editproject' ); 		# If allowed to edit the projet NS, allowed to edit this too

# Disable search engines indexing
$wgNamespaceRobotPolicies[NS_MAIN] 		= 'index,follow';
$wgNamespaceRobotPolicies[NS_PROJECT] 		= 'index,follow';
$wgNamespaceRobotPolicies[NS_WR_COMPANY] 		= 'index,follow';
$wgNamespaceRobotPolicies[NS_WR_COMMUNITY] 	= 'index,follow';
