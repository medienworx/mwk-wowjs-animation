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

if(TL_MODE == 'FE') {
	$GLOBALS['TL_HOOKS']['getContentElement'][] = array('ClassMwkWowjsAnimation', 'checkContentElement');
}

if(TL_MODE == 'FE') {
	\MwkCoreHelper::insertLibToGlobals('wow');
	\MwkCoreHelper::insertLibToGlobals('animate');
	\MwkCoreHelper::insertLibToGlobals('jquery.appear/0.3.6');
	\MwkCoreHelper::insertScriptToGlobals('/system/modules/mwk-wowjs-animation/assets/js/mwk-wowjs-animation-pro.js');
}
