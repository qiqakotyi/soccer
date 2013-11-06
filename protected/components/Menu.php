<?php


class Menu extends CMenu{
    protected function isItemActive($item,$route)
    {
        $pos=strpos(ltrim(Yii::app()->getRequest()->pathInfo,'/'),'/');
        $route = $pos===false ? $pathInfo : substr($pathInfo,0,$pos);
        return parent::isItemActive($item, $route);
    }
}