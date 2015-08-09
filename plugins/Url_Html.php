<?php 
/**
 * Pico using .html as end of url Plugin
 *
 * @author Hazuli Fidastian
 * @link http://hazulifidastian.com
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */

class Url_Html 
{

    public function request_url(&$url)
    {
        $url = str_replace('.html', '', $url);
    }

    public function get_page_data(&$data, $page_meta)
    {
        $data['url_html'] = $data['url'].'.html';
    }
}