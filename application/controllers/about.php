<?php
/**
 * Created by PhpStorm.
 * User: Set
 * Date: 09.08.14
 * Time: 14:39
 */
include "cpagecontroller.php";
class About extends CPageController
{
    public $cPageName = 'About';

    public $aPagesToTabs = array(
                                    'tab_1' => 'people_working',
                                    'tab_2' => 'we_prof',
                                    'tab_3' => 'quality_work'
                                );

    public function index()
    {
        // Get preview text
        $aFullAbout = $this->Page_model->GetPageContent('about-full', 'about');
        $this->data->aPreviewText = $this->Page_model->GetContentByDelimiter( $aFullAbout[0]["pages_text"], '<!--PreviewDelimiter-->' );

        $this->data->aTabs = array();

        // Render preview pages text on tabs
        foreach($this->aPagesToTabs as $cKey => $cValue)
        {
            // All content of current page
            $cTabContent = $this->Page_model->GetPageContent($cValue, 'about');
            // Preview separated text
            $aPreview = $this->Page_model->GetContentByDelimiter( $cTabContent[0]["pages_text"], '<!--PreviewDelimiter-->' );
            // Add text to general array
            $this->data->aTabs[$cKey] = $aPreview["tab_1"];
        }

        $this->load->view("main/index.php");
    }

    public function fullInfo()
    {
        echo '1';
    }
}