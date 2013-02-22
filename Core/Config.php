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
     * @param $configRequest
     *
     * @return mixed
     */
    static public function get($configRequest)
    {
        if (empty($configRequest))
        {
            return false;
        }
        if (stristr($configRequest, '::'))
        {
            return self::getConfigItem($configRequest);
        }

        if (file_exists(ROOT_PATH.'config/'.$configRequest.'.php'))
        {
            return include (ROOT_PATH.'config/'.$configRequest.'.php');
        }

        return false;
    }

    /**
     *
     * Returns config item based on $configRequest
     *
     * @param $configRequest
     *
     * @return array
     */
    private static function getConfigItem($configRequest)
    {
        $configRequestItems  = explode('::', $configRequest);
        // first item is config file name
        $configFileName       = array_shift($configRequestItems);

        // contains complete config array
        $requestedConfig    = include (ROOT_PATH.'config/'.$configFileName.'.php');

        // contains requested indexes separated by dot
        $configRequestIndexes = array_shift($configRequestItems);

        $configItems = explode('.', $configRequestIndexes);

        foreach ($configItems as $configItem)
        {
            if (! isset($requestedConfig[$configItem]))
            {
                break;
            }
            // scope of requested config is reduced by current index
            $requestedConfig  = $requestedConfig[$configItem];
        }

        return $requestedConfig;
    }
}