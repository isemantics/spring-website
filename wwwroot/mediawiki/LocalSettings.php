<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$IP = dirname(__FILE__);

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );

# If PHP's memory limit is very low, some operations may fail.
# ini_set( 'memory_limit', '20M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename         = "Spring";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
$wgScriptPath       = "/mediawiki";
$wgScriptExtension  = ".php";

## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL

$wgEnableEmail      = true;
$wgEnableUserEmail  = true;

$wgEmergencyContact = "spring@it-l.eu";
$wgPasswordSender = "spring@it-l.eu";

## For a detailed description of the following switches see
## http://www.mediawiki.org/wiki/Extension:Email_notification
## and http://www.mediawiki.org/wiki/Extension:Email_notification
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

$wgDBtype           = "mysql";
$wgDBserver         = "localhost";

include($_SERVER['DOCUMENT_ROOT'] . '/../springpw.php');
$wgDBuser           = $spring_dbuser;
$wgDBpassword       = $spring_dbpass;
$wgDBname           = $spring_dbname;

# MySQL specific settings
$wgDBprefix         = "wiki_";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "TYPE=InnoDB";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

# Postgres specific settings
$wgDBport           = "5432";
$wgDBmwschema       = "mediawiki";
$wgDBts2schema      = "public";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads       = true;
# $wgUseImageMagick = true;
# $wgImageMagickConvertCommand = "/usr/bin/convert";
$wgUploadDirectory = "$IP/images";
$wgUploadPath = $wgScriptPath . "/images";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
$wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

# Local stuff

# Allow external images
$wgAllowExternalImages = true;

$wgScriptPath = '/mediawiki';         # Path to the actual files. This should already be there
$wgArticlePath = '/wiki/$1';  # Virtual path. This directory MUST be different from the one used in $wgScriptPath
$wgUsePathInfo = true;

// PHPBB User Database Plugin. (Requires MySQL Database)
require_once './extensions/Auth_phpBB.php';

// CSS extension
require_once './extensions/CSS/CSS.php';

$wgAuth_Config = array(); // Clean.

$wgAuth_Config['WikiGroupName'][] = 'REGISTERED';
$wgAuth_Config['WikiGroupName'][] = 'ADMINISTRATORS';

                                                // Name of your PHPBB group
                                                // users need to be a member
                                                // of to use the wiki. (i.e. wiki)
                                                // This can also be set to an array
                                                // of group names to use more then
                                                // one. (ie.
                                                // $wgAuth_Config['WikiGroupName'][] = 'Wiki';
                                                // $wgAuth_Config['WikiGroupName'][] = 'Wiki2';
                                                // or
                                                // $wgAuth_Config['WikiGroupName'] = array('Wiki', 'Wiki2');
                                                // )

$wgAuth_Config['UseWikiGroup'] = true;          // This tells the Plugin to require
                                                // a user to be a member of the above
                                                // phpBB group. (ie. wiki) Setting
                                                // this to false will let any phpBB
                                                // user edit the wiki.

$wgAuth_Config['UseExtDatabase'] = false;       // This tells the plugin that the phpBB tables
                                                // are in a different database then the wiki.
                                                // The default settings is false.

//$wgAuth_Config['MySQL_Host']        = 'localhost';      // phpBB MySQL Host Name.
//$wgAuth_Config['MySQL_Username']    = 'username';       // phpBB MySQL Username.
//$wgAuth_Config['MySQL_Password']    = 'password';       // phpBB MySQL Password.
//$wgAuth_Config['MySQL_Database']    = 'database';       // phpBB MySQL Database Name.

$wgAuth_Config['UserTB']         = 'phpbb3_users';       // Name of your PHPBB user table. (i.e. phpbb_users)
$wgAuth_Config['GroupsTB']       = 'phpbb3_groups';      // Name of your PHPBB groups table. (i.e. phpbb_groups)
$wgAuth_Config['User_GroupTB']   = 'phpbb3_user_group';  // Name of your PHPBB user_group table. (i.e. phpbb_user_group)
$wgAuth_Config['PathToPHPBB']    = '../phpbb/';         // Path from this file to your phpBB install.

// Local
$wgAuth_Config['LoginMessage']   = '<b>You need a phpBB account to login.</b><br /><a href="' . $wgAuth_Config['PathToPHPBB'] .
                                   'ucp.php?mode=register">Click here to create an account.</a>'; // Localize this message.
$wgAuth_Config['NoWikiError']    = 'You are not a member of the required phpBB group.'; // Localize this message.

$wgAuth = new Auth_phpBB($wgAuth_Config);     // Auth_phpBB Plugin.

$wgDefaultSkin = 'springnew';

$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;

?>
