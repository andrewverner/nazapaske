<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class DBAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $command = Yii::app()->db->createCommand("SHOW TABLES;");
            $result = $command->queryAll();
            $tables = [];
            foreach ($result as $key => $val) {
                $tables[] = $val['Tables_in_wheels'];
            }
            $this->controller->render('db',['tables'=>$tables]);
        }
    }

} 