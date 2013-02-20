<?php
/**
 * Created by djuki.
 * Date: 2/20/13
 * Time: 10:21 AM
 *
 */

class Assets
{
    /**
     * There is only one assets folder
     * Url path
     * @var string
     */
    static public $assets_path;


    /**
     * Set path for assets folder
     * @param $path
     */
    static public function setAssetsPath($path)
    {
        static::$assets_path = $path;
    }

    /**
     * Create css head tag
     * @param $cssFile
     * @return string
     */
    static public function css($cssFile)
    {
        return '<link href="'.static::$assets_path.'css/'.$cssFile.'.css" media="screen" rel="stylesheet" type="text/css" />';
    }

    /**
     * Create js head tag
     * @param $jsFile
     * @return string
     */
    static public function js($jsFile)
    {
        return ' <script src="'.static::$assets_path.'js/'.$jsFile.'.js" type="text/javascript"></script>';
    }
}