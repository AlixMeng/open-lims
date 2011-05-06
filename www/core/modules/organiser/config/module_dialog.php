<?php 
/**
 * @package data
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
	$dialog[0][type]			= "home_today_box";
	$dialog[0][class_path]		= "core/modules/organiser/organiser.io.php";
	$dialog[0]['class']			= "OrganiserIO";
	$dialog[0][method]			= "list_upcoming_appointments";
	$dialog[0][internal_name]	= "personal_appointments";
	$dialog[0][display_name]	= "Personal Appointments";
	$dialog[0][weight]			= 200;
	
	$dialog[1][type]			= "home_today_box";
	$dialog[1][class_path]		= "core/modules/organiser/organiser.io.php";
	$dialog[1]['class']			= "OrganiserIO";
	$dialog[1][method]			= "list_upcoming_tasks";
	$dialog[1][internal_name]	= "todo";
	$dialog[1][display_name]	= "Todo";
	$dialog[1][weight]			= 300;
?>