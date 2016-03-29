<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package FlexSlider
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class FlexSlider
 *
 * @copyright  Jozef Dvorský
 * @author     Jozef Dvorský
 * @package    Controller
 */
class FlexSlider extends \Frontend {

    /**
     * Compiles the data for the list template
     *
     * @access public
     * @return null
     */
    public function compileListPicturesTemplate($database, $select_flexSlider, $template) {

        // Test if the slideshow has pictures
        $ifPictures = true;

        $objSlider = $database->prepare("SELECT * FROM tl_flexSlider WHERE id=? AND published=1")
                ->limit(1)
                ->execute($select_flexSlider);

        // Retrieve the current slideshow pictures
        $objPictures = $database->prepare("SELECT * FROM tl_flexPictures WHERE pid=? AND published=1 ORDER BY sorting")
                ->execute($select_flexSlider);

        if ($objSlider->numRows > 0) {
            while ($objSlider->next()) {
                $arrSlider[] = $objSlider->row();
            }
            $configuration = array_values($arrSlider);
            $template->configuration = $configuration;
        }
		

        if ($objPictures->numRows > 0) {
            while ($objPictures->next()) {
				
			if (TL_MODE == 'FE' && (($objPictures->start > 0 && $objPictures->start > time()) || ($objPictures->stop > 0 && $objPictures->stop < time())))
		{
			unset($arrPictures[$objPictures->id]);
		}
		else {		
                $objFile = \FilesModel::findByUuid($objPictures->singleSRC);
                $srcImage = $objFile->path;
				
               				
				$arrPictures[$objPictures->id] = array(
                    'singleSRC' => $srcImage,
					'alt' => $objPictures->alt
                );
		// Description
		if ($objSlider->imgDesc != '' && TL_MODE == 'FE')
			{
				array_insert($arrPictures[$objPictures->id], 1, array ('description' => $objPictures->description));
				array_insert($arrPictures[$objPictures->id], 1, array ('fadeDesc' => $objPictures->fadeDesc));
				if ($objPictures->cssID != '')
			       {
					   $objCSS = deserialize($objPictures->cssID, true);
				       array_insert($arrPictures[$objPictures->id], 1, array ('cssID' => ($objCSS[0] != '') ? ' id="' . $objCSS[0] . '"' : ''));
				       array_insert($arrPictures[$objPictures->id], 1, array ('cssCLASS' => ($objCSS[1] != '') ? ' ' . $objCSS[1] : ''));
			       }
			}	
			
		// Image link
		if ($objSlider->imgLinks == true && TL_MODE == 'FE')
			{
			if ($objPictures->linkTarget != '')
				{
				if ($objPictures->fullsize)
					{
						// Open images in the lightbox
						if (preg_match('/\.(jpe?g|gif|png)$/', $objPictures->linkTarget))
						{
							// Do not add the TL_FILES_URL to external URLs (see #4923)
							if (strncmp($objPictures->linkTarget, 'http://', 7) !== 0 && strncmp($objPictures->linkTarget, 'https://', 8) !== 0)
							{
								$objTarget = TL_FILES_URL . $objPictures->linkTarget;
								array_insert($arrPictures[$objPictures->id], 1, array ('linkTarget' => ' href="'.$objTarget.'"'));					
							}
							else
							{
							array_insert($arrPictures[$objPictures->id], 1, array ('linkTarget' => ' href="'.$objPictures->linkTarget.'"'));
							}

						$objAttributes = ($GLOBALS['objPage']->outputFormat == 'xhtml') ? ' rel="' . $objSlider->alias . '"' : ' data-lightbox="' .$objSlider->alias . '"';
						array_insert($arrPictures[$objPictures->id], 1, array ('attributes' => $objAttributes));
						}
						else
						{
						$objAttributes = ($GLOBALS['objPage']->outputFormat == 'xhtml') ? ' onclick="return !window.open(this.href)"' : ' target="_blank"';
						array_insert($arrPictures[$objPictures->id], 1, array ('attributes' => $objAttributes));
						array_insert($arrPictures[$objPictures->id], 1, array ('linkTarget' => ' href="'.$objPictures->linkTarget.'"'));
						}
					}
				else
					{
					array_insert($arrPictures[$objPictures->id], 1, array ('linkTarget' => ' href="'.$objPictures->linkTarget.'"'));
					}
				}

			// Fullsize view
			elseif ($objPictures->fullsize && $objPictures->linkTarget == '')
				{
				array_insert($arrPictures[$objPictures->id], 1, array ('linkTarget' => ' href="'.$srcImage.'"'));
				$objAttributes = ($GLOBALS['objPage']->outputFormat == 'xhtml') ? ' rel="' . $objSlider->alias . '"' : ' data-lightbox="' .$objSlider->alias . '"';
				array_insert($arrPictures[$objPictures->id], 1, array ('attributes' => $objAttributes));
				}
				}	
            }
		
		}   
		    if ($arrPictures != '')
			{
            $pictures = array_values($arrPictures);
            $template->pictures = $pictures;
            $template->ifPictures = $ifPictures;
			} else {
			$ifPictures = false;
            $template->ifPictures = $ifPictures;	
			}
        } else {
            $ifPictures = false;
            $template->ifPictures = $ifPictures;
        }
    }
}
?>