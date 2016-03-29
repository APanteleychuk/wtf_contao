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
$GLOBALS['TL_LANG']['tl_flexPictures']['name']        = array('Nome', 'Indicare un nome per l\'immagine.');
$GLOBALS['TL_LANG']['tl_flexPictures']['alt']         = array('Testo alternativo', 'Indicare un testo alternativo per l\'immagine.');
$GLOBALS['TL_LANG']['tl_flexPictures']['singleSRC']   = array('Sorgente file', 'Seleziona un file dalla cartella dei files.');
$GLOBALS['TL_LANG']['tl_flexPictures']['description']   = array('Descrizione immagine', 'In questo punto è possibile indicare una descrizione per l\'immagine.');
$GLOBALS['TL_LANG']['tl_flexPictures']['fadeDesc']   = array('Effetto Fade sulla descrizione', 'Mostra la descrizione utilizzando un effetto fade.');
$GLOBALS['TL_LANG']['tl_flexPictures']['cssID']   = array('ID e classe CSS', 'Qui puoi inserire un ID (attributo id) e una o più classi (attributo class) del foglio di stile, per poter formattare il contenuto usando il CSS.');
$GLOBALS['TL_LANG']['tl_flexPictures']['linkTarget']   = array('Usa immagine come link', 'Collega una pagina interna o un link esterno all\'immagine. Per i link esterni non dimenticare il "http://".');
$GLOBALS['TL_LANG']['tl_flexPictures']['fullsize']   = array('Visione dimensione intera/nuova finestra', 'Cliccando sull\'immagine questa verrà visualizzata a dimensioni reali oppure in una nuova finestra del browser.');
$GLOBALS['TL_LANG']['tl_flexPictures']['published']   = array('Pubblica immagine', 'Rende l\'immagine visibile all\interno della slideshow.');
$GLOBALS['TL_LANG']['tl_flexPictures']['start']   = array('Mostra dal giorno', 'Se inserisci una data qui, l\'immagine sarà visibile da quella data in poi. Prima di quella data, non sarà pubblicata.');
$GLOBALS['TL_LANG']['tl_flexPictures']['stop']   = array('Fino al giorno', 'Non mostrare questa immagine dopo questo giorno.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_flexPictures']['picture_legend']  = 'Immagine';
$GLOBALS['TL_LANG']['tl_flexPictures']['desc_legend']  = 'Descrizione';
$GLOBALS['TL_LANG']['tl_flexPictures']['link_legend']  = 'Link immagine';
$GLOBALS['TL_LANG']['tl_flexPictures']['publish_legend']  = 'Pubblicazione';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_flexPictures']['new']    = array('Nuova immagine', 'crea una nuova immagine');
$GLOBALS['TL_LANG']['tl_flexPictures']['edit']   = array('Modifica immagine', 'Modifica immagine ID %s');
$GLOBALS['TL_LANG']['tl_flexPictures']['copy']   = array('Duplica immagine', 'Duplica immagine ID %s');
$GLOBALS['TL_LANG']['tl_flexPictures']['cut']    = array('Sposta immagine', 'Sposta immagine ID %s');
$GLOBALS['TL_LANG']['tl_flexPictures']['delete'] = array('Cancella immagine', 'Cancella immagine ID %s');
$GLOBALS['TL_LANG']['tl_flexPictures']['toggle'] = array('Pubblica/togli dalla pubblicazione un\'immagine', 'Pubblica/togli dalla pubblicazione immagine ID %s');
$GLOBALS['TL_LANG']['tl_flexPictures']['show']   = array('Dettagli immagine', 'Mostra i dettagli dell\immagine ID %s');

?>