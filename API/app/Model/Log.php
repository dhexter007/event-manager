<?php

namespace App\Model;

use App\Model\BasicModel;

class Log extends BasicModel
{
    protected $table = "logs";

    public function add($model, $action)
    {
    	$this->log_table 	= $model->getTable();
    	$this->log_record 	= $model->getKey();
    	$this->log_action 	= $action;
    	$this->log_dump 	= $model->toJson();
    	$this->log_user 	= '';
    	$this->log_ip		= '';
    	$this->log_location	= '';    	
    	$this->log_os 		= '';
    	$this->log_browser	= '';

    	$this->save();
    }
}
