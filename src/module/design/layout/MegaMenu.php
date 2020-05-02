<?php
/**
 * Created by PhpStorm.
 * User: ZyManch
 * Date: 01.03.2020
 * Time: 17:49
 */
namespace module\design\layout;

use yii\helpers\Html;

class MegaMenu extends \module\design\Layout {

    public function init()
    {
        self::$_assetDir = $this->view->registerAssetBundle(assets\MegaMenuAssets::class)->baseUrl;
        parent::init();
    }

    public function getLayoutName()
    {
        return self::LAYOUT_MEGA_MENU;
    }
}