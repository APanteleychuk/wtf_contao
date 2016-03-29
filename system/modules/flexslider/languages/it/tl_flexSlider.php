<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * PHP version 5
 * @copyright  ContaoCMS.it 2007-2014  
 * @author     Paolo Brunelli <paolob@contaocms.it>  
 * @license    LGPL
 * @filesource
 *
 */



/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_flexSlider']['title'] = array('Titolo', 'Indicare un titolo per la slideshow.');
$GLOBALS['TL_LANG']['tl_flexSlider']['alias'] = array('Alias', 'Indicare un alias per la slideshow.');
$GLOBALS['TL_LANG']['tl_flexSlider']['slideshowSpeed'] = array('Velocità Slideshow', 'Velocità della slideshow in millisecondi.');
$GLOBALS['TL_LANG']['tl_flexSlider']['animationSpeed'] = array('Velocitàm Animazione', 'Velocitàm dell\'animazione in millisecondi.');
$GLOBALS['TL_LANG']['tl_flexSlider']['animation'] = array('Tipo di animazione', 'Seleziona il tipo di animazione, "fade" oppure "slide".');
$GLOBALS['TL_LANG']['tl_flexSlider']['direction'] = array('Direzione Sliding', 'Seleziona la direzione della slide, "orrizontale" o "verticale".');
$GLOBALS['TL_LANG']['tl_flexSlider']['css_theme'] = array('Tema CSS', 'Seelziona un tema predefinito. Selezionando la voce "custom" è possibile selezionare un file CSS personalzizato.');
$GLOBALS['TL_LANG']['tl_flexSlider']['cssSRC'] = array('File Sorgente', 'Selezionare il file CSS personalizzato direttamente dal file system (es. files/css/style.css).');
$GLOBALS['TL_LANG']['tl_flexSlider']['jqeasing'] = array('jQuery Easing', 'Seleziona il tipo di easing che lo script deve utilizzare.');
$GLOBALS['TL_LANG']['tl_flexSlider']['controlNav'] = array('Disabilita pulsanti di navigazione', 'Disabilita i pulsanti di navigazione sotto lo slideshow.');
$GLOBALS['TL_LANG']['tl_flexSlider']['directionNav'] = array('Disabilita frecce navigazione', 'Disabilita frecce di direzione sulla slideshow.');
$GLOBALS['TL_LANG']['tl_flexSlider']['randomize'] = array('Casuale', 'Ordine casuale delle immagini.');
$GLOBALS['TL_LANG']['tl_flexSlider']['pauseOnHover'] = array('Pausa on hover', 'Metti in pausa la slideshow quando il mouse va sopra l\'immagine, l\'animazione riprende quando il mouse si sposta.');
$GLOBALS['TL_LANG']['tl_flexSlider']['imgLinks'] = array('Abilita link immagine', 'Aggiungi il link all\'immagine .');
$GLOBALS['TL_LANG']['tl_flexSlider']['imgDesc'] = array('Abilita descrizione immagine', 'Mostra l\'immagine con una descrizione.');
$GLOBALS['TL_LANG']['tl_flexSlider']['carousel'] = array('Mostra miniature', 'Abilita le miniature sotto la slideshow. Abilitando questa opzione le immagini non possono essere ordinate casualmente.');
$GLOBALS['TL_LANG']['tl_flexSlider']['itemWidth'] = array('Larghezza', 'Larghezza di ogni elemento miniatura, incluso bordo e padding.');
$GLOBALS['TL_LANG']['tl_flexSlider']['itemMargin'] = array('Margine', 'Margine attorno alle miniature.');

$GLOBALS['TL_LANG']['tl_flexSlider']['published']   = array('Pubblica slideshow', 'Rendi visibile lo slideshow.');


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
$GLOBALS['TL_LANG']['tl_flexSlider']['title_legend']   = 'Titolo e alias';
$GLOBALS['TL_LANG']['tl_flexSlider']['configuration_legend'] = 'Configurazione';
$GLOBALS['TL_LANG']['tl_flexSlider']['publish_legend']   = 'Pubblica';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_flexSlider']['new']    = array('Nuova slideshow', 'Crea una nuova slideshow');
$GLOBALS['TL_LANG']['tl_flexSlider']['edit']   = array('Modifica immagini slideshow', 'Modifica le immagini della slideshow ID %s');
$GLOBALS['TL_LANG']['tl_flexSlider']['editheader']   = array('Modifica slideshow', 'Modifica slideshow ID %s');
$GLOBALS['TL_LANG']['tl_flexSlider']['copy']   = array('Duplica slideshow', 'Duplica slideshow ID %s');
$GLOBALS['TL_LANG']['tl_flexSlider']['delete'] = array('Cancella slideshow', 'Cancella slideshow ID %s');
$GLOBALS['TL_LANG']['tl_flexSlider']['toggle'] = array('Pubblica/togli dalla pubblicazione slideshow', 'Pubblica/togli dalla pubblicazione questa slideshow ID %s');
$GLOBALS['TL_LANG']['tl_flexSlider']['show']   = array('Dettagli FlexSlider', 'Mostra i dettagli della slideshow ID %s');


/**
 * Labels
 */

$GLOBALS['TL_LANG']['tl_flexSlider']['pictures'] = 'immagini';
?>