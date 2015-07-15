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

// add palettes
array_push($GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'], 'mwk_wowjs_add_animation');

// ce_headline
$GLOBALS['TL_DCA']['tl_content']['palettes']['headline'] = str_replace
(
	'headline', 'headline;{wowjs_legend:hide}, mwk_wowjs_add_animation',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['headline']
);
// ce_text
$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] = str_replace
(
	'addImage', 'addImage;{wowjs_legend:hide}, mwk_wowjs_add_animation',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['text']
);

// ce_image
$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace
(
	'caption', 'caption;{wowjs_legend:hide}, mwk_wowjs_add_animation',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['image']
);

// add subpalettes
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['mwk_wowjs_add_animation'] =

	'mwk_wowjs_animation_type, mwk_wowjs_animation_duration, mwk_wowjs_animation_delay, mwk_wowjs_animation_offset, mwk_wowjs_animation_iteration';

// add fields
$GLOBALS['TL_DCA']['tl_content']['fields']['mwk_wowjs_add_animation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mwk_wowjs_add_animation'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mwk_wowjs_animation_type'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['mwk_wowjs_animation_type'],
	'exclude'   => true,
	'inputType' => 'select',
	'options'   => array('bounce','flash','pulse','rubberBand','shake','swing','tada','wobble','bounceIn','bounceInDown','bounceInLeft','bounceInRight','bounceInUp','bounceOut','bounceOutDown','bounceOutLeft','bounceOutRight','bounceOutUp','fadeIn','fadeInDown','fadeInDownBig','fadeInLeft','fadeInLeftBig','fadeInRight','fadeInRightBig','fadeInUp','fadeInUpBig','fadeOut','fadeOutDown','fadeOutDownBig','fadeOutLeft','fadeOutLeftBig','fadeOutRight','fadeOutRightBig','fadeOutUp','fadeOutUpBig','flip','flipInX','flipInY','flipOutX','flipOutY','lightSpeedIn','lightSpeedOut','rotateIn','rotateInDownLeft','rotateInDownRight','rotateInUpLeft','rotateInUpRight','rotateOut','rotateOutDownLeft','rotateOutDownRight','rotateOutUpLeft','rotateOutUpRight','hinge','rollIn','rollOut','zoomIn','zoomInDown','zoomInLeft','zoomInRight','zoomInUp','zoomOut','zoomOutDown','zoomOutLeft','zoomOutRight','zoomOutUp','slideInDown','slideInLeft','slideInRight','slideInUp','slideOutDown','slideOutLeft','slideOutRight','slideOutUp'),
	'eval'      => array('maxlength'=>200, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mwk_wowjs_animation_duration'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['mwk_wowjs_animation_duration'],
	'exclude'   => true,
	'inputType' => 'text',
	'eval'      => array('maxlength'=>200, 'tl_class'=>'w50'),
	'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mwk_wowjs_animation_delay'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['mwk_wowjs_animation_delay'],
	'exclude'   => true,
	'inputType' => 'text',
	'eval'      => array('maxlength'=>200, 'tl_class'=>'w50'),
	'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mwk_wowjs_animation_offset'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['mwk_wowjs_animation_offset'],
	'exclude'   => true,
	'inputType' => 'text',
	'eval'      => array('maxlength'=>200, 'tl_class'=>'w50'),
	'sql'       => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mwk_wowjs_animation_iteration'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['mwk_wowjs_animation_iteration'],
	'exclude'   => true,
	'inputType' => 'text',
	'eval'      => array('maxlength'=>200, 'tl_class'=>'w50'),
	'sql'       => "varchar(255) NOT NULL default ''"
);