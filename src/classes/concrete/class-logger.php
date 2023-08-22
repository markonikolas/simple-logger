<?php
/**
 * Logs stuff.
 *
 * @package simple-logger 
 */

namespace SimpleLogger\Classes\Concrete;

use SimpleLogger\Classes\Base\Singleton;

/**
 * Logger class.
 */
class Logger extends Singleton {
	
	/**
	 * Outputs stuff
	 *
	 * @param mixed $content Content to output.
	 * @throws \Exception Throw if content is empty.
	 * @return void
	 */
	public static function log( $content = '' ) {
		if ( empty( $content ) ) {
			throw new \Exception( "Content can't be empty." );
		}
		
		if ( WP_DEBUG && ! is_admin() ) {
			?>
			<pre><?php var_dump( $content ); // phpcs:ignore ?></pre>
			<?php 
		}
	}

	/**
	 * Die after log
	 * Calls log function.
	 *
	 * @param mixed $content Content to output.
	 * @return void
	 */
	public static function dlog( $content = '' ) {
		self::log( $content );
		die();
	}
}
