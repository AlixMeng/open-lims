<?php
/**
 * @package base
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
 * Navigation IO Class
 * @package base
 */
class Navigation_IO
{
	public static function main()
	{
		global $user;
		
		// Tabs
		
		$template = new HTMLTemplate("base/navigation/main/main_navigation_header.html");
		$template->output();

		$module_navigation_array = ModuleNavigation::list_module_navigations_entries();
		
		if (is_array($module_navigation_array) and count($module_navigation_array) >= 1)
		{
			$module_tab_string = "";
			$module_tab_active = false;
			
			foreach($module_navigation_array as $key => $value)
			{
				$module_name = SystemHandler::get_module_name_by_module_id($value[module_id]);
				
				if (($module_name == "admin" and $user->is_admin()) or $module_name != "admin")
				{
				
					$paramquery[username] = $_GET[username];
					$paramquery[session_id] = $_GET[session_id];
					$paramquery[nav] = $module_name;
					$params = http_build_query($paramquery,'','&#38;');
					
					switch ($value[colour]):
					
						case "blue":
							if ($_GET[nav] == $module_name)
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/blue_tab_active.html");
								$current_module = $module_name;
								$current_color = $value[colour];
								$module_tab_active = true;
							}
							else
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/blue_tab.html");
							}
						break;
						
						case "green":
							if ($_GET[nav] == $module_name)
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/green_tab_active.html");
								$current_module = $module_name;
								$current_color = $value[colour];
								$module_tab_active = true;
							}
							else
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/green_tab.html");
							}
						break;
						
						case "orange";
							if ($_GET[nav] == $module_name)
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/orange_tab_active.html");
								$current_module = $module_name;
								$current_color = $value[colour];
								$module_tab_active = true;
							}
							else
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/orange_tab.html");
							}
						break;
											
						default:
							if ($_GET[nav] == $module_name)
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/grey_tab_active.html");
								$current_module = $module_name;
								$current_color = $value[colour];
								$module_tab_active = true;
							}
							else
							{
								$template = new HTMLTemplate("base/navigation/main/tabs/grey_tab.html");
							}
						break;
						
					endswitch;
					
					$template->set_var("params", $params);
					$template->set_var("title", $value[display_name]);
					
					$config_folder = "core/modules/".SystemHandler::get_module_folder_by_module_name($module_name)."/config";
					if (is_dir($config_folder))
					{
						$subnavigation_file = $config_folder."/module_subnavigation.php";
						if (is_file($subnavigation_file))
						{
							$template->set_var("down", true);
						}
						else
						{
							$template->set_var("down", false);
						}
					}
					else
					{
						$template->set_var("down", false);
					}
					
					$module_tab_string .= $template->get_string();
				}
			}
		}
		
		if ($_GET[nav] == "home" or !$_GET[nav] or $module_tab_active == false)
		{
			$paramquery[username] = $_GET[username];
			$paramquery[session_id] = $_GET[session_id];
			$paramquery[nav] = "home";
			$params = http_build_query($paramquery,'','&#38;');
			
			$template = new HTMLTemplate("base/navigation/main/tabs/blue_tab_active.html");
			$template->set_var("params", $params);
			$template->set_var("title", "Home");
			$template->set_var("down", false);
			$template->output();
		}
		else
		{
			$paramquery[username] = $_GET[username];
			$paramquery[session_id] = $_GET[session_id];
			$paramquery[nav] = "home";
			$params = http_build_query($paramquery,'','&#38;');
			
			$template = new HTMLTemplate("base/navigation/main/tabs/blue_tab.html");
			$template->set_var("params", $params);
			$template->set_var("title", "Home");
			$template->set_var("down", false);
			$template->output();
		}
		
		echo $module_tab_string;

		$template = new HTMLTemplate("base/navigation/main/main_navigation_footer.html");
		$template->output();
	}
	
	private static function get_left_standard_navigation()
	{
		$dialog_array = ModuleDialog::list_dialogs_by_type("standard_navigation");
		if (count($dialog_array) == 1)
		{
			if (file_exists($dialog_array[0]['class_path']))
			{
				require_once($dialog_array[0]['class_path']);
				$dialog_array[0]['class']::$dialog_array[0]['method']();
			}
			else
			{
				// Exception
			}
		}
		else
		{
			// Exception
		}
	}
	
	public static function left()
	{
		if ($_GET[nav] and $_GET[nav] != "home" and $_GET[nav] != "base")
		{
			$module_array = SystemHandler::list_modules();
			
			if (is_array($module_array) and count($module_array) >= 1)
			{
				foreach($module_array as $key => $value)
				{
					if ($_GET[nav] == $value[name])
					{
						$module_path = "core/modules/".$value[folder]."/".$value[name].".request.php";
						if (file_exists($module_path))
						{
							require_once($module_path);
							if (method_exists($value['class'], get_navigation))
							{
								if (($navigation_array = $value['class']::get_navigation()) !== false)
								{
									if ($navigation_array['class'] and $navigation_array['method'] and $navigation_array['class_path'])
									{
										if (file_exists($navigation_array['class_path']))
										{
											require_once($navigation_array['class_path']);
											$navigation_array['class']::$navigation_array['method']();
										}
										else
										{
											self::get_left_standard_navigation();
										}
									}
									else
									{
										self::get_left_standard_navigation();
									}
								}
								else
								{
									self::get_left_standard_navigation();
								}
							}
							else
							{
								self::get_left_standard_navigation();
							}
						}
						else
						{
							self::get_left_standard_navigation();
						}
					}
				}
			}
			else
			{
				self::get_left_standard_navigation();
			}
		}
		else
		{
			self::get_left_standard_navigation();
		}
	}
}
?>
