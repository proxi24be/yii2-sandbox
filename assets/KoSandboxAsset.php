<?php
/**
 * Created by PhpStorm.
 * User: bluenight
 * Date: 1/25/15
 * Time: 4:41 PM
 */

namespace app\assets;
use yii\web\AssetBundle;

class KoSandboxAsset extends AssetBundle {

    public $sourcePath = '@webroot/js';
    public $js = [
        'KoSandbox.js',
    ];
    public $depends = [
        'app\assets\KoAsset'
    ];

}