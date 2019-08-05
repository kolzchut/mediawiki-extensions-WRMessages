<?php

class WRMessagesHooks {
	/**
	 * For extensions adding their own namespaces or altering the defaults.
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/CanonicalNamespaces
	 *
	 * @param array $list
	 *
	 * @return true
	 */
	public static function onCanonicalNamespaces( array &$list ) {
		$list[NS_WR_COMPANY] = 'אודות';
		$list[NS_WR_COMPANY_TALK] = 'שיחת_אודות';
		$list[NS_WR_COMMUNITY] = 'קהילת_ידע';
		$list[NS_WR_COMMUNITY_TALK] = 'שיחת_קהילת_ידע';
		$list[NS_WR_PORTAL] = 'פורטל';
		$list[NS_WR_PORTAL_TALK] = 'שיחת_פורטל';
		$list[NS_WR_DRAFTS] = 'חדש';
		$list[NS_WR_DRAFTS_TALK] = 'שיחת_חדש';
		$list[NS_WR_LIMBO] = 'הקפאה';
		$list[NS_WR_LIMBO_TALK] = 'שיחת_הקפאה';
		$list[NS_WR_PRACTICE] = 'תרגול';
		$list[NS_WR_PRACTICE_TALK] = 'שיחת_תרגול';
		$list[NS_WR_DATA] = 'נתון';
		$list[NS_WR_DATA_TALK] = 'שיחת_נתון';

		return true;
	}

	/**
	 * When core requests certain messages, change the key to a Kol-Zchut version.
	 *
	 * @note Don't make this a closure, it causes the Database Dumps to fail.
	 *   See https://bugs.php.net/bug.php?id=52144
	 *
	 * @param String &$lcKey message key to check and possibly convert
	 *
	 * @return bool
	 */
	public static function onMessageCacheGet( &$lcKey ) {
		global $wgLanguageCode;

		static $keys = [
			'aboutpage',
			'aboutsite',
			'copyright',
			'copyrightwarning',
			'deletereason-dropdown',
			'edithelppage',
			'hidetoc',
			'showtoc',
			'lastmodifiedat',
			'lastmodifiedatby',

			'login',
			'logouttext',
			'nav-login-createaccount',
			'userlogin',
			'userloginnocreate',
			'logout',
			'userlogout',
			'notloggedin',
			'nologin',
			'gotaccountlink',
			'createaccounterror',
			'signupstart',

			'noarticletext',
			'noarticletext-nopermission',
			'protect-dropdown',
			'siteuser',
			'siteusers',
			'tagline',
			'tooltip-p-logo',
			'tooltip-n-mainpage',
			'tooltip-n-mainpage-description',
			"accesskey-p-logo",
			"accesskey-n-mainpage",
			'enotif_body_intro_deleted',
			'enotif_body_intro_created',
			'enotif_body_intro_moved',
			'enotif_body_intro_restored',
			'enotif_body_intro_changed',
			'enotif_lastvisited',
			'enotif_lastdiff',
			'enotif_body',
			'search-nonefound',
			'upload',
			'userpage',

			'helena-disclaimers',
			'wr-langlinks-label',

			'smw_purge',
			'emailsender'
		];

		if ( in_array( $lcKey, $keys, true ) ) {
			$prefixedKey = "kz-$lcKey";

			// MessageCache uses ucfirst if ord( key ) is < 128, which is true of all
			// of the above.  Revisit if non-ASCII keys are used.
			$ucKey = ucfirst( $lcKey );
			$cache = MessageCache::singleton();
			if (
				// Override order:
				// 1. If the MediaWiki:$ucKey page exists, use the key unprefixed
				// (in all languages) with normal fallback order.  Specific
				// language pages (MediaWiki:$ucKey/xy) are not checked when
				// deciding which key to use, but are still used if applicable
				// after the key is decided.
				// 2. Otherwise, use the prefixed key with normal fallback order
				// (including MediaWiki pages if they exist).
				$cache->getMsgFromNamespace( $ucKey, $wgLanguageCode ) === false
			) {
				$lcKey = $prefixedKey;
			}
		}
		return true;
	}
}
