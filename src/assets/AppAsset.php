<?php

namespace app\assets;

use LiteMvc\Core\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = __DIR__;
    public $sourcePath = 'app';
    public $css = [
        'app.css',
    ];
    public $js = [
        'app.js',
    ];
}
