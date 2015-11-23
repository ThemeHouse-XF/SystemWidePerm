<?php

/**
 *
 * @see XenForo_ControllerAdmin_Permission_System
 */
class ThemeHouse_SystemWidePerm_Extend_XenForo_ControllerAdmin_Permission_System extends XFCP_ThemeHouse_SystemWidePerm_Extend_XenForo_ControllerAdmin_Permission_System
{

    protected function _preDispatch($action)
    {
        parent::_preDispatch($action);
        $this->assertAdminPermission('systemPermissions');
    } /* END _preDispatch */
}