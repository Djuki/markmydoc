<?php
/**
 * Created by djuki.
 * Date: 2/19/13
 * Time: 11:49 AM
 *
 */

use dflydev\markdown\MarkdownParser;


class Controller_Base
{

    /**
     * Main Layout class
     * @var Layout
     */
    protected $layout;

    /**
     * Before controller action
     * Create Layout and set assets path
     */
    public function before()
    {
        $this->layout = new Layout();
        Assets::setAssetsPath(\Config::get('config::app.base_url').'themes/'.$this->layout->getTheme().'/');

    }

    /**
     * Show document
     * @param $documentName
     */
    public function actionShowDocument($documentName)
    {
        // Set sidebar menu. Items read from config file
        $this->layout->set('menu', Menu::arrayToList(Config::get('sidebar::menu')));

        $markdownParser = new MarkdownParser();
        $docFile = file_exists(DOC_PATH.$documentName.'.md') ? DOC_PATH.$documentName.'.md' : DOC_PATH.'404.md';

        $html = $markdownParser->transformMarkdown(file_get_contents($docFile));
        $this->layout->set('content', $html);
    }

    /**
     * Render layout
     */
    public function after()
    {
        $this->layout->render();
    }
}