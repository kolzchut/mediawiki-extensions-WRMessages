<?php
/**
 * Namespace ID constants for WRMessages.
 *
 * This file is require_once'd from CommonSettings.php so that NS_WR_* constants
 * are available immediately, before wfLoadExtension() has run and finalized
 * the extension registry. extension.json will skip re-defining them since they
 * are already defined.
 *
 * @file
 * @ingroup Extensions
 */

// 2015 No longer in use (using NS_PROJECT instead; only redirects remain)
const NS_WR_COMPANY = 110;
const NS_WR_COMPANY_TALK = NS_WR_COMPANY + 1;
// 2010-05-30 Knowledge communities, no longer in use
const NS_WR_COMMUNITY = 112;
const NS_WR_COMMUNITY_TALK = NS_WR_COMMUNITY + 1;
// 2011-01-31 Portal data. Never used.
const NS_WR_PORTAL = 114;
const NS_WR_PORTAL_TALK = NS_WR_PORTAL + 1;
// 2011-05-12 Draft articles before publishing to NS_MAIN
const NS_WR_DRAFTS = 116;
const NS_WR_DRAFTS_TALK = NS_WR_DRAFTS + 1;
// 2011-09-26 On-hold articles with an inactivity warning
const NS_WR_LIMBO = 118;
const NS_WR_LIMBO_TALK = NS_WR_LIMBO + 1;
// 2011-12-01 Sandbox
const NS_WR_PRACTICE = 120;
const NS_WR_PRACTICE_TALK = NS_WR_PRACTICE + 1;
// 2012-03-07 Small data items (e.g. "tax reduction point")
const NS_WR_DATA = 122;
const NS_WR_DATA_TALK = NS_WR_DATA + 1;
// 2019-08-05 Landing pages
const NS_WR_LANDING = 124;
const NS_WR_LANDING_TALK = NS_WR_LANDING + 1;
// ID 126 is skipped (in use as a custom NS in production).
// 2024-03-25 Linguistic simplification.
const NS_WR_SIMPLIFICATION = 128;
const NS_WR_SIMPLIFICATION_TALK = NS_WR_SIMPLIFICATION + 1;
