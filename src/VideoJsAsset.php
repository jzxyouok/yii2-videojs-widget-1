<?php
/**
 * Created by PhpStorm.
 * User: hzhihua
 * Date: 17-8-5
 * Time: 上午10:26
 */

namespace hzhihua\videojs;

use Yii;
use yii\web\View;

class VideoJsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/video.js/dist';

    public function init()
    {
        parent::init();

        $this->js = array_merge($this->js, $this->getJs());
        $this->css = array_merge($this->css, $this->getCss());
        $this->depends = array_merge($this->depends, $this->getDepends());
    }

    public function getDepends()
    {
        return [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
        ];
    }

    public function getJs()
    {
        return [
        	'video.min.js',
            'lang/' . Yii::$app->language . '.js',
        ];
    }

    public function getCss()
    {
        return [
        	'video-js.min.css',
        ];
    }

}