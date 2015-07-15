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
 * Run in a custom namespace, so the class can be replaced
 */

namespace medienworx;

/**
 * Class ClassMwkWowjsAnimation
 * @package medienworx
 */

class ClassMwkWowjsAnimation  extends \Backend
{
	public function checkContentElement($objElement, $strBuffer)
	{
		if ($objElement->mwk_wowjs_add_animation == 1) {
			if ($objElement->mwk_wowjs_animation_type != '') {
				$wowjsAnimationType = ' '.$objElement->mwk_wowjs_animation_type;
			}
			if ($objElement->mwk_wowjs_animation_duration != '') {
				$wowjsAnimationDuration = ' data-wow-duration="'.$objElement->mwk_wowjs_animation_duration.'"';
			}
			if ($objElement->mwk_wowjs_animation_delay != '') {
				$wowjsAnimationDelay = ' data-wow-delay="'.$objElement->mwk_wowjs_animation_delay.'"';
			}
			if ($objElement->mwk_wowjs_animation_offset != '') {
				$wowjsAnimationOffset = ' data-wow-offset="'.$objElement->mwk_wowjs_animation_offset.'"';
			}
			if ($objElement->mwk_wowjs_animation_iteration != '') {
				$wowjsAnimationIteration = ' data-wow-iteration="'.$objElement->mwk_wowjs_animation_iteration.'"';
			}
			$strBuffer =  '<div class="wow'.$wowjsAnimationType.'"'.$wowjsAnimationDuration.''.$wowjsAnimationDelay.''.$wowjsAnimationOffset.''.$wowjsAnimationIteration.'>'.$strBuffer.'</div>';
		}
		return $strBuffer;
	}
}