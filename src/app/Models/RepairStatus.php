<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepairStatus extends Model
{

    public function getAllStatuses() {

	    return $this->all();
    }

    public function getStatusesByToken($token){


    }
}
