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
 * Registers and adds the Import / Export roles pages to the admin sidebar
 * @package   moodlerolesmigration
 * @copyright 2011 NCSU DELTA | Developed by Glenn Ansley <glenn_ansley@ncsu.edu>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
global $SITE;

// Build new admin page object for IMPORT ROLES
$importobject = new admin_externalpage(
                        'importroles',
                        get_string('importroles', 'report_rolesmigration'),
                        new moodle_url('/'.$CFG->admin.'/report/rolesmigration/importroles.php'),
                        'moodle/site:config'
                        );

// Build new admin page object for EXPORT ROLES
$exportobject = new admin_externalpage(
                        'exportroles',
                        get_string('exportroles', 'report_rolesmigration'),
                        new moodle_url('/'.$CFG->admin.'/report/rolesmigration/exportroles.php'),
                        'moodle/site:config'
                        );

// Register new admin page object under reports
$ADMIN->add('roles', $importobject);
$ADMIN->add('roles', $exportobject);