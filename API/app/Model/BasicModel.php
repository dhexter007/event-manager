<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Log;
use DB;

class BasicModel extends Model
{
    public $timestamps = false;
   	protected $log;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->log = new Log();
    }

    public function add()
    {
    	$this->save();
    	$this->log->add($this, 'insert');
    }

    public function delete($all = true){
        if($all){
            return DB::table($this->table)->delete();
        }
        else{
            return $this->delete();
        }
    }
}
