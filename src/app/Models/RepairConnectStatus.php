<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RepairConnectStatus extends Model {

	/**
	 * @param $repair_id
	 * @param $status_id
	 * @return mixed
	 */
    public function addConnection($repair_id, $status_id){

	    return $this->insert([
    		'repair_id' => $repair_id,
		    'status_id' => $status_id,
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now()
	    ]);
    }

    public function getConnections($repair_id){

	    $statuses= $this->join('repair_statuses', 'repair_connect_statuses.status_id', '=', 'repair_statuses.id')
		    ->select(
			    'repair_connect_statuses.*',
			    'repair_statuses.status'
		    )
		    ->get();

	    return $statuses;
    }
}
