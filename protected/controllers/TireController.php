<?php

class TireController extends Controller
{

    public function actions()
    {
        return array(
            'index' => 'application.controllers.actions.tire.IndexAction',
            'filter' => 'application.controllers.actions.tire.FilterAction',
            'details' => 'application.controllers.actions.tire.DetailsAction',
            'producer' => 'application.controllers.actions.tire.ProducerAction'
        );
    }

}