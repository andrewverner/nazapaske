<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/18/15
 * Time: 4:20 PM
 * To change this template use File | Settings | File Templates.
 */

class CartController extends Controller {

    public function actions()
    {
        return array(
            'index' => 'application.controllers.actions.cart.IndexAction',
            'get' => 'application.controllers.actions.cart.GetAction',
            'add' => 'application.controllers.actions.cart.AddAction',
            'mini' => 'application.controllers.actions.cart.MiniAction',
            'send' => 'application.controllers.actions.cart.SendAction',
            'removeDisk' => 'application.controllers.actions.cart.RemoveDiskAction',
            'removeTire' => 'application.controllers.actions.cart.RemoveTireAction',
            'updateDisk' => 'application.controllers.actions.cart.UpdateDiskAction',
            'updateTire' => 'application.controllers.actions.cart.UpdateTireAction',
        );
    }

}