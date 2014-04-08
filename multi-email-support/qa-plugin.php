<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/multi-email-support/qa-plugin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Initiates multi-email support plugin


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: Multi-Email Support
	Plugin URI: http://github.com/atavakoli/qa-multi-email-support
	Plugin Description: Permit multiple emails to be configured for notification
	Plugin Version: 1.0.0
	Plugin Date: 2014-04-08
	Plugin Author: Ali Tavakoli
	Plugin Author URI: http://github.com/atavakoli/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Update Check URI: https://raw.githubusercontent.com/atavakoli/qa-multi-email-support/master/multi-email-support/qa-plugin.php
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_overrides('qa-multi-email-support-overrides.php');
