<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Toolkit' ) ) {
	return;
}

class Kirki_Toolkit {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	public static $version = '1.0.2';

	public $font_registry = null;
	public $scripts       = null;
	public $api           = null;
	public $styles        = array();

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new Kirki_Toolkit();
		}
		return self::$instance;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {

		$i18n = array(
			'background-color'      => __( 'Background Color', 'i-craft' ),
			'background-image'      => __( 'Background Image', 'i-craft' ),
			'no-repeat'             => __( 'No Repeat', 'i-craft' ),
			'repeat-all'            => __( 'Repeat All', 'i-craft' ),
			'repeat-x'              => __( 'Repeat Horizontally', 'i-craft' ),
			'repeat-y'              => __( 'Repeat Vertically', 'i-craft' ),
			'inherit'               => __( 'Inherit', 'i-craft' ),
			'background-repeat'     => __( 'Background Repeat', 'i-craft' ),
			'cover'                 => __( 'Cover', 'i-craft' ),
			'contain'               => __( 'Contain', 'i-craft' ),
			'background-size'       => __( 'Background Size', 'i-craft' ),
			'fixed'                 => __( 'Fixed', 'i-craft' ),
			'scroll'                => __( 'Scroll', 'i-craft' ),
			'background-attachment' => __( 'Background Attachment', 'i-craft' ),
			'left-top'              => __( 'Left Top', 'i-craft' ),
			'left-center'           => __( 'Left Center', 'i-craft' ),
			'left-bottom'           => __( 'Left Bottom', 'i-craft' ),
			'right-top'             => __( 'Right Top', 'i-craft' ),
			'right-center'          => __( 'Right Center', 'i-craft' ),
			'right-bottom'          => __( 'Right Bottom', 'i-craft' ),
			'center-top'            => __( 'Center Top', 'i-craft' ),
			'center-center'         => __( 'Center Center', 'i-craft' ),
			'center-bottom'         => __( 'Center Bottom', 'i-craft' ),
			'background-position'   => __( 'Background Position', 'i-craft' ),
			'background-opacity'    => __( 'Background Opacity', 'i-craft' ),
			'ON'                    => __( 'ON', 'i-craft' ),
			'OFF'                   => __( 'OFF', 'i-craft' ),
			'all'                   => __( 'All', 'i-craft' ),
			'cyrillic'              => __( 'Cyrillic', 'i-craft' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended', 'i-craft' ),
			'devanagari'            => __( 'Devanagari', 'i-craft' ),
			'greek'                 => __( 'Greek', 'i-craft' ),
			'greek-ext'             => __( 'Greek Extended', 'i-craft' ),
			'khmer'                 => __( 'Khmer', 'i-craft' ),
			'latin'                 => __( 'Latin', 'i-craft' ),
			'latin-ext'             => __( 'Latin Extended', 'i-craft' ),
			'vietnamese'            => __( 'Vietnamese', 'i-craft' ),
			'serif'                 => _x( 'Serif', 'font style', 'i-craft' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'i-craft' ),
			'monospace'             => _x( 'Monospace', 'font style', 'i-craft' ),
		);

		$config = apply_filters( 'kirki/config', array() );

		if ( isset( $config['i18n'] ) ) {
			$i18n = wp_parse_args( $config['i18n'], $i18n );
		}

		return $i18n;

	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->font_registry;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {
	}

}
