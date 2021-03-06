<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local instructor files settings definitions.
 *
 * @package   local_instructor_files
 * @copyright 2017 Lafayette College ITS
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_instructor_files', get_string('pluginname', 'local_instructor_files'));
    $ADMIN->add('localplugins', $settings);

    // Role selector.
    $roles = local_instructor_files\helper::get_roles();
    $defaultroles = local_instructor_files\helper::get_default_roles($roles);

    $settings->add(
        new admin_setting_configmultiselect('local_instructor_files/roles',
        get_string('roles', 'local_instructor_files'),
        get_string('roles_desc', 'local_instructor_files'),
        $defaultroles,
        $roles)
    );
}
