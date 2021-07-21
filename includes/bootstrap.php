<?php

if (!class_exists('Jankx_Lighthouse_Bootstrap')) {
    class Jankx_Lighthouse_Bootstrap
    {
        public function run($mode = 'plugin')
        {
        }
    }
}


$boostrap = new Jankx_Lighthouse_Bootstrap();
$boostrap->run(did_action('plugins_loaded') ? 'theme' : 'plugin');
