<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class CatalogAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $this->controller->render('catalog',['model' => new UploadForm()]);
        }
    }

} 