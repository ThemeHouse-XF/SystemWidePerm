<?php

class ThemeHouse_SystemWidePerm_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_SystemWidePerm' => array(
                'controller' => array(
                    'XenForo_ControllerAdmin_Permission_System'
                ), /* END 'controller' */
            ), /* END 'ThemeHouse_SystemWidePerm' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_SystemWidePerm_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */
}