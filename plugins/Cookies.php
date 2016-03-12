<?php 
/**
 * Pico using cookies
 *
 * @author Hazuli Fidastian
 * @link http://hazulifidastian.com
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */

class Cookies
{

    public function before_render(&$twig_vars, &$twig, &$template)
    {
        global $config;

        $twig_vars['cookies_dark_theme'] = false;
        
        if(isset($_COOKIE['dark_theme']) and $_COOKIE['dark_theme']) {
            $twig_vars['cookies_dark_theme'] = true;
        }

    }

}