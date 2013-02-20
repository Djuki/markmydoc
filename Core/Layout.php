<?php
/**
 * Created by djuki.
 * Date: 2/19/13
 * Time: 4:25 PM
 *
 */

class Layout
{
    /**
     * Variables for View
     * @var array
     */
    protected $view_data = array();

    /**
     * Theme name
     * @var string
     */
    protected $theme = 'default';

    /**
     * Set variable for View
     * @param $varName
     * @param $value
     */
    public function set($varName, $value)
    {
        $this->view_data[$varName] = $value;
    }

    /**
     * Get theme name
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Render Layout
     */
    public function render()
    {
        extract($this->view_data);
        $templateFile = PUBLIC_PATH.'themes/'.$this->theme.'/index.php';

        if (file_exists($templateFile))
        {
            exec(include_once($templateFile));
        }

    }
}