<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
    private $_id;
    private $_first_name;
    private $_second_name;
    private $_father_name;
    private $_address;
    private $_tel;

    public function init(array $params) {

        $this->_first_name = $params['first_name'] ?? '';
        $this->_second_name = $params['second_name'] ?? '';
        $this->_father_name = $params['father_name'] ?? '';
        $this->_address = $params['address'] ?? '';
        $this->_tel = $params['tel'] ?? '';
    }

    public function addToDB() {
        $this->_id = $this->insertGetId([
            'first_name' => $this->_first_name,
            'second_name' => $this->_second_name,
            'father_name' => $this->_father_name,
            'address' => $this->_address,
            'tel' => $this->_tel,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function getId() {
        return $this->_id;
    }
}
