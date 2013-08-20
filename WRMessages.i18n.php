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

 
 
$messages = array();

/**
 * English
 * Base messages override + new messages for Kol-Zchut (WikiRights) 
 * @author Dror Snir
 * @author Ruth Bridger
 */
  
$messages['en'] = array(
	'wrmessages-desc' => 'Kol-Zchut specific messages',

	# Per http://lists.wikimedia.org/pipermail/wikitech-l/2008-September/039454.html
	'robots.txt'  => '# Lines here will be added to the global robots.txt', # do not translate or duplicate this message to other languages

	# Kol-Zchut specific usergroups
	'group-staff'               => 'Staff',
	'group-staff+'              => 'Staff: extra permissions',
	'group-automaton'           => 'Automatons',
	'group-socialworker'        => 'Social workers',
	
	'group-staff-member'        => 'Member of staff',
	'group-staff+-member'        => 'Member of Staff+',
	'group-automaton-member'    => 'Automaton',
	'group-socialworker-member' => 'Social worker',

	'grouppage-staff'           => '{{ns:project}}:Staff',
	'grouppage-staff+'          => '{{ns:project}}:Staff',
	'grouppage-socialworker'    => '{{ns:project}}:Social workers',

	'right-staff'               => 'Staff only',
	'restriction-level-staff'   => 'Staff only',

	/* ************ */
	/* NEW Messages */

	/* Template messages */
	'tpl-lead-link-text'           => 'Additional details...',
	'tpl-דוגמה-title'            	=> 'Example',
	
	'skinname-wrvector'     => 'All-Rights (old design)',
	'skinname-victoria'     => 'Victoria (new design)',

	/* ******** */
	/* Settings */  
	#The following require WRMessages to be included *after* the appropriate extension
	'multiboilerplate' => '* Right | תבנית:זכות/en
* Portal | תבנית:פורטל/en
* Portal/Subpage | תבנית:פורטל/תת-עמוד
* Proceeding | תבנית:הליך/en
* Term | תבנית:מושג/en
* Service | תבנית:שירות/en
* Legal precedent | תבנית:פסק דין/en
* Law | תבנית:חוק/en
* Organization | תבנית:ארגון/en
* Government agency | תבנית:גורם ממשל/en
* Disease/Syndrome/Disorder | תבנית:מחלה/en
<!--* Letter | תבנית:מכתב-->
* User | תבנית:משתמש/en',
	
	'geshi.css' => '/* fix to make the syntax highlighter show a dashed border around source code like the default is */
/* see here: http://www.mediawiki.org/wiki/Extension:SyntaxHighlight_GeSHi#Configuration */
div.mw-geshi {
  padding: 1em; 
  margin:1em 0; 
  border: 1px dashed #2fab6f,
}',

	/* *************************** */
	/* Modified Messages from core */
	'aboutpage'                             => ":he:אודות:מי_אנחנו", //English: 'About:Us',
	'aboutsite'                             => 'About {{SITENAME}}',
	#'copyright'                            => Equals original string (not in sync w/ Hebrew)
	'copyrightwarning'                      => "'''Please note:''' all contributions to {{SITENAME}} are considered to be released under the $2 license.
* Your contributions may be edited, altered, or removed by other contributors. If you do not want your writing to be edited or redistributed, then do not submit it here.
* Do not submit copyrighted work without permission! You are promising us that you wrote this yourself, or copied it from a public domain or similar free resource (see $1 for additional information)
* Please comply with the [[:he:Project:מדיניות האתר | site policy (in Hebrew)]]", //English: [[Project:Site policy | site policy]]
	'edithelppage'                          => ":he:Help:מדריך לעורך", //English: Help:Editor guide
	'hidetoc'                               => '-',
	'showtoc'                               => '+',
	'lastmodifiedat'                        => 'Last updated on $1, at $2.',
	'lastmodifiedatby'                      => 'This page was last modified on $2 at $1 by $3.',
	#'logout'                               => Equals original string (not in sync w/ Hebrew)
	'mypreferences'                         => 'Preference',
	'mywatchlist'                           => 'Watchlist',
	'noarticletext'							 => "<div style=\"font-weight: bold; background-color: rgba(255, 255, 153, 0.3); 
  text-align: center;
  width: 3em;
  height: 1em;
  font-size: 65px;
  margin-{{right}}: 0.5em;
  transform: skew(20deg, 1deg) ;
  -webkit-transform: skew(20deg, 1deg);
  -moz-transform: skew(20deg, 1deg);
  -o-transform: skew(20deg, 1deg);
  -ms-transform: skew(20deg, 1deg);
  -moz-box-shadow:10px 10px 5px #888;
  -webkit-box-shadow:10px 10px 5px #888;
  box-shadow:10px 10px 5px #888;\"><span style=\"position: relative; top: 0.33em;\">Oops!</span></div>{{DISPLAYTITLE:{{FULLPAGENAME}} - page not found}}
<p style=\"font-size: 30px;\">All-Rights does not have this page yet.</p>
<div class=\"editor-only-content\" style=\"background-color: #CFCFCF; border: 1px solid black;\">'''Dear editors:'''
You can [[Special:Search/{{PAGENAME}}|search for this page title]] in other pages, <span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} search the related logs], or [{{fullurl:{{FULLPAGENAME}}|action=edit}} edit this page]</span>.
</div>

