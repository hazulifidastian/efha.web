<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 */
class Pico_Plugin
{

    public function plugins_loaded()
    {

    }

    public function config_loaded(&$settings)
    {

    }

    public function request_url(&$url)
    {

    }

    public function before_load_content(&$file)
    {

    }

    public function after_load_content(&$file, &$content)
    {

    }

    public function before_404_load_content(&$file)
    {

    }

    public function after_404_load_content(&$file, &$content)
    {

    }

    public function before_read_file_meta(&$headers)
    {
        $headers['lang'] = 'Lang';
        $headers['page'] = 'Page';
    }

    public function file_meta(&$meta)
    {
        $meta['lang'] = trim($meta['lang']);
        $meta['page'] = trim($meta['page']);
    }

    public function before_parse_content(&$content)
    {

    }

    public function after_parse_content(&$content)
    {

    }

    public function get_page_data(&$data, $page_meta)
    {
        $data['meta_page'] = $page_meta['page'];
    }

    public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page)
    {

    }

    public function before_twig_register()
    {

    }

    public function before_render(&$twig_vars, &$twig, &$template)
    {

    }

    public function after_render(&$output)
    {

    }

}

?>
