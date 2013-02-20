<?php
/**
 * Created by djuki.
 * Date: 2/19/13
 * Time: 11:45 AM
 *
 */

class Request
{
    /**
     * Markdown document name
     * @var string
     */
    protected $document = '';

    /**
     * Read document chapter from URL with private method
     */
    public function __construct()
    {
        $this->document = $this->getDocumentFromRequest();
    }

    public function getDocumentName()
    {
        return $this->document;
    }

    /**
     * Read document chapter from URL
     * @return string
     */
    private function getDocumentFromRequest()
    {
        if (empty($_SERVER['REQUEST_URI']) or $_SERVER['REQUEST_URI'] == '/')
        {
            return Config::get('config::app.default_document');
        }

        $path_parts = explode('/', $_SERVER['REQUEST_URI']);
        return array_pop($path_parts);
    }
}