'''We would like to assist you, so let's see what we can do about it:'''
* If you typed this address manually, please check it for possible mistakes or mispelling
* If you got here from another All-Rights page, then the link is probably broken. Please [mailto:webadmin@kolzchut.org.il?subject=Broken%20link report it] to us (please mention the name of the page you arrived from!).
* You can [[{{Mediawiki:mainpage}} | return to All-Rights' main page]].
* Or you can search the site right here:

<div id=\"wr-mainpage-search\" style=\"max-width:500px; margin-bottom: 1em;\">
<inputbox>
type=search2
break=no
buttonlabel={{int:searchbutton}}
</inputbox> 
</div><!-- /wr-mainpage-search -->",
	'noarticletext-nopermission'			=> '{{int:noarticletext}}',
	'protect-dropdown'                      => '* Edit protection
** Maintained by staff
** Edit warring / Content dispute
** Highly visible template
* Move protection
** Move warring
** Highly visible page',
	'siteuser'                              => '$1',
	'siteusers'                             => '$1',
	#'userlogout'                           => Equals original string (not in sync w/ Hebrew),
	'tagline'                               => 'From {{SITENAME}} ({{SERVERNAME}})',
	#'search-nonefound'                     => MISSING - not yet translated (see HE custom),
	'tooltip-p-logo'                  => '{{SITENAME}} Main Page',
	'tooltip-n-mainpage'              => '{{SITENAME}} Main Page',
	'tooltip-n-mainpage-description'  => '{{SITENAME}} Main Page',
	'enotif_body_intro_deleted'    => 'The {{SITENAME}} page $1 has been {{GENDER:$2|deleted}} on $PAGEEDITDATE by $2. See $3.',
	'enotif_body_intro_created'    => 'The {{SITENAME}} page $1 has been {{GENDER:$2|created}} on $PAGEEDITDATE by $2. See $3.',
	'enotif_body_intro_moved'      => 'The {{SITENAME}} page $1 has been {{GENDER:$2|moved}} on $PAGEEDITDATE by $2. See $3.',
	'enotif_body_intro_restored'   => 'The {{SITENAME}} page $1 has been {{GENDER:$2|restored}} on $PAGEEDITDATE by $2. See $3.',
	'enotif_body_intro_changed'    => 'The {{SITENAME}} page $1 has been {{GENDER:$2|changed}} on $PAGEEDITDATE by $2. See $3.',	
	'enotif_lastvisited' => '',		//We don't want this link sent
	'enotif_lastdiff' => '',		//We don't want this link sent
	'enotif_body'						=> 'Dear $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

Editor\'s summary: $PAGESUMMARY $PAGEMINOREDIT

There will be no other notifications in case of further activity unless you visit this page.

Regards,
{{SITENAME}} notification system.

--------
To change your watchlist settings, visit
{{canonicalurl:{{#special:EditWatchlist}}}}',
	
	
);


/**
 * Hebrew (עברית)
 * Base messages override + new messages for Kol-Zchut (WikiRights) 
 * @author Dror Snir
 * @author Kol-Zchut Staff
 */
 
$messages['he'] = array(
	'wrmessages-desc' => 'הודעות המיוחדות לכל-זכות',

	# Kol-Zchut specific usergroups
	'group-staff'                    => 'צוות האתר',
	'group-staff+'              	  => 'צוות: הרשאות נוספות',
	'group-automaton'                => 'אוטומטונים',
	'group-socialworker'             => 'עובדים סוציאליים',
	//'group-holocaustproject'         => 'פרויקט ניצולי השואה',

	'group-staff-member'             => '{{GENDER:$1|חבר|חברת}} צוות האתר',
	'group-staff+-member'            => '{{GENDER:$1|חבר|חברת}} צוות האתר+',
	'group-automaton-member'         => 'אוטומטון',
	'group-socialworker-member'      => '{{GENDER:$1|עובד סוציאלי|עובדת סוציאלית}}',
	//'group-holocaustproject-member'  => '{{GENDER:$1|חבר|חברת}} פרויקט ניצולי השואה',

	'grouppage-staff'                => '{{ns:project}}:צוות האתר',
	'grouppage-staff+'               => '{{ns:project}}:צוות האתר',
	'grouppage-socialworker'         => '{{ns:project}}:עובדים סוציאליים',

	'right-staff'                        => 'מוגבל לחברי צוות האתר',
	//'right-holocaustproject'             => 'מוגבל לחברי פרויקט ניצולי השואה',
	
	'restriction-level-staff'            => 'מוגבל לחברי צוות האתר',
	//'restriction-level-holocaustproject' => 'מוגבל לחברי פרויקט ניצולי השואה',
	
	
	/* ************ */
	/* NEW Messages */

	/* Template messages */
	'tpl-lead-link-text'             => 'לפרטים נוספים...',
	'tpl-דוגמה-title'            	=> 'דוגמה',

	'skinname-wrvector'               => 'כל-זכות (עיצוב ישן))',
	'skinname-victoria'               => 'ויקטוריה (עיצוב חדש)',

	/* ******** */
	/* Settings */  
	#The following require WRMessages to be included *after* the appropriate extension
	'multiboilerplate'                => '* זכות | תבנית:זכות
* פורטל | תבנית:פורטל
* פורטל/תת-עמוד | תבנית:פורטל/תת-עמוד
* הליך | תבנית:הליך
* מושג | תבנית:מושג
* שירות | תבנית:שירות
* פסק דין | תבנית:פסק דין
* חוק | תבנית:חוק
* ארגון | תבנית:ארגון
* גורם ממשל | תבנית:גורם ממשל
* שאלות ותשובות | תבנית:שאלות ותשובות
* מחלה/תסמונת/לקות | תבנית:מחלה
* מכתב | תבנית:מכתב
* משתמש | תבנית:משתמש',
	
	
	/* *************************** */
	/* Modified Messages from core */
	'aboutpage'                       => 'אודות:מי אנחנו',
	'aboutsite'                       => 'אודות כל-זכות (חל"צ)',
	'copyright'                       => 'התוכן מוגש בכפוף ל־$1',
	'copyrightwarning'                => "'''שימו לב:''' תרומתכם ל{{grammar:תחילית|{{SITENAME}}}} תפורסם תחת תנאי הרשיון $2.
* תורמים אחרים עשויים לערוך או אף להסיר את תרומתכם. אם אינכם רוצים שעבודתכם תהיה זמינה לעריכה על ידי אחרים – אל תפרסמו אותה באתר זה.
* אל תעשו שימוש בחומר המוגן בזכויות יוצרים ללא רשות! אתם מבטיחים לנו כי כתבתם את הטקסט הזה בעצמכם, או העתקתם אותו ממקור שאינו מוגן על ידי זכויות יוצרים (ראו $1 לפרטים נוספים) 
* אנא שמרו על [[Project:מדיניות האתר | כללי ההתנהגות באתר]]",
	'edithelppage'                    => 'Help:מדריך לעורך',
	'hidetoc'                         => '-',
	'showtoc'                         => '+',
	'lastmodifiedat'                  => 'עודכן לאחרונה ב־$2, $1.',
	'lastmodifiedatby'                => 'דף זה עודכן לאחרונה בתאריך $1 על ידי $3.',

	# Login and logout pages
	'logouttext'                 => "'''התנתקתם זה עתה מהאתר.'''
	
	באפשרותכם להמשיך ולעשות שימוש ב{{grammar:תחילית|{{SITENAME}}}} באופן אנונימי, או [[Special:UserLogin|לשוב ולהיכנס לאתר]] עם שם משתמש זהה או אחר.
	שימו לב כי ייתכן שדפים אחדים ימשיכו להיות מוצגים כאילו אתם עדיין מחוברים לאתר עד שתנקו את המטמון של הדפדפן שלכם.",
	'welcomecreation'            => '== ברוך בואך, $1! ==
	המשתמש שלך נוצר.
	נא לא לשכוח להתאים את [[Special:Preferences|העדפות המשתמש]] שלך באתר {{SITENAME}}.',
	//'loginlanguagelinks'              => '* עברית|he * العربية|ar * Русский|ru * English|en',
	'login'                      	   => 'כניסת משתמש',
	'nav-login-createaccount'         => 'כניסת משתמש / הרשמה',
	'loginprompt'                => 'לפני התחברות ל{{grammar:תחילית|{{SITENAME}}}}, עליכם לוודא כי ה"עוגיות" (Cookies) מופעלות.',
	'userlogin'                       => 'כניסת משתמש / הרשמה',
	'userloginnocreate'               => 'כניסת משתמש',
	'logout'                          => 'יציאה',
	'userlogout'                 => 'יציאה',
	'notloggedin'                => 'לא מחובר',
	'nologin'                    => 'לא נרשמתם עדיין? $1.',
	'gotaccountlink'             => 'כניסת משתמש',
	'createaccounterror'         => 'לא ניתן היה ליצור את המשתמש: $1',

	'mypreferences'                   => 'העדפות',
	'mywatchlist'                     => 'רשימת מעקב',
	'noarticletext'							 => "<div style=\"font-weight: bold; background-color: rgba(255, 255, 153, 0.3); 
  text-align: center;
  width: 3em;
  height: 1em;
  font-size: 65px;
  margin-right: 0.5em;
  transform: skew(20deg, 1deg) ;
  -webkit-transform: skew(20deg, 1deg);
  -moz-transform: skew(20deg, 1deg);
  -o-transform: skew(20deg, 1deg);
  -ms-transform: skew(20deg, 1deg);
  -moz-box-shadow:10px 10px 5px #888;
  -webkit-box-shadow:10px 10px 5px #888;
  box-shadow:10px 10px 5px #888;\"><span style=\"position: relative; top: 0.33em;\">אופס!</span></div>{{DISPLAYTITLE:{{FULLPAGENAME}} - העמוד לא נמצא}}
<p style=\"font-size: 30px;\">כרגע אין בכל-זכות דף בשם זה.</p>
<div class=\"editor-only-content\" style=\"background-color: #CFCFCF; border: 1px solid black;\">'''עורכים יקרים:'''
באפשרותכם [[Special:Search/{{PAGENAME}}|לחפש את כותרת הדף]] בדפים אחרים, <span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} לחפש ביומנים הרלוונטיים], או [{{fullurl:{{FULLPAGENAME}}|action=edit}} לערוך דף זה]</span>.
</div>

'''אנחנו רוצים לעזור, אז בואו נראה מה אפשר לעשות בנוגע לזה:'''
* אם הקלדתם את הכתובת בעצמכם, אנא בדקו שאין בה טעות
* אם הגעתם לכאן מקישור באתר, כנראה שהוא שבור... אנא [mailto:webadmin@kolzchut.org.il?subject=קישור%20שבור דווחו לנו] על כך (אנא ציינו את שם העמוד ממנו הגעתם!).
* אתם יכולים [[{{Mediawiki:mainpage}} | לחזור לעמוד הראשי]] של כל-זכות.
* או שאתם יכולים לחפש כאן למטה:

<div id=\"wr-mainpage-search\" style=\"max-width:500px; margin-bottom: 1em;\">
<inputbox>
type=search2
break=no
buttonlabel={{int:searchbutton}}
</inputbox> 
</div><!-- /wr-mainpage-search -->",
	'noarticletext-nopermission'			=> '{{int:noarticletext}}',
	'protect-dropdown'                => '* סיבות הגנה נפוצות
** השחתה רבה 
** ספאם רב 
** מלחמת עריכה בלתי מועילה 
** דף בשימוש רב 
** ניהול מרכזי',
	'siteuser'                        => '$1',
	'siteusers'                       => '$1',
	'userlogout'                      => 'יציאה',
	'tagline'                         => 'מתוך {{SITENAME}} ({{SERVERNAME}})',
	'search-nonefound'                => "<big>'''לא נמצאו תוצאות המתאימות לחיפוש.'''</big>
{| class=\"wikitable\"
|+ <u>אם לא מצאתם את מה שחיפשתם, אולי תוכלו להיעזר באחת האפשרויות הבאות</u>:
! אפשרות !! הסבר !! דוגמה
|-
| '''חיפוש Wildcard (ג'וקר/תַּו-כֹּל)''' || זהו חיפוש בו הסימן * (כוכבית) מחליף אות אחת או יותר שאינן מצוינות, בין אם בתחילת המילה או בסופה. || '''<big>''*כויות''</big>''' יציג תוצאות הכוללות (בין היתר) גם את המילים: זכויות, נכויות, וכד'.
|-
| '''ביטויים במרכאות כפולות''' || ניתן לחפש ביטוי שלם ע\"י הקפתו במרכאות || '''<big>''\"זכויות עובדים\"''</big>''' יחזיר רק ערכים בהם שתי המילים מופיעות בצמידות.
|-
| '''שלילת מילת חיפוש''' || ניתן להוסיף סימן מינוס לפני מילה על מנת להימנע מערכים המכילים אותה || '''<big>''עובדים -פנסיה''</big>''' (סימן המינוס בצמידות למילה) יחזיר רק ערכים המכילים את המילה \"עובדים\" ואינם מכילים את המילה \"פנסיה\".
|}",
	'tooltip-p-logo'                  => 'לעמוד הבית של {{SITENAME}}',
	'tooltip-n-mainpage'              => 'לעמוד הבית של {{SITENAME}}',
	'tooltip-n-mainpage-description'  => 'לעמוד הבית של {{SITENAME}}',
	'deletereason-dropdown'           => '* סיבות נפוצות
** דף חדש שנוצר בטעות
** מחיקת הפניה של דף שהועבר
** דף שהוחלף באחר:
** מחיקת דף ניסוי
* זכויות יוצרים וכדומה
** הפרת זכויות יוצרים
** לבקשת הכותב',

	'signupstart'	=>	"<div style=\"max-width: 90%; min-width: 20em; width: 40em; background-color: LightBlue; padding: 5px;\">הרשמה לאתר כל-זכות מומלצת ונותנת יתרונות מסוימים, בעיקר לאנשי מקצוע בתחום הסיוע לציבור.<br />
'''חשוב להדגיש''' כי ההרשמה בפני עצמה אינה מאפשרת עריכה של התוכן באתר אך מאפשרת:
* הרשמה למעקב אחרי שינויים בערכים
* שינוי הגדרות מערכת בהתאם להעדפותיכם
* הזדהות מיידית בעת שליחת הצעות שינוי
<br />'''הרשאת עריכה''' באתר כל-זכות ניתנת לארגונים מוסמכים (ממשלה, עמותות, אקדמיה וכד'). במקרה ואתם נציגי/ות ארגונים כאלה אנא [[{{INT:contactpage}} | צרו קשר עם צוות האתר]]. 
</div>",
	'enotif_body_intro_deleted' => 'הדף $1 ב{{grammar:תחילית|{{SITENAME}}}} נמחק ב־$PAGEEDITDATE על ידי $2, ראו $3.',
	'enotif_body_intro_created' => 'הדף $1 ב{{grammar:תחילית|{{SITENAME}}}} נוצר ב־$PAGEEDITDATE על ידי $2, ראו $3.',
	'enotif_body_intro_moved' => 'הדף $1 ב{{grammar:תחילית|{{SITENAME}}}} הועבר ב־$PAGEEDITDATE על ידי $2, ראו $3',
	'enotif_body_intro_restored' => 'הדף $1 ב{{grammar:תחילית|{{SITENAME}}}} שוחזר ב־$PAGEEDITDATE על ידי $2, ראו $3',
	'enotif_body_intro_changed' => 'הדף $1 ב{{grammar:תחילית|{{SITENAME}}}} שונה ב־$PAGEEDITDATE על ידי $2, ראו $3',
	'enotif_lastvisited' => '',		//We don't want this link sent
	'enotif_lastdiff' => '',		//We don't want this link sent
	'enotif_body' => 'לכבוד $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

תקציר העריכה: $PAGESUMMARY $PAGEMINOREDIT

לא תהיינה הודעות על שינויים נוספים עד שתבקרו בדף.

בברכה,
מערכת ההודעות של {{SITENAME}}

--------
כדי לשנות את הגדרות רשימת המעקב, בקרו בדף
{{canonicalurl:{{#special:EditWatchlist}}}}',

);


/**
/* Arabic (العربية) 
 * Base messages override + new messages for Kol-Zchut (WikiRights) 
 * @author Jalal Hassan
 * @author Suheir Daksa-Halabi
 * @author Dror Snir
 * @author Ahlam Rahal
 */

$wgTranslateNumerals = false; # DS: 30/5/2011 Do not use arabic numerals

$messages['ar'] = array(
	'wrmessages-desc' => 'رسائل خاصة بكل الحق',
	
	# Kol-Zchut specific usergroups
	'group-staff'               => 'فريق عمل الموقع',
	'group-socialworker'        => 'عاملون اجتماعيون',

	'group-staff-member'        => 'عضو طاقم الموقع',
	'group-socialworker-member' => 'عامل اجتماعي',	

	'grouppage-staff'           => ':he:Project:צוות האתר', //Arabic: '{{ns:project}}:فريق عمل الموقع'
	'grouppage-socialworker'    => ':he:Project:עובדים סוציאליים', //Arabic: '{{ns:project}}:عاملون اجتماعيون' 

	'right-staff'               => 'يقتصر على أعضاء فريق عمل الموقع',
	'restriction-level-staff'   => 'يقتصر على أعضاء فريق عمل الموقع',
	
	/* ************ */
	/* NEW Messages */
	#$messages["SITENAME"] = "كول زخوت (جميع الحقوق)";	
	
	/* Template messages */
	'tpl-lead-link-text'         => 'لمزيد من التفاصيل...',
	'tpl-דוגמה-title'            	=> 'مثال',
	
	/* ******** */
	/* Settings */  
	#The following require WRMessages to be included *after* the appropriate extension
	'multiboilerplate' => '* זכות | תבנית:זכות/ar
* פורטל | תבנית:פורטל/ar
* הליך | תבנית:הליך/ar
* מושג | תבנית:מושג/ar
* שירות | תבנית:שירות/ar 
* פסק דין | תבנית:פסק דין/ar
* חוק | תבנית:חוק/ar
* ארגון | תבנית:ארגון/ar
* גורם ממשל | תבנית:גורם ממשל/ar
<!--* מחלה/תסמונת/לקות | תבנית:מחלה/ar-->
<!--* מכתב | תבנית:מכתב-->
* משתמש | תבנית:משתמש/ar',

	/* *************************** */
	/* Modified Messages from core */
	'aboutpage'            => ':he:אודות:מי_אנחנו', //Arabic: 'حول:من نحن'
	'aboutsite'            => "حول {{SITENAME}} (شركة لفائدة الجمهور)",
	'copyright'            => "المضامين مقدّمة بالخضوع لـ-1$",
	'copyrightwarning'     => "'''انتبهوا:''' مساهمتكم لكول زخوت (جميع الحقوق) ستنشر تحت شروط الرخصة $2. ,
* قد يقوم مساهمون آخرون بتحرير مساهماتكم وربما إزالتها. إذا لم ترغبوا بأن تحرّر مساهماتكم من قبل الآخرين - لا تنشروها على هذا الموقع. 
* لا تستخدموا مواد محمية بحقوق الملكية بدون تصريح! تعدوننا بأنكم كتبتم هذا النص بانفسكم ، أو نسختموه من مصدر غير محمي بحقوق الملكية(راجعو $1 لمزيد من التفاصيل) 
* الرجاء المحافظة على [[Project:سياسة الموقع| قواعد السلوك في الموقع]]",
	'edithelppage'         => ":he:עזרה:מדריך לעורך", //Arabic: '{{ns:Help}}:دليل للمحرر'
	'hidetoc'              => '-',
	'showtoc'              => '+',
	#"lastmodifiedat"      => "אין צורך לתרגם",
	#"lastmodifiedatby"    => "אין צורך לתרגם",
	#"loginlanguagelinks"  => "אין צורך לתרגם",
	#"logout"              => "אין צורך לתרגם",
	'mypreferences'        => 'تفضيلات',
	"mywatchlist"          => 'قائمة المراقبة',
	#"Noarticletext-nopermission" => "אין צורך לתרגם",
	#"protect-dropdown"    => "אין צורך לתרגם",
	'siteuser'             => "$1",
	'siteuser'             => "$1",
	#"userlogout"          => "אין צורך לתרגם",
	'tagline'              => "من {{SITENAME}} ({{SERVERNAME}})",
	#"search-nonefound"    =>  יתורגם בהמשך, קצת מסובך כרגע...,

	'tooltip-p-logo'                  => 'الصفحة الرئيسية {{SITENAME}}',
	'tooltip-n-mainpage'              => 'الصفحة الرئيسية {{SITENAME}}',
	'tooltip-n-mainpage-description'  => 'الصفحة الرئيسية {{SITENAME}}',
	
);
