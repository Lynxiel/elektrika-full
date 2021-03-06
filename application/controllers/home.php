<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include "cpagecontroller.php";
/**
 * Created by PhpStorm.
 * User: Set
 * Date: 04.08.14
 * Time: 22:05
 */

class Home extends CPageController
{
    public $cPageName = 'Home';

    public $aPagesToTabs = array(
                                    'tab_1' => 'who_we',
                                    'tab_2' => 'why_us',
                                    'tab_3' => 'we_offer',
                                    'tab_4' => 'testimonials'
                                );
    public function index()
    {
        $this->data->aTabs = array();
        foreach($this->aPagesToTabs as $cTab => $cPageName)
        {
            // Full content of home page
            $aTabData = $this->Page_model->GetPageContent($cPageName, 'home');
            // Separated full content
            $aPreview = $this->Page_model->GetContentByDelimiter($aTabData[0]["pages_text"], '<!--PreviewDelimiter-->' );
            // Add preview content to general array of home page
            $this->data->aTabs[$cTab] = $aPreview["tab_1"];
        }
        $this->load->view('main/index.php');
    }
}