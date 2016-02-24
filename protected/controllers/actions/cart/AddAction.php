<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/18/15
 * Time: 4:28 PM
 * To change this template use File | Settings | File Templates.
 */

class AddAction extends CAction
{

    public function run()
    {
        if (isset($_REQUEST["id"]) && isset($_REQUEST["count"]) && isset($_REQUEST["type"])) {
            Yii::app()->session->open();
            $cart = Yii::app()->session->get($_REQUEST["type"]);
            if ($cart != null) {
                if (!array_key_exists($_REQUEST["id"],$cart)) {
                    $cart[$_REQUEST["id"]] = $_REQUEST["count"];
                } else {
                    $cart[$_REQUEST["id"]] += $_REQUEST["count"];
                }
                Yii::app()->session->add($_REQUEST["type"],$cart);
            }
            else
                Yii::app()->session->add($_REQUEST["type"],array(
                    $_REQUEST["id"] => $_REQUEST["count"]
                ));
        }
    }

}