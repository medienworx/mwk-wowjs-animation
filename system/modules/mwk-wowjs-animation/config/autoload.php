<?php
 
 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-wowjs-animation
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'medienworx',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(
	array(
		'medienworx\ClassMwkWowjsAnimation'	=> 'system/modules/mwk-wowjs-animation/src/medienworx/class/ClassMwkWowjsAnimation.php'
	)
);