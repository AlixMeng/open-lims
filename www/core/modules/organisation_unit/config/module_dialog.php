<?php 
/**
 * @package organisation_unit
 * @version 0.4.0.0
 * @author Roman Konertz <konertz@open-lims.org>
 * @copyright (c) 2008-2012 by Roman Konertz
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
	$dialog[0]['type']			= "organisation_admin";
	$dialog[0]['class_path']	= "core/modules/organisation_unit/io/admin/admin_organisation_unit.io.php";
	$dialog[0]['class']			= "AdminOrganisationUnitIO";
	$dialog[0]['method']		= "handler";
	$dialog[0]['internal_name']	= "organisation_units";
	$dialog[0]['display_name']	= "Organisation Units";
	$dialog[0]['weight']		= 300;
	
	$dialog[1]['type']			= "admin_home_box";
	$dialog[1]['class_path']	= "core/modules/organisation_unit/io/admin/admin_organisation_unit.io.php";
	$dialog[1]['class']			= "AdminOrganisationUnitIO";
	$dialog[1]['method']		= "home_dialog";
	$dialog[1]['internal_name']	= "organisation_units";
	$dialog[1]['display_name']	= "Organisation Units";
	$dialog[1]['weight']		= 400;
	
	$dialog[2]['type']			= "base_left_navigation";
	$dialog[2]['class_path']	= "core/modules/organisation_unit/io/navigation/organisation_unit_navigation.io.php";
	$dialog[2]['class']			= "OrganisationUnitNavigationIO";
	$dialog[2]['method']		= "get_html";
	$dialog[2]['internal_name']	= "organisation_units";
	$dialog[2]['display_name']	= "Organisation Units";
	$dialog[2]['weight']		= 200;
	
	$dialog[3]['type']			= "common_dialog";
	$dialog[3]['class_path']	= "core/modules/organisation_unit/io/organisation_unit.io.php";
	$dialog[3]['class']			= "OrganisationUnitIO";
	$dialog[3]['method']		= "detail_handler";
	$dialog[3]['internal_name']	= "ou_detail";
	$dialog[3]['display_name']	= "OU Detail";
	
	$dialog[4]['type']			= "base_user_lists";
	$dialog[4]['class_path']	= "core/modules/organisation_unit/io/organisation_unit.io.php";
	$dialog[4]['class']			= "OrganisationUnitIO";
	$dialog[4]['method']		= "list_user_related_organisation_units";
	$dialog[4]['internal_name']	= "my_organisation_units";
	$dialog[4]['display_name']	= "My Organisation Units";
	
	$dialog[5]['type']			= "user_admin_detail";
	$dialog[5]['class_path']	= "core/modules/organisation_unit/io/organisation_unit.io.php";
	$dialog[5]['class']			= "OrganisationUnitIO";
	$dialog[5]['method']		= "list_user_admin_organisation_units";
	$dialog[5]['internal_name']	= "organisation_units";
	$dialog[5]['display_name']	= "Organisation Units";
	
	$dialog[6]['type']			= "group_admin_detail";
	$dialog[6]['class_path']	= "core/modules/organisation_unit/io/organisation_unit.io.php";
	$dialog[6]['class']			= "OrganisationUnitIO";
	$dialog[6]['method']		= "list_group_admin_organisation_units";
	$dialog[6]['internal_name']	= "organisation_units";
	$dialog[6]['display_name']	= "Organisation Units";
?>