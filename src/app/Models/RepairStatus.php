<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepairStatus extends Model
{
	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
    public function getAllStatuses(){

	    return $this->all();
    }

    public function getStatusesByToken($token){


    }


}
