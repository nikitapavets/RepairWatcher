<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Repair extends Model
{
    private $_id;
    private $_client_id;
    private $_admin_id;
    private $_title;
    private $_code;
    private $_set;
    private $_diagnosis;
    private $_receipt_number;
    private $_token;
    private $_maintenance_type;

    public function init(array $params){

        $this->_client_id = $params['client_id'] ?? 0;
        $this->_admin_id = $params['admin_id'] ?? 0;
        $this->_title = $params['title'] ?? '';
        $this->_code = $params['code'] ?? '';
        $this->_set = $params['set'] ?? '';
        $this->_diagnosis = $params['diagnosis'] ?? '';
        $this->_receipt_number = $params['receipt_number'] ?? 0;
        $this->_token = $params['token'] ?? '';
        $this->_maintenance_type = $params['maintenance_type'] ?? 'free';
    }

    public function addToDB(){

        return $this->insertGetId([
            'client_id' => $this->_client_id,
            'admin_id' => $this->_admin_id,
            'title' => $this->_title,
            'code' => $this->_code,
            'set' => $this->_set,
            'diagnosis' => $this->_diagnosis,
            'receipt_number' => $this->_receipt_number,
            'token' => $this->_token,
            'maintenance_type' => $this->_maintenance_type,
            'adopted_in' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function getId(){
        return $this->_id;
    }

    public function getPaidRepairs(){

        $repairs= $this->join('clients', 'repairs.client_id', '=', 'clients.id')
            ->select(
                'repairs.*',
                'clients.first_name',
                'clients.second_name',
                'clients.father_name',
                'clients.address',
                'clients.tel'
            )
            ->paid()
            ->orderBy('id', 'desc')
            ->get();

        return $repairs;
    }

    public function getFreeRepairs(){

        $repairs= $this->join('clients', 'repairs.client_id', '=', 'clients.id')
            ->select(
                'repairs.*',
                'clients.first_name',
                'clients.second_name',
                'clients.father_name',
                'clients.address',
                'clients.tel'
            )
            ->free()
            ->orderBy('id', 'desc')
            ->get();

        return $repairs;
    }

    public function getCompleteRepairs(){

        $repairs= $this->join('clients', 'repairs.client_id', '=', 'clients.id')
            ->select(
                'repairs.*',
                'clients.first_name',
                'clients.second_name',
                'clients.father_name',
                'clients.address',
                'clients.tel'
            )
            ->complete()
            ->orderBy('id', 'desc')
            ->get();

        return $repairs;
    }

    public function getRepairByToken($token){

    	$repair = $this->where('token', '=', $token)->first();

	    return $repair;
    }

    public function scopePaid($query){

        $query->where('maintenance_type', '=', 'paid')
            ->where('status', '=', 'repair');
    }

    public function scopeFree($query){

        $query->where('maintenance_type', '=', 'free')
            ->where('status', '=', 'repair');
    }

    public function scopeComplete($query){

        $query->where('status', '=', 'complete');
    }
}
