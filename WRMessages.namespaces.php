<?php
/**
 * Namespace localization file for extension WRMessages
 *
 * @file
 * @ingroup Extensions
 */

$namespaceNames = array();

/**
 * English
 * Custom namespaces for Kol-Zchut (WikiRights)
 * @author Dror S. [FFS]
 */
$namespaceNames['en'] = array(
	NS_WR_COMPANY           => 'About',
	NS_WR_COMPANY_TALK      => 'About_talk',
	NS_WR_COMMUNITY         => 'Knowledge_Community',
	NS_WR_COMMUNITY_TALK    => 'Knowledge_Community_talk',
	NS_WR_PORTAL            => 'Portal',
	NS_WR_PORTAL_TALK       => 'Portal_talk',
	NS_WR_DRAFTS            => 'New',
	NS_WR_DRAFTS_TALK       => 'New_talk',
	NS_WR_PRACTICE		    =>	'Practice',
	NS_WR_PRACTICE_TALK		=> 'Practice_talk',
	NS_WR_LIMBO				=> 'On_Hold',
	NS_WR_LIMBO_TALK		=> 'On_Hold_talk',
	NS_WR_DATA				=> 'Data',
	NS_WR_DATA_TALK			=> 'Data_talk',
);

$namespaceAliases['en'] = array(
	'mw'     => NS_MEDIAWIKI, # Short alias - faster to type
	'תבנית' 	 => NS_TEMPLATE, 	# Allow easy importing from HE instance
	'תב' 	 => NS_TEMPLATE, 	# Short alias - faster to type
	'קטגוריה' 	 => NS_CATEGORY, 	# Allow the Hebrew keyword to be used in other language instances
	'קובץ' 	 => NS_FILE, 	# Allow the Hebrew keyword to be used in other language instances
	'מדיה' 	 => NS_MEDIA, 	# Allow the Hebrew keyword to be used in other language instances
	'מדיה-ויקי' => NS_MEDIAWIKI, 	# Allow the Hebrew keyword to be used in other language instances
);

/**
 * Hebrew (עברית)
 * Custom namespaces for Kol-Zchut (WikiRights)
 * @author Dror S. [FFS]
 * @author Kol-Zchut Staff
 */
$namespaceNames['he'] = array(
	NS_WR_COMPANY           => 'אודות',
	NS_WR_COMPANY_TALK      => 'שיחת_אודות',
	NS_WR_COMMUNITY         => 'קהילת_ידע',
	NS_WR_COMMUNITY_TALK    => 'שיחת_קהילת_ידע',
	NS_WR_PORTAL            => 'פורטל',
	NS_WR_PORTAL_TALK       => 'שיחת_פורטל',
	NS_WR_DRAFTS            => 'חדש',
	NS_WR_DRAFTS_TALK       => 'שיחת_חדש',
	NS_WR_PRACTICE          => 'תרגול',
	NS_WR_PRACTICE_TALK		=> 'שיחת_תרגול',
	NS_WR_LIMBO				=> 'הקפאה',
	NS_WR_LIMBO_TALK		=> 'שיחת_הקפאה',
	NS_WR_DATA				=> 'נתון',
	NS_WR_DATA_TALK			=> 'שיחת_נתון',
);

$namespaceAliases['he'] = $namespaceAliases['en'] + array(
	'תירגול'      => NS_WR_PRACTICE, # alias for spelling variation
	'שיחת_תירגול' => NS_WR_PRACTICE_TALK,
	'כל_זכות'	=> NS_PROJECT,	# alias for the project namespace, because people might forget the hyphen
	'כלזכות'	=> NS_PROJECT, # alias for the project namespace, because people might forget the hyphen
);

/**
/* Arabic (العربية)
 * Custom namespaces for Kol-Zchut (WikiRights)
 * @author Jalal Hassan
 * @author Suheir Daksa-Halabi
 */
global $wgTranslateNumerals;
$wgTranslateNumerals = false; # DS: 30/5/2011 Do not use arabic numerals
$namespaceNames['ar'] = array(
	NS_WR_COMPANY           => 'حول',
	NS_WR_COMPANY_TALK      => 'نقاش_حول',
	NS_WR_COMMUNITY         => 'مجتمع_المعرفة',
	NS_WR_COMMUNITY_TALK    => 'نقاش_مجتمع_المعرفة',
	NS_WR_LIMBO	            => 'تجميد',
	NS_WR_LIMBO_TALK        => 'نقاش_تجميد',
	/*
	NS_WR_PORTAL          => 'פורטל',
	NS_WR_PORTAL_TALK     => 'שיחת_פורטל',
	NS_WR_DRAFTS          => 'חדש',
	NS_WR_DRAFTS_TALK     => 'שיחת_חדש',
	NS_WR_PRACTICE			=>	'תרגול',
	NS_WR_PRACTICE_TALK		=> 'שיחת_תרגול',

	NS_WR_DATA				=> 'נתון',
	NS_WR_DATA_TALK			=> 'שיחת_נתון',
	*/
);

$namespaceAliases['ar'] = $namespaceAliases['he'];


