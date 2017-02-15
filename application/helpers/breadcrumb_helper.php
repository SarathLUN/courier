<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('generateBreadcrumb')) {
    function generateBreadcrumb()
    {
        $ci = &get_instance();
        $i = 1;
        $uri = $ci->uri->segment($i);
        $link = '
                <ul class="page-breadcrumb">
            ';
        while ($uri != '' && $i <= 3) {
            $pre_link = '';
            for ($j = 1; $j <= $i; $j++) {
                $pre_link .= $ci->uri->segment($j) . '/';
            }

            if ($ci->uri->segment($i + 1) == '') {
                $link .= '<li><span class="text-uppercase">' . ($ci->uri->segment($i)) . '</span></li>';

            } else {
                $link .= '<li><a href="' . site_url($pre_link) . '" class="text-uppercase">' . $ci->uri->segment($i) . '</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>';
            }

            $i++;
            $uri = $ci->uri->segment($i);
        }
        $link .= '</ul>';
        return $link;
    }
}