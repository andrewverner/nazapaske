<?php

class DiskController extends Controller
{

    public function actions()
    {
        return array(
            'index' => 'application.controllers.actions.disk.IndexAction',
            'filter' => 'application.controllers.actions.disk.FilterAction',
            'details' => 'application.controllers.actions.disk.DetailsAction',
            'newDetails' => 'application.controllers.actions.disk.NewDetailsAction',
            'producer' => 'application.controllers.actions.disk.ProducerAction',
            'newProducer' => 'application.controllers.actions.disk.NewProducerAction',
            'model' => 'application.controllers.actions.disk.ModelAction',
            'show' => 'application.controllers.actions.disk.ShowAction',
            'info' => 'application.controllers.actions.disk.InfoAction',
        );
    }

}