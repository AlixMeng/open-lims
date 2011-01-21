<?php
/**
 * @package base
 * @version 0.4.0.0
 * @author Roman Konertz
 * @copyright (c) 2008-2010 by Roman Konertz
 * @license GPLv3
 * 
 * This file is part of Open-LIMS
 * Available at http://www.open-lims.org
 * 
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * version 3 of the License.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 * See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, see <http://www.gnu.org/licenses/>.
 */
 	
/**
 * 
 */ 	
 
// Database Settings
$GLOBALS[server] 					= "";
$GLOBALS[port] 						= "";
$GLOBALS[dbuser]					= "";
$GLOBALS[password]					= "";
$GLOBALS[database]					= "";

// Main Setting

$GLOBALS[timezone]					= "Europe/Berlin";
$GLOBALS[timezone_id]				= 26;

$GLOBALS[os]						= "WIN32";						

$GLOBALS[enable_services]			= false;							// true for enabled
$GLOBALS[enable_job_system]			= false;							// "

$GLOBALS[base_dir] 					= "";								// directory in System (eg. C:/lims (windows) or /srv/www/lims (unix))
$GLOBALS[www_dir]					= $GLOBALS[base_dir]."/www";	
$GLOBALS[log_dir]					= $GLOBALS[base_dir]."/logs";

// ! The following settings only needed by enabled serivce system !
$GLOBALS[bin_dir] 					= $GLOBALS[base_dir]."/bin";	// Only needed for services

$GLOBALS[java_home]					= ""; 							// Only needed if %JAVA_HOME ($JAVA_HOME) is not declared by OS		
$GLOBALS[java_vm]					= "java";						// Java (or javaw)		
$GLOBALS[java_xms]					= "64M";
$GLOBALS[java_xmx]					= "128M";	

$GLOBALS[job_system_service_id]		= 1;
// ! Settings end !

// SQL Log
$GLOBALS[enable_db_log_on_rollback]		= true;
$GLOBALS[enable_db_log_on_exp_rollback]	= false;
$GLOBALS[enable_db_log_on_commit]		= false;

// Server Information
$GLOBALS[server_info]				= "my server";
$GLOBALS[product_user]				= "Any User";


$GLOBALS[important]					= "";
$GLOBALS[accountmail]				= "mail@localhost.localdomain";

$GLOBALS[sendmail_from]				= "mail@localhost.localdomain";

$GLOBALS[htmltitle]					= "Open-LIMS";

// Standard Permissions
// User and Group Permissions of new Projects // 0 = false = no rights
$GLOBALS[std_perm_user]				= 15;	// The Owner
$GLOBALS[std_perm_organ_leader]		= 51;	// The Leader of the organ. Unit
$GLOBALS[std_perm_organ_group]		= 1;	// The group(s) of the organ. Unit
$GLOBALS[std_perm_organ_unit]		= 1;	// The organ. Unit

// User Standard Settings
$GLOBALS[std_projectquota] 			= 1073741824;
$GLOBALS[std_userquota] 			= 53687091200;

// Quota
$GLOBALS[quota_warning] 			= 90; // Quota Warning (in percent)

// Entries per Page
$GLOBALS[entriesperpage] 				= 25;
$GLOBALS[logentriesperpage]				= 5;
$GLOBALS[subprojectsperpage]			= 5;

$GLOBALS[projectsearchresultsperpage]	= 4;
$GLOBALS[filesearchresultsperpage]		= 25;

// Session-Time
$GLOBALS[max_session_period] 		= 36000; 	// Session Timeout (s)

// IP Errors
$GLOBALS[max_ip_errors]				= 50; 		// Max. Login Tries per IP

$GLOBALS[max_method_delete_time]  	= 600;

$GLOBALS[languages_folder_id]			= 2;
$GLOBALS[organisation_unit_folder_id]	= 3;
$GLOBALS[project_folder_id]				= 4;
$GLOBALS[sample_folder_id]				= 5;
$GLOBALS[temp_folder_id]				= 6;
$GLOBALS[template_folder_id]			= 7;
$GLOBALS[user_folder_id]				= 8;
$GLOBALS[group_folder_id]				= 9;

$GLOBALS[oldl_folder_id]				= 51;
$GLOBALS[olvdl_folder_id]				= 52;

define("GROUP_LEADER_GROUP", 9);
?>
