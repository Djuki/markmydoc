<?php
/**
 * Created by djuki.
 * Date: 2/20/13
 * Time: 10:59 AM
 *
 */


class Menu
{
    /**
     * Convert nested arrays into UL>LI list
     * @param $tree
     * @return string
     */
    static public function arrayToList($tree)
    {

        $out = '<ul>';
        foreach($tree as $key => $docs)
        {
            $out.= '<li>'.$key;
            if (is_array($docs))
            {
                $out .= self::arrayToDocumentList($docs);
            }

            $out.= '</li>';
        }
        $out.= '</ul>';

        return $out;
    }

    /**
     * Create ul li list for documents node
     * @param $tree
     * @return string
     */
    static public function arrayToDocumentList($tree)
    {
        $documentRoot = Config::get('config::app.base_url').'docs/';

        $out = '<ul>';
        foreach($tree as $title => $document)
        {
            $out .= '<li><a href="'.$documentRoot.$document.'">'.$title.'</a></li>';
        }
        $out .= '</ul>';

        return $out;
    }
}