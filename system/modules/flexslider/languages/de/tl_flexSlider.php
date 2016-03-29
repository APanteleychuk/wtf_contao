<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
* PHP version 5
 * @copyright  FlexSlider by Jozef Dvorský
 * @author     Jozef Dvorský
 * @package    Language
 * @license    GPL2 
 * @filesource
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_flexSlider']['title'] = array('Title', 'Bitte geben sie einen Titel für den FlexSlider ein.');
$GLOBALS['TL_LANG']['tl_flexSlider']['alias'] = array('Alias', 'Der Alias ist eine eindeutige Referenz zum FlexSlider, die anstelle seiner numerischen ID aufgerufen werden kann.');
$GLOBALS['TL_LANG']['tl_flexSlider']['slideshowSpeed'] = array('Anzeigedauer', 'Pause zwischen den Wechseln in Millisekunden.');
$GLOBALS['TL_LANG']['tl_flexSlider']['animationSpeed'] = array('Animationsdauer', 'Dauer der Animations in Millisekunden.');
$GLOBALS['TL_LANG']['tl_flexSlider']['animation'] = array('Animationstyp', 'Wählen sie den Animationstyp, "fade" oder "slide".');
$GLOBALS['TL_LANG']['tl_flexSlider']['direction'] = array('Slide ausrichtung', 'Wählen sie die Ausrichtung für den Slideeffekt, "horizontal" oder "vertical".');
$GLOBALS['TL_LANG']['tl_flexSlider']['css_theme'] = array('CSS theme', 'Wählen sie ein vorgefertigtes Themes. Mit "custom" können sie ihr eigenes CSS verwenden.');
$GLOBALS['TL_LANG']['tl_flexSlider']['cssSRC'] = array('Datei', 'Fügen Sie Ihr eigenes Stylesheet aus dem Dateisystem hinzu (z.B. files/css/style.css|screen|static).');
$GLOBALS['TL_LANG']['tl_flexSlider']['jqeasing'] = array('jQuery Easing', 'Wählen Sie den easing type oder lassen sie frei, um das Easing-plugin nicht zu laden.');
$GLOBALS['TL_LANG']['tl_flexSlider']['controlNav'] = array('Control-navigation deaktivieren', 'Deaktiviert die Control-navigation unter dem Flexslider.');
$GLOBALS['TL_LANG']['tl_flexSlider']['directionNav'] = array('Richtungs-navigation deaktivieren', 'Deaktiviert die Richtungs-navigation an den Seiten des FlexSliders.');
$GLOBALS['TL_LANG']['tl_flexSlider']['randomize'] = array('Zufallsprinzip', 'Bilder in zufälliger Reihenfolge wiedergeben.');
$GLOBALS['TL_LANG']['tl_flexSlider']['pauseOnHover'] = array('Pause bei hover', 'Pausiert den FlexSlider, solange sich die Maus darüber befindet.');
$GLOBALS['TL_LANG']['tl_flexSlider']['imgLinks'] = array('Bild-Links verwenden', 'FlexSlider Bilder in der Lightbox öffnen oder mit anderen Zielen Verknüpfen.');
$GLOBALS['TL_LANG']['tl_flexSlider']['imgDesc'] = array('Bildbeschreibung', 'Zeigt Bilder mit Beschreibung (captions).');
$GLOBALS['TL_LANG']['tl_flexSlider']['carousel'] = array('Thumbnails', 'Thumbnail-carousel unter dem Flexslider aktivieren. (deaktiviert das Zufallsprinzip)');
$GLOBALS['TL_LANG']['tl_flexSlider']['itemWidth'] = array('Breite', 'Breite der Thumbnails, incl. Rahmen und Padding.');
$GLOBALS['TL_LANG']['tl_flexSlider']['itemMargin'] = array('Abstand', 'Abstand zwischen den Thumbnails.');

$GLOBALS['TL_LANG']['tl_flexSlider']['published']   = array('Veröffentlichen', 'Den FlexSlider auf der Webseite sichtbar machen.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_flexSlider']['fade'] = 'fade';
$GLOBALS['TL_LANG']['tl_flexSlider']['slide'] = 'slide';
$GLOBALS['TL_LANG']['tl_flexSlider']['horizontal'] = 'horizontal';
$GLOBALS['TL_LANG']['tl_flexSlider']['vertical'] = 'vertical';
$GLOBALS['TL_LANG']['tl_flexSlider']['white'] = 'white border';
$GLOBALS['TL_LANG']['tl_flexSlider']['black'] = 'black border';
$GLOBALS['TL_LANG']['tl_flexSlider']['light'] = 'transparent white';
$GLOBALS['TL_LANG']['tl_flexSlider']['dark'] = 'transparent black';
$GLOBALS['TL_LANG']['tl_flexSlider']['custom'] = 'custom';


$GLOBALS['TL_LANG']['tl_flexSlider']['easeInQuad'] = 'easeInQuad';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutQuad'] = 'easeOutQuad';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutQuad'] = 'easeInOutQuad';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInCubic'] = 'easeInCubic';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutCubic'] = 'easeOutCubic';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutCubic'] = 'easeInOutCubic';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInQuart'] = 'easeInQuart';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutQuart'] = 'easeOutQuart';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutQuart'] = 'easeInOutQuart';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInQuint'] = 'easeInQuint';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutQuint'] = 'easeOutQuint';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutQuint'] = 'easeInOutQuint';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInSine'] = 'easeInSine';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutSine'] = 'easeOutSine';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutSine'] = 'easeInOutSine';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInExpo'] = 'easeInExpo';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutExpo'] = 'easeOutExpo';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutExpo'] = 'easeInOutExpo';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInCirc'] = 'easeInCirc';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutCirc'] = 'easeOutCirc';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutCirc'] = 'easeInOutCirc';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInElastic'] = 'easeInElastic';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutElastic'] = 'easeOutElastic';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutElastic'] = 'easeInOutElastic';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInBack'] = 'easeInBack';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutBack'] = 'easeOutBack';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutBack'] = 'easeInOutBack';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInBounce'] = 'easeInBounce';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeOutBounce'] = 'easeOutBounce';
$GLOBALS['TL_LANG']['tl_flexSlider']['easeInOutBounce'] = 'easeInOutBounce';




/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_flexSlider']['title_legend']   = 'Title und Alias';
$GLOBALS['TL_LANG']['tl_flexSlider']['configuration_legend'] = 'Konfiguration';
$GLOBALS['TL_LANG']['tl_flexSlider']['publish_legend']   = 'Veröffentlichung';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_flexSlider']['new']    = array('Neuer FlexSlider', 'neuen FlexSlider anlegen');
$GLOBALS['TL_LANG']['tl_flexSlider']['edit']   = array('Bilder bearbeiten', 'Bilder des FlexSlider ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_flexSlider']['editheader']   = array('FlexSlider bearbeiten', 'FlexSlider ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_flexSlider']['copy']   = array('FlexSlider duplizieren', 'FlexSlider ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_flexSlider']['delete'] = array('FlexSlider löschen', 'FlexSlider ID %s löschen');
$GLOBALS['TL_LANG']['tl_flexSlider']['toggle'] = array('FlexSlider veröffentlichen/unveröffentlichen', 'FlexSlider ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_flexSlider']['show']   = array('FlexSlider Details', 'Details des FlexSlider ID %s anzeigen');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_flexSlider']['pictures'] = 'Bilder';
?>