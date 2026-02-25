<?php

namespace MediaWiki\Extension\WRMessages;

use MediaWiki\Cache\Hook\MessageCacheFetchOverridesHook;
use MediaWiki\Config\Config;
use MediaWiki\Hook\LinkerMakeExternalLinkHook;
use MediaWiki\Utils\UrlUtils;
use MessageCache;

/**
 * Hook handlers for WRMessages
 */
class Hooks implements LinkerMakeExternalLinkHook, MessageCacheFetchOverridesHook {

	private Config $config;
	private UrlUtils $urlUtils;

	public function __construct( Config $config, UrlUtils $urlUtils ) {
		$this->config = $config;
		$this->urlUtils = $urlUtils;
	}

	/**
	 * Remove 'noreferrer' (added automatically by the parser) from whitelisted URLs.
	 *
	 * Hook: LinkerMakeExternalLink
	 *
	 * @param string &$url Link URL
	 * @param string &$text Link text
	 * @param string &$link New link HTML (if returning false)
	 * @param string[] &$attribs Attributes to be applied
	 * @param string $linkType External link type
	 */
	public function onLinkerMakeExternalLink( &$url, &$text, &$link, &$attribs, $linkType ): void {
		$whitelistRegexp = $this->config->get( 'WRMessagesReferrerWhitelistRegexp' );
		if ( !is_array( $whitelistRegexp ) || $whitelistRegexp === [] ) {
			return;
		}

		$parsedUrl = $this->urlUtils->parse( $url );
		if ( !isset( $parsedUrl['host'] ) ) {
			return;
		}

		foreach ( $whitelistRegexp as $pattern ) {
			if ( preg_match( $pattern, $parsedUrl['host'] ) ) {
				if ( isset( $attribs['rel'] ) ) {
					$attribs['rel'] = str_replace( 'noreferrer', '', $attribs['rel'] );
				}
				return;
			}
		}
	}

	/**
	 * When core requests certain messages, redirect the key to a Kol-Zchut-prefixed version,
	 * unless the wiki already has a custom MediaWiki-namespace override for that key.
	 *
	 * Hook: MessageCacheFetchOverrides
	 *
	 * @param (string|callable)[] &$keys Message key overrides
	 */
	public function onMessageCacheFetchOverrides( array &$keys ): void {
		static $messageKeyList = [
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
			'accesskey-p-logo',
			'accesskey-n-mainpage',
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
			'emailsender',
		];

		$languageCode = $this->config->get( 'LanguageCode' );

		foreach ( $messageKeyList as $key ) {
			$prefixedKey = "kz-$key";
			// Override order:
			// 1. If the MediaWiki:$ucKey page exists on-wiki, use the unprefixed key (wiki wins).
			// 2. Otherwise, use the kz-prefixed key (extension default).
			$keys[$key] = static function (
				string $lcKey,
				MessageCache $cache
			) use ( $prefixedKey, $languageCode ): string {
				$ucKey = ucfirst( $lcKey );
				if ( $cache->getMsgFromNamespace( $ucKey, $languageCode ) === false ) {
					return $prefixedKey;
				}
				return $lcKey;
			};
		}
	}
}
