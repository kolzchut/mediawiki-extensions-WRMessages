<?php
/**
 * Internationalisation file for extension Wikimedia Messages
 *
 * @file
 * @ingroup Extensions
 */

 
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
	'group-automaton'           => 'Automatons',
	'group-socialworker'        => 'Social workers',
	
	'group-staff-member'        => 'Member of staff',
	'group-automaton-member'    => 'Automaton',
	'group-socialworker-member' => 'Social worker',

	'grouppage-staff'           => '{{ns:project}}:Staff',
	'grouppage-socialworker'    => '{{ns:project}}:Social workers',

	'right-staff'               => 'Staff only',
	'restriction-level-staff'   => 'Staff only',

	/* ************ */
	/* NEW Messages */

	/* Template messages */
	'tpl-lead-link-text'            => 'Additional details...',
	
	'skinname-wrvector'     => 'All-Rights (old design)',
	'skinname-victoria'     => 'Victoria (new design)',

	/* ******** */
	/* Settings */  
	#The following require WRMessages to be included *after* the appropriate extension
	'multiboilerplate' => '* Right | תבנית:זכות/en
* Portal | תבנית:פורטל/en
* Proceeding | תבנית:הליך/en
* Term | תבנית:מושג/en
* Service | תבנית:שירות/en
* Legal precedent | תבנית:תקדים משפטית/en
* Law | תבנית:חוקת/en
* Organization | תבנית:ארגון/en
* Government agency | תבנית:גורם ממשל/en
<!--* מחלה/תסמונת/לקות | תבנית:מחלה/en-->
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
* Please maintain the [[:he:Project:מדיניות האתר | site policy (in Hebrew)]]", //English: [[Project:Site policy | site policy]]
	'edithelppage'                          => ":he:Help:מדריך לעורך", //English: Help:Editor guide
	'hidetoc'                               => '-',
	'showtoc'                               => '+',
	'lastmodifiedat'                        => 'Last updated on $1, at $2.',
	'lastmodifiedatby'                      => 'This page was last modified on $2 at $1 by $3.',
	#'logout'                               => Equals original string (not in sync w/ Hebrew)
	'mypreferences'                         => 'Preference',
	'mywatchlist'                           => 'Watchlist',
	'noarticletext-nopermission'            => "<big>{{#ifeq: {{NAMESPACE}} | User talk
  | '''No messages''' have been posted for this user yet.
  | '''{{SITENAME}} does not have a page with this exact name.'''
}}</big><br />
You can [[Special:Search/{{PAGENAME}} | search for the page's title]]  in existing pages.",
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
	'group-automaton'                => 'אוטומטונים',
	'group-socialworker'             => 'עובדים סוציאליים',
	'group-holocaustproject'         => 'פרויקט ניצולי השואה',

	'group-staff-member'             => '{{GENDER:$1|חבר|חברת}} צוות האתר',
	'group-automaton-member'         => 'אוטומטון',
	'group-socialworker-member'      => '{{GENDER:$1|עובד|עובדת}} סוציאלי',
	'group-holocaustproject-member'  => '{{GENDER:$1|חבר|חברת}} פרויקט ניצולי השואה',

	'grouppage-staff'                => '{{ns:project}}:צוות האתר',
	'grouppage-socialworker'         => '{{ns:project}}:עובדים סוציאליים',

	'right-staff'                        => 'מוגבל לחברי צוות האתר',
	'right-holocaustproject'             => 'מוגבל לחברי פרויקט ניצולי השואה',
	
	'restriction-level-staff'            => 'מוגבל לחברי צוות האתר',
	'restriction-level-holocaustproject' => 'מוגבל לחברי פרויקט ניצולי השואה',
	
	
	/* ************ */
	/* NEW Messages */

	/* Template messages */
	'tpl-lead-link-text'             => 'לפרטים נוספים...',

	'skinname-wrvector'               => 'כל-זכות (עיצוב ישן))',
	'skinname-victoria'               => 'ויקטוריה (עיצוב חדש)',

	/* ******** */
	/* Settings */  
	#The following require WRMessages to be included *after* the appropriate extension
	'multiboilerplate'                => '* זכות | תבנית:זכות
* פורטל | תבנית:פורטל
* הליך | תבנית:הליך
* מושג | תבנית:מושג
* שירות | תבנית:שירות
* תקדים משפטי | תבנית:תקדים משפטי
* חוק | תבנית:חוק
* ארגון | תבנית:ארגון
* גורם ממשל | תבנית:גורם ממשל
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
	'noarticletext-nopermission'      => "<big>'''אין בכל-זכות {{#בחר:{{NAMESPACE}}| =דף מידע| משתמש=דף משתמש| {{ns:project}}=דף על {{SITENAME}}| תמונה=דף תמונה| מדיה ויקי=הודעת מערכת| תבנית=תבנית| עזרה=דף עזרה| קטגוריה=קטגוריה| |קהילת ידע=קהילת ידע שיחה|שיחת {{ns:project}}|שיחת תמונה|שיחת מדיה ויקי|שיחת תבנית|שיחת עזרה|שיחת קטגוריה|שיחת פורטל|שיחת מדף|שיחת שער=דף שיחה| שיחת משתמש=דף שיחת משתמש| }} בשם זה.'''</big><br /> באפשרותכם [[Special:Search/{{PAGENAME}}|לחפש את כותרת הדף]] בדפים אחרים.",
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

);


/**
/* Arabic (العربية) 
 * Base messages override + new messages for Kol-Zchut (WikiRights) 
 * @author Jalal Hassan
 * @author Suheir Daksa-Halabi
 * @author Dror Snir
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
	
	/* ******** */
	/* Settings */  
	#The following require WRMessages to be included *after* the appropriate extension
	'multiboilerplate' => '* זכות | תבנית:זכות/ar
* פורטל | תבנית:פורטל/ar
* הליך | תבנית:הליך/ar
* מושג | תבנית:מושג/ar
* שירות | תבנית:שירות/ar 
* תקדים משפטי | תבנית:תקדים משפטי/ar
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
	'showtoc'              => "+",
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
