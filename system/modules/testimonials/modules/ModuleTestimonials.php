<?php

namespace Sitedevel;

/**
 * Class ModuleTestimonials
 *
 */
class ModuleTestimonials extends \Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_testimonials_list';


    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['testimonials_list'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile()
    {
        $objTestimonials = $this->Database->execute("SELECT * FROM tl_testimonials");

        // Return if no testimonials were found
        if (!$objTestimonials->numRows)
        {
            return;
        }

        $arrTestimonials = array();

        // Generate testimonials
        while ($objTestimonials->next())
        {
            $strImage = '';
            $objImage = \FilesModel::findByPk($objTestimonials->image);

            // Add image
            if ($objImage !== null)
            {
                $width = ($objTestimonials->width_image) ? $objTestimonials->width_image : 100;
                $height = ($objTestimonials->height_image) ? $objTestimonials->height_image : 100;
                $strImage = \Image::getHtml(\Image::get($objImage->path, $width, $height, 'center_center'));
            }

            $arrTestimonials[] = array
            (
                'author' => $objTestimonials->author,
                'job' => $objTestimonials->job,
                'image' => $strImage,
                'comment' => $objTestimonials->comment
            );
        }


        $this->Template->testimonials = $arrTestimonials;
    }
}