<?php
/**
 * Registry for the ReallySimpleMod module.
 * @since 1.0.0
 *
 * @package ReallySimpleCMS
 * @subpackage RsMod
 */

registerModule('rsmod', array(
	'label' => 'ReallySimpleMod',
	'author' => array(
		'name' => 'Jace Fincham',
		'url' => 'https://jacefincham.com/'
	),
	'version' => '1.0.0',
	'description' => 'A module that trains you how to create modules for ReallySimpleCMS.'
));

/**
 * Initialize the module.
 * @since 1.0.0
 */
function rsMod() {
	echo notice('ReallySimpleMod is in use!');
}