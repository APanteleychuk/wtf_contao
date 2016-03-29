<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package FlexSlider
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\FlexSlider'        => 'system/modules/flexslider/classes/FlexSlider.php',

	// Elements
	'Contao\ContentFlexSlider' => 'system/modules/flexslider/elements/ContentFlexSlider.php',

	// Modules
	'Contao\ModuleFlexSlider'  => 'system/modules/flexslider/modules/ModuleFlexSlider.php',
	
	// Models
	'Contao\FlexPicturesModel'  => 'system/modules/flexslider/models/FlexPicturesModel.php',
	'Contao\FlexSliderModel'  => 'system/modules/flexslider/models/FlexSliderModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'flexSlider_default' => 'system/modules/flexslider/templates',
));
