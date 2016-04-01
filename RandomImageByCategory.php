<?php
/**
 * RandomImageByCategory extension
 * Usage example: <randomimagebycategory width="200" categories="Featured Image"/>
 * Supported parameters: width, limit, categories
 *
 * @file
 * @ingroup Extensions
 * @author Aaron Wright <aaron.wright@gmail.com>
 * @author David Pean <david.pean@gmail.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @link https://www.mediawiki.org/wiki/Extension:RandomImageByCategory Documentation
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

// Extension credits that will show up on Special:Version
$wgExtensionCredits['parserhook'][] = array(
	'name' => 'RandomImageByCategory',
	'version' => '1.2',
	'author' => array( 'Aaron Wright', 'David Pean', 'Jack Phoenix' ),
	'description' => 'Displays a random image from a given category',
	'url' => 'https://www.mediawiki.org/wiki/Extension:RandomImageByCategory',
);

$wgAutoloadClasses['RandomImageByCategory'] = __DIR__ . '/RandomImageByCategory.class.php';

$wgHooks['ParserFirstCallInit'][] = 'RandomImageByCategory::registerTag';
