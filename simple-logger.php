<?php
/**
 * Plugin Name:       Simple logger
 * Description:       One very simple logger. 
 * Requires at least: 6.1
 * Requires PHP:      7.4
 * Version:           0.0.1
 * Author:            Marko Nikolaš
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       simple-logger 
 *
 * @package           simple-logger 
 */

namespace SimpleLogger;

require_once __DIR__ . '/vendor/autoload.php';

use SimpleLogger\Classes\Concrete\Logger;
