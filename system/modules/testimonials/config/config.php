<?php

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
    'testimonials' => array
    (
        'tables' => array('tl_testimonials'),
        'icon'   => 'system/modules/testimonials/assets/icon.png'
    )
));

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['testimonials_list'] = 'ModuleTestimonials';

$GLOBALS['TL_LANG']['MOD']['testimonials'] = array('Testimonials', 'Add and manage your testimonials.');
$GLOBALS['TL_LANG']['FMD']['testimonials_list'] = array('Testimonials list', 'Adds a list of testimonials to the website.');



