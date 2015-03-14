<?php
/**
 * Created by PhpStorm.
 * User: bluenight
 * Date: 1/25/15
 * Time: 4:34 PM
 */

namespace app\assets;
use yii\web\AssetBundle;

class KoAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.0.0.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}