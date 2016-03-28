<?php

/**
 * Table tl_testimonials
 */
$GLOBALS['TL_DCA']['tl_testimonials'] = array
(

    // Config
    'config' => array
    (
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('author', 'job'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('author', 'job'),
            'format'                  => '%s <span style="color:#b3b3b3;padding-left:3px;">[%s]</span>'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_testimonials']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_testimonials']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_testimonials']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_testimonials']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default' => 'author;{image_legend},image,width_image,height_image;job,comment'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'author' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_testimonials']['author'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w100'),
            'sql'                     => "varchar(128) NOT NULL default ''"
        ),
        'image' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_testimonials']['image'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('extensions' => $GLOBALS['TL_CONFIG']['validImageTypes'], 'fieldType'=>'checkbox', 'files' => true, 'mandatory' => true, 'tl_class'=>'w100'),
            'sql'                     => "binary(16) NULL"
        ),
        'width_image' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_testimonials']['width_image'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'height_image' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_testimonials']['height_image'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'maxlength'=>5, 'tl_class'=>'w50'),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'job' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_testimonials']['job'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w100'),
            'sql'                     => "varchar(128) NOT NULL default ''"
        ),
        'comment' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_testimonials']['comment'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'eval'                    => array('rte' => 'tinyMCE'),
            'sql'                     => "text NULL"
        )
    )
);