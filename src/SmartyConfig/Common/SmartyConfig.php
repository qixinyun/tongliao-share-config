<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/tongliao-share-config/src/SmartyConfig/Tl',
            S_ROOT.'vendor/qixinyun/tongliao-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/tongliao-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
