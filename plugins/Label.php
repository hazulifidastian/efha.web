<?php 
/**
 * Pico using label
 *
 * @author Hazuli Fidastian
 * @link http://hazulifidastian.com
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */

class Label
{

    public $search_label;

    public function before_read_file_meta(&$headers)
    {
        $headers['labels'] = 'Labels';
    }

    public function file_meta(&$meta)
    {
        //convert and set labels to array
        $meta['labels'] = explode(',', str_replace(' ', '', $meta['labels']));
    }

    public function get_page_data(&$data, $page_meta)
    {
        $data['meta_labels'] = explode(',', str_replace(' ', '', $page_meta['labels']));
    }

    public function before_render(&$twig_vars, &$twig, &$template)
    {
        global $config;

        $twig_vars['blog_url'] = $config['base_url'] . '/blog';
        $twig_vars['search_label_url'] = $twig_vars['blog_url'] . '/label/';
        
        //search label
        $twig_vars['search_label'] = $this->search_label;
    }

    public function request_url(&$url)
    {
        $label = preg_split("/blog\/label\//", $url);

        if(isset($label[1])) 
        {
            $url = 'blog.html';
            $this->search_label = $label[1];
        }
    }

}