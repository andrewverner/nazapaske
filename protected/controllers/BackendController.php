<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 15.08.15
 * Time: 23:56
 */

class BackendController extends Controller {

    public function actions()
    {
        return [
            'index' => 'application.controllers.actions.backend.IndexAction',
            'login' => 'application.controllers.actions.backend.LoginAction',

            'users' => 'application.controllers.actions.backend.UsersAction',

            'blocks' => 'application.controllers.actions.backend.BlocksAction',
            'block' => 'application.controllers.actions.backend.BlockAction',
            'dropBlock' => 'application.controllers.actions.backend.DropBlockAction',

            'menu' => 'application.controllers.actions.backend.MenuAction',
            'menuItem' => 'application.controllers.actions.backend.MenuItemAction',
            'dropMenuItem' => 'application.controllers.actions.backend.DropMenuItemAction',

            'metas' => 'application.controllers.actions.backend.MetasAction',
            'meta' => 'application.controllers.actions.backend.MetaAction',
            'dropMeta' => 'application.controllers.actions.backend.DropMetaAction',

            'pages' => 'application.controllers.actions.backend.PagesAction',
            'page' => 'application.controllers.actions.backend.PageAction',
            'dropPage' => 'application.controllers.actions.backend.DropPageAction',

            'orders' => 'application.controllers.actions.backend.OrdersAction',
            'order' => 'application.controllers.actions.backend.OrderAction',
            'dropOrder' => 'application.controllers.actions.backend.DropOrderAction',

            'db' => 'application.controllers.actions.backend.DBAction',
            'catalog' => 'application.controllers.actions.backend.CatalogAction',
            'producer' => 'application.controllers.actions.backend.ProducerAction',

            'disks' => 'application.controllers.actions.backend.DisksAction',
            'disk' => 'application.controllers.actions.backend.DiskAction',
            'tires' => 'application.controllers.actions.backend.TiresAction',
            'tire' => 'application.controllers.actions.backend.TireAction',
        ];
    }

    public function actionLogout()
    {
        Yii::app()->session->destroy();
        $this->redirect(Yii::app()->createUrl('backend'));
    }

}