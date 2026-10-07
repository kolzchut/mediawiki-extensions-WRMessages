<?php

namespace MediaWiki\Extension\WRMessages\Tests\Unit;

use MediaWiki\Config\HashConfig;
use MediaWiki\Extension\WRMessages\Hooks;
use MediaWiki\Utils\UrlUtils;
use MediaWikiUnitTestCase;

/**
 * @covers \MediaWiki\Extension\WRMessages\Hooks::onLinkerMakeExternalLink
 */
class HooksTest extends MediaWikiUnitTestCase {

	/**
	 * The shipped default of $wgWRMessagesReferrerWhitelistRegexp, read from
	 * extension.json so the test exercises exactly what the extension ships.
	 */
	private static function defaultWhitelist(): array {
		$json = json_decode(
			file_get_contents( dirname( __DIR__, 3 ) . '/extension.json' ),
			true
		);
		return $json['config']['WRMessagesReferrerWhitelistRegexp']['value'];
	}

	private static function relAfterHook( string $url ): string {
		$hooks = new Hooks(
			new HashConfig( [ 'WRMessagesReferrerWhitelistRegexp' => self::defaultWhitelist() ] ),
			new UrlUtils()
		);
		$text = 'link';
		$link = '';
		$attribs = [ 'rel' => 'nofollow noreferrer noopener' ];
		$hooks->onLinkerMakeExternalLink( $url, $text, $link, $attribs, 'free' );
		return $attribs['rel'];
	}

	public static function provideWhitelisted(): iterable {
		yield 'gov.il itself' => [ 'https://gov.il/he' ];
		yield 'www.gov.il' => [ 'https://www.gov.il/he/departments' ];
		yield 'nested gov.il subdomain' => [ 'https://a.b.gov.il/' ];
		yield 'kolsherut.org.il itself' => [ 'https://kolsherut.org.il/' ];
		yield 'www.kolsherut.org.il' => [ 'https://www.kolsherut.org.il/service/1' ];
	}

	/**
	 * @dataProvider provideWhitelisted
	 */
	public function testWhitelistedHostLosesNoreferrer( string $url ): void {
		$this->assertStringNotContainsString( 'noreferrer', self::relAfterHook( $url ) );
	}

	public static function provideNotWhitelisted(): iterable {
		yield 'suffix without a dot boundary' => [ 'https://notgov.il/' ];
		yield 'kolsherut suffix without a dot boundary' => [ 'https://evilkolsherut.org.il/' ];
		yield 'unescaped dot as wildcard' => [ 'https://govXil/' ];
		yield 'kolsherut with wildcard dots' => [ 'https://kolsherutXorgXil/' ];
		yield 'whitelisted name not at the end' => [ 'https://gov.il.example.com/' ];
		yield 'unrelated host' => [ 'https://example.com/' ];
	}

	/**
	 * @dataProvider provideNotWhitelisted
	 */
	public function testOtherHostKeepsNoreferrer( string $url ): void {
		$this->assertStringContainsString( 'noreferrer', self::relAfterHook( $url ) );
	}
}
