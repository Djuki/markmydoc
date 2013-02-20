<?php
/**
 * Created by djuki.
 * Date: 2/20/13
 * Time: 9:33 AM
 *
 */

class Config
{
    /**
     * Get config file and item inside config file
     * @param $item
     *
     * @return mixed
     */
    static public function get($item)
    {
        if (empty($item))
        {
            return false;
        }

        if (stristr($item, '::'))
        {
            $item = explode('::', $item);
            $fileName = array_shift($item);
            $configArray = include (ROOT_PATH.'config/'.$fileName.'.php');
            $item = array_shift($item);
            $items = explode('.', $item);
            $wantedConfig = false;

            foreach ($items as $item)
            {
                if (isset($configArray[$item]))
                {
                    $wantedConfig = $configArray[$item];
                    $configArray = $configArray[$item];
                }
                else break;
            }
            return $wantedConfig;

        }

        if (file_exists(ROOT_PATH.'config/'.$item.'.php'))
        {
            return include (ROOT_PATH.'config/'.$item.'.php');
        }
        return false;
    }
}