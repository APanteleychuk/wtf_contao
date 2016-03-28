<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array('Sitedevel'));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Sitedevel\ModuleTestimonials' => 'system/modules/testimonials/modules/ModuleTestimonials.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_testimonials_list' => 'system/modules/testimonials/templates/modules'
));