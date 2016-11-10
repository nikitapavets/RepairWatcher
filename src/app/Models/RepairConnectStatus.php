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
		    ->where('repair_connect_statuses.repair_id', '=', $repair_id)
		    ->get();

	    return $statuses;
    }

    public function getStatusesForRepair($repair_id){

	    $statuses= $this->join('repair_statuses', 'repair_connect_statuses.status_id', '=', 'repair_statuses.id')
		    ->select(
			    'repair_statuses.status',
			    'repair_statuses.descr',
			    'repair_connect_statuses.done'
		    )
		    ->where('repair_connect_statuses.repair_id', '=', $repair_id)
		    ->get();

	    return $statuses;
    }

    public function setDoneStatus($connect_id, $new_done){

    	$this->where('id', '=', $connect_id)
		    ->update(['done' => $new_done]);
    }
}
