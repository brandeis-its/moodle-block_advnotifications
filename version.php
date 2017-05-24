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

$plugin->component = 'block_advnotifications';          // Recommended since 2.0.2 (MDL-26035). Required since 3.0 (MDL-48494).
$plugin->version = 201607071321;                        // YYYYMMDDHH (year, month, day, 24-hr format hour).
$plugin->requires = 2015051104;                         // YYYYMMDDHH (This is the stable version for Moodle 2.9 as at 04/07/2016).
$plugin->cron = 24 * 3600;                              // Cron interval 1 day